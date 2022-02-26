@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Guia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($transfer, ['route'=>['admin.transfers.update', $transfer], 'method'=>'put']) !!}
        @include('admin.transfers.partials.form')    
        {!! Form::submit('Actualizar Guia',['class'=> 'btn btn-primary']) !!}   
        {!! Form::close() !!}
    </div>
</div>

@stop

