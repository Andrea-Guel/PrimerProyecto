@extends('layouts.plantilla')
@section('title', 'Curso ' .$curso->name)

@section('content')
{{-- <h1>{{$curso}}</h1> formas de usar php en html --}}
{{-- <h1><?php echo $curso; ?></h1> --}}

<h1>Esta es la vista show {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
<p><strong>Categoria: </strong>  {{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>

<form action="{{route('cursos.destroy',$curso)}}" method="POST">
    @csrf
    @method('delete')
    <button>Eliminar</button>
</form>

 @endsection
