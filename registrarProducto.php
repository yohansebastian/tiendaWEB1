<?php

include ("baseDatos.php");


if (isset ($_POST["enviar"])){

    // RECIBIR DATOS 

    $nombreProducto=$_POST["nombre"];
    $marcaProducto=$_POST["marca"];
    $precioProducto=$_POST["precio"];
    $descripcionProducto=$_POST["descripcion"];


    $transaccion = new baseDatos();

    //CONSULTA PARA INSERTAR DATOS

    $consultaSQL = "INSERT INTO productos(nomProducto,marcaProducto,precioProducto,descripcionProducto) VALUES ('$nombreProducto','$marcaProducto','$precioProducto','$descripcionProducto')";

    // LLAMAR METODO PARA INSERTAR DATOS

    $transaccion ->insertDatos($consultaSQL);

}


?>