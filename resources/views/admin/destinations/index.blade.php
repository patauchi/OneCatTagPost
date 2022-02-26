@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Destinations</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
    @endif


    <div class="card">
        {{-- <div class="card-header">
            <a href=" {{route('admin.destinations.create')}} " class="btn btn-primary btn-sm">Crear una categoria</a>
        </div> --}}

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($destinations as $destination)
                    <tr>
                        <td> {{$destination->id}} </td>
                        <td>{{$destination->name}}</td>
                        {{-- <td>{{$destination->nation_id}}</td> --}}
                        <td> {{$destination->getNationFromDestination()}} </td>



                        <td width="10px">  <a href=" {{route('admin.destinations.edit', $destination)}} " class="btn btn-primary btn-sm"> Editar</a> </td>
                        <td width="10px"> 
                            <form action=" {{route('admin.destinations.destroy', $destination)}} " method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@stop

