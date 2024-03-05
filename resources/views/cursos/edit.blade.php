@extends('layouts.plantilla')
@section('title', 'Curso edit')

@section('content')
    <h1> Bienvenido a edicción </h1>

    <form action="{{ route('cursos.update', $curso) }}" method="post">
        {{-- //crear un token es para seguridad --}}
        @csrf
        {{-- //metodo a utilizar en html no existe put solo get y  post  --}}
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>
        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>

        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{ old('slug', $curso->slug) }}">
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
            <textarea name="descripcion" rows="5">{{ old('descripcion', $curso->descripcion) }}
        </textarea>
        </label>
        @error('descripcion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        @error('categoria')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br><br>
        <button type="submit"> Editar formulario</button>
    </form>
@endsection
