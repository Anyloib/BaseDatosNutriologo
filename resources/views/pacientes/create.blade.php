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
                <form>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input class="form-control" type="text" name="apellidos">
                    </div>
                    <div class="form-group">
                        <label>Fecha de Nacimiento</label>
                        <input class="form-control" type="date" name="date">
                    </div>
                    <div class="form-group">
                        <label>Correo Electronico</label>
                        <input class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <label>Confirmar Contraseña</label>
                        <input class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <label>Fotografía</label>
                        <input class="form-control" type="file" name="file">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection