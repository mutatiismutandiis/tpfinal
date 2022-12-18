<?php
    include("conexion.php");

    $conexion = conexion(); //creamos una conexión

    $sql = "SELECT * FROM oradores"; //guardamos en una variable la consulta sql

    $query = mysqli_query($conexion, $sql); //ejecuta la consulta con las dos variables definidas

    include("headerHtml.php");
?> 

<main class="contaniner m-4">
<div class="container-fluid">
    <h1> Listado de oradores registrados </h1>
    <table class="table bg-info table-striped mt-3" id="tabla-oradores">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Contacto</th>
            <th>Tema</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php  
                //extraemos cada fila de la consulta, cuando termina el while la variable queda vacía               
                while($fila = mysqli_fetch_array($query)){
            ?>            
            <tr>
                <td><?php echo $fila["nombre"] ?></td>
                <td><?php echo $fila["apellido"] ?></td>
                <td><?php echo $fila["contacto"] ?></td>
                <td><?php echo $fila["tema"] ?></td>
                <td><a href="formEditarOrador.php?id=<?php echo $fila["id"] ?>"><button type="button" class="btn btn-light">Editar</button></a></td>
                <td><a href="eliminarOrador.php?id=<?php echo $fila["id"] ?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
            </tr>
            <?php
                }               
            ?>
                
            </tbody>
        </table>
</div>       
</main>

<?php include("footerHtml.php") ?>