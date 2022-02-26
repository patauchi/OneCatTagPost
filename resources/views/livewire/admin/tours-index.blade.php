<div>
   
    
  <div class="card"> 
    
        <div class="card-header w-full">
            <input  wire:model="search" type="form-control" placeholder="Ingrese el nombre del post">
        </div>
    @if ($tours->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th class="cursor-pointer">ID</th>
                    <th class="cursor-pointer">Name</th>
                    <th>Destinations</th>
                    <th>Country</th>
                    <th colspan="2"></th>
                </thead>
    
            <tbody>
                    @foreach ($tours as $tour)
                        <tr>
                            <td> {{$tour->id}} </td>
                            <td> {{$tour->name}} </td>
                            <td> 
                                @foreach ($tour->destinations as $destination)
                                {{$destination->name}}
                            @endforeach 
                            </td>
                            <td>
                                @foreach ($tour->nations as $nation)
                                {{$nation->name}}
                                @endforeach
                            </td> 
                            <td width="13px">
                                {{-- <a  class="btn btn-secondary btn-sm" href="{{ route('admin.plans', $tour->id) }}">Itinerario</a> --}}
                                {{-- <a  class="btn btn-secondary btn-sm" href="{{ route('admin.plans.index', $tour->id) }}">Itinerario</a> --}}
                            </td>
                            <td width="13px">
                                <a href=" {{route('admin.tours.edit', $tour)}} " class="btn btn-primary btn-sm">Editar </a>
                            </td>
                            <td width="13px">
                                <form action=" {{route('admin.tours.destroy', $tour)}} " method="POST">
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
            {{$tours->links()}}
        </div>
        @else
       <div class="card-body"> <strong>No hay ningn registro... </strong></div>
    @endif
    </div>
  
    
</div>