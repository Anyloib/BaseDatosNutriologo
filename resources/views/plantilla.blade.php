@extends('layouts.default')
@section('titulo_pagina','Nutriologo | Pacientes')
@section('titulo','Nutriologo')
@section('subtitulo','Pacientes')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de Pacientes</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Paciente</th>
                            <th>Nacimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{$paciente->nombre."".$pacientes->apellidos}}<td>
                            </tr>
                        @endforeach
                    </body>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection