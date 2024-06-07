<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/shipping-calculator.css">
  </head>
  <body>
    <div class="background-container">
      <div class="background-overlay"></div>
      <?php include("header.html"); ?>
      <div class="title-container">
        <p class="title-text">CALCULADORA DE ENVIOS</p>
        <div class="subtitle-container">
          <div class="subtitle-container-inner">
            <p class="subtitle-text">
              Conoce el costo de tu envío marítimo o aéreo desde USA hacia Venezuela
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="calculator-container">
      <div class="calculator-container-inner">
        <div class="progress-container">
          <div class="current-step">1</div>
          <div class="progress-line"></div>
          <div class="next-step">2</div>
        </div>
        <div class="instructions-container">
          <p class="instruction">Ingresa todos los datos solicitados a continuación:</p>
        </div>
       
        <div class="origin-container">
          <div class="origin-title"><h4>ORIGEN <img src="icons/us.svg" alt=""></h4></div>
          <div class="input-container-row">
            <div class="origin-input">
              <span>Código Postal (USA)</span>
              <input type="text">
            </div>
          </div>
        </div>
        <div class="destination-container">
          <div class="destination-title"> <h4>DESTINO <img src="icons/venezuela.svg" alt=""></h4></div>
          <div class="input-container-row">
            <div class="destination-input">
              <span>Ciudad de Venezuela</span>
              <select name="venezuela-cities" id="venezuela-cities">
                <option value="default">Elija una ciudad</option>
                <option value="puerto-cabello">Puerto Cabello</option>
                <option value="punto-fijo">Punto Fijo</option>
                <option value="caracas">Caracas</option>
                <option value="barquisimeto">Barquisimeto</option>
                <option value="merida">Mérida</option>
              </select>
            </div>
          </div>
        </div>
        <div class="dimensions-container">
          <div class="dimensions-title"> <h4>DIMENSIONES</h4></div>
          <div class="dimensions-row">
            <div class="dimensions">
              <span>Alto (Pulgadas)</span>
              <input type="number">
            </div>
            <div class="dimensions">
              <span>Largo (Pulgadas)</span>
              <input type="number">
            </div>
            <div class="dimensions">
              <span>Ancho (Pulgadas)</span>
              <input type="number">
            </div>
          </div>
        </div>
        <div class="weight-container">
          <div class="weight-title"> <h4>PESO</h4></div>
          <div class="weight-input-container">
            <span>Peso en libras</span>
            <input type="number">
          </div>
        </div>
        <div class="button-container">
          <button class="next-button">siguiente</button>
        </div>
      </div>
    </div>
  </body>
</html>

<?php include("footer.html");?>