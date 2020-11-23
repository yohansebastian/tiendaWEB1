<?php 

class baseDatos{

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
    public function buscarDatos($consultaSQL)
    {
        //1. Conectarme a la BaseDatos
        $conectarBD=$this -> conectarBD();

        //2. Preparar la Consulta

        $consultaBuscarDatos = $conectarBD -> prepare ($consultaSQL);

        //3. Indicar metodo para listar los Datos
        
        $consultaBuscarDatos -> setFetchMode(PDO::FETCH_ASSOC);

        //4. Ejecutar la consulta 

        $consultaBuscarDatos -> execute ();

        // 5. Mostrar los datos buscados

        return($consultaBuscarDatos->fetchAll());

    }

    public function eliminarDatos($consultaSQL)
    {
        //1. Conectarme a la Base de Datos

        $conectarBD=$this -> conectarBD();
        
        //2. Preparar la consulta 

        $consultaEliminarDatos = $conectarBD -> prepare($consultaSQL);

        // 3. Ejecutar la consulta 

        $resultado=$consultaEliminarDatos -> execute();

        //4. Verifique el resultado

        if ($resultado){
            echo("Registro eliminado con éxito");
        }else{
            echo ("Error eliminado el registro");
        }
    }

    public function editarDatos($consultaSQL)
    {
        //Conexión con la BaseDatos

        $conectarBD=$this -> conectarBD();
        
        //Preparar Consulta

        $consultaEditarDatos = $conectarBD -> prepare($consultaSQL);

        // 3. Ejecutar la consulta 

        $resultado=$consultaEditarDatos -> execute();

        //4. Verifique el resultado

        if ($resultado){
            echo("Registro editado con éxito");
        }else{
            echo ("Error editando el registro");
        }
    }


}






?>