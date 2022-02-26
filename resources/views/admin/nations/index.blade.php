@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Countries</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"> <strong> {{session('info')}} </strong>  </div>
    @endif

    {{-- Livewire CRUD --}}
    {{-- @livewire('admin.nation.nation') --}}

    {{-- Clasical CRUD --}}
      <div class="card">
      <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($nations as $nation)
                    <tr>
                        <td> {{$nation->id}} </td>
                        <td>{{$nation->name}}</td>
                        <td width="10px">  <a href=" {{route('admin.nations.edit', $nation)}} " class="btn btn-primary btn-sm"> Editar</a> </td>
                        <td width="10px"> 
                            <form action=" {{route('admin.nations.destroy', $nation)}} " method="POST">
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

