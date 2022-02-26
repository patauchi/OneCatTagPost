<div class="card">

    <div class="card-header">
        <input  wire:model="search" type="form-control" placeholder="Ingrese el nombre del post">
    </div>
@if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td> {{$post->id}} </td>
                        <td> {{$post->name}} </td>
                        <td> {{$post->getCategory()}} </td>
                        <td width="13px">
                            <a href=" {{route('admin.posts.edit', $post)}}" class="btn btn-primary btn-sm">Editar </a>
                        </td>
                        <td width="13px">
                            <form action=" {{route('admin.posts.destroy', $post)}} " method="POST">
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
        {{$posts->links()}}
    </div>
    @else
   <div class="card-body"> <strong>No hay ningn registro... </strong></div>
@endif
</div>
