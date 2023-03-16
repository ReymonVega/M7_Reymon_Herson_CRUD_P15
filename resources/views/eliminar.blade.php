<h1> Eliminar una persona</h1>
<h1> Estas seguro de eliminar!!</h1>
<table>
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
<form action="{{ route('empanada.destroy' , $empanadas -> id) }} " method="POST">
@csrf
@method("DELETE")
<button> <a href=" {{ route('empanada.index')}}">Cancelar</a></button>
<button> Eliminar</button>
</form>   