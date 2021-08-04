@extends('layouts.plantilla')

@section('title',"Cursos")

@section('content')
    <h1>Bienvenido al INDEX</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach($cursos as $curso)
            <li><a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a></li>
        @endforeach
    </ul>

    <?php echo $cursos->links(); ?>
@endsection
