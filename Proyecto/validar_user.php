<?php
include './DB/db_materias.php';
include './usuario.php';
if (isset($_POST)) {
    session_start();
    $nombre = $_POST['user'];
   
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM tusuarios WHERE Username = '$nombre' AND Pass = '$pass' ";

    $result = mysqli_query($cnx, $sql);
        if (mysqli_num_rows($result)== 1) {
            $fila = mysqli_fetch_array($result);
            $nombre = $fila['Nombre'];
            $username = $fila['Username'];
            $rol = $fila['Rol'];
            $_SESSION['username'] = $username;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['rol'] = $rol;
            
            header('Location: inicio.php'); 
        }
}

?>