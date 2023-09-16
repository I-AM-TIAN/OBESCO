<?php
session_start();
require_once "../Config/conexion.php";
$usuario = $_SESSION['id_user'];
if (isset($_POST)) {
  if (!empty($_POST)) {
    //Datos del formulario de datos generales
    $nom = $_POST['nom-org'];
    $tipo_org = $_POST['tipo-org'];
    $redes = $_POST['redes'];
    $pag_web = $_POST['sitio'];
    $año_fun = $_POST['año-fun'];
    $logo = $_POST['logo-org'];
    $sector_eco = $_POST['sec-e'];
    $sit_geo = $_POST['sit-g'];
    $ubi_geo = $_POST['ubi-g'];
    $departamento = $_POST['dep'];
    $municipio = $_POST['mun'];
    $direccion = $_POST['dir'];
    $barrio = $_POST['bar'];
    $descripcion = $_POST['des'];
  }
}
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
                  echo '<option>' . $valores['tipo'] . '</option>';
                } ?>
              </select>
            </div>

            <div class="input-field">
              <label>Redes sociales(Enlace)</label>
              <input type="text" id="redes" name="redes" required />
            </div>

            <div class="input-field">
              <label>Sitio web(Enlace)</label>
              <input type="text" id="sitio" name="sitio" required />
            </div>

            <div class="input-field">
              <label>Año de fundacion</label>
              <input type="number" id="año-fun" name="año-fun" max="2023" required />
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
                  echo '<option>' . $valores['Sector'] . '</option>';
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
                  echo '<option>' . $valores['Situacion'] . '</option>';
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
                  echo '<option>' . $valores['Ubicacion'] . '</option>';
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
      <form action="">
        <div class="associates">
          <p>
            A continuacion usted va a ingresar el numero de asociados
            referente a cada pregunta
          </p>
          <span class="title">Datos de los asociados</span>
          <div class="fields">
            <div class="input-field">
              <label>total de asociados en la organizacion</label>
              <input type="number" id="to-aso" name="to-aso" required />
            </div>

            <div class="input-field">
              <label>Asociados que gana menos de 1 SMLVM</label>
              <input type="number" id="aso-1" name="aso-1" required />
            </div>

            <div class="input-field">
              <label>Asociados con discapacidad</label>
              <input type="number" id="aso-dis" name="aso-dis" required />
            </div>

            <div class="input-field">
              <label>Asociados con mas de 56 años</label>
              <input type="number" id="aso-56" name="aso-56" required />
            </div>

            <div class="input-field">
              <label>Asociados entre 18 y 28 años</label>
              <input type="number" p id="aso-18" name="aso-18" required />
            </div>

            <div class="input-field">
              <label>Asociados entre 29 y 55 años</label>
              <input type="number" id="aso-29" name="aso-29" required />
            </div>

            <div class="input-field">
              <label>Asociados que viven en estrato 1</label>
              <input type="number" id="aso-es1" name="aso-es1" required />
            </div>

            <div class="input-field">
              <label>Asociados que viven en estrato 2</label>
              <input type="number" id="aso-es2" name="aso-es2" required />
            </div>

            <div class="input-field">
              <label>Asociados que viven en estrato 3</label>
              <input type="number" id="aso-es3" name="aso-es3" required />
            </div>

            <div class="input-field">
              <label>Asociados que viven en estrato 4</label>
              <input type="number" id="aso-es4" name="aso-es4" required />
            </div>

            <div class="input-field">
              <label>Asociados que viven en estrato 5</label>
              <input type="number" id="aso-es5" name="aso-es5" required />
            </div>

            <div class="input-field">
              <label>Asociados que viven en zona rural</label>
              <input type="number" id="aso-ru" name="aso-ru" required />
            </div>

            <div class="input-field">
              <label>Asociados que viven en zona urbana</label>
              <input type="number" id="aso-ur" name="aso-ur" required />
            </div>
          </div>
          <div class="associates-g">
            <div class="associates-m">
              <span class="title">Datos de los asociados hombres</span>
              <div class="fields-m">
                <div class="input-field">
                  <label>Asociados hombres en la organizacion</label>
                  <input type="number" id="aso-hom" name="aso-hom" onchange="calcularAso()" required />
                </div>

                <div class="input-field">
                  <label>Asociados que viven en situacion de pobreza segun pobreza
                    multidimensional</label>
                  <input type="number" id="aso-po" name="aso-po" required />
                </div>

                <div class="input-field">
                  <label>Asociados que integran el consejo de
                    administracion</label>
                  <input type="number" id="aso-ad" name="aso-ad" required />
                </div>

                <div class="input-field">
                  <label>Asociados que integran la junta de vigilancia</label>
                  <input type="number" id="aso-vi" name="aso-vi" required />
                </div>

                <div class="input-field">
                  <label>Asociados que integran otros comites de la
                    organizacion</label>
                  <input type="number" id="aso-ot" name="aso-ot" required />
                </div>

                <div class="input-field">
                  <label>Hombres que representan la diversidad entre los
                    asociados</label>
                  <input type="number" id="aso-div" name="aso-div" required />
                </div>
              </div>
            </div>
            <div class="associates-f">
              <span class="title">Datos de las asociadas mujeres</span>
              <div class="fields-f">
                <div class="input-field">
                  <label>Asociadas mujeres en la organizacion</label>
                  <input type="number" id="aso-mu" name="aso-mu" readonly required />
                </div>

                <div class="input-field">
                  <label>Asociadas que viven en situacion de pobreza segun pobreza
                    multidimensional</label>
                  <input type="number" id="aso-mpo" name="aso-mpo" required />
                </div>

                <div class="input-field">
                  <label>Asociadas que integran el consejo de
                    administracion</label>
                  <input type="number" id="aso-mad" name="aso-mad" required />
                </div>

                <div class="input-field">
                  <label>Asociadas que integran la junta de vigilancia</label>
                  <input type="number" id="aso-mvi" name="aso-mvi" required />
                </div>

                <div class="input-field">
                  <label>Asociadas que integran otros comites de la
                    organizacion</label>
                  <input type="number" id="aso-mot" name="aso-mot" required />
                </div>

                <div class="input-field">
                  <label>Mujeres que representan la diversidad entre los
                    asociados</label>
                  <input type="number" id="aso-mdiv" name="aso-mdiv" required />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="buttons">
          <div class="backBtn" onclick="transitionBack()">
            <i class="uil uil-navigator"></i>
            <span class="btnText">Anterior</span>
          </div>
          <button class="nextBtn sumbit" onclick="transition()">
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
                  <input type="number" id="emp-mdiv" name="emp-mdiv" readonly required />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="buttons">
          <div class="backBtn" onclick="transitionBack()">
            <i class="uil uil-navigator"></i>
            <span class="btnText">Anterior</span>
          </div>
          <button class="sumbit">
            <span class="btnText">Finalizar</span>
            <i class="uil uil-navigator"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="../controller/ubicaciones.js"></script>
  <script src="../controller/transiciones.js"></script>
  <script src="../controller/validaciones.js"></script>
</body>

</html>