<?php 


include("baseDatos.php")

if(isset($_POST["botonEditar"])){

    //1. recibir datos:

        $nombre=$_POST["nombreEditar"];
        $marca=$_POST["marcaEditar"];
        $precio=$_POST["precioEdtiar"];
        $descripcion=$_POST["descripcionEditar"];


    //2. Recibir el id del registro a actualizar
        $codProducto=$_GET["codProducto"];
        
    //3. Sacar copia o crear objeto de la calse
    
    $transaccion=new BaseDatos();

    //4. crear una consulta para editar datos en SQL

    $consultaSQL = "UPDATE productos SET nombreProducto='$nombre',marcaProducto='$marca',precioProducto='$precio',descripcionProducto='$descripcion' WHERE codProducto='$codProducto'";

    // 5. Acceder al metodo editarDatos

    $transaccion->editarDatos($consultaSQL);

    // 6. Redireccion

    header("location:bodegas(ListarProductos).php")




}





?>