@extends('layouts.cuerpo')


@section('hijos')
<h1>Eliminar cliente</h1>

<div class="row">
    <div class="col">
     <form action="/clientes/{{$clienteEliminado->id}}" class="form-control" method="POST">
     @csrf
     @method('DELETE')
     <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" value="{{$clienteEliminado->nombre}}" name="nombre">
     </div>
    
     <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" value="{{$clienteEliminado->apellido}}" name="apellido">
     </div>

     <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono" value="{{$clienteEliminado->telefono}}" name="telefono">
     </div>
    
     <div class="mb-3">
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="/clientes" class="btn btn-primary">Cancelar</a>
     </div>

     </form>

    </div>
</div>

@endsection