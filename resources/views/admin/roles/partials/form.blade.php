<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese en nombre del rol'] ) !!}
    
    
    <div class="pt-3">
        

    </div>
    
    @error('name')
        <small class="text-danger">

        </small>
    @enderror

</div>


<h2 class="h3"> Lista de Permisos </h2>
@foreach ($permissions as $permission)
    <div class="float-left" style="width: 350px">
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{$permission->description}}
        </label>
    </div>
@endforeach