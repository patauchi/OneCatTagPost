@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar nuevo Tours</h1>
@stop

@section('content')


<div class="card card-info card-tabs">
    <div class="card-header p-0 pt-1">
      <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
        <li class="pt-2 px-3"><h3 class="card-title">Edition Mode</h3></li>
        <li class="nav-item">
          <a class="nav-link active" id="custom-tabs-two-general-tab" data-toggle="pill" href="#custom-tabs-two-general" role="tab" aria-controls="custom-tabs-two-general" aria-selected="true">General</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="custom-tabs-two-itinerary-tab" data-toggle="pill" href="#custom-tabs-two-itinerary" role="tab" aria-controls="custom-tabs-two-itinerary" aria-selected="false">Itinerary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="custom-tabs-two-extensions-tab" data-toggle="pill" href="#custom-tabs-two-extensions" role="tab" aria-controls="custom-tabs-two-extensions" aria-selected="false">Extensions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="custom-tabs-two-activities-tab" data-toggle="pill" href="#custom-tabs-two-activities" role="tab" aria-controls="custom-tabs-two-activities" aria-selected="false">Activities</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-two-tabContent">
        <div class="tab-pane fade active show" id="custom-tabs-two-general" role="tabpanel" aria-labelledby="custom-tabs-two-general-tab">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($tour, ['route'=>['admin.tours.update',$tour],'autocomlete'=>'off', 'files'=>true, 'method'=>'put']) !!}
                        @include('admin.tours.partials.form')
                    <div class="text-right">
                        {!! Form::submit('Actualizar Post',['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-two-itinerary" role="tabpanel" aria-labelledby="custom-tabs-two-itinerary-tab">
            <div class="card">
                    <div class="card-body ">
                        <form action="{{ route('admin.tours.additinerary') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             @include('admin.tours.partials.formplans')
                            <div class="form-group mt-3 text-center">
                                <button class="btn btn-primary">Create itinerary</button>
                            </div>
                        </form>
                    </div>
                    @if (!is_null($plans))
                            <div class="card-body">
                                <div class="w-full mx-auto">
                                    <div class="bg-white shadow-md rounded my-6">
                                        <table class="text-left w-full border-collapse">
                                            <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="py-4 px-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                        ID</th>
                                                    <th
                                                        class="py-4 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                        Day</th>
                                                    <th
                                                        class="py-4 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                        InnerView</th>
                                                    <th
                                                        class="py-4 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                        Destinations</th>
                                                    <th
                                                        class="py-4 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                                        Itinerary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                
                                                @foreach ($plans as $plan)
                                                <tr class="hover:bg-grey-lighter">
                                                    <td class="py-4 px-2 border-b border-grey-light"> {{$plan->id}} </td>
                                                    <td class="py-4 px-4 border-b border-grey-light"> {{$plan->day}} </td>
                                                    <td class="py-4 px-4 border-b border-grey-light"> {{$plan->innerview}} </td>
                                                    <td class="py-4 px-4 border-b border-grey-light"> {{$plan->destination}}</td>
                                                    <td class="py-4 px-4 border-b border-grey-light"> {{$plan->itinerary}} </td>
                                                    <td class="py-4 px-4 border-b border-grey-light">
                               
                                                            <a href=" {{route('admin.tours.edititinerary', $plan)}} " class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark"> Editar</a>
                                                            
                                                            <form action=" {{route('admin.tours.deleteitinerary', $plan)}} " method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                            </form>                                       
                                                    </td>
                                                </tr>
                                                @endforeach                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @else
                                @if(Route::currentRouteName() == 'admin.tours.edit')
                                <div class="card-body"> <strong> There aren't entries ...  </strong></div>
                                @endif                    
                            @endif
                </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-two-extensions" role="tabpanel" aria-labelledby="custom-tabs-two-extensions-tab">
           Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
        </div>
        <div class="tab-pane fade " id="custom-tabs-two-activities" role="tabpanel" aria-labelledby="custom-tabs-two-activities-tab">
           Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>


@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css">

<style>
    .image-wrapper{
        position: relative;
        padding-bottom: 40.25%;
    }
    .image-wrapper img{
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@endsection

@section('js')
    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
            });
        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
        
        // cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>
    <script>
        function handler() {
     return {
       fields: [],
       addNewField() {
           this.fields.push({
             overview: '',
             destination: '',
               day: '',
               itinerary: ''
            });
         },
         removeField(index) {
            this.fields.splice(index, 1);
          }
       }
  }
     </script>

<script>
    // cambiar imagen
    document.getElementById("filethumb").addEventListener('change', cambiarImagen);

function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("picturethumb").setAttribute('src', event.target.result);
    };

    reader.readAsDataURL(file);
}
</script>
    
<script>
    // cambiar imagen
    document.getElementById("filefull").addEventListener('change', cambiarImagen);

function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("picturefull").setAttribute('src', event.target.result);
    };

    reader.readAsDataURL(file);
}
</script>



     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
@endsection