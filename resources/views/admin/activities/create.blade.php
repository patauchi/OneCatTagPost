@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nueva Actividad</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.activities.store','autocomlete'=>'off', 'files'=>true]) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
                @include('admin.activities.partials.form')
                    {!! Form::submit('Crear Activity',['class'=>'btn btn-primary']) !!}
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

