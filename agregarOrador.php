<?php

echo "<pre>";
print_r($_POST); //permite que reciba los datos del form
echo "</pre>";

include("conexion.php");

$conexion = conexion();

//defino variables para guardar los datos recibidos en el POST
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$contacto = $_POST["contacto"];
$tema = $_POST["tema"];

$sql = "INSERT INTO oradores (id, nombre, apellido, contacto, tema) VALUES (NULL, '$nombre', '$apellido', '$contacto', '$tema')";

$query = mysqli_query($conexion, $sql);

//si la consulta fue exitosa me lleva a la misma página
if($query) {
    Header("Location: index.php");
}

?>
