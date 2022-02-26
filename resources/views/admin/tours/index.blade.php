@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <a class="btn btn-secondary btn-sm float-right" href=" {{route('admin.tours.create')}} ">Crear nuevo Post</a> --}}
    {{-- <button wire:click="crear()" class="btn btn-secondary btn-sm float-right">Crear nuevo Tour</button> --}}


    <h1>Listado de Tours</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
    @endif
@livewire('admin.tours-index')
@stop