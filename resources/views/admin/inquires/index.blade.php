@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center"> <b>Kimsa Travel Inquire</b></h1>
@stop

@section('content')


    <div>
        <h5 class="pl-3"> <b>General Data</b> </h5>
        <div class="card">
            <div class="row card-body">
                <div class="col-4">
                    <div class="p-1">
                        {!! Form::label('firstName', 'First Name') !!}
                        {!! Form::text('firstName', null, ['class' => 'form-control disabled', 'placeholder' => 'First Name']) !!}
                    </div>
                </div>
                <div class="col-3">
                    <div class="p-1">
                        {!! Form::label('lastName', 'Last Name') !!}
                        {!! Form::text('lastName', null, ['class' => 'form-control disabled', 'placeholder' => 'Last Name']) !!}
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-1">
                        {!! Form::label('adult', 'N. of Adult ') !!}
                        {!! Form::number('adult', null, ['class' => 'textbox bg-secundary']) !!}
                    </div>
                </div>

                <div class="col-2">
                    <div class="p-1">
                        {!! Form::label('child', 'N. of Childs ') !!}
                        {!! Form::number('child', null, ['class' => 'textbox bg-secundary']) !!}
                    </div>
                </div>
            </div>
            <div class="row card-body">
                <div class="col-2">
                    <div class="p-1">
                        {!! Form::label('pickup_date', 'Pick Up date') !!}
                        {!! Form::date('pickup_date', null, ['class' => 'form-control disabled', 'placeholder' => 'Number', 'onchange' => 'cal()']) !!}
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-1">
                        {!! Form::label('drop_date', 'Drop date') !!}
                        {!! Form::date('drop_date', null, ['class' => 'form-control disabled', 'placeholder' => 'Number', 'onchange' => 'cal()']) !!}
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-1">
                        {!! Form::label('form', 'N. of Days ') !!}
                        {!! Form::text('numdays', null, ['class' => 'textbox bg-secundary', 'id' => 'numdays2', 'disabled']) !!}
                    </div>
                </div>



                <div class="col-4 pt-4">
                    <button class="text-right" on:click=>Generate</button>
                </div>



            </div>
        </div>
    </div>


    <h5 class="pl-3"> <b>Itinerary</b> </h5>
    <div class="card">
        <div class="row card-body" x-data="handler()">
            <div class="col">


                <div class="accordion" id="accordionExample">

                    <div>
                        <div colspan="4" class="text-right">
                            <button type="button" class="btn btn-info"
                            @click="addNewField()">+ Add Row</button>
                            </div>
                    </div>

                    <template x-for="(field, index) in fields" :key="index">
                        
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Day # <span x-text="index + 1"></span>  
                                  </button>
                                  <button type="button" class="btn btn-danger btn-small"
                                                @click="removeField(index)">&times;</button>
                              </div>

                          
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <h6 class="pl-3"> <b>Transfer</b> </h6>

                            {!! Form::label('transfer', 'Transfer') !!}
                            {!! Form::select('transfer', $transfers) !!}

                        </div>
                      </div>
                    </div>      
                </template>
                    
                </div>


            </div>
        </div>
    </div>





    {{-- <div class="card">
        <div class="card-body">
            <div x-data="">
                <template x-for="index in numdays2" :key="index">
                    <p>hola</p>
                </template>
            </div>
        </div>
    </div> --}}





@stop


@section('js')

    <script>
        function handler() {
            return {
                fields: [],
                addNewField() {
                    this.fields.push({
                        txt1: '',
                        txt2: '',
                        txt3: ''
                    });
                },
                removeField(index) {
                    this.fields.splice(index, 1);
                }
            }
        }
    </script>

    <script type="text/javascript">
        function GetDays() {
            var dropdt = new Date(document.getElementById("drop_date").value);
            var pickdt = new Date(document.getElementById("pickup_date").value);
            return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal() {
            if (document.getElementById("drop_date")) {
                document.getElementById("numdays2").value = GetDays();
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
@stop
