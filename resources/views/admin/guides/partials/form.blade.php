<div class="form-group">
    {!! Form::label('city','City') !!}
    {!! Form::text('city',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la etiqueta']) !!}


    @error('city')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('name','Name') !!}
    {!! Form::text('name',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('name')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('language','Languages') !!}
    {!! Form::text('language',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('language')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('details','Details') !!}
    {!! Form::textarea('details',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('details')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('price','Price') !!}
    {!! Form::number('price',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('price')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('contactName','Contact Name') !!}
    {!! Form::text('contactName',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('contactName')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('contactEmail','Contact Email') !!}
    {!! Form::text('contactEmail',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('contactEmail')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('contactPhone','Contact Phone') !!}
    {!! Form::number('contactPhone',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('contactPhone')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>