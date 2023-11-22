@extends('layouts.cuerpo')


@section('hijos')

<h1>Lista de Clientes</h1>
   <a href="clientes/create" class="btn btn-success">Crear</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Procesos</th>
            </tr>

        </thead>


        <tbody>
            
        @foreach ($clientes as $cliente)
            <tr>
                <th>{{$cliente->id}}</th>
                <th>{{$cliente->nombre}}</th>
                <th>{{$cliente->apellido}}</th>
                <th>{{$cliente->telefono}}</th>
                <th>
                    
                    <form action="/clientes/{{{$cliente->id}}}" method="post">
                        @csrf
                        @Method('Delete')
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-primary">Editar</a>
                    <a href="/clientes/{{$cliente->id}}" class="btn btn-primary">Borrar 1</a>
                    <button type="submit" class="btn btn-primary">Borra 2</button>
                    </form>
                    
                </th>
            </tr>


        @endforeach


        </tbody>

    </table>




@endsection

