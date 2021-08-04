@extends('layouts.plantilla')

@section('title',$curso->name)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Regresar a los cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>
    <p><strong>Categoria: <strong>{{$curso->descripcion}}</p>
@endsection
