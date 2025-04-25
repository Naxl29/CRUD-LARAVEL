@extends('layouts.app')
@section('content')

<h2>Lista de personas</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE:</th>
      <th scope="col">OPCIONES</th>
    </tr>
  </thead>  
  <tbody>
    <tr>
      @foreach ($personas as $persona)
      <td>{{ $persona->id }}</td>
      <td>{{ $persona->nombre }}</td>
      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $persona->id }}">Actualizar</button>
        @include('personas.update')
      </td>
    </tr>
        @endforeach
  </tbody>
</table>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

@endsection