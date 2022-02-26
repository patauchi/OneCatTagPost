
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Itinerary</h1>
@stop

@section('content')



    <div class="card">
        <div class="card-body">
            {!! Form::model($plan, ['route'=>['admin.tours.updateitinerary', $plan], 'method'=>'PUT']) !!}
            <div class="form-group mb-3">
                {!! Form::label('innerview', 'innerview') !!}
                {!! Form::text('innerview', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                @error('innerview')
                    <small class='text-danger'> {{ $message }} </small>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::label('day', 'day') !!}
                {!! Form::number('day', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                @error('day')
                    <small class='text-danger'> {{ $message }} </small>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::label('destination', 'destination') !!}
                {!! Form::text('destination', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                @error('destination')
                    <small class='text-danger'> {{ $message }} </small>
                @enderror
            </div>
            <div class="form-group mb-3">
                {!! Form::label('itinerary', 'itinerary') !!}
                {!! Form::textarea('itinerary', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                @error('itinerary')
                    <small class='text-danger'> {{ $message }} </small>
                @enderror
            </div>
            {!! Form::submit('Actualizar itinerary',['class'=> 'btn btn-primary']) !!}   
            {!! Form::close() !!}
        </div>
    </div>
    


@stop

@section('css')
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
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>



@endsection