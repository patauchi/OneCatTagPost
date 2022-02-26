@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Guia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($restaurant, ['route'=>['admin.restaurants.update', $restaurant], 'method'=>'put']) !!}
        @include('admin.restaurants.partials.form')    
        {!! Form::submit('Actualizar Guia',['class'=> 'btn btn-primary']) !!}   
        {!! Form::close() !!}
    </div>
</div>

@stop

