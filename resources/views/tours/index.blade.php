<h1>Destinations</h1>

@foreach ($tours as $tour)
<li><a href=" {{route('tours.show', $tour)}} "> {{$tour->name}} </a></li>
@endforeach