@extends('layouts.cuerpo')


@section('hijos')
<h1>Editar cliente</h1>

<div class="row">
    <div class="col">
     <form action="/clientes/{{$datoCliente->id}}" class="form-control" method="POST">
     @csrf
     @method('PUT')
     <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" value="{{$datoCliente->nombre}}" name="nombre">
     </div>
    
     <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" value="{{$datoCliente->apellido}}" name="apellido">
     </div>

     <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono" value="{{$datoCliente->telefono}}" name="telefono">
     </div>
    
     <div class="mb-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/clientes" class="btn btn-danger">Cancelar</a>
     </div>

     </form>

    </div>
</div>

@endsection