<?php

    include ("baseDatos.php");

    // Recibir el CodProducto del producto a eliminar

    $codProducto=$_GET["codProducto"];


    // Copia de la Base de Datos

    $transaccion = new baseDatos();

    // Crear consulta para eliminar productos

    $consultaSQL = "DELETE FROM productos WHERE codProducto='$codProducto'";

    // utilizar el metodo eliminarDatos

    $transaccion->eliminarDatos($consultaSQL);









?>