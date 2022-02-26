@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Guia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' =>'admin.guides.store']) !!}
        {!! Form::hidden('user_id', auth()->user()->id) !!}
        @include('admin.guides.partials.form')    
        {!! Form::submit('Crear Entrada',['class'=> 'btn btn-primary']) !!}   
        {!! Form::close() !!}
    </div>
</div>

@stop

