@extends('layouts.plantilla')
@section('title', 'Curso create')

@section('content')
<h1> Bienvenido a create </h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
    <br>
        <span>*{{$message}}</span>
    <br>
    @enderror
    <br>
    <label>
        Slug:
        <br>
        <input type="text" name="slug" value="{{ old('slug') }}">
    </label>
    @error('slug')
        <br>
        <span>*{{ $message }}</span>
        <br>
    @enderror
    <br>

    <br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" rows="5" value="{{old('descripcion')}}">{{old('descripcion')}}</textarea>
    </label>

    @error('descripcion')
    <br>
        <span>*{{$message}}</span>
    <br>
    @enderror

    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>

    @error('categoria')
    <br>
        <span>*{{$message}}</span>
    <br>
    @enderror

    <br><br>
    <button type="submit"> enviar formulario</button>
</form>
 @endsection