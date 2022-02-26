@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Entrada</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($entrance, ['route'=>['admin.entrances.update', $entrance], 'method'=>'put']) !!}
        @include('admin.entrances.partials.form')    
        {!! Form::submit('Actualizar Entrada',['class'=> 'btn btn-primary']) !!}   
        {!! Form::close() !!}
    </div>
</div>

@stop

