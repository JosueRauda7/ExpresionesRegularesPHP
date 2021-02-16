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
    <section>
      <h2>Resultado de la búsqueda</h2>
      <?php
      if (isset($_POST) && strlen($_POST['parrafo']) == 0 && strlen($_POST['txt-buscar']) == 0) {
        $expresion = $_POST['txt-buscar'];
        $parrafo = $_POST['parrafo'];

        $nuevo_texto = preg_split($expresion, $parrafo, $limit = -1);
        echo $nuevo_texto, count($parrafo);

        $html = "<p>\n";
        for ($i = 0; $i < count($parrafo); $i++) {
          if ($nuevo_texto[$i] == $_POST['txt-buscar']) {
            $html .= "<span class=\"encontrado\">$nuevo_texto[$i]</span>";
          } else {
            $html .= "$nuevo_texto[$i]";
          }
        }
        $html = "</p>\n";
      }
      ?>
      <div class="enlace">
        <a href="index.html" class="button">Regresar</a>
      </div>
    </section>
  </div>
</body>

</html>