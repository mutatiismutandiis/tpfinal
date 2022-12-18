<?php
function conexion(){
    //guardamos en variables los datos de la conexión para poder modificarlos más facilmente
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";

    $baseDatos = "oradores";

    //conectar con el servidor
    $conectar = mysqli_connect($servidor, $usuario, $clave);
    //seleccionar la base de datos
    mysqli_select_db($conectar, $baseDatos);

    return $conectar;
}

?>
