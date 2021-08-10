@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.posts.store','autocomlete'=>'off', 'files'=>true]) !!}

                @include('admin.posts.partials.form')

                    {!! Form::submit('Crear Post',['class'=>'btn btn-primary']) !!}

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
        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
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
    var $ = {
    get: function(selector){ 
        var ele = document.querySelectorAll(selector);
        for(var i = 0; i < ele.length; i++){
            this.init(ele[i]);
        }
        return ele;
    },
    template: function(html){
        var template = document.createElement('div');
        template.innerHTML = html.trim();
        return this.init(template.childNodes[0]);
    },
    init: function(ele){
        ele.on = function(event, func){ this.addEventListener(event, func); }
        return ele;
    }
    };

    //Build the plugin
    var drop = function(info){var o = {
    options: info.options,
    selected: info.selected || [],
    preselected: info.preselected || [],
    open: false,
    html: {
        select: $.get(info.selector)[0],
        options: $.get(info.selector + ' option'),
        parent: undefined,
    },
    init: function(){
        //Setup Drop HTML
        this.html.parent = $.get(info.selector)[0].parentNode
        this.html.drop = $.template('<div class="drop"></div>')
        this.html.dropDisplay = $.template('<div class="drop-display">Display</div>')
        this.html.dropOptions = $.template('<div class="drop-options">Options</div>')
        this.html.dropScreen = $.template('<div class="drop-screen"></div>')
        
        this.html.parent.insertBefore(this.html.drop, this.html.select)
        this.html.drop.appendChild(this.html.dropDisplay)
        this.html.drop.appendChild(this.html.dropOptions)
        this.html.drop.appendChild(this.html.dropScreen)
        //Hide old select
        this.html.drop.appendChild(this.html.select);
        
        //Core Events
        var that = this;
        this.html.dropDisplay.on('click', function(){ that.toggle() });
        this.html.dropScreen.on('click', function(){ that.toggle() });
        //Run Render
        this.load()
        this.preselect()
        this.render();
    },
    toggle: function(){
        this.html.drop.classList.toggle('open');
    },
    addOption: function(e, element){ 
        var index = Number(element.dataset.index);
        this.clearStates()
        this.selected.push({
            index: Number(index),
            state: 'add',
            removed: false
        })
        this.options[index].state = 'remove';
        this.render()
    },
    removeOption: function(e, element){
        e.stopPropagation();
        this.clearStates()
        var index = Number(element.dataset.index);
        this.selected.forEach(function(select){
            if(select.index == index && !select.removed){
                select.removed = true
                select.state = 'remove'
            }
        })
        this.options[index].state = 'add'
        this.render();
    },
    load: function(){
        this.options = [];
        for(var i = 0; i < this.html.options.length; i++){
            var option = this.html.options[i]
            this.options[i] = {
                html:  option.innerHTML,
                value: option.value,
                selected: option.selected,
                state: ''
            }
        }
    },
    preselect: function(){
        var that = this;
        this.selected = [];
        this.preselected.forEach(function(pre){
            that.selected.push({
                index: pre,
                state: 'add',
                removed: false
            })
            that.options[pre].state = 'remove';
        })
    },
    render: function(){
        this.renderDrop()
        this.renderOptions()
    },
    renderDrop: function(){ 
        var that = this;
        var parentHTML = $.template('<div></div>')
        this.selected.forEach(function(select, index){ 
            var option = that.options[select.index];
            var childHTML = $.template('<span class="item '+ select.state +'">'+ option.html +'</span>')
            var childCloseHTML = $.template(
                '<i class="material-icons btnclose" data-index="'+select.index+'">&#xe5c9;</i></span>')
            childCloseHTML.on('click', function(e){ that.removeOption(e, this) })
            childHTML.appendChild(childCloseHTML)
            parentHTML.appendChild(childHTML)
        })
        this.html.dropDisplay.innerHTML = ''; 
        this.html.dropDisplay.appendChild(parentHTML)
    },
    renderOptions: function(){  
        var that = this;
        var parentHTML = $.template('<div></div>')
        this.options.forEach(function(option, index){
            var childHTML = $.template(
                '<a data-index="'+index+'" class="'+option.state+'">'+ option.html +'</a>')
            childHTML.on('click', function(e){ that.addOption(e, this) })
            parentHTML.appendChild(childHTML)
        })
        this.html.dropOptions.innerHTML = '';
        this.html.dropOptions.appendChild(parentHTML)
    },
    clearStates: function(){
        var that = this;
        this.selected.forEach(function(select, index){ 
            select.state = that.changeState(select.state)
        })
        this.options.forEach(function(option){ 
            option.state = that.changeState(option.state)
        })
    },
    changeState: function(state){
        switch(state){
            case 'remove':
                return 'hide'
            case 'hide':
                return 'hide'
            default:
                return ''
        }
    },
    isSelected: function(index){
        var check = false
        this.selected.forEach(function(select){ 
            if(select.index == index && select.removed == false) check = true
        })
        return check
    }
    }; o.init(); return o;}


    //Set up some data
    var options = [
    { html: 'cats', value: 'cats' },
    { html: 'fish', value: 'fish' },
    { html: 'squids', value: 'squids' },
    { html: 'cats', value: 'whales' },
    { html: 'cats', value: 'bikes' },
    ];

    var myDrop = new drop({
    selector:  '#myMulti',
    preselected: [0, 2]
    });
    myDrop.toggle();
</script>

@endsection