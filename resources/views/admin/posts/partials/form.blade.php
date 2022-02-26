<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nommbre del post']) !!}
    @error('name')
        <small class='text-danger'> {{ $message }} </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug',null,['class'=>'form-control disabled', 'placeholder'=>'Ingrese el slug de la categoria']) !!}

    @error('slug')
        <span class="text-danger"> {{$message}} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', ' Country ') !!}
    {!! Form::select('category_id', $categories) !!}

    @error('category_id')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>


<div class="col">
    <div class="form-group">
        <p class="font-weight-bold">Destinations</p>
        @foreach ($tags as $tag)
            <label>
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{ $tag->name }}
            </label>
        @endforeach

        @error('tags')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>
</div>



<hr>
<div class="row mb-5">
    <div class="col">
        <div class="image-wrapper">


            @isset($post->image)
                <img id="picture" class="w-full h-72 object-cover object-center"
                    src="{{ Storage::url($post->image->url) }}">
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
        {!! Form::label('extract', 'Extracto') !!}
        {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el extracto']) !!}
        @error('extract')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('body')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
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
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>
