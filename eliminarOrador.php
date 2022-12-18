<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

$id = $_GET["id"];

include("conexion.php");

$conexion = conexion();

$sql = "DELETE FROM oradores WHERE id = $id";

$query = mysqli_query($conexion, $sql);

//si el DELETE se ejecuta directamente, nos redirecciona a la misma tabla
if($query) {
    Header("Location: tabla.php");
}

?>
