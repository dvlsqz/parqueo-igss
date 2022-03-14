@extends('master')
@section('title','Consulta de Parqueo')

@section('content')
<div class="container-fluid">
    <div class="page_user">
        <div class="row mtop16">
            <div class="col-md-4 d-flex">


                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fas fa-info-circle"></i> Información del Parqueo</h2>
                    </div>

                    <div class="inside">
                        <div class="mini_profile">
                            @foreach($carro as $c)

                                @if($c->status == "0")
                                    <img src="{{url('/img/check.png')}}" alt="" width="50px" height="50px" style="margin-left:150px; margin-top:25px;">
                                    <br>
                                    <p style="color: green; font-size:1.5em; font-weight:bold; text-align:center;"> ¡Tiene derecho a entrar al parqueo! </p>
                                @else
                                    <img src="{{url('/img/cancel.png')}}" alt="" width="50px" height="50px" style="margin-left:150px; margin-top:25px;">
                                    <br>
                                    <p style="color: red; font-size:1.5em; font-weight:bold; text-align:center;"> ¡No tiene derecho a entrar al parqueo! </p>
                                @endif

                            @endforeach

                            <div class="info">
                                @foreach($carro as $c) 
                                    <label for="name"><strong>Parqueo:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->parking , ['class'=>'form-control', 'readonly']) !!}
                                    </div>

                                    <label for="name" class="mtop16"><strong>Numero:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->num_parking , ['class'=>'form-control', 'readonly']) !!}
                                    </div>

                                    <label for="name" class="mtop16"><strong>Ubicacion:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name',  $c->location , ['class'=>'form-control', 'readonly']) !!}
                                    </div>

                                @endforeach

                            </div>




                        </div>
                    </div>
                </div>


            </div>


            <div class="col-md-8">



                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fas fa-edit"></i> Personal Asignado</h2>
                    </div>

                    <div class="inside">
                        @foreach($carro as $c)
                            <div class="row">

                                <div class="col-md-12">
                                    <label for="name"><strong>Nombre y Apellidos:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->asignado_name.' '.$c->asignado_lastname, ['class'=>'form-control', 'readonly']) !!}
                                    </div>
                                </div>



                            </div>

                            <div class="row mtop16">
                                <div class="col-md-6">
                                    <label for="name"><strong>IBM:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->asignado_ibm, ['class'=>'form-control', 'readonly']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="name"><strong>Puesto:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->job, ['class'=>'form-control', 'readonly']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row mtop16">
                                <div class="col-md-12">
                                    <label for="name"><strong>Servicio:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->service, ['class'=>'form-control', 'readonly']) !!}
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>

                <div class="panel shadow mtop16">
                    <div class="header">
                        <h2 class="title"><i class="fas fa-edit"></i> Informacion del Vehiculo</h2>
                    </div>

                    <div class="inside">
                        @foreach($carro as $c)
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="name"><strong> Placa:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->placa, ['class'=>'form-control', 'readonly']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="name"><strong>Marca:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->marca, ['class'=>'form-control', 'readonly']) !!}
                                    </div>
                                </div>



                            </div>

                            <div class="row mtop16">
                                <div class="col-md-6">
                                    <label for="name"><strong>Modelo:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->modelo, ['class'=>'form-control', 'readonly']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="name"><strong>Color:</strong></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                        {!! Form::text('name', $c->color, ['class'=>'form-control', 'readonly']) !!}
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>






        </div>
    </div>
</div>
@endsection
