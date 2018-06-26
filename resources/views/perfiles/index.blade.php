@extends('master')
@section('titulo','Listado de Perfiles')

@section('contenido')
    <div class="container text-center">
        <h1>Listado de Perfiles</h1>
        <a class="btn btn-success" href="{{route('perfiles.create')}}">Crear nuevo Perfil</a>
        <hr>
        <table class="table table-striped table-hover">
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