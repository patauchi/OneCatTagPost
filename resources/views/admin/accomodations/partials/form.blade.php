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
    {!! Form::label('category','Category') !!}
    {!! Form::text('category',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('category')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('typeHotel','Hotel Type') !!}
    {!! Form::text('typeHotel',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('typeHotel')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('categoryRoom','Room category') !!}
    {!! Form::text('categoryRoom',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('categoryRoom')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('typeRoom','Room type') !!}
    {!! Form::text('typeRoom',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('typeRoom')
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
    {!! Form::label('lunch','Lunch') !!}
    {!! Form::text('lunch',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('lunch')
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