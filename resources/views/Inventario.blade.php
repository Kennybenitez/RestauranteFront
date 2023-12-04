<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<style>
    body {
            margin: 0;
            padding: 0;
        }

        /* Estilo del fondo de pantalla */
        #fondo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            background-image: url('https://saposyprincesas.elmundo.es/wp-content/uploads/2020/12/ingredientes-basicos-en-la-cocina.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.3;
        }

        /* Estilo del contenido */
        #contenido {
            display : flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            position: relative;
            z-index: 1; 
            color: black; 
            margin-top: 10%;
        }

</style>

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ39CSTZC5fFZinJ8LkpDjYT8COnwZfIdfyVA&usqp=CAU"alt="Logo" width="50" height="46" class="d-inline-block align-text-top">
                <a class="navbar-brand">Restaurante</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route ('inicio.todos') }}">Inicio</a>
                    <a class="nav-link" href="{{ route ('cliente.ver') }}">Crear Cliente</a>
                    <a class="nav-link" href="{{ route ('inventario.obtener') }}">Inventario</a>
                    <a class="nav-link" href="{{ route ('inicio.ver') }}">Agregar Comida</a>
                </div>
                </div>
            </div>
            </nav>

            

            <div id="fondo">

            </div>

            <div id="contenido">
                <h1 style = "display:flex; justify-content: center;    text-transform: uppercase; -webkit-text-stroke-width: medium"> Inventario </h1>

                            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imagen</th>
      <th scope="col"> Nombre</th>
      <th scope="col"> Unidad Medida</th>
      <th scope="col"> Cantidad </th>
      <th scope="col"> Eliminar </th>
    </tr>
  </thead>
  <tbody>
    @foreach($ingredientes as $item)
    <tr>
      <th scope="row">{{$item ['id_ingrediente']}}</th>
      <td><div > <img src="{{$item ['urlImagen']}}" style ="width:145px; height:80px;"> </div></td>
      <td>{{$item ['nombre']}}</td>
      <td>{{$item ['unidadMedida']}}</td>
      <td> {{$item ['cantidadStock']}}</td>
      <td><a class="btn btn-danger" href="{{ route ('inventario.eliminar', $item['id_ingrediente']) }}">Eliminar</a></td>
    </tr>
    @endforeach

  </tbody>
</table>

    </div>

    <div style ="    text-align-last: center;">
    <a type="button" class="btn btn-outline-success" href="{{ route('inventario.ingresar') }}">Agregar ingredientes</a>
   

    </div>

            

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>