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
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/servicios.css">
  </head>
  <body>
    <div class="background-container">
      <div class="background-overlay"></div>
      <?php include("header.html"); ?>
      <div class="title-container">
        <p class="title-text">SERVICIOS</p>
        <div class="subtitle-container">
          <div class="subtitle-container-inner">
            <p class="subtitle-text">
              Nuestros envíos llegan a:
            </p>
          </div>
          <div class="flags-subtitle">
            <div>
              <span><img class="flag-icon" src="icons/venezuela.svg" alt=""> Venezuela</span>
              <span><img class="flag-icon" src="icons/colombia.svg" alt=""> Colombia</span>
              <span><img class="flag-icon" src="icons/mexico.svg" alt=""> Mexico</span>
            </div>
            <div>
              <span><img class="flag-icon" src="icons/ecuador.svg" alt=""> Ecuador</span>
              <span><img class="flag-icon" src="icons/peru.svg" alt=""> Peru</span>
              <span><img class="flag-icon" src="icons/el-salvador.svg" alt=""> El Salvador</span>
            </div>
            <div>
              <span><img class="flag-icon" src="icons/guatemala.svg" alt=""> Guatemala</span>
              <span><img class="flag-icon" src="icons/dominican-republic.svg" alt=""> Dominicana</span>
              <span><img class="flag-icon" src="icons/honduras.svg" alt=""> Honduras</span>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services-container">
      <div class="service-row-container">
        <div class="service-image-container">
          <img src="images/MicrosoftTeams-image-6.jpg" alt="">
        </div>
        <div class="service-row-body">
          <h2>Mudanzas</h2>
          <div class="break"></div>
          <div class="service-text-container">
            <span class="services-text">
              En <strong>Global Envios</strong> hacemos que mudarse ya no sea un estrés para ti. Ahora ofrecemos servicio de mudanza personalizado y te ayudamos con todo para que puedas disfrutar tu nuevo hogar. Contáctanos para mayor información.
            </span>
          </div>
        </div>
      </div>
      <div class="service-row-container">
        <div id="domicilio" class="service-row-body-2">
          <h2>Recolección a domicilio</h2>
          <div class="break"></div>
          <div class="service-text-container">
            <span class="services-text">
              Buscamos tus paquetes en la comodidad de tu hogar y te brindamos asesoría para que tus envíos lleguen óptimos a su destino final.
            </span>
          </div>
        </div>
        <div class="service-image-container">
          <img src="images/stock-image-2.jpg" alt="">
        </div>
        
      </div>
      <div class="service-row-container">
        <div class="service-image-container">
          <img src="images/stock-image-3.jpg" alt="">
        </div>
        <div class="service-row-body">
          <h2>Carga Paletizada</h2>
          <div class="break"></div>
          <div class="service-text-container">
            <span class="services-text">
              En <strong>Global Envios</strong> también ofrecemos envíos paletizados para que puedas enviar mayor volumen a un mejor costo, tus productos para tu negocio y/o familia.
            </span>
          </div>
        </div>
      </div>
      <div class="service-row-container">
        <div class="service-row-body-2">
          <h2>Envíos Domesticos</h2>
          <div class="break"></div>
          <div class="service-text-container">
            <span class="services-text">
              Buscamos tus paquetes en la comodidad de tu hogar y te brindamos asesoría para que tus envíos lleguen óptimos a su destino final.
            </span>
          </div>
        </div>
        <div class="service-image-container">
          <img src="images/stock-image-4.png" alt="">
        </div>
      </div>
    </div>
  </body>
</html>

<?php include("footer.html");?>