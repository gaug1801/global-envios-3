<?php
  include("db_configuration.php");
?>

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

    <?php
      $shipping_price = "";
      if (isset($_POST["submit"])) {
        $zip = $_POST["zip"];
        $dest = $_POST["venezuela-cities"];
        $length = $_POST["length"];
        $width = $_POST["width"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];

        $shipping_price =(($length * $width * $height) / 1782) * 35;
      }
    ?>

    <form action="shipping-calculator.php" method="post" class="calculator-container">
      <div class="calculator-container-inner">
        <?php if ($shipping_price === ""): ?>
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
                <input type="text" name="zip" required>
              </div>
            </div>
          </div>
          <div class="destination-container">
            <div class="destination-title"> <h4>DESTINO <img src="icons/venezuela.svg" alt=""></h4></div>
            <div class="input-container-row">
              <div class="destination-input">
                <span>Ciudad de Venezuela</span>
                <select name="venezuela-cities" id="venezuela-cities" required>
                  <option name="dest" value="default">Elija una ciudad</option>
                  <option name="dest" value="puerto-cabello">Puerto Cabello</option>
                  <option name="dest" value="punto-fijo">Punto Fijo</option>
                  <option name="dest" value="caracas">Caracas</option>
                  <option name="dest" value="barquisimeto">Barquisimeto</option>
                  <option name="dest" value="merida">Mérida</option>
                </select>
              </div>
            </div>
          </div>
          <div class="dimensions-container">
            <div class="dimensions-title"> <h4>DIMENSIONES</h4></div>
            <div class="dimensions-row">
              <div class="dimensions">
                <span>Alto (Pulgadas)</span>
                <input name="height" type="number" required>
              </div>
              <div class="dimensions">
                <span>Largo (Pulgadas)</span>
                <input name="length" type="number" required>
              </div>
              <div class="dimensions">
                <span>Ancho (Pulgadas)</span>
                <input name="width" type="number" required>
              </div>
            </div>
          </div>
          <div class="weight-container">
            <div class="weight-title"> <h4>PESO</h4></div>
            <div class="weight-input-container">
              <span>Peso en libras</span>
              <input name="weight" type="number" required>
            </div>
          </div>
          <div class="button-container">
            <button type="submit" name="submit" class="next-button">siguiente</button>
          </div>
        <?php else: ?>
          <div class="result-container">
            <div class="progress-container">
              <div class="last-step">1</div>
              <div class="progress-line"></div>
              <div class="current-step">2</div>
            </div>
            <p class="result-title">COSTOS ESTIMADOS</p>
            <div class="result-input-container">
              <div class="result-row">
              <p>Costo del servicio maritimo (USD $)</p>
              <input class="result-display" type="text" value="<?php echo round($shipping_price, 2); ?>" readonly>
              </div>
              <div class="result-row">
              <p>Costo del servicio aereo (USD $)</p>
              <input class="result-display" type="text" value="<?php echo round($shipping_price, 2); ?>" readonly>
              </div>
            </div>
            <div class="button-row">
              <button class="prev-button">anterior</button>
              <button class="send-button">enviar</button>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </form>
  </body>
</html>

<?php include("footer.html"); ?>
