@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>accomodationes</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
    @endif


    <div class="card">
        <div class="card-header">
            <a href=" {{route('admin.accomodations.create')}} " class="btn btn-primary btn-sm">Crear un accomodation</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($accomodations as $accomodation)
                    <tr>
                        <td> {{$accomodation->id}} </td>
                        <td>{{$accomodation->city}}</td>
                        <td>{{$accomodation->name}}</td>
                        <td>{{$accomodation->category}}</td>
                        <td width="10px">  <a href=" {{route('admin.accomodations.edit', $accomodation)}} " class="btn btn-primary btn-sm"> Editar</a> </td>
                        <td width="10px"> 
                            <form action=" {{route('admin.accomodations.destroy', $accomodation)}} " method="POST">
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

