<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<h1> Eliminar una persona</h1>
<h1>¿ Estas seguro de eliminar este campo ?</h1>
<table class="container">
    <thead>
       <th>Nombre</th>
       <th>Sabor</th>              
    </thead>
    <tbody>            
     <tr>
     <td>{{ $empanadas -> nombre}}</td>
     <td>{{ $empanadas -> sabor}}</td>        
     </tr>
    </tbody>
</table>
<hr>
<form action="{{ route('empanada.destroy' , $empanadas -> id) }} " method="POST" class="container">
@csrf
@method("DELETE")
<button class="p-3 btn btn-warning"> <a href=" {{ route('empanada.index')}}">Cancelar</a></button>
<button class="p-3 btn btn-danger"> Eliminar</button>
</form>   