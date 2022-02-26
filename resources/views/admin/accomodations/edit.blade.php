@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar accomodation</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($accomodation, ['route'=>['admin.accomodations.update', $accomodation], 'method'=>'put']) !!}
        @include('admin.accomodations.partials.form')    
        {!! Form::submit('Actualizar Guia',['class'=> 'btn btn-primary']) !!}   
        {!! Form::close() !!}
    </div>
</div>

@stop

