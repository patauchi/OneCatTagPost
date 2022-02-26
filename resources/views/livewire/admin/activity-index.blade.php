<div class="card">

    <div class="card-header">
        <input  wire:model="search" type="form-control" placeholder="Ingrese el nombre del post">
    </div>
@if ($activities->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Destination</th>
                <th>Nation</th>
                <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                    <tr>
                        <td> {{$activity->id}} </td>
                        <td> {{$activity->title}} </td>
                        <td> {{$activity->description}} </td>
                        <td> {{$activity->getDestinations()}}</td>
                        <td> {{ $activity->getNation()}}</td>
                        <td width="13px">
                            <a href=" {{route('admin.activities.edit', $activity)}}" class="btn btn-primary btn-sm">Editar </a>
                        </td>
                        <td width="13px">
                            <form action=" {{route('admin.activities.destroy', $activity)}} " method="POST">
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
        {{$activities->links()}}
    </div>
    @else
   <div class="card-body"> <strong>No hay ningn registro... </strong></div>
@endif
</div>

