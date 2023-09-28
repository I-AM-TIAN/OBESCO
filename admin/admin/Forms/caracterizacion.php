<?php
require_once "../../Config/conexion.php";
session_start();
$usuario = $_SESSION['id_user'];
$buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
$resultado = mysqli_num_rows($buscar_org);
echo "<script>console.log('Console: " . $resultado . "' );</script>";
if (isset($_POST)) {
  if (!empty($_POST)) {
    if ($resultado <= 0) {
      $nom = $_POST['nom-org'];
      $tipo_org = $_POST['tipo-org'];
      $redes = $_POST['redes'];
      $sitio = $_POST['sitio'];
      $año = $_POST['año-fun'];
      $desc = $_POST['des'];
      $sector_eco = $_POST['sec-e'];
      $sit_geo = $_POST['sit-g'];
      $ubigeo = $_POST['ubi-g'];
      $query = mysqli_query($conexion, "INSERT INTO `organizaciones` (`id_organizacion`, `nombre`, `id_tipoorg`, `redes_sociales`, `pagina_web`, `Año_fundacion`, `logo`, `id_sectoreco`, `id_situaciongeo`, `idubi_geo`, `Descripcion`, `id_usuario`, `Section_1`) VALUES (NULL, '$nom', $tipo_org, '$redes', '$sitio', $año, NULL, $sector_eco, $sit_geo, $ubigeo, '$desc', $usuario, '1');");

      $departamento = $_POST['dep'];
      $municipio = $_POST['mun'];
      $direccion = $_POST['dir'];
      $barrio = $_POST['bar'];

      //Validación del departamento
      $buscardep = mysqli_query($conexion, "SELECT id_departamento FROM departamento WHERE Departamento = '$departamento'");
      $resdep = mysqli_num_rows($buscardep);
      if ($resdep > 0) {
        $datosdep = mysqli_fetch_array($buscardep);
        $iddep = $datosdep['id_departamento'];
      } else {
        $insertdep = mysqli_query($conexion, "INSERT INTO departamento(Departamento, id_pais) VALUES ('$departamento', 1)");
        $buscardep = mysqli_query($conexion, "SELECT id_departamento FROM departamento WHERE Departamento = '$departamento'");
        $datosdep = mysqli_fetch_array($buscardep);
        $iddep = $datosdep['id_departamento'];
      }

      //Validación del municipio
      $buscarmun = mysqli_query($conexion, "SELECT id_municipio FROM municipio WHERE Municipio = '$municipio'");
      $resmun = mysqli_num_rows($buscarmun);
      if ($resmun > 0) {
        $datosmun = mysqli_fetch_array($buscarmun);
        $idmun = $datosmun['id_municipio'];
      } else {
        $insertmun = mysqli_query($conexion, "INSERT INTO municipio(Municipio, id_departamento) VALUES ('$municipio', $iddep)");
        $buscarmun = mysqli_query($conexion, "SELECT id_municipio FROM municipio WHERE id_departamento = $iddep");
        $datosmun = mysqli_fetch_array($buscarmun);
        $idmun = $datosmun['id_municipio'];
      }

      //Validacion del barrio
      $buscarbar = mysqli_query($conexion, "SELECT id_barrio FROM barrio WHERE Barrio = '$barrio'");
      $resbar = mysqli_num_rows($buscarbar);
      if ($resbar > 0) {
        $datosbar = mysqli_fetch_array($buscarbar);
        $idbar = $datosbar['id_barrio'];
      } else {
        $insertbar = mysqli_query($conexion, "INSERT INTO barrio(Barrio, id_municipio) VALUES ('$barrio',$idmun)");
        $buscarbar = mysqli_query($conexion, "SELECT id_barrio FROM barrio WHERE Barrio = '$barrio'");
        $datosbar = mysqli_fetch_array($buscarbar);
        $idbar = $datosbar['id_barrio'];
      }

      //Validacion de la organizacion
      $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
      $datoo = mysqli_fetch_array($buscar_org);
      $idorg = $datoo['id_organizacion'];

      //Registrar ubicacion
      $insertubi = mysqli_query($conexion, "INSERT INTO ubicacion(id_pais,id_departamento,id_municipio,id_barrio,Detalle,id_organizacion) VALUES(1,$iddep,$idmun,$idbar,'$direccion',$idorg)");
    } else {
      $obtener_section = mysqli_query($conexion, "SELECT Section_1 FROM organizaciones WHERE id_usuario = $usuario");
      $filtro = mysqli_fetch_array($obtener_section);
      $section = $filtro['Section_1'];

      if ($section == 1) {
        $totalaso = $_POST['to-aso'];
        $asociados1s = $_POST['aso-1'];
        $asociadosdis = $_POST['aso-dis'];
        $asociados56 = $_POST['aso-56'];
        $asociados1828 = $_POST['aso-18'];
        $asociados2955 = $_POST['aso-29'];
        $asociadoses1 = $_POST['aso-es1'];
        $asociadoses2 = $_POST['aso-es2'];
        $asociadoses3 = $_POST['aso-es3'];
        $asociadoses4 = $_POST['aso-es4'];
        $asociadoses5 = $_POST['aso-es5'];
        $asociadosrur = $_POST['aso-ru'];
        $asociadosur = $_POST['aso-ur'];
        $totalasohom = $_POST['aso-hom'];
        $asociadospob = $_POST['aso-po'];
        $asoad = $_POST['aso-ad'];
        $asovig = $_POST['aso-vi'];
        $asoot = $_POST['aso-ot'];
        $asodiv = $_POST['aso-div'];
        $totalasamuj = $_POST['aso-mu'];
        $asociadaspob = $_POST['aso-mpo'];
        $asaad = $_POST['aso-mad'];
        $asavig = $_POST['aso-mvi'];
        $asaot = $_POST['aso-mot'];
        $asadiv = $_POST['aso-mdiv'];

        $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
        $datoo = mysqli_fetch_array($buscar_org);
        $idorg = $datoo['id_organizacion'];


        $caracterizar = mysqli_query($conexion, "INSERT INTO caracterizacion(totalaso,asociados1s,asociadosdis,asociados56,asociados1828,asociados2955,asociadoses1,asociadoses2,asociadoses3,asociadoses4,asociadoses5,asociadosrur,asociadosur,totalasohom,asociadospob,asoad,asovig,asoot,asodiv,totalasamuj,asociadaspob,asaad,asavig,asaot,asadiv,id_organizacion)
        VALUES ($totalaso,$asociados1s,$asociadosdis,$asociados56,$asociados1828,$asociados2955,$asociadoses1,$asociadoses2,$asociadoses3,$asociadoses4,$asociadoses5,$asociadosrur,$asociadosur,$totalasohom,$asociadospob,$asoad,$asovig,$asoot,$asodiv,$totalasamuj,$asociadaspob,$asaad,$asavig,$asaot,$asadiv,$idorg)");

        if ($caracterizar) {
          $transition = mysqli_query($conexion, "UPDATE organizaciones SET Section_1 = 2 WHERE id_usuario = '$usuario'");
        }
      } elseif ($section == 2) {
        $totalemp = $_POST['to-emp'];
        $empleados29 = $_POST['emp-29'];
        $empleados56 = $_POST['emp-56'];
        $empleados18 = $_POST['emp-18'];
        $empleados1s = $_POST['emp-1'];
        $empleados12s = $_POST['emp-1y2'];
        $empleados23s = $_POST['emp-2y3'];
        $empleados4s = $_POST['emp-4'];
        $empleadosarl = $_POST['emp-arl'];
        $empleadospen = $_POST['emp-pen'];
        $empleadossal = $_POST['emp-sal'];
        $empleadosru = $_POST['emp-ru'];
        $empleadosur = $_POST['emp-ur'];
        $empleadosdis = $_POST['emp-dis'];
        $empleadoshom = $_POST['emp-hom'];
        $empleadoshdiv = $_POST['emp-hdiv'];
        $empleadosmuj = $_POST['emp-mu'];
        $empleadosmdiv = $_POST['emp-mdiv'];

        $buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
        $datoo = mysqli_fetch_array($buscar_org);
        $idorg = $datoo['id_organizacion'];

        $caracterizar2 = mysqli_query($conexion, "UPDATE caracterizacion SET totalemp = $totalemp, empleados29 = $empleados29, empleados56 = $empleados56, empleados18 = $empleados18, empleados1s = $empleados1s, empleados12s = $empleados12s, empleados23s = $empleados23s, empleados4s = $empleados4s, empleadosarl = $empleadosarl, empleadospen = $empleadospen, empleadossal = $empleadossal, empleadosru = $empleadosru, empleadosur = $empleadosur, empleadosdis = $empleadosdis, empleadoshom = $empleadoshom, empleadoshdiv = $empleadoshdiv, empleadosmuj = $empleadosmuj, empleadosmdiv = $empleadosmdiv WHERE`id_organizacion` = $idorg;");
        if($caracterizar2){
          $transition = mysqli_query($conexion, "UPDATE organizaciones SET Section_1 = 3 WHERE id_usuario = '$usuario'");
        }
      }
    }
  }
}

$queryo = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario = $usuario");
$validar = mysqli_num_rows($queryo);
if ($validar > 0) {
  $datoo = mysqli_fetch_array($queryo);
  $idorg = $datoo['id_organizacion'];
  $querys = mysqli_query($conexion, "SELECT Section_1 FROM organizaciones WHERE id_organizacion = '$idorg'");
  $datos = mysqli_fetch_array($querys);
  $sec_1 = $datos['Section_1'];
  if($sec_1 == 3){
    header('location: finalizado.php');
  }
} else {
  $sec_1 = 0;
}



echo "<script>console.log('Console: " . $sec_1 . "' );</script>";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../styles/caracterizacion.css" />
  <title>Caracterizacion</title>

</head>

<body>
  <nav>
    <h1 id="head"><a class="logo" href="../logout.php">OBESCO</a></h1>
    <h1 class="username"><?php echo $_SESSION['user_name'] ?></h1>
  </nav>
  <div class="container">
    <header>Registro de datos</header>

    <!--Primer formulario-->

    <!-- Input oculto para validar seccion del formulario -->

    <input type="hidden" id="validacion" value="<?php echo $sec_1 ?>" />
    
    <div id="p1" class="page1">
      <form action="" method="POST">
        <div class="company data">
          <p>
            A continuación usted ingresará los datos generales de la empresa
          </p>
          <span class="title">Datos de la empresa</span>
          <div class="fields">
            <div class="input-field">
              <label>Nombre de la organizacion</label>
              <input type="text" id="nom-org" name="nom-org" required />
            </div>

            <div class="input-field">
              <label>Tipo de organización</label>
              <select id="tipo-org" name="tipo-org" required>
                <option disabled selected>Seleccione</option>
                <?php
                $query = mysqli_query($conexion, "SELECT * FROM tipo_organizacion");
                while ($valores = mysqli_fetch_assoc($query)) {
                  echo '<option value="' . $valores['id_tipoorg'] . '">' . $valores['tipo'] . '</option>';
                } ?>
              </select>
            </div>

            <div class="input-field">
              <label>Redes sociales(Enlace)</label>
              <input type="url" id="redes" name="redes" required />
            </div>

            <div class="input-field">
              <label>Sitio web(Enlace)</label>
              <input type="url" id="sitio" name="sitio" required />
            </div>

            <div class="input-field">
              <label>Año de fundacion</label>
              <input type="number" id="año-fun" name="año-fun" min="1900" max="2023" required />
            </div>

            <div class="input-field">
              <label>Logo</label>
              <input type="file" id="logo-org" name="logo-org" accept="image/*" required />
            </div>

            <div class="input-field">
              <label>Descripción de la organización</label>
              <input type="text" id="des" name="des" required />
            </div>

            <div class="input-field">
              <label>Sector economico de la organizacion</label>
              <select id="sec-e" name="sec-e" required>
                <option disabled selected>Seleccione</option>
                <?php
                $query = mysqli_query($conexion, "SELECT * FROM sector_economico");
                while ($valores = mysqli_fetch_assoc($query)) {
                  echo '<option value="' . $valores['idsec_eco'] . '">' . $valores['Sector'] . '</option>';
                } ?>
              </select>
            </div>

            <div class="input-field">
              <label>Situacion geografica de la organizacion</label>
              <select id="sit-g" name="sit-g" required>
                <option disabled selected>Seleccione</option>
                <?php
                $query = mysqli_query($conexion, "SELECT * FROM situacion_geografica");
                while ($valores = mysqli_fetch_assoc($query)) {
                  echo '<option value="' . $valores['idsit_geogra'] . '">' . $valores['Situacion'] . '</option>';
                } ?>
              </select>
            </div>

            <div class="input-field">
              <label>Ubicacion geografica</label>
              <select id="ubi-g" name="ubi-g" required>
                <option disabled selected>Seleccione</option>
                <?php
                $query = mysqli_query($conexion, "SELECT * FROM ubicacion_geografica");
                while ($valores = mysqli_fetch_assoc($query)) {
                  echo '<option value="' . $valores['idubi_geo'] . '">' . $valores['Ubicacion'] . '</option>';
                } ?>
              </select>
            </div>

            <div class="input-field">
              <label>Departamento</label>
              <select id="dep" name="dep" onchange="getMunicipios()" required>
                <option disabled selected>Seleccione</option>
              </select>
            </div>

            <div class="input-field">
              <label>Municipio</label>
              <select id="mun" name="mun" required>
                <option disabled selected>Seleccione</option>
              </select>
            </div>

            <div class="input-field">
              <label>Dirección</label>
              <input type="text" id="dir" name="dir" required />
            </div>

            <div class="input-field">
              <label>Barrio o localidad</label>
              <input type="text" id="bar" name="bar" required />
            </div>

            <div class="buttons">
              <button class="nextBtn sumbit" type="submit" onclick="transition()">
                <span class="btnText">Guardar y continuar</span>
                <i class="uil uil-navigator"></i>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!--Segundo formulario-->

    <div id="p2" class="page2">
      <form action="" method="POST">
        <div class="associates">
          <p>
            A continuación, ingrese el número de asociados que corresponda a cada campo.
          </p>
          <span class="title">Datos de los asociados</span>
          <div class="fields">
            <div class="input-field">
              <label>Total de asociados en la organizacion</label>
              <input type="number" id="to-aso" name="to-aso" required />
            </div>

            <div class="input-field">
              <label>Ganan menos de 1 SMLVM</label>
              <input type="number" id="aso-1" name="aso-1" required />
            </div>

            <div class="input-field">
              <label>Discapacitados</label>
              <input type="number" id="aso-dis" name="aso-dis" required />
            </div>

            <div class="input-field">
              <label>Mayores de 56 años</label>
              <input type="number" id="aso-56" name="aso-56" required />
            </div>

            <div class="input-field">
              <label>Entre 18 y 28 años</label>
              <input type="number" p id="aso-18" name="aso-18" required />
            </div>

            <div class="input-field">
              <label>Entre 29 y 55 años</label>
              <input type="number" id="aso-29" name="aso-29" required />
            </div>

            <div class="input-field">
              <label>Viven en estrato 1</label>
              <input type="number" id="aso-es1" name="aso-es1" required />
            </div>

            <div class="input-field">
              <label>Viven en estrato 2</label>
              <input type="number" id="aso-es2" name="aso-es2" required />
            </div>

            <div class="input-field">
              <label>Viven en estrato 3</label>
              <input type="number" id="aso-es3" name="aso-es3" required />
            </div>

            <div class="input-field">
              <label>Viven en estrato 4</label>
              <input type="number" id="aso-es4" name="aso-es4" required />
            </div>

            <div class="input-field">
              <label>Viven en estrato 5</label>
              <input type="number" id="aso-es5" name="aso-es5" required />
            </div>

            <div class="input-field">
              <label>Viven en zona rural</label>
              <input type="number" id="aso-ru" name="aso-ru" required />
            </div>

            <div class="input-field">
              <label>Viven en zona urbana</label>
              <input type="number" id="aso-ur" name="aso-ur" required />
            </div>
          </div>
          <div class="associates-g">
            <div class="associates-m">
              <span class="title">Datos de los asociados de género masculino</span>
              <div class="fields-m">
                <div class="input-field">
                  <label>Total asociados hombres en la organizacion</label>
                  <input type="number" id="aso-hom" name="aso-hom" onchange="calcularAso()" required />
                </div>

                <div class="input-field">
                  <label>Viven en situacion de pobreza según pobreza
                    multidimensional</label>
                  <input type="number" id="aso-po" name="aso-po" required />
                </div>

                <div class="input-field">
                  <label>Integran el consejo de
                    administracion</label>
                  <input type="number" id="aso-ad" name="aso-ad" required />
                </div>

                <div class="input-field">
                  <label>Integran la junta de vigilancia</label>
                  <input type="number" id="aso-vi" name="aso-vi" required />
                </div>

                <div class="input-field">
                  <label>Integran otros comites de la
                    organizacion</label>
                  <input type="number" id="aso-ot" name="aso-ot" required />
                </div>

                <div class="input-field">
                  <label>Representan la diversidad entre los
                    asociados</label>
                  <input type="number" id="aso-div" name="aso-div" required />
                </div>
              </div>
            </div>
            <div class="associates-f">
              <span class="title">Datos de las asociadas de género femenino</span>
              <div class="fields-f">
                <div class="input-field">
                  <label> Total asociadas mujeres en la organizacion</label>
                  <input type="number" id="aso-mu" name="aso-mu" readonly required />
                </div>

                <div class="input-field">
                  <label>Viven en situació2n de pobreza segun pobreza
                    multidimensional</label>
                  <input type="number" id="aso-mpo" name="aso-mpo" required />
                </div>

                <div class="input-field">
                  <label>Integran el consejo de
                    administracion</label>
                  <input type="number" id="aso-mad" name="aso-mad" required />
                </div>

                <div class="input-field">
                  <label>Integran la junta de vigilancia</label>
                  <input type="number" id="aso-mvi" name="aso-mvi" required />
                </div>

                <div class="input-field">
                  <label>Integran otros comites de la
                    organizacion</label>
                  <input type="number" id="aso-mot" name="aso-mot" required />
                </div>

                <div class="input-field">
                  <label>Representan la diversidad entre las
                    asociadas</label>
                  <input type="number" id="aso-mdiv" name="aso-mdiv" required />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="buttons">
          <button class="nextBtn sumbit" type="submit" onclick="transition()">
            <span class="btnText">Guardar y continuar</span>
            <i class="uil uil-navigator"></i>
          </button>
        </div>
      </form>
    </div>

    <!--tercer formulario-->

    <div id="p3" class="page3">
      <form method="POST">
        <div class="members">
          <p>
            A continuacion usted va a ingresar el numero de empleados
            referente a cada pregunta
          </p>
          <span class="title">Datos de los trabajadores</span>
          <div class="fields">
            <div class="input-field">
              <label>total de personas que trabajan en la organizacion</label>
              <input type="number" id="to-emp" name="to-emp" required />
            </div>

            <div class="input-field">
              <label>Empleados entre 29 y 55 años</label>
              <input type="number" id="emp-29" name="emp-29" required />
            </div>

            <div class="input-field">
              <label>Empleados con mas de 56 años</label>
              <input type="number" id="emp-56" name="emp-56" required />
            </div>

            <div class="input-field">
              <label>Empleados entre 18 y 28 años</label>
              <input type="number placeholder=" Ingrese el total de empleados" id="emp-18" name="emp-18" required />
            </div>

            <div class="input-field">
              <label>Empleados que ganan menos de 1SMLVM</label>
              <input type="number" id="emp-1" name="emp-1" required />
            </div>

            <div class="input-field">
              <label>Empleados que ganan entre 1 y 2 SMLVM</label>
              <input type="number" id="emp-1y2" name="emp-1y2" required />
            </div>

            <div class="input-field">
              <label>Empleados que ganan entre 2 y 3 SMLVM</label>
              <input type="number" id="emp-2y3" name="emp-2y3" required />
            </div>

            <div class="input-field">
              <label>Empleados que ganan mas de 4 SMLVM</label>
              <input type="number" id="emp-4" name="emp-4" required />
            </div>

            <div class="input-field">
              <label>Empleados que tienen afiliacion a seguridad social-arl</label>
              <input type="number" id="emp-arl" name="emp-arl" required />
            </div>

            <div class="input-field">
              <label>Empleados que tienen afiliacion a seguridad
                social-pension</label>
              <input type="number" id="emp-pen" name="emp-pen" required />
            </div>

            <div class="input-field">
              <label>Empleados que tienen afiliacion a seguridad
                social-salud</label>
              <input type="number" id="emp-sal" name="emp-sal" required />
            </div>

            <div class="input-field">
              <label>Empleados que viven en zona rural</label>
              <input type="number" id="emp-ru" name="emp-ru" required />
            </div>

            <div class="input-field">
              <label>Empleados que viven en zona urbana</label>
              <input type="number" id="emp-ur" name="emp-ur" required />
            </div>

            <div class="input-field">
              <label>Empleados con discapacidad</label>
              <input type="number" id="emp-dis" name="emp-dis" required />
            </div>
          </div>
          <div class="members-g">
            <div class="members-m">
              <span class="title">Datos de los empleados hombres</span>
              <div class="fields-m">
                <div class="input-field">
                  <label>Hombres que trabajan en la organizacion</label>
                  <input type="number" id="emp-hom" name="emp-hom" onchange="calcularMem()" required />
                </div>

                <div class="input-field">
                  <label>Hombres que representan la diversidad entre los
                    trabajadores</label>
                  <input type="number" id="emp-hdiv" name="emp-hdiv" required />
                </div>
              </div>
            </div>
            <div class="members-f">
              <span class="title">Datos de las empleadas mujeres</span>
              <div class="fields-f">
                <div class="input-field">
                  <label>Mujeres que trabajan en la organizacion</label>
                  <input type="number" id="emp-mu" name="emp-mu" readonly required />
                </div>

                <div class="input-field">
                  <label>Mujeres que representan la diversidad entre las
                    trabajadoras</label>
                  <input type="number" id="emp-mdiv" name="emp-mdiv" required />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="buttons">
          <button class="sumbit">
            <span class="btnText">Finalizar</span>
            <i class="uil uil-navigator"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="../controller/ubicacionesc.js"></script>
  <script src="../controller/transiciones.js"></script>
  <script src="../controller/validaciones.js"></script>
</body>

</html>