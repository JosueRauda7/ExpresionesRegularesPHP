<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expresiones Regulares PHP</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/estiloresultado.css">
</head>

<body>
  <div class="margen">
    <header>
      <h1>Expresiones Regulares en PHP</h1>
      <div class="hr"></div>
      <h3>Resaltar palabras de un párrafo</h3>
    </header>
    <section class="section">
      <h2>Resultado de la búsqueda</h2>
      <?php
      $patron = $_POST['txt-buscar'];
      $parrafo = $_POST['parrafo'];

      // Uso de expresión regular y uso de preg_replace
      $nuevo_parrafo = preg_replace('/' . $patron . '/i', "<span class=\"encontrado\">$patron</span>", $parrafo);

      // Añadiendo <br /> a los saltos de línea
      $parrafo_final = preg_replace('/[\-]/', '<br />-', $nuevo_parrafo);

      $html = "<p>\n";
      $html .= "\t$parrafo_final\n";
      $html .= "</p>\n";
      echo $html;
      ?>
      <div class="enlace">
        <a href="index.html" class="button">Regresar</a>
      </div>
    </section>
  </div>
</body>

</html>