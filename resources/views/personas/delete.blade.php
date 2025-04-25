@extends('layouts.app')
@section('content')

<div class="card-body">
    <h5 class="card-title">Eliminar persona</h5>
    <form method="POST" action="{{ route('personas.destroy') }}">
        @csrf
        <div class="form-group">
            <label for="">Id de la persona:</label>
            <input type="text" id="id_persona" name="id_persona" class="form-control" required>
        </div>
        <button type="submit" class="form-control">Eliminar</button>
    </form>
        @if (session('error'))
        <div class="alert alert-success" role="alert">
            {{ session('error') }}
        </div>
        @endif
</div>


@endsection