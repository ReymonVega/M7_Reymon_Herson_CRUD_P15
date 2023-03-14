<form action="{{ route('empanada.store')}}" method="POST">
    @csrf
<label for="">Nombre</label>
<input type="text" name="nombre" class="form-control" required>
<label for="">Sabor</label>
<input type="text" name="sabor" class="form-control" required>

<br><br>

<a href="{{ route('empanada.index')}}" > Cancelar</a>
<button>Agregar</button>



</form>