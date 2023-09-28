<?php
require_once('../db/conexion.php');

$sql = "SELECT * FROM organizaciones";
$query = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general.css" />
    <link rel="stylesheet" href="../styles/directorio.css" />
    <title>Document</title>
</head>

<body>
    <?php
    include("../template/nav.php");
    ?>

    <div class="main-container">
        <?php
        include("../template/options.php");
        ?>
        <div class="container-cards">
            <?php
            while ($row = mysqli_fetch_array($query)) {
                // Obtener el id_tipoorg de la organización actual
                $id_tipoorg = $row['id_tipoorg'];

                // Consultar la tabla tipo_organizacion para obtener el nombre del tipo
                $sql_tipo = "SELECT tipo FROM tipo_organizacion WHERE id_tipoorg = $id_tipoorg";
                $query_tipo = mysqli_query($conexion, $sql_tipo);
                $row_tipo = mysqli_fetch_array($query_tipo);

                // Obtener el id_sectoreco de la organización actual
                $id_sectoreco = $row['id_sectoreco'];

                // Consultar la tabla sector_economico para obtener el nombre del tipo
                $sql_tipo1 = "SELECT Sector FROM sector_economico WHERE idsec_eco = $id_sectoreco";
                $query_tipo1 = mysqli_query($conexion, $sql_tipo1);
                $row_tipo1 = mysqli_fetch_array($query_tipo1);
            ?>
                <div id="card" class="card">
                    <img src="../images/Logo-directorio.jpg" alt="">
                    <hr>
                    <h4><?php echo $row['nombre'] . "<br>"; ?></h4>
                    <h4><?php echo $row['Año_fundacion'] . "<br>"; ?></h4>
                    <hr>
                    <p class="redes"><?php echo $row['redes_sociales'] . "<br>"; ?></p>
                    <hr>
                    <p><?php echo $row_tipo['tipo'] . "<br>"; ?></p>
                    <p><?php echo $row_tipo1['Sector'] . "<br>"; ?></p>
                    <hr>
                    <p class="descripcion"><?php echo $row['Descripcion'] . "<br>"; ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    include("../template/footer.php");
    ?>
</body>
<script>
    var currentPage = window.location.pathname.split('/').pop();
    if (currentPage === 'directorio.php') {

        var liElement = document.querySelector('.list_inside a[href="./pages/directorio.php"]').closest('.list_inside');

        if (liElement) {
            liElement.style.display = 'none';
        }
    }
</script>


</html>