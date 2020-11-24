<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SurtimaxLaPastora</title>
    <!--Boostrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/clases2.css">
</head>

<body>

    <header>
        <!--NAVEGACION -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="row">
                <div class="col-md-4">
                    <img src="img\logo.png" width="150px" alt="SurtimaxLogo" class="logo">
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Iniciar sesion <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="administracion.php">Administración</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="bodegas(ListarProductos).php" tabindex="-1">Bodegas</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <?php 

    // Incluir archivo donde esta la clase buscarDatos

    include("baseDatos.php");

    // Crear consulta para buscar los datos

    $consultaSQL = "SELECT * FROM productos WHERE 1";

    // Crear un objeto de la clase baseDatos que use el metodo buscarDatos

    $transaccion = new baseDatos();

    $productos=$transaccion-> buscarDatos($consultaSQL);
   


    ?>

    <h1 align="center">Listado de Productos</h1>



    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3">
            <?php  foreach($productos as $producto):?>

            <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($producto["foto"]) ?>" alt="imagen" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo($producto["nombreProducto"]); echo($producto["marcaProducto"]) ?></h5>
                        <h5 class="card-title">$<?php echo($producto["precioProducto"]) ?></h5>
                        <p class="card-text"><?php echo($producto["descripcionProducto"]) ?></p>
                        <a href="eliminarProducto.php?codProducto=<?php echo($producto["codProducto"]) ?>"
                            class="btn btn-success">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                            data-target="#editar<?php echo($producto["codProducto"]) ?>">Editar</button>
                    </div>
                </div>
                    <div class="modal fade" id="editar<?php echo($producto["codProducto"]) ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editando Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="editarProducto.php?codProducto=<?php echo($producto["codProducto"]) ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombreProducto"]) ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marcaProducto"]) ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Precio</label>
                                        <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precioProducto"]) ?>">
                                    </div>
                                    <div class="form-group">
                                    <label>Descripción:</label>
                                    <textarea class="form-control" name="descripcionEditar"><?php echo($producto["descripcionProducto"]) ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach ?>
        </div>


    </div>
    




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>

</html>