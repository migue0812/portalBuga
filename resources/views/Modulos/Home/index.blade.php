@include('Templates.Frontend.head')
@include('Templates.Frontend.header')
<div class="container">
  <div class="row">
    <div class="box">
      <div class=" col-lg-12 text-center">
        <header id="myCarousel" class="carou carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for Slides -->
          <div class="carousel-inner">
            <div class="item active">
              <!-- Set the first background image using inline CSS below. -->
              <div class="fill" style="background-image:url('../img/Basilica.jpg');"></div>
              <div class="carousel-caption">
                <p style="color: #FFF; font: 180% sans-serif;">Basilica Del Señor De Los Milagros </p>
                <p>La palabra Basílica significa “Casa donde vive el Rey”. La iglesia católica le concede el título de “Basílicas” a unos cuantos templos muy celebres de Roma. </p>
              </div>
            </div>
            <div class="item">
              <!-- Set the second background image using inline CSS below. -->
              <div class="fill" style="background-image:url('../img/Ferro.jpg');"></div>
              <div class="carousel-caption">
                <p style="color: #FFF; font: 180% sans-serif">Estacion Del Ferrocarril</p>
                <p>La Estación del Ferrocarril, espectacular conjunto arquitectónico, declarado Bien de Interés Cultural (BIC) de la Nación por el Ministerio de Cultura. Posee una arquitectura colonial, buscando uniformidad en cada uno de los elementos y detalles que la componen. Todos los espacios externos e internos son atribuidos a una función o actividad específica, por lo cual es un monumento digno de apreciar.</p>
              </div>
            </div>
            <div class="item">
              <!-- Set the third background image using inline CSS below. -->
              <div class="fill" style="background-image:url('../img/bugio.png');"></div>
              <div class="carousel-caption">
                <p style="color: #FFF; font: 180% sans-serif">Buga</p>
                <p>Cuenta la leyenda que en 1550 a las manos de una indígena que lavaba ropa en el río Guadalajara llegó un pequeño Cristo, traído por las aguas. Dios recompensaba así un acto caritativo de la mujer hacia un vecino. Tras ser puesta en un altar, la imagen comenzó a crecer y la gente a venerarla.</p>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
          </a>

        </header>
        <h2 class="brand-before">

        </h2>
        <h1 class="brand-name" style="">Guadalajara De Buga</h1>
        <hr class="tagline-divider">
        <div>

          <div class="tituloWelcome" style="">Una de las mejores ciudades turisticas!</div>

          <p>En el Centro del Valle del Cauca, específicamente en la parte media de la Cordillera Central, 
            fue fundado en 1573, el municipio de Guadalajara de Buga. 
            “La ciudad Señora” como también se le denomina, 
            posee un patrimonio arquitectónico e histórico que cuenta con diferentes bienes de interés cultural,
            entre estos, La Basílica del Señor de los Milagros la cual recibe y acoge a visitantes de todo el mundo.
          </p>

        </div>
      </div>
      <div class="col-lg-12">
        <div class="visitNav">
          <div>
            <h2 style="text-align: center;">Más Vistos</h2>
          </div>
        </div>
        <hr class="tagline-divider-cont">
      </div>
      <div class="portafolio row">
        <?php
        foreach ($sitios as $sitio):
          ?>
          <div class="hoverSitio col-sm-4 text-center">
            <a href="<?php echo url("home/sitios/det/" . $sitio->sit_id) ?>">
              <img class="img img-responsive thumbnail tm" src="<?php echo asset("$sitio->img_ruta") ?>" alt="">
            </a>
            <div class="textHover">
              <button id="botonHidden" type="submit">Ver Mas</button>

            </div> 
            <h3 style="font-family: Helvetica Neue;"><?php echo ($sitio->sit_nombre) ?></h3>
          </div>

        <?php endforeach ?>
      </div>

      <div class="queHacer">
        <div>
          <h2 style="text-align: center;">Que Hacer</h2>
        </div>
      </div>
      <div class="line"></div>
      <!-- Page Content -->
      <div class="container">

        <!-- Introduction Row -->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="visit">Visitanos
              <small>Los Mejores Lugares Para Ti !</small>
            </h3>
            <p>Rodeada por diferentes atractivos turísticos, 
              dentro de ellos el más importante de esta ciudad La Basílica del Señor de los Milagros, 
              la cual a bendecido a millones de turistas nacionales y extranjeros. 
              Ubicada en el centro de la ciudad de Buga. 
              Por su trayectoria histórica y milagrosa la Basílica es el lugar mas visitado en el Valle del Cauca y uno de los centros religiosos por excelencia de Colombia.<br>
              Ven y disfruta de la mejor Gastronomía Vallecaucana, Restaurantes, Fincas Campestres, 
              Hoteles, Balnearios y demás Destinos Turísticos para disfrutar en Familia.</p>
          </div>
        </div>

        <!-- Team Members Row -->

        <div class="row actividades">

          <div class="col-lg-4 col-sm-4 text-center">
            <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/dormir.png") ?>" alt="Descansar?">
            <h3>Donde Dormir?
              <small>Los mejores lugares</small>
            </h3>
            <p>Buscas un lugar para descarsar? </p>
          </div>
          <div class="col-lg-4 col-sm-4 text-center">
            <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/comer.png") ?>" alt="Comer?">
            <h3>Donde Comer?
              <small>La mejor comida</small>
            </h3>
            <p>Buscas un lugar para comer?</p>
          </div>
          <div class="col-lg-4 col-sm-4 text-center">
            <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/diversion.png") ?>" alt="">
            <h3>Diverción?
              <small>La mejor diverción</small>
            </h3>
            <p>Buscas un lugar para divertirte?</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 desarrollo">
        <div class="visitNav">
          <div>
            <h2 style="text-align: center;">Desarrollo</h2>
          </div>
        </div>
        <hr class="tagline-divider-cont">
      </div>
      <div class="line"></div>
      <!-- Page Content -->
      <div class="container text-center actividades">
        <div class="row">
          <div class="view col-lg-4 col-sm-4">  
            <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/senaLog.png") ?>" alt="Descansar?">
            <div class="mask">  
              <h2 style="color:whitesmoke">centro de diseño tecnologico industrial</h2>  
              <p style="color:whitesmoke">Regional Valle del Cauca</p>  
              <a href="https://www.facebook.com/BienestarCDTI/?fref=ts" class="info">Leer Más</a>  
            </div>  
          </div>
          <div class="view col-lg-4 col-sm-4">  
            <img class="queHacerIcon  img-responsive img-center" src="<?php echo asset("img/histoBuga.png") ?>">  
            <div class="mask">  
              <h2 style="color:whitesmoke">Patrimonio historico de Colombia</h2>  
              <p style="color:whitesmoke">Rodeada por diferentes atractivos turísticos</p>  
              <a href="<?php echo url("home/historia") ?>" class="info">Leer Más</a>  
            </div>  
          </div>
          <div class="view col-lg-4 col-sm-4">  
            <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/bugaLog.png") ?>" alt="Comer?">
            <div class="mask">  
              <h2 style="color:whitesmoke">alcaldia municipal de Buga</h2>  
              <p style="color:whitesmoke">Buga Renovada</p>  
              <a href="http://www.guadalajaradebuga-valle.gov.co/index.shtml" class="info">Leer Más</a>  
            </div> 
          </div>
        </div>
      </div>


      @include('Templates.Frontend.footer')
      @include('Templates.Frontend.foot')