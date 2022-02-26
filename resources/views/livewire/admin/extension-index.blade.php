<div class="card">

    <div class="card-header">
        <input  wire:model="search" type="form-control" placeholder="Ingrese el nombre del post">
    </div>
@if ($extensions->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Days</th>
                <th>Price</th>
                <th>Destination</th>
                <th>Nation</th>
                <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach ($extensions as $extension)
                    <tr>
                        <td> {{$extension->id}} </td>
                        <td> {{$extension->title}} </td>
                        <td> {{$extension->days}} </td>
                        <td> {{$extension->price}} </td>
                        <td> {{$extension->getDestinations()}}</td>
                        <td> {{ $extension->getNation()}}</td>
                        <td width="13px">
                            <a href=" {{route('admin.extensions.edit', $extension)}}" class="btn btn-primary btn-sm">Editar </a>
                        </td>
                        <td width="13px">
                            <form action=" {{route('admin.extensions.destroy', $extension)}} " method="POST">
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
    <div class="card-footer">
        {{$extensions->links()}}
    </div>
    @else
   <div class="card-body"> <strong>No hay ningn registro... </strong></div>
@endif
</div>

