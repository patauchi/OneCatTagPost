<div>
    <h2 class="font-bold text-lg text-center"> Itinerary </h2>
</div>

<div class="form-group mb-3">
    <label class="form-label">Tour</label>
    <select required name="tour" class="form-control">
            <option value="{{ $tour->id }}">{{ $tour->name }}</option>
    </select>
    @error('tour')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>


<div class="form-group mb-3">
    {!! Form::label('innerview', 'innerview') !!}
    {!! Form::text('innerview', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
    @error('innerview')
        <small class='text-danger'> {{ $message }} </small>
    @enderror
</div>
<div class="form-group mb-3">
    {!! Form::label('day', 'day') !!}
    {!! Form::number('day', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
    @error('day')
        <small class='text-danger'> {{ $message }} </small>
    @enderror
</div>
<div class="form-group mb-3">
    {!! Form::label('destination', 'destination') !!}
    {!! Form::text('destination', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
    @error('destination')
        <small class='text-danger'> {{ $message }} </small>
    @enderror
</div>
<div class="form-group mb-3">
    {!! Form::label('itinerary', 'itinerary') !!}
    {!! Form::textarea('itinerary', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del post']) !!}
    @error('itinerary')
        <small class='text-danger'> {{ $message }} </small>
    @enderror
</div>