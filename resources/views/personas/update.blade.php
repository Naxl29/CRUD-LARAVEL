<!-- Modal -->
<div class="modal fade" id="modal{{ $persona->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('personas.update', $persona) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $persona->nombre }}" class="form-control" required>
            </div>
            <button type="submit" class="form-control">Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>