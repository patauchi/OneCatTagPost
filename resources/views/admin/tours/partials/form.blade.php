<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="flex justify-around items-left h-2/3">
    <div x-data="setup()" class="w-full">
        <ul class="flex justify-around items-center my-4">
            <template x-for="(tab, index) in tabs" :key="index">
                <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                    :class="activeTab===index ? 'text-green-500 border-green-500' : ''" @click="activeTab = index"
                    x-text="tab"></li>
            </template>
        </ul>

        <div class="w-80 bg-white p-16 text-left mx-auto border">
            <div x-show="activeTab===0">
                <div class="form-group">
                    {!! Form::label('name', 'Tour Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nommbre del post']) !!}
                    @error('name')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post']) !!}
                    @error('slug')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div x-show="activeTab===1">
                <div class="col">
                    <div class="form-group">
                        <p class="font-weight-bold">Nations</p>

                        @foreach ($nations as $nation)
                            <label>
                                {!! Form::checkbox('nations[]', $nation->id, null) !!}
                                {{ $nation->name }}
                            </label>
                        @endforeach

                        @error('nations')
                            <small class='text-danger'> {{ $message }} </small>
                        @enderror
                    </div>
                </div>


                <div class="col">
                    <div class="form-group">
                        <p class="font-weight-bold">Destinations</p>
                        @foreach ($destinations as $destination)
                            <label>
                                {!! Form::checkbox('destinations[]', $destination->id, null) !!}
                                {{ $destination->name }}
                            </label>
                        @endforeach

                        @error('destinations')
                            <small class='text-danger'> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>
            <div x-show="activeTab===2">
                <div class="form-group">
                    {!! Form::label('slogan', 'Slogan') !!}
                    {!! Form::text('slogan', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el extracto']) !!}
                    @error('slogan')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('subtitle', 'subtitle') !!}
                    {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                    @error('subtitle')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>


                <div class="form-group">
                    {!! Form::label('days', 'days') !!}
                    {!! Form::text('days', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                    @error('days')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('shortprice', 'shortprice') !!}
                    {!! Form::number('shortprice', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                    @error('shortprice')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('fullprice', 'fullprice') !!}
                    {!! Form::number('fullprice', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                    @error('fullprice')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('calltoaction', 'calltoaction') !!}
                    {!! Form::text('calltoaction', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                    @error('calltoaction')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('abstract', 'abstract') !!}
                    {!! Form::textarea('abstract', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                    @error('abstract')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('include', 'include') !!}
                    {!! Form::textarea('include', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                    @error('include')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('overview', 'overview') !!}
                    {!! Form::text('overview', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
                    @error('overview')
                        <small class='text-danger'> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div x-show="activeTab===3" >

                .....
                
          

            </div>
            <div x-show="activeTab===4">
                <div class="row mb-5">
                    <div class="col">
                        <div class="image-wrapper">
                            @isset($tour->image)
                                <img id="picture" class="w-full h-72 object-cover object-center"
                                    src="{{ Storage::url($tour->image->url) }}">
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
                                @isset($tour->imagethumb)
                                    <img id="picturethumb" class="w-full h-72 object-cover object-center"
                                        src="{{ Storage::url($tour->imagethumb->url) }}">
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
                                    @isset($tour->imagefull)
                                        <img id="picturefull" class="w-full h-72 object-cover object-center"
                                            src="{{ Storage::url($tour->imagefull->url) }}">
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
                        </div>


                    </div>

                    <ul class="flex justify-around items-center my-4">
                        <template x-for="(tab, index) in tabs" :key="index">
                            <li class="cursor-pointer py-3 px-4 rounded transition"
                                :class="activeTab===index ? 'bg-green-500 text-white' : ' text-gray-500'" @click="activeTab = index"
                                x-text="tab"></li>
                        </template>
                    </ul>


                </div>
            </div>

            <script>
                function setup() {
                    return {
                        activeTab: 0,
                        tabs: [
                            "General Information",
                            "Overview",
                            "Tour Details",
                            "Itinerary",
                            "Complete Details"
                        ]
                    };
                };
            </script>

            {{-- <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nommbre del post']) !!}
    @error('name')
        <small class='text-danger'> {{ $message }} </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post']) !!}
    @error('slug')
        <small class='text-danger'> {{ $message }} </small>
    @enderror
</div>

<div class="col">
    <div class="form-group">
        <p class="font-weight-bold">Nations</p>

        @foreach ($nations as $nation)
            <label>
                {!! Form::checkbox('nations[]', $nation->id, null) !!}
                {{ $nation->name }}
            </label>
        @endforeach

        @error('nations')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>
</div>


<div class="col">
    <div class="form-group">
        <p class="font-weight-bold">Destinations</p>
        @foreach ($destinations as $destination)
            <label>
                {!! Form::checkbox('destinations[]', $destination->id, null) !!}
                {{ $destination->name }}
            </label>
        @endforeach

        @error('destinations')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>
</div>


    <div class="form-group">
        {!! Form::label('slogan', 'Slogan') !!}
        {!! Form::text('slogan', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el extracto']) !!}
        @error('slogan')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('subtitle', 'subtitle') !!}
        {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('subtitle')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>


    <div class="form-group">
        {!! Form::label('days', 'days') !!}
        {!! Form::text('days', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('days')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('shortprice', 'shortprice') !!}
        {!! Form::textarea('shortprice', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('shortprice')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('fullprice', 'fullprice') !!}
        {!! Form::textarea('fullprice', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('fullprice')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('calltoaction', 'calltoaction') !!}
        {!! Form::textarea('calltoaction', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('calltoaction')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('abstract', 'abstract') !!}
        {!! Form::textarea('abstract', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('abstract')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('include', 'include') !!}
        {!! Form::textarea('include', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('include')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('overview', 'overview') !!}
        {!! Form::textarea('overview', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
        @error('overview')
            <small class='text-danger'> {{ $message }} </small>
        @enderror
    </div>

   
    
        <div class="row" x-data="handler()">
            <div class="col">
            <table class="table table-bordered align-items-center table-sm">
              <thead class="thead-light">
               <tr>
                 <th>#</th>
                 <th>OverView</th>                            
                 <th>Destination</th>
                 <th>Day</th>
                 <th>Itinerary</th>
                 <th>Remove</th>
                </tr>
              </thead>
              <tbody>
                <template x-for="(field, index) in fields" :key="index">
                 <tr>
                  <td x-text="index + 1"></td>
                  <td><input x-model="field.txt1" type="text" name="overview[]" class="form-control"></td>
                  <td><input x-model="field.txt2" type="text" name="destination[]" class="form-control"></td>
                  <td><input x-model="field.txt3" type="text" name="day[]" class="form-control"></td>
                  <td><input x-model="field.txt4" type="text" name="itinerary[]" class="form-control"></td>
                   <td><button type="button" class="btn btn-danger btn-small" @click="removeField(index)">&times;</button></td>
                </tr>
               </template>
              </tbody>
              <tfoot>
                 <tr>
                   <td colspan="10" class="text-right"><button type="button" class="btn btn-info" @click="addNewField()">+ Add Row</button></td>
                </tr>
              </tfoot>
            </table>
            </div>
            </div>
            
            @error('days')
            <small class='text-danger'> {{ $message }} </small>
            @enderror
            @error('destination')
            <small class='text-danger'> {{ $message }} </small>
            @enderror
            @error('itinerary')
            <small class='text-danger'> {{ $message }} </small>
            @enderror


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
    </div> --}}
