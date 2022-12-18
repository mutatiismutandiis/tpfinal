<?php include("headerHtml.php") ?>

<!-- Banner con foto -->
<div class="container-fluid" id="banner-con-foto">
  <div class="row no-gutters">
    <div class="col-sm-8"></div>
    <div class="col-sm-4" id="texto-banner">
      <h1>Conf Bs As</h1>
      <p> Bs As llega por primera vez a Argetina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos! </p>
      <div id="boton-oradores">
        <a href="#seccion-oradores">
        <button type="button" class="btn btn-outline-light">
          <a href="#registro-oradores-1" id="nav-bar"> Quiero ser orador </a>
        </button>
      </div>
      <button type="button" class="btn btn-success">
        <a href="http://localhost/tpfinalcodoacodo/tickets.php" id="nav-bar"> Comprar tickets </a>
      </button> 
    </div>
  </div>  
</div> 

<!-- Sección de Oradores -->
<div class="container-fluid" id="seccion-oradores-1">
  <div class="row no-gutters">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="titulo-oradores">
      <p>CONOCE A LOS</p>
      <h1>ORADORES</h1>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>

<div class="container-fluid" id="seccion-oradores-2">
  <div class="row no-gutters" id="oradores">
    
    <div class="col-sm" id="orador1">
      <img src="steve.jpg" alt="Foto de Steve Jobs" id="img-orador1">
      <button type="button" class="btn btn-warning">JavaScript</button>
      <button type="button" class="btn btn-primary">React</button>
      <h1>Steve Jobs</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam a maiores distinctio labore vel mollitia neque dignissimos. Minima eum molestias ab cum dolores, quibusdam suscipit itaque quas odio delectus vel.</p><br><br>
    </div>
    
    <div class="col-sm" id="orador2">
      <img src="bill.jpg" alt="Foto de Bill Gates" id="img-orador2">
      <button type="button" class="btn btn-warning">JavaScript</button>
      <button type="button" class="btn btn-primary">React</button>
      <h1>Bill Gates</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam a maiores distinctio labore vel mollitia neque dignissimos. Minima eum molestias ab cum dolores, quibusdam suscipit itaque quas odio delectus vel.</p><br><br>
    </div>

    <div class="col-sm" id="orador3">
      <img src="ada.jpeg" alt="Foto de Ada Lovelace" id="img-orador3">
      <button type="button" class="btn btn-secondary">Negocios</button>
      <button type="button" class="btn btn-danger">Startups</button>
      <h1>Ada Lovelace</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam a maiores distinctio labore vel mollitia neque dignissimos. Minima eum molestias ab cum dolores, quibusdam suscipit itaque quas odio delectus vel.</p> <br><br>
    </div>

  </div>
</div>

<!-- Sección Lugar y fecha -->
<div class="container-fluid" id="lugar-fecha">
  <div class="row no-gutters">
    <div class="col-sm">
      <img src="honolulu.jpg" class="img-fluid w-100" alt="Foto de una playa" id="img-playa">
    </div>
    <div class="col-sm" id="texto-random">
      <h1>Bs As - Octubre</h1>
      <p> Buens Aires es la provincia y localidad más grande del estado de Argentina, en Estados Unidos. Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km2 de superficie). </p> <br>
      <button type="button" class="btn btn-outline-light">Conocé más</button>
    </div>
  </div>  
</div>

<!-- Sección registro de oradores -->
<div class="container-fluid" id="registro-oradores-1">
  <div class="row no-gutters">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="titulo-oradores">
      <p>CONVIÉRTETE EN UN</p>
      <h1>ORADOR</h1>
      <p id="anotarse-orador"> Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</p><br>
      <form action="agregarOrador.php" method="post">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
          </div>
        </div>
        <br> 
        <input type="text" class="form-control" name="contacto" id="contacto" placeholder="Correo electrónico" required>
        <div class="form-group">
          <textarea class="form-control" rows="4" name="tema" id="tema" placeholder="Sobre qué quieres hablar?"></textarea>
        </div>
        <p id="texto-abajo-form">Recuerda incluir un título para tu charla</p> <br>
        <div class="row">
            <button class="btn btn-success col-sm-12" type="submit" id="btnEnviar">Enviar</button>
        </div>  
      </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>

<?php include("footerHtml.php") ?>