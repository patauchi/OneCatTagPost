@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostar Listado de Hoteles</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
@endif
   <div class="card">
    <div class="card-header">
            <a href=" {{route('admin.hotels.create')}} " class="btn btn-primary btn-sm">Agregar nuevo hotel</a>
        </div>
       <div class="card-body">
           <table class="table table-striped">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Destination</th>
                       <th colspan="2"></th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($hotels as $hotel)
                   <tr>
                       <td> {{$hotel->id}} </td>
                        <td> {{$hotel->name}} </td>
                        <td> {{$hotel->getDestination()}} </td>
                        <td width="10px"> <a class="btn btn-primary btn-sm" href=" {{route('admin.hotels.edit', $hotel)}} ">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.hotels.destroy',$hotel)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
   </div>

@stop

