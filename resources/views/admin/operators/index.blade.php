@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Operators</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
    @endif


    <div class="card">
        <div class="card-header">
            <a href=" {{route('admin.operators.create')}} " class="btn btn-primary btn-sm">Crear una Entrada</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>Name</th>
                        <th>Service</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($operators as $operator)
                    <tr>
                        <td> {{$operator->id}} </td>
                        <td>{{$operator->city}}</td>
                        <td>{{$operator->name}}</td>
                        <td>{{$operator->service}}</td>
                        <td width="10px">  <a href=" {{route('admin.operators.edit', $operator)}} " class="btn btn-primary btn-sm"> Editar</a> </td>
                        <td width="10px"> 
                            <form action=" {{route('admin.operators.destroy', $operator)}} " method="POST">
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

