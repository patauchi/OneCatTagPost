<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <link rel="stylesheet" type="text/css" href=" {{mix('css/app.css')}} ">
	<script type="text/javascript" src="{{mix('js/app.js')}}" defer></script>
    <link rel="icon" href="{{ asset('storage/favicon.ico') }}">

    @livewireStyles

</head>


<body class=" mx-auto font-montserrat font-light tracking-wider text-sm leading-7">
    {{-- //<x-jet-banner /> --}}
    

    <header>
        @livewire('navigation-page')
    </header>
    
    {{ $slot }}

   <footer>
        @livewire('footer')
   </footer>


    @stack('modals')

    @livewireScripts
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
</body>
</html>