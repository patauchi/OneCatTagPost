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

<div class="form-group">
    {!! Form::label('subtitle','Subtitle') !!}
    {!! Form::text('subtitle',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('subtitle')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('primgraph','Primer parrafo') !!}
    {!! Form::text('primgraph',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('primgraph')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('body','Body') !!}
    {!! Form::text('body',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la etiqueta']) !!}

    @error('body')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('nation_id',' Nations ') !!}
    {!! Form::select('nation_id', $nations) !!}

    @error('nation_id')
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
            @isset($hotel->image)
                <img id="picture" class="w-full h-72 object-cover object-center"
                    src="{{ Storage::url($hotel->image->url) }}">
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
        <div class="col">
            <div class="image-wrapper">
                @isset($hotel->imagethumb)
                    <img id="picturethumb" class="w-full h-72 object-cover object-center"
                        src="{{ Storage::url($hotel->imagethumb->url) }}">
                @else
                    <img id="picturethumb" class="w-full h-72 object-cover object-center"
                        src="https://images.theconversation.com/files/343868/original/file-20200624-132961-1diswti.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=675.0&fit=crop">
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('filethumb', 'Imagen 600 x 400') !!}
                    {!! Form::file('filethumb', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                </div>
                @error('filethumb')
                    <small class='text-danger'> {{ $message }} </small>
                @enderror
            </div>
            <div class="col">
                <div class="image-wrapper">
                    @isset($hotel->imagefull)
                        <img id="picturefull" class="w-full h-72 object-cover object-center"
                            src="{{ Storage::url($hotel->imagefull->url) }}">
                    @else
                        <img id="picturefull" class="w-full h-72 object-cover object-center"
                            src="https://images.theconversation.com/files/343868/original/file-20200624-132961-1diswti.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=675.0&fit=crop">
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('filefull', 'Imagen 1920  x 550') !!}
                        {!! Form::file('filefull', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                    </div>
                    @error('filefull')
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


