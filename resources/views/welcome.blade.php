<div >
  <div >
    Empanadas
  </div>
  <div >
    <h5>Tabla</h5>
    <p>Listado de Empanadas</p>
    @if ($mensaje = Session::get('success'))
        <div>
            {{ $mensaje}}
        </div>
    @endif
    <form>
        <button> <a href="">Agregar</a></button>
        </form>
    <p>
    <div >
        <table>
            <thead>
                <th>Nombre</th>
                <th>Sabor</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach ( $datos as $item)
                <tr>
                    <td>{{$item -> nombre}}</td>
                    <td>{{$item -> sabor}}</td>
                    <td>
                        <form action="" method="GET">
                            <button >Editar</button>
                        </form>
                    </td>
                    <td>  
                        <form action="" method="GET" >
                        <button>Eliminar</button>
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

