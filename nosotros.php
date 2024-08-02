<?php   
  if (!isset($_SESSION["form_submitted"])) {
    unset($_SESSION["zip"]);
    unset($_SESSION["venezuela-cities"]);
    unset($_SESSION["length"]);
    unset($_SESSION["width"]);
    unset($_SESSION["height"]);
    unset($_SESSION["weight"]);
  } else {
    unset($_SESSION["form_submitted"]); // Reset the flag
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/nosotros-body.css">
    <link rel="stylesheet" href="style/footer.css">
  </head>
  <body style="padding: 0; margin: 0;">
    <div class="background-container">
      <div class="background-overlay"></div>
     <?php include("header.html");?>

      <div class="title-container">
        <p class="title-text">ACERCA DE NOSOTROS</p>
        <p class="subtitle-text">Enviamos tu carga y dinero de USA a Sur America</p>
      </div>
    </div>

    <div class="nosotros-container">
      <div class="nosotros-title-container">
        <span class="nosotros-title">QUIENES SOMOS?</span>  
      </div>
      <div class="nosotros-text-container">
        <span class="nosotros-body-1">SOMOS UNA EMPRESA DEDICADA A LA PRESTACION DE SERVICIOS DE PAQUETERIA CON AÑOS DE EXPERIENCIA EN EL MANEJO DE CARGA, REALIZAMOS ENVÍOS AÉREOS Y MARÍTIMOS DESDE ESTADOS UNIDOS HACIA SUR AMERICA Y CENTRO AMERICA</span>
        <span class="nosotros-body-2">Nuestro personal especializado se encarga del manejo de su carga desde el momento en que se recibe la solicitud del servicio hasta que la carga es entregada a su destino final de forma efectiva y sin complicaciones, ya que nos encargamos del almacenaje, trámites aduanales, fiscales y transporte de manera segura y responsable. </span>
        <span class="nosotros-body-2">Somos más que una empresa de envios, queremos convertirnos en su mejor aliado ofreciéndole soluciones especializadas en el manejo de su carga con los mejores tiempos de entregas y costos.</span>
      </div>
    </div>

    <div class="background-container">
      <div class="background-overlay"></div>
    </div>

    <div class="mission-container">
      <div class="mission-vision-container">
        <div class="our-mission-container-text">
          <p class="our-mission-title">NUESTRA MISIÓN</p>
          <div class="breaker"></div>
          <p class="our-mission-body">Servirle a nuestros clientes de forma eficaz y ser su aliado logístico garantizándoles rapidez, economía y seguridad en todas sus operaciones, de manera que marquemos la diferencia dentro del mercado competidor.</p>
        </div>
        <div class="our-vision-container-text">
          <p class="our-vision-title">NUESTRA VISIÓN</p>
          <div class="breaker"></div>
          <p class="our-vision-body">Convertirnos en el mejor aliado de nuestros clientes por la excelencia del trabajo en el manejo de las cargas desde Estados Unidos a Venezuela</p>
        </div>
      </div>
      <div class="our-values-container">
        <p class="our-values-title">NUESTROS VALORES</p>
        <div class="our-values-body">
          <div class="breaker"></div>
          <p><span>+</span>Honestidad</p>
          <p><span>+</span>Responsabilidad</p>
          <p><span>+</span>Confianza</p>
          <p><span>+</span>Sentido</p>
          <p><span>+</span>Sentido de pertenencia</p>
          <p><span>+</span>Pasión</p>
          <p><span>+</span>Integridad</p>
        </div>
      </div>
    </div>
  </body>
</html>

<?php include("footer.html");?>