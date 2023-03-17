<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<div >
  
  <div class="container text-center">
  <h1>Empanadas</h1>
        <h5>Tabla</h5>
        <p>Listado de Empanadas</p>
        @if ($mensaje = Session::get('success'))
            <div>
                {{ $mensaje}}
            </div>
        @endif
        <form>
            <button class="btn btn-primary"> <a href=" {{ route('empanada.create')}}" class="text-light">Agregar</a></button>
            </form>
        <p>
    <div >
        <table class="table align-middle table-striped">
            <thead>
                <th scope="col">Nombre</th>
                <th scope="col">Sabor</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </thead>
            <tbody>
                @foreach ( $datos as $item)
                <tr>
                    <td>{{$item -> nombre}}</td>
                    <td>{{$item -> sabor}}</td>
                    <td>
                        <form action="{{ route('empanada.edit' , $item->id )}}" method="GET">
                            <button class="btn btn-info m-1">Editar</button>
                        </form>
                    </td>
                    <td>  
                        <form action="{{ route('empanada.show' , $item->id )}}" method="GET" >
                        <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    
    </p>
  </div>
</div>


