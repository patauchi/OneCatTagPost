<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la etiqueta']) !!}


    @error('name')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('slug')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>


<div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
{!! Form::label('color', 'Input color') !!}
{!! Form::select('color', $colours ?? '', null, ['id' => 'color', 'class' => 'form-control', 'required' => 'required']) !!}
<small class="text-danger">{{ $errors->first('color') }}</small>
</div>
