<?php

include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM oradores WHERE id = $id";

$query = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($query);

include("headerHtml.php");

?>

<main class="contaniner m-4">
<form action="editarOrador.php" method="post">
    <input type="text" class="form-control" name="id" id="" value="<?php echo $fila["id"] ?>" hidden>    
    <input type="text" class="form-control" name="nombre" id="" value="<?php echo $fila["nombre"] ?>">
    <input type="text" class="form-control" name="apellido" id="" value="<?php echo $fila["apellido"] ?>">
    <input type="text" class="form-control" name="contacto" id="" value="<?php echo $fila["contacto"] ?>">
    <input type="text" class="form-control" name="tema" id="" value="<?php echo $fila["tema"] ?>">
    <button type="submit" class="btn btn-warning">Modificar</button>
</form>
</main>

<?php include("footerHtml.php") ?>