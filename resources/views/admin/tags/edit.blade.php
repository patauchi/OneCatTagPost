@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route'=>['admin.tags.update', $tag], 'method'=>'put']) !!}
                @include('admin.tags.partials.form')   
                {!! Form::submit('Actualizar Tag',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
