@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Entrances</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
    @endif


    <div class="card">
        <div class="card-header">
            <a href=" {{route('admin.entrances.create')}} " class="btn btn-primary btn-sm">Crear una Entrada</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>SightSeen</th>
                        <th>Details</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($entrances as $entrance)
                    <tr>
                        <td> {{$entrance->id}} </td>
                        <td>{{$entrance->city}}</td>
                        <td>{{$entrance->sightseen}}</td>
                        <td>{{$entrance->details}}</td>
                        <td width="10px">  
                            <a href=" {{route('admin.entrances.edit', $entrance)}} " class="btn btn-primary btn-sm"> Editar </a> 
                        </td>
                        <td width="10px"> 
                            <form action=" {{route('admin.entrances.destroy', $entrance)}} " method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


@stop




