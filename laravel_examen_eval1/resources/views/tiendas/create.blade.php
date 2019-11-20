@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('tiendas.create')}}" method="get">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <br><br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
