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
                    <img src="img/logoSURTIMAX.png" alt="SurtimaxLogo" class="logo">
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="administracion.php">Administración</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="bodegas.php" tabindex="-1">Bodegas</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
                    </form>

                </div>
            </div>
        </nav>

    </header>

    <form action="administracion.php" method="POST">
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
            <input type="number" class="form-control" id="precio" placeholder="Digite el precio del producto"
                name="precio">
        </div>
        <br>
        <input type="text" class="form-control" placeholder="Descripcion" name="descripcion">
        
        <br>
        <br>
        
        <button type="submit" class="btn btn-success btn-lg btn-block" name="enviar">Enviar</button>
    </div>    
    </form>




</body>

</html>