<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
    @error('name')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control disabled', 'placeholder' => 'Ingrese el slug de la categoria']) !!}

    @error('slug')
        <span class="text-danger"> {{ $message }} </span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Titulo ']) !!}
    @error('title')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('subtitle', 'Subtitle') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Subtitle ']) !!}
    @error('subtitle')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('primgraph', 'Primer parrafo') !!}
    {!! Form::textarea('primgraph', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Primer parfafo ']) !!}
    @error('primgraph')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('quotation', 'Quotation parrafo') !!}
    {!! Form::textarea('quotation', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Quotation ']) !!}
    @error('quotation')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('abstract', 'Abstract') !!}
    {!! Form::textarea('abstract', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Abstract ']) !!}
    @error('abstract')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('sidetitle', 'SideTitle') !!}
    {!! Form::text('sidetitle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el sidetitle ']) !!}
    @error('sidetitle')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('sidebody', 'sidebody') !!}
    {!! Form::textarea('sidebody', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el sidebody ']) !!}
    @error('sidebody')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('journalsubtitle', 'Journalsubtitle') !!}
    {!! Form::text('journalsubtitle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el journalsubtitle ']) !!}
    @error('journalsubtitle')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('body', 'body') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el body ']) !!}
    @error('body')
        <span class="text-danger"> {{ $message }} </span>
    @enderror
</div>

<div class="row">
    <h2 class="text-center text-4xl py-10"> Pictures</h2>
</div>

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
        <div class="col">
            <div class="image-wrapper">
                @isset($nation->imagethumb)
                    <img id="picturethumb" class="w-full h-72 object-cover object-center"
                        src="{{ Storage::url($nation->imagethumb->url) }}">
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
                    @isset($nation->imagefull)
                        <img id="picturefull" class="w-full h-72 object-cover object-center"
                            src="{{ Storage::url($nation->imagefull->url) }}">
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
                    <small class='text-danger'> {{ $message }} </small>
                @enderror
            </div>
