<?php include("headerHtml.php") ?>

<main class="contaniner m-4">
  <!-- Cards -->
  <div class="container fluid d-flex justify-content-center" id="cards">
  <div class="card-group">
    <div class="col-sm" id="card-estudiante">
      <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-body text-primary">
          <h5 class="card-title">Estudiante</h5>
          <p class="card-text-1">Tienen un descuento</p>
          <p class="card-text-2">80%</p>
          <p class="card-text-3"> *presentar documentación </p>
        </div>
      </div>
    </div>
      
    <div class="col-sm" id="card-trainee">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-body text-success">
          <h5 class="card-title">Trainee</h5>
          <p class="card-text-1"> Tienen un descuento </p>
          <p class="card-text-2">50%</p>
          <p class="card-text-3"> *presentar documentación </p>
        </div>
      </div>
    </div>
  
    <div class="col-sm" id="card-junior">
      <div class="card border-warning mb-3" style="max-width: 18rem;">
        <div class="card-body text-warning">
          <h5 class="card-title">Junior</h5>
          <p class="card-text-1">Tienen un descuento</p>
          <p class="card-text-2">15%</p>
          <p class="card-text-3"> *presentar documentación </p>
        </div>
      </div>
  </div>
  </div>
  </div>

  <!--Sección Venta de entradas -->
  <div class="container-fluid" id="titulo-venta">
    <p>VENTA</p>
    <h2>VALOR DEL TICKET $200</h2>
  </div>

  <div class="container-fluid col-9">
    <form class="row g-3" id="compraEntradas">
    
      <div class="col-md-6">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre"  aria-label="Nombre" >
      </div>
      
      <div class="col-md-6">
        <input type="text" class="form-control" id="inputApellido" placeholder="Apellido"  aria-label="Apellido">
      </div>
      
      <div class="col-12">
        <input type="email" class="form-control" id="inputEmail" placeholder="Correo" aria-label="Correo">
      </div>
    
      <div class="col-md-6">
        <label for="inputCantidad" class="form-label">Cantidad</label>
        <input type="text" class="form-control" id="inputCantidad" placeholder="cantidad">
      </div>
      
      <div class="col-md-6">
        <label for="inputCategoria" class="form-label">Categoría</label>
        <select id="inputCategoria" class="form-select" >
          <option selected>Estudiante</option>
          <option>Trainee</option>
          <option>Junior</option>
          <option>General</option>
        </select>
      </div>

      <div class="alert alert-primary " role="alert">
        <p class="mb-0" id="importeTotal">Total a Pagar: $</p>
      </div>
    
      <div class="col">
        <button class="btn btn-success col-sm-12  botonEnviar" type="button" id="btnBorrar">Borrar</button>
      </div>
      
      <div class="col">
        <button class="btn btn-success col-sm-12 botonEnviar" type="button" id="btnResumen">Resumen</button>
      </div>
    </form>
  </div>

</main>

<?php include("footerHtml.php") ?>