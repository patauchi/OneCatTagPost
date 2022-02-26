@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lodges</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
    @endif


    <div class="card">
        <div class="card-header">
            <a href=" {{route('admin.lodges.create')}} " class="btn btn-primary btn-sm">Crear una Lodge</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>Name</th>
                        <th>Package</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($lodges as $lodge)
                    <tr>
                        <td> {{$lodge->id}} </td>
                        <td>{{$lodge->city}}</td>
                        <td>{{$lodge->name}}</td>
                        <td>{{$lodge->package}}</td>
                        <td width="10px">  <a href=" {{route('admin.lodges.edit', $lodge)}} " class="btn btn-primary btn-sm"> Editar</a> </td>
                        <td width="10px"> 
                            <form action=" {{route('admin.lodges.destroy', $lodge)}} " method="POST">
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

