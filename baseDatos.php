<?php 

class BaseDatos{

    //VARIABLES

    public $usuarioBD="root";
    public $passwordBD="";

    //SACAR COPIA DE LAS CLASES

    public function _construct(){}

    // FUNCIONES

    public function conectarBD ()
    {

        try{
            $infoBD="mysql:host=localhost;dbname=tiendaweb1";
            $conexionBD = new PDO ($infoBD,$this->usuarioBD,$this->passwordBD);
            return($conexionBD);
        }
        catch(PDOException $error){
            echo ($error -> getMessage());
        }
    }
    public function insertDatos($consultaSQL)
    {
        // CONEXION A LA BASE DE DATOS

        $conectarBD=$this -> conectarBD();

        // PREPARAR CONSULTA

        $consultaInsertDatos = $conectarBD -> prepare($consultaSQL);

        // EJECUTAR LA CONSULTA

        $resultado=$consultaInsertDatos -> execute();

        // VERIFICAR EL RESULTADO

        if($resultado){
            echo("Registro Agregado con éxito");
        }else{
            echo("Error Agregando el registro");
        }

    }

}






?>