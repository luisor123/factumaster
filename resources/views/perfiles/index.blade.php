@extends('master')
@section('titulo','Listado de Perfiles')

@section('contenido')
    <div class="container">
        <h1>Listado de Perfiles</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Editar</th>
                    <th>Borrar</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
             @foreach($perfiles as $perfil)
                <tr>
                    <td><i class="fa fa-pencil"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                    <td>{{$perfil->nombre}}</td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>

@endsection