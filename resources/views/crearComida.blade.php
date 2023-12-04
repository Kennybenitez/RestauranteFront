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
            background-image: url('https://img.freepik.com/vector-gratis/diferentes-tipos-comida-snack-ilustracion_1308-2640.jpg?w=2000');
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
            margin-top: 15%;
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
                <!-- Fondo de pantalla -->
            </div>

            <div id="contenido">
                <h1> Bienvenido ingrese su nueva comida </h1>
               
               
                <form action ="{{ url('/crearComida')}}" method ="POST">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nombreComida" placeholder="Nombre de la comida">
                    <label for="floatingInput">Nombre de la comida</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="precio" placeholder="Precio de la comida">
                    <label for="floatingInput">Precio de la comida</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="imagenComida" placeholder="Imagen de la comida">
                    <label for="floatingInput">Imagen de la comida</label>
                    </div>

                                    <div style ="position: static; text-align: center; margin-top:20px;">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    <a type="button" class="btn btn-danger" href="{{ route ('inicio.todos') }}">Cancelar</a>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo tipo comida</button>
                        </div>    
                                </form>

                                       
                                       
            
    </div>

    <div style ="z-index: 2;">
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ingrese su nuevo tipo de comida</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                               <form id="TipoComida">
                                                
                                               <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="TipoComida" placeholder="Ingrese el tipo de comida">
                                                    <label for="floatingInput">Ingrese el tipo de comida</label>
                                                    </div>  
                                            
                                            </form>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" form="TipoComida" class="btn btn-success">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
    </div>
            

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>