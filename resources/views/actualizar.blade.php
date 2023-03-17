<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<form action="{{ route('empanada.update' , $empanadas -> id) }} "method="POST" class="container">
    @csrf
    @method("PUT")
<label for="" class="col-form-label">Nombre</label>
<input type="text" name="nombre" class="form-control" required value= "{{ $empanadas -> nombre}} ">
<label for="">Sabor</label>
<input type="text" name="sabor" class="form-control"required value= "{{ $empanadas -> sabor}} ">

<br><br>

<a href="{{ route('empanada.index')}}" class="p-3 text-danger"> Cancelar</a>
<button class="p-3 btn btn-primary">Actualizar</button>



</form>