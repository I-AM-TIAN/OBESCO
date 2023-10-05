<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="stylesheet" href="./styles/general.css" />
  <title>Home</title>
</head>

<body>
  <?php
  include("./template/nav.php");
  ?>
  <div class="slider-box">
    <ul id="slider">
      <li>
        <img src="./images/OBESCO.png" alt="">
      </li>
      <li>
        <img src="./images/OBESCOW.png" alt="">
      </li>
      <li>
        <img src="./images/OBESCO.png" alt="">
      </li>
      <li>
        <img src="./images/OBESCOW.png" alt="">
      </li>
    </ul>
  </div>

  <div class="contenido">
    <?php
    include("./template/options.php");
    ?>
    <div id="info" class="texto">
      <h1>CONTENIDO</h1>
      <p>
        El sector de la economía solidaria se reconoce por su capacidad de autogestión, derivada del trabajo y los aportes de sus asociados; de esta manera, se potencian sus habilidades individuales y se logran aportes sustanciales en la calidad de vida de las personas y sus comunidades. Es así como se han realizado diferentes esfuerzos por medir el impacto socioeconómico de las organizaciones del sector, entre ellos se encuentra el reporte de estados financieros que deben realizar las organizaciones a la Supersolidaria (Superintendencia de Economía Solidaria).
        Ante esa necesidad, los gremios como Confecoop y Ascoop, la academia y los organismos internacionales han impulsado proyectos orientados a valorar tales impactos, mediante métodos cualitativos, cuantitativos o mixtos; también las organizaciones cada vez han incorporado modelos de rendición de cuentas buscando hacer visible el aporte que hacen a la sociedad; no obstante, el balance de este ejercicio indica que no han sido suficientes los estudios realizados, entre otras razones, porque cada uno define variables diferentes, se realizan en momentos del tiempo asimétricos y se usan instrumentos diversos, con lo cual se dificulta tener información comparable e impide aportar información a la toma de decisiones en las políticas públicas.
        Con respecto a dichas debilidades en la información y medición del impacto, se propuso en la Universidad Cooperativa de Colombia desarrollar el proyecto de investigación “Observatorio de impacto social, económico y ambiental de la economía solidaria en Colombia”. Teniendo como aspectos claves la publicación de resultados, que brinde información confiable a la comunidad, en general, academia, gremios, gobiernos, entre otros, razón por la cual, este portal web permite acceder a los recursos y los servicios del observatorio de economía solidaria, garantizando la conservación y la actualización permanente de la información.
      </p>
    </div>
    <?php include("./reportes/rcaracterizacion.php") ?>
  </div>
  <script src="./controller/index.js"></script>
  <?php
  include("./template/footer.php");
  ?>
</body>

</html>