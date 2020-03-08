@extends("../layouts.plantilla")

@section('cabecera')

@endsection

@section('contenido')

<form action="/productos" method="POST">
    @csrf
    <input type="text" name="departamento">

    <input type="submit" name="enviar" value="enviar">


</form>

@endsection

