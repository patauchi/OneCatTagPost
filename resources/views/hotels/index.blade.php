<h1>Lista de Hoteles</h1>


@foreach ($hotels as $hotel)
    <li><a href=" {{route('hotels.show',$hotel)}} "> {{$hotel->name}} </a></li>
    
@endforeach