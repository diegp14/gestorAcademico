<?php
//inicio de sesion


    #Hacer la conexion y ejecutar la instruccion
    $servidor = "localhost";
    $usuario = "root";
    $contrasennia = "";
    $bd_nombre = "bd-materias";

    //crea la conexion
    $cnx = new mysqli($servidor, $usuario, $contrasennia, $bd_nombre);

    //verifica la conexion
    if ($cnx -> connect_error) {
        die("Fallo la conexión:".$cnx->connect_error);
    }

    function ejecutarConsulta($sql){
        global $cnx;
        $result = mysqli_query( $cnx, $sql);
        if (!$result) {
            die("Sentencia fallida!". "Sentencia:". $sql);
        }
        return true;
    }

?>