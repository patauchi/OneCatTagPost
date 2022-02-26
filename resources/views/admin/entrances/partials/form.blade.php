<div class="form-group">
    {!! Form::label('city','City') !!}
    {!! Form::text('city',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la etiqueta']) !!}


    @error('city')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('sightseen','Sightseen') !!}
    {!! Form::text('sightseen',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('sightseen')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('details','Details') !!}
    {!! Form::text('details',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('details')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('categoryPerson','Category Person') !!}
    {!! Form::text('categoryPerson',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('categoryPerson')
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