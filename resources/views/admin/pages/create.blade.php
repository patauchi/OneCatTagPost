@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nueva Pagina</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.pages.store','autocomlete'=>'off', 'files'=>true]) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
                @include('admin.pages.partials.form')            
            <div class="text-right">
                {!! Form::submit('Crear Page',['class'=>'btn btn-primary text-right']) !!}
            </div>
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
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
            });
    </script>
    <script>
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
    
@endsection