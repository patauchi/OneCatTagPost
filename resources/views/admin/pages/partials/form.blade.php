
<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la Pagina']) !!}
    @error('name')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Titulo']) !!}
    @error('title')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la pagina']) !!}

    @error('slug')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>



<div class="form-group">
    {!! Form::label('slogan','Slogan') !!}
    {!! Form::textarea('slogan',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Primer parfafo ']) !!}
    @error('slogan')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('head','Header Content') !!}
    {!! Form::textarea('head',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Head ']) !!}
    @error('head')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body','Body') !!}
    {!! Form::textarea('body',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Body ']) !!}
    @error('body')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('foot','Foot') !!}
    {!! Form::textarea('foot',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Body ']) !!}
    @error('foot')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>


{{-- <div class="form-group">
    {!! Form::label('nation_id','Nation') !!}
    {!! Form::number('nation_id',null,['class'=>'form-control', 'placeholder'=>'Ingrese el id del pais ']) !!}

    @error('nation_id')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div> --}}

<div class="row mb-5">
    <div class="col">
        <div class="image-wrapper">
            @isset($nation->image)
                <img id="picture" class="w-full h-72 object-cover object-center"
                    src="{{ Storage::url($nation->image->url) }}">
            @else
                <img id="picture" class="w-full h-72 object-cover object-center"
                    src="https://images.theconversation.com/files/343868/original/file-20200624-132961-1diswti.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=675.0&fit=crop">
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('file', 'Imagen 400 x 300') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>
            @error('file')
                <small class='text-danger'> {{ $message }} </small>
            @enderror
        </div>

            </div>


<div class="form-group">
    <h4>Estado</h4>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    @error('status')
    <small class='text-danger'> {{$message}} </small>
     @enderror
</div>


