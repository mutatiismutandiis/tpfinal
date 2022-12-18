<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

include("conexion.php");

$conexion = conexion();

//traemos los datos del post para editar
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$contacto = $_POST["contacto"];
$tema = $_POST["tema"];

$sql = "UPDATE oradores SET nombre = '$nombre', apellido = '$apellido', contacto = '$contacto', tema = '$tema' WHERE id=$id";

$query = mysqli_query($conexion, $sql);


if($query) {
    Header("Location: tabla.php");
}

?>
