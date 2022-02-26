@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lists de Extensiones</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
@endif

@livewire('admin.extension-index')
@stop
