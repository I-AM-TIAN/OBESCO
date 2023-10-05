<?php
include('../template/dashboard.php')
$usuario = $_SESSION['id_user'];
$buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
$resultado = mysqli_num_rows($buscar_org);
if ($resultado <= 0) {
  header('location: welcome.php');
}
if (isset($_POST)) {
  if (!empty($_POST)) {
    $obtener_section = mysqli_query($conexion, "SELECT Section_a FROM organizaciones WHERE id_usuario = $usuario");
    $filtro = mysqli_fetch_array($obtener_section);
    $section = $filtro['Section_a'];
    if ($section == 0) {
      $aso11 = $_POST['aso11'];
      $aso12 = $_POST['aso12'];
      $aso13 = $_POST['aso13'];
      $aso14 = $_POST['aso14'];
      $aso15 = $_POST['aso15'];
      $aso16 = $_POST['aso16'];
      $aso17 = $_POST['aso17'];
      $aso18 = $_POST['aso18'];
      $aso19 = $_POST['aso19'];
      $aso110 = $_POST['aso110'];
      $aso111 = $_POST['aso111'];
      $aso112 = $_POST['aso112'];
      $aso113 = $_POST['aso113'];
      $proms1 = ($aso11 + $aso12 + $aso13 + $aso14 + $aso15 + $aso16 + $aso17 + $aso18 + $aso19 + $aso110 + $aso111 + $aso112 + $aso113) / 13;


      $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
      $resultado = mysqli_fetch_array($buscar_org);
      $id_org = $resultado['id_organizacion'];

      $insert_sec1 = mysqli_query($conexion, "INSERT INTO asociatividad(aso11,aso12,aso13,aso14,aso15,aso16,aso17,aso18,aso19,aso110,aso111,aso112,aso113,proms1,id_organizacion)VALUES($aso11,$aso12,$aso13,$aso14,$aso15,$aso16,$aso17,$aso18,$aso19,$aso110,$aso111,$aso112,$aso113,$proms1,$id_org)");
      if ($insert_sec1) {
        $transition = mysqli_query($conexion, "UPDATE organizaciones SET Section_a = 1 WHERE id_usuario = '$usuario'");
      }
    } else if ($section == 1) {
      $aso21 = $_POST['aso21'];
      $aso22 = $_POST['aso22'];
      $aso23 = $_POST['aso23'];
      $aso24 = $_POST['aso24'];
      $aso25 = $_POST['aso25'];
      $aso26 = $_POST['aso26'];
      $aso27 = $_POST['aso27'];
      $aso28 = $_POST['aso28'];
      $proms2 = ($aso21 + $aso22 + $aso23 + $aso24 + $aso25 + $aso26 + $aso27 + $aso28) / 8;

      $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
      $resultado = mysqli_fetch_array($buscar_org);
      $id_org = $resultado['id_organizacion'];
      $insert_sec2 = mysqli_query($conexion, "UPDATE asociatividad SET aso21 = $aso21, aso22 = $aso22, aso23 = $aso23, aso24 = $aso24, aso25 = $aso25, aso26 = $aso26 , aso27 = $aso27, aso28 = $aso28, proms2 = $proms2 WHERE id_organizacion = $id_org");
      if ($insert_sec2) {
        $transition = mysqli_query($conexion, "UPDATE organizaciones SET Section_a = 2 WHERE id_usuario = '$usuario'");
      }
    } else if ($section == 2) {
      $aso31 = $_POST['aso31'];
      $aso32 = $_POST['aso32'];
      $aso33 = $_POST['aso33'];
      $aso34 = $_POST['aso34'];
      $aso35 = $_POST['aso35'];
      $aso36 = $_POST['aso36'];
      $aso37 = $_POST['aso37'];
      $aso38 = $_POST['aso38'];
      $aso39 = $_POST['aso39'];
      $aso310 = $_POST['aso310'];
      $aso311 = $_POST['aso311'];
      $aso312 = $_POST['aso312'];
      $aso313 = $_POST['aso313'];
      $aso314 = $_POST['aso314'];
      $aso315 = $_POST['aso315'];
      $aso316 = $_POST['aso316'];
      $aso317 = $_POST['aso317'];
      $proms3 = ($aso31 + $aso32 + $aso33 + $aso34 + $aso35 + $aso36 + $aso37 + $aso38 + $aso39 + $aso310 + $aso311 + $aso312 + $aso313 + $aso314 + $aso315 + $aso316 + $aso317) / 17;
      $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
      $resultado = mysqli_fetch_array($buscar_org);
      $id_org = $resultado['id_organizacion'];
      $insert_sec3 = mysqli_query($conexion, "UPDATE asociatividad SET aso31 = $aso31, aso32 = $aso32, aso33 = $aso33, aso34 = $aso34, aso35 = $aso35, aso36 = $aso36 , aso37 = $aso37, aso38 = $aso38, aso39 = $aso39, aso310 = $aso310, aso311 = $aso311, aso312 = $aso312, aso313 = $aso313, aso314 = $aso314 , aso315 = $aso315, aso316 = $aso316, aso317 = $aso317, proms3 = $proms3 WHERE id_organizacion = $id_org");
      if ($insert_sec3) {
        $transition = mysqli_query($conexion, "UPDATE organizaciones SET Section_a = 3 WHERE id_usuario = '$usuario'");
      }
    } else if ($section == 3) {
      $aso41 = $_POST['aso41'];
      $aso42 = $_POST['aso42'];
      $aso43 = $_POST['aso43'];
      $aso44 = $_POST['aso44'];
      $aso45 = $_POST['aso45'];
      $aso46 = $_POST['aso46'];
      $aso47 = $_POST['aso47'];
      $aso48 = $_POST['aso48'];
      $aso49 = $_POST['aso49'];
      $proms4 = ($aso41 + $aso42 + $aso43 + $aso44 + $aso45 + $aso46 + $aso47 + $aso48 + $aso49) / 9;
      $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
      $resultado = mysqli_fetch_array($buscar_org);
      $id_org = $resultado['id_organizacion'];
      $insert_sec4 = mysqli_query($conexion, "UPDATE asociatividad SET aso41 = $aso41, aso42 = $aso42, aso43 = $aso43, aso44 = $aso44, aso45 = $aso45, aso46 = $aso46 , aso47 = $aso47, aso48 = $aso48, aso49 = $aso49, proms4 = $proms4 WHERE id_organizacion = $id_org");
      if ($insert_sec4) {
        $transition = mysqli_query($conexion, "UPDATE organizaciones SET Section_a = 4 WHERE id_usuario = '$usuario'");
      }
    } else if ($section == 4) {
      $aso51 = $_POST['aso51'];
      $aso52 = $_POST['aso52'];
      $aso53 = $_POST['aso53'];
      $aso54 = $_POST['aso54'];
      $aso55 = $_POST['aso55'];
      $aso56 = $_POST['aso56'];
      $aso57 = $_POST['aso57'];
      $aso58 = $_POST['aso58'];
      $aso59 = $_POST['aso59'];
      $proms5 = ($aso51 + $aso52 + $aso53 + $aso54 + $aso55 + $aso56 + $aso57 + $aso58 + $aso59) / 9;
      $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
      $resultado = mysqli_fetch_array($buscar_org);
      $id_org = $resultado['id_organizacion'];
      $insert_sec5 = mysqli_query($conexion, "UPDATE asociatividad SET aso51 = $aso51, aso52 = $aso52, aso53 = $aso53, aso54 = $aso54, aso55 = $aso55, aso56 = $aso56 , aso57 = $aso57, aso58 = $aso58, aso59 = $aso59, proms5 = $proms5 WHERE id_organizacion = $id_org");
      if ($insert_sec5) {
        $transition = mysqli_query($conexion, "UPDATE organizaciones SET Section_a = 5 WHERE id_usuario = '$usuario'");
      }
    } else if ($section == 5) {
      $aso61 = $_POST['aso61'];
      $aso62 = $_POST['aso62'];
      $aso63 = $_POST['aso63'];
      $aso64 = $_POST['aso64'];
      $aso65 = $_POST['aso65'];
      $aso66 = $_POST['aso66'];
      $aso67 = $_POST['aso67'];
      $aso68 = $_POST['aso68'];
      $proms6 = ($aso61 + $aso62 + $aso63 + $aso64 + $aso65 + $aso66 + $aso67 + $aso68) / 8;
      $proma = ($proms1 + $proms2 + $proms3 + $proms4 + $proms5 + $proms6) / 6;
      $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
      $resultado = mysqli_fetch_array($buscar_org);
      $id_org = $resultado['id_organizacion'];
      $insert_sec6 = mysqli_query($conexion, "UPDATE asociatividad SET aso61 = $aso61, aso62 = $aso62, aso63 = $aso63, aso64 = $aso64, aso65 = $aso65, aso66 = $aso66 , aso67 = $aso67, aso68 = $aso68, proms6 = $proms6, proma = $proma WHERE id_organizacion = $id_org");
      if ($insert_sec6) {
        $transition = mysqli_query($conexion, "UPDATE organizaciones SET Section_a = 6 WHERE id_usuario = '$usuario'");
      }
    }
  }
}

$queryo = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario = $usuario");
$validar = mysqli_num_rows($queryo);
if ($validar > 0) {
  $datoo = mysqli_fetch_array($queryo);
  $idorg = $datoo['id_organizacion'];
  $querys = mysqli_query($conexion, "SELECT Section_a FROM organizaciones WHERE id_organizacion = '$idorg'");
  $datos = mysqli_fetch_array($querys);
  $sec_a = $datos['Section_a'];
  if ($sec_a == 6) {
    header('location: finalizadoA.php');
  }
} else {
  $sec_a = 0;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../styles/asociatividad.css" />
  <title>Asociatividad</title>
</head>

<body>
  <!-- <nav>
    <h1 id="head"><a class="logo" href="../logout.php">OBESCO</a></h1>
    <h1 class="username"></h1>
  </nav> -->
  <div class="container-asociatividad">
    <div class="container">
      <header>Registro de datos</header>

      <!--Primer formulario-->

      <!-- Input oculto para validar seccion del formulario -->

      <input type="hidden" id="validacion" value="<?php echo $sec_a ?>" />

      <div id="p1" class="page1">
        <form method="post">
          <div class="seccion1">
            <p></p>
            <span class="title">Desarrollo de la asociatividad</span>
            <div class="fields">
              <div class="input-field">
                <label>La convocatoria a los asociados para participar de las
                  actividades y del proceso organizativo garantiza mayoría
                  cualificada (más del 70%)
                </label>
                <select id="aso11" name="aso11" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Los acuerdos para la toma de decisiones son claros y se
                  aplican
                </label>
                <select id="aso12" name="aso12" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Realiza algún tipo de evaluación de la experiencia asociativa
                  de manera periódica
                </label>
                <select id="aso13" name="aso13" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Los comités y consejos definidos en los estatutos funcionan
                  adecuadamente (se reunen, toman decisiones acorde a su
                  función)
                </label>
                <select id="aso14" name="aso14" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Se promueve relación más allá de la comercial con los
                  asociados
                </label>
                <select id="aso15" name="aso15" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Se generan oportunidad para ocupar cargos directivos a
                  mujeres, jóvenes y otros grupos poblacionales específicos
                </label>
                <select id="aso16" name="aso16" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Se generan planes de renovación de liderazgos </label>
                <select id="aso17" name="aso17" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Desarrollan planes de formación en asociatividad, trabajo en
                  red, politicas públicas, participación
                </label>
                <select id="aso18" name="aso18" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Participan de dinámicas de red, integración en su territorio
                </label>
                <select id="aso19" name="aso19" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La organizacion participa en espacios ciudadanos convocados
                  por las instituciones
                </label>
                <select id="aso110" name="aso110" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Se relacionan y mantiene proyectos comunes con organizaciones
                  externas (públicas, privadas, del tercer sector)
                </label>
                <select id="aso111" name="aso111" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Participa de programas de capacitación o gestión en
                  emprendimiento, comercialización, administrativos
                </label>
                <select id="aso112" name="aso112" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Participa de espacios locales de gestión del territorio como
                  planes de desarrollo, POT, presupuesto participativo, entre
                  otros
                </label>
                <select id="aso113" name="aso113" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="buttons">
            <button class="nextBtn" type="submit">
              <span class="btnText">Guardar y continuar</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </form>
      </div>

      <!--Segundo formulario-->

      <div id="p2" class="page2">
        <form method="post">
          <div class="seccion2">
            <p></p>
            <span class="title">Generación de trabajo, ingresos, calidad de vida
            </span>
            <div class="fields">
              <div class="input-field">
                <label>La actividad de la organización genera empleos directos
                </label>
                <select id="aso21" name="aso21" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Implementa contratación laboral para los empleados cumpliendo
                  todos los requisitos legales
                </label>
                <select id="aso22" name="aso22" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Las actividades y estrategias de la organización le permite a
                  sus asociados y familias generar ingresos permanentes
                </label>
                <select id="aso23" name="aso23" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La generación de ingresos le permite a los asociados
                  vincularse a seguridad social
                </label>
                <select id="aso24" name="aso24" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Desarrollan políticas de inclusión de mujeres, jóvenes a las
                  actividades de generación de ingresos
                </label>
                <select id="aso25" name="aso25" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Evalua el impacto en la calidad de vida de los asociados
                  derivado de la participación en las actividades económicas de
                  la organización
                </label>
                <select id="aso26" name="aso26" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La actividad económica de la organización permite la
                  vinculación de todos los asociados para la generación de
                  ingresos
                </label>
                <select id="aso27" name="aso27" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La actividad de generación de ingresos le permite a los
                  asociados tenerr capacidades productivas propias
                </label>
                <select id="aso28" name="aso28" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="buttons">
            <button class="nextBtn" type="submit">
              <span class="btnText">Guardar y continuar</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </form>
      </div>

      <!--tercer formulario-->

      <div id="p3" class="page3">
        <form method="post">
          <div class="seccion3">
            <p></p>
            <span class="title">Capacidad de gestion empresarial </span>
            <div class="fields">
              <div class="input-field">
                <label>Utilizan herramientas de gestión administrativa, contable,
                  logísticos
                </label>
                <select id="aso31" name="aso31" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Realiza división de funciones y tareas según un organigrama
                  de responsabilidades
                </label>
                <select id="aso32" name="aso32" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Realiza actividades de rendición de cuentas a sus asociados y
                  comunidad mediante balance social
                </label>
                <select id="aso33" name="aso33" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La gestión administrativa se realiza mediante contratación
                  laboral formal
                </label>
                <select id="aso34" name="aso34" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Implementa modelos de planeación de largo plazo </label>
                <select id="aso35" name="aso35" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Implementa modelos de planeación de corto plazo </label>
                <select id="aso36" name="aso36" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Evalúa de forma periódica la planeación y los resultados
                </label>
                <select id="aso37" name="aso37" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Utiliza TIC para la gestión de producción y comercialización
                </label>
                <select id="aso38" name="aso38" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Implementa requisitos del SGSST </label>
                <select id="aso39" name="aso39" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La organización accede a a recursos financieros externos
                  (sector financiero, cooperación internacional, públicos)
                </label>
                <select id="aso310" name="aso310" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La organización desarrolla mecanismos internos de finanzas
                  solidarias (ahorro, crédito, trueque, etc)
                </label>
                <select id="aso311" name="aso311" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La organización genera excedentes financieros (evaluar los
                  últimos 3 años)
                </label>
                <select id="aso312" name="aso312" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La organización eestá creando capacidad productiva (activos
                  productivos y capital de trabajo)
                </label>
                <select id="aso313" name="aso313" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Utilizan estrategias de comunicación </label>
                <select id="aso314" name="aso314" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Desarrolla algun tipo de herramientas de comunicación
                </label>
                <select id="aso315" name="aso315" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Mantienen información sobre necesidades y oferta de los
                  bienes y servicios a sus clientes
                </label>
                <select id="aso316" name="aso316" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Actualiza la informacion sobre las cadenas de proveedores y
                  clientes
                </label>
                <select id="aso317" name="aso317" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="buttons">
            <button class="nextBtn" type="submit">
              <span class="btnText">Guardar y continuar</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Cuarto formulario -->

      <div id="p4" class="page4">
        <form method="post">
          <div class="seccion4">
            <p></p>
            <span class="title">Capacidades de mercadeo </span>
            <div class="fields">
              <div class="input-field">
                <label>Aplica una metodología para establecer los precios de los
                  productos o servicios
                </label>
                <select id="aso41" name="aso41" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Identifica a la competencia y aliados como una acción
                  sistemática para la toma de decisiones
                </label>
                <select id="aso42" name="aso42" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Tiene mecanismos propios de comercialización </label>
                <select id="aso43" name="aso43" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Tiene política de comercialización e incluye el comercio
                  justo y el consumo responsable
                </label>
                <select id="aso44" name="aso44" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Comercializan de manera colectiva la producción </label>
                <select id="aso45" name="aso45" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>La logística para la comercialización es propia (transporte,
                  insumos, etc)
                </label>
                <select id="aso46" name="aso46" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Tiene capacidad para diseñar estrategias de mercadeo propias
                </label>
                <select id="aso47" name="aso47" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Conoce a los clientes y conoce sus intereses, gustos,
                  necesidades
                </label>
                <select id="aso48" name="aso48" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Participa de procesos articulados de comercialización con
                  otras organizaciones
                </label>
                <select id="aso49" name="aso49" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="buttons">
            <button class="nextBtn" type="submit">
              <span class="btnText">Guardar y continuar</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Quinto formulario -->

      <div id="p5" class="page5">
        <form method="post">
          <div class="seccion5">
            <p></p>
            <span class="title">Capacidades productivas (solo para las del sector primario y
              secundario)
            </span>
            <div class="fields">
              <div class="input-field">
                <label>Realiza compra conjunta entre los asociados, de insumos o
                  bienes de consumo
                </label>
                <select id="aso51" name="aso51" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Genera producción continua y estable en volumen (evaluar el
                  último año)
                </label>
                <select id="aso52" name="aso52" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Agrega valor a la producción (transformación, innovación,
                  otra)
                </label>
                <select id="aso53" name="aso53" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Compra a otros productores locales sus insumos </label>
                <select id="aso54" name="aso54" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Analizalos orígenes de los productos, para la compra de
                  insumos y productos para la producción
                </label>
                <select id="aso55" name="aso55" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Conoce la capacidad productiva de los asociados (áreas,
                  maquinaria, productividad, entre otros)
                </label>
                <select id="aso56" name="aso56" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Identifica los efectos negativos que genera la actividad
                  productiva
                </label>
                <select id="aso57" name="aso57" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Produce bajo principios de sustentabilidad ambiental
                </label>
                <select id="aso58" name="aso58" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Consumen los asociados lo que producen </label>
                <select id="aso59" name="aso59" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="buttons">
            <button class="nextBtn" type="submit">
              <span class="btnText">Guardar y continuar</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Sexto formulario -->

      <div id="p6" class="page6">
        <form method="post">
          <div class="seccion6">
            <p></p>
            <span class="title">Capacidades para el servicio: solo para sector terciario
            </span>
            <div class="fields">
              <div class="input-field">
                <label>Realiza compra a proveedores del sector solidario
                </label>
                <select id="aso61" name="aso61" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Genera una oferta de servidios continua y de calidad
                </label>
                <select id="aso62" name="aso62" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Agrega valor a los servicios respecto de otras empresas
                  privadas
                </label>
                <select id="aso63" name="aso63" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Se articula el servicio con circuitos locales de
                  comercialización
                </label>
                <select id="aso64" name="aso64" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Analiza los orígenes de los productos, para la compra de
                  insumos y materiales
                </label>
                <select id="aso65" name="aso65" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Su tamaño empresarial le permite competir con el sector
                  privado
                </label>
                <select id="aso66" name="aso66" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Identifica los efectos negativos que genera la actividad de
                  servicios
                </label>
                <select id="aso67" name="aso67" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>

              <div class="input-field">
                <label>Tiene programas ambientales de reducción de huella de
                  carbono, reciclaje, y específicos relacionados con su sector
                  económico
                </label>
                <select id="aso68" name="aso68" required>
                  <option disabled selected>Seleccione</option>
                  <option value="0">No lo hace o no tiene la capacidad</option>
                  <option value="1">Lo hace poco o tiene poca capacidad</option>
                  <option value="2">
                    Lo hace con frecuencia o esta desarrollando la capacidad
                  </option>
                  <option value="3">
                    Lo hace con experticia o tiene la capacidad
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="buttons">
            <button class="nextBtn" type="submit">
              <span class="btnText">Finalizar</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="../controller/transicionesa.js"></script>
</body>

</html>