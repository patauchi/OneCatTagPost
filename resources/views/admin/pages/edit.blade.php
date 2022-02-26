@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Pages</h1>
@stop

@section('content')
    <div class="card">
       <div class="card-body">
        
        {!! Form::model($page, ['route'=>['admin.pages.update', $page], 'method'=>'put']) !!}
        @include('admin.pages.partials.form')

        {!! Form::submit('Actualizar Page', ['class' => 'btn btn-primary']) !!}
       {!! Form::close() !!}

       </div>

      
    </div>
@stop

