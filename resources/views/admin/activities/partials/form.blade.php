<div class="form-group">
    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Ingrese el titulo']) !!}
    @error('title')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('description','Description') !!}
    {!! Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de dias']) !!}
    @error('description')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('img_url','Imagen URL') !!}
    {!! Form::text('img_url',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de dias']) !!}
    @error('img_url')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('destination_id',' Destinations ') !!}
    {!! Form::select('destination_id', $destinations) !!}

    @error('destination_id')
        <span class="text-danger"> {{$message}} </span>
    @enderror
</div>

<div class="row mb-5">
    <div class="col">
        <div class="image-wrapper">
            @isset($activity->image)
                <img id="picture" class="w-full h-72 object-cover object-center"
                    src="{{ Storage::url($activity->image->url) }}">
            @else
                <img id="picture" class="w-full h-72 object-cover object-center"
                    src="https://images.theconversation.com/files/343868/original/file-20200624-132961-1diswti.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=675.0&fit=crop">
                @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara') !!}
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


