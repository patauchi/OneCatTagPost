@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo TOUR</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.tours.store','autocomlete'=>'off', 'files'=>true]) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
                @include('admin.tours.partials.form')            
            <div class="text-right">
                {!! Form::submit('Crear Tour',['class'=>'btn btn-primary text-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<style>
    .image-wrapper{
        position: relative;
        padding-bottom: 40.25%;
    }
    .image-wrapper img{
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
<style>
    .container {
    max-width: 600px;
    margin: 40px auto;
    background: #cdcdcd;
    min-height: 330px;
    height: 400px;
    padding: 20px 20px;
    }

    .drop {
    position: relative;
    -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    }
    .drop.open {
    z-index: 100;
    }
    .drop.open .drop-screen {
    z-index: 100;
    display: block;
    }
    .drop.open .drop-options {
    z-index: 200;
    max-height: 200px;
    }
    .drop.open .drop-display {
    z-index: 200;
    border-color: #465;
    }
    .drop select {
    display: none;
    }
    .drop .drop-screen {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #000;
    top: 0px;
    left: 0px;
    opacity: 0;
    display: none;
    z-index: 1;
    }

    .link {
    text-align: center;
    margin: 20px 0px;
    color:#8CACD7;
    }


    .drop .drop-display {
    position: relative;
    padding: 0px 20px 5px 5px;
    border: 1px solid;
    border-radius:5px;
    width: 100%;
    background: #FFF;
    z-index: 1;
    margin: 0px;
    font-size: 16px;
    min-height: 58px;
    }
    .drop .drop-display:hover:after {
    opacity: 0.75;
    }
    .drop .drop-display:after {
    font-family: 'Material Icons';
    content: "\e5c6";
    position: absolute;
    right: 10px;
    top: 12px;
    font-size: 24px;
    color: #444;
    }
    .drop .drop-display .item {
    position: relative;
    display: inline-block;
    border: 1px solid #333;
    margin: 5px 5px -4px 0px;
    padding: 0px 25px 0px 10px;
    overflow: hidden;
    height: 40px;
    line-height: 36px;
    }
    .drop .drop-display .item .btnclose {
    color: #444;
    position: absolute;
    font-size: 16px;
    right: 5px;
    top: 10px;
    cursor: pointer;
    }
    .drop .drop-display .item .btnclose:hover {
    opacity: 0.75;
    }
    .drop .drop-display .item.remove {
    -webkit-animation: removeSelected 0.2s, hide 1s infinite;
            animation: removeSelected 0.2s, hide 1s infinite;
    -webkit-animation-delay: 0s, 0.2s;
            animation-delay: 0s, 0.2s;
    }
    .drop .drop-display .item.add {
    -webkit-animation: addSelected 0.2s;
            animation: addSelected 0.2s;
    }
    .drop .drop-display .item.hide {
    display: none;
    }
    .drop .drop-options {
    background: rgb(148, 148, 148);
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
    position: absolute;
    width: 100%;
    max-height: 0px;
    overflow-y: auto;
    transition: all 0.25s linear;
    z-index: 1;
    }
    .drop .drop-options a {
    display: block;
    height: 40px;
    line-height: 40px;
    padding: 0px 20px;
    color: white;
    position: relative;
    max-height: 40px;
    transition: all 1s;
    overflow: hidden;
    }
    .drop .drop-options a:hover {
    background: #465;
    cursor: pointer;
    }
    .drop .drop-options a.remove {
    -webkit-animation: removeOption 0.2s;
            animation: removeOption 0.2s;
    max-height: 0px;
    }
    .drop .drop-options a.add {
    -webkit-animation: addOption 0.2s;
            animation: addOption 0.2s;
    }
    .drop .drop-options a.hide {
    display: none;
    }

    @-webkit-keyframes pop {
    from {
        -webkit-transform: scale(0);
                transform: scale(0);
    }
    to {
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    }

    @keyframes pop {
    from {
        -webkit-transform: scale(0);
                transform: scale(0);
    }
    to {
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    }
    @-webkit-keyframes removeOption {
    from {
        max-height: 40px;
    }
    to {
        max-height: 0px;
    }
    }
    @keyframes removeOption {
    from {
        max-height: 40px;
    }
    to {
        max-height: 0px;
    }
    }
    @-webkit-keyframes addOption {
    from {
        max-height: 0px;
    }
    to {
        max-height: 40px;
    }
    }
    @keyframes addOption {
    from {
        max-height: 0px;
    }
    to {
        max-height: 40px;
    }
    }
    @-webkit-keyframes removeSelected {
    from {
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    to {
        -webkit-transform: scale(0);
                transform: scale(0);
    }
    }
    @keyframes removeSelected {
    from {
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    to {
        -webkit-transform: scale(0);
                transform: scale(0);
    }
    }
    @-webkit-keyframes addSelected {
    from {
        -webkit-transform: scale(0);
                transform: scale(0);
    }
    to {
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    }
    @keyframes addSelected {
    from {
        -webkit-transform: scale(0);
                transform: scale(0);
    }
    to {
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    }
    @-webkit-keyframes hide {
    from, to {
        max-height: 0px;
        max-width: 0px;
        padding: 0px;
        margin: 0px;
        border-width: 0px;
    }
    }
    @keyframes hide {
    from, to {
        max-height: 0px;
        max-width: 0px;
        padding: 0px;
        margin: 0px;
        border-width: 0px;
    }
    }

</style>

<style>
        /* fallback */
    @font-face {
    font-family: 'Material Icons';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/materialicons/v95/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');
    }

    .material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
    }
</style>


@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
            });
    </script>
    <script>
        // cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);
    
    function cambiarImagen(event){
        var file = event.target.files[0];
    
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
    
        reader.readAsDataURL(file);
    }
    </script>
    
    <script>
        // cambiar imagen
        document.getElementById("filethumb").addEventListener('change', cambiarImagen);
    
    function cambiarImagen(event){
        var file = event.target.files[0];
    
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picturethumb").setAttribute('src', event.target.result);
        };
    
        reader.readAsDataURL(file);
    }
    </script>
        
    <script>
        // cambiar imagen
        document.getElementById("filefull").addEventListener('change', cambiarImagen);
    
    function cambiarImagen(event){
        var file = event.target.files[0];
    
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picturefull").setAttribute('src', event.target.result);
        };
    
        reader.readAsDataURL(file);
    }
    </script>

    <script>
       function handler() {
    return {
      fields: [],
      addNewField() {
          this.fields.push({
            overview: '',
            destination: '',
              day: '',
              itinerary: ''
           });
        },
        removeField(index) {
           this.fields.splice(index, 1);
         }
      }
 }
    </script>
@endsection