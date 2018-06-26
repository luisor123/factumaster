@extends('master')
@section('titulo','Crear un Perfil')

@section('contenido')
    <div class="container text-center">
        <h1>Crear Perfil</h1>
        {!! Form::open(['url' => 'perfil.store']) !!}
            <div class="form-group">
                {!! Form::text('nombre',null,array(
                    'class'=>'form-control',
                    'required'=>'required',
                    'placeholder'=>'Nombre del Perfil'
                ))
                !!}
            </div>
            {!! Form::submit('Guardar Perfil',array('class'=>'btn btn-primary'))!!}
        {!! Form::close() !!}
    </div>