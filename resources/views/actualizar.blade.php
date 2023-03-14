<form action="{{ route('empanada.update' , $empanadas -> id) }} "method="POST">
    @csrf
    @method("PUT")
<label for="">Nombre</label>
<input type="text" name="nombre" class="form-control" required value= "{{ $empanadas -> nombre}} ">
<label for="">Sabor</label>
<input type="text" name="sabor" class="form-control"required value= "{{ $empanadas -> sabor}} ">

<br><br>

<a href="{{ route('empanada.index')}}" > Cancelar</a>
<button>Actualizar</button>



</form>