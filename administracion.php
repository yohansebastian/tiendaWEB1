<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SurtimaxLaPastora</title>
    <!--Boostrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <!-- CABECERA-->

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
                            <a class="nav-link " href="bodegas.php" tabindex="-1">Bodegas</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <form action="registrarProducto.php" method="POST">
        <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca">
                </div>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" placeholder="Digite el precio del producto"
                    name="precio">
            </div>
            <br>
            <div class="col">
                <label>Descripción:</label>
                <textarea class="form-control" rows="4" name="descripcion"></textarea>
            </div>
            <br>
            <br>

            <button type="submit" class="btn btn-success btn-lg btn-block" name="enviar">Enviar</button>
        </div>
    </form>




</body>

</html>