@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop


@section('content')
    
    <div class="card">
        <div class="card-body">
            {!! Form::model($category, ['route' =>['admin.categories.update', $category], 'method'=> 'put']) !!}

            @include('admin.categories.partials.form')                


                {!! Form::submit('Editar categoria',['class'=> 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop

