@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Transfer</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
    @endif


    <div class="card">
        <div class="card-header">
            <a href=" {{route('admin.transfers.create')}} " class="btn btn-primary btn-sm">Crear una Entrada</a>
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
                    
                    @foreach ($transfers as $transfer)
                    <tr>
                        <td> {{$transfer->id}} </td>
                        <td>{{$transfer->city}}</td>
                        <td>{{$transfer->name}}</td>
                        <td>{{$transfer->service}}</td>
                        <td width="10px">  <a href=" {{route('admin.transfers.edit', $transfer)}} " class="btn btn-primary btn-sm"> Editar</a> </td>
                        <td width="10px"> 
                            <form action=" {{route('admin.transfers.destroy', $transfer)}} " method="POST">
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

