<?php

include ("baseDatos.php");


if (isset ($_POST["enviar"])){

    // RECIBIR DATOS 

    $nombreProducto=$_POST["nombre"];
    $marcaProducto=$_POST["marca"];
    $precioProducto=$_POST["precio"];
    $foto=$_POST["foto"];
    $descripcionProducto=$_POST["descripcion"];
    


    $transaccion = new baseDatos();

    //CONSULTA PARA INSERTAR DATOS

    $consultaSQL = "INSERT INTO productos(nombreProducto,marcaProducto,precioProducto,foto,descripcionProducto) VALUES ('$nombreProducto','$marcaProducto','$precioProducto','$foto','$descripcionProducto')";

    // LLAMAR METODO PARA INSERTAR DATOS

    $transaccion ->insertDatos($consultaSQL);

    header("location:administracion.php");


}


?>