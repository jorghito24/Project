<?php include("templates/cabecera.php") ?>

<div class="row justify-content-center" id="container">
        <div class="col-8">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/carrusel/carrusel1.jpeg" class="carruselimg" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/carrusel/carrusel2.jpeg" class="carruselimg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/carrusel/carrusel3.jpeg" class="carruselimg" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br>

<div class="row justify-content-center">
<div class="col-8">
  <div class="borde">
    <h2 id="espaciado">
      <span>SERVICIOS DISPONIBLES </span>
    </h2>
  </div>
</div>
</div>

<br>

<div class="container">
<div class="row justify-content-center">

  <div class="row">
  <div class="col-md-3">
            
            </div>
  
    <div class="col-lg-6 col-md-1">

      <div class="borde">
        <h2 id="espaciado">
          <span>Contactanos</span>
        </h2>
        <p>Si se encuentra con alguna dificultad puede enviar su consulta atraves del siguiente formulario o atraves de nuestro whatsapp
        </p>
        <a href="contacto.php">
        <div class="row justify-content-center" id="paddingboton">
          <button class="boton"><span>Contactar</span></button>
        </div>
      </a>
      </div>
    </div>
  </div>
</div>
</div>


<?php include("templates/pie.php") ?>