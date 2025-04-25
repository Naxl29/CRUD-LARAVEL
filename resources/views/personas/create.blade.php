@extends('layouts.app')
@section('content')

<div class="card-body">
    <h5 class="card-title">Agregar persona</h5>
    <form method="POST" action="{{ route('personas.store') }}">
        @csrf
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <button type="submit" class="form-control">Agregar</button>
    </form>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
</div>


@endsection