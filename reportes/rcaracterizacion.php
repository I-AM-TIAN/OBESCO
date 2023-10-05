<?php
// Conexión a la base de datos (reemplaza con tus credenciales y detalles de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obesco_bdd";
$port = "3308";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos
$sql = "SELECT tipo_organizacion.tipo AS Tipo_Organizacion, COUNT(organizaciones.id_organizacion) AS Numero_de_Registros
FROM tipo_organizacion
INNER JOIN organizaciones ON tipo_organizacion.id_tipoorg = organizaciones.id_tipoorg
GROUP BY tipo_organizacion.tipo;";

$result = $conn->query($sql);

// Crear un arreglo de datos para la gráfica
$data = array();
$data[] = ['Tipo de Organización', 'Número de Registros'];

while ($row = $result->fetch_assoc()) {
    $data[] = [$row['Tipo_Organizacion'], (int)$row['Numero_de_Registros']];
}


//Grafico 2

$sql2 = "SELECT sector_economico.Sector AS Sector_Economico, COUNT(organizaciones.id_organizacion) AS Numero_de_Registros
FROM sector_economico
INNER JOIN organizaciones ON sector_economico.idsec_eco = organizaciones.id_sectoreco
GROUP BY sector_economico.Sector;";

$result2 = $conn->query($sql2);

// Crear un arreglo de datos para la gráfica
$data2 = array();
$data2[] = ['Sector Económico', 'Número de Registros'];

while ($row2 = $result2->fetch_assoc()) {
    $data2[] = [$row2['Sector_Economico'], (int)$row2['Numero_de_Registros']];
}

//Grafico 3

$sql3 = "SELECT situacion_geografica.Situacion AS Situacion, COUNT(organizaciones.id_organizacion) AS Numero_de_Registros
FROM situacion_geografica
INNER JOIN organizaciones ON situacion_geografica.idsit_geogra = organizaciones.id_situaciongeo
GROUP BY situacion_geografica.Situacion;";

$result3 = $conn->query($sql3);

// Crear un arreglo de datos para la gráfica
$data3 = array();
$data3[] = ['Situación Geográfica', 'Número de Registros'];

while ($row3 = $result3->fetch_assoc()) {
    $data3[] = [$row3['Situacion'], (int)$row3['Numero_de_Registros']];
}

//Grafico 4

$sql4 = "SELECT ubicacion_geografica.Ubicacion AS Ubicacion, COUNT(organizaciones.id_organizacion) AS Numero_de_Registros
FROM ubicacion_geografica
INNER JOIN organizaciones ON ubicacion_geografica.idubi_geo = organizaciones.idubi_geo
GROUP BY ubicacion_geografica.Ubicacion;";

$result4 = $conn->query($sql4);

// Crear un arreglo de datos para la gráfica
$data4 = array();
$data4[] = ['Ubicación geográfica', 'Número de Registros'];

while ($row4 = $result4->fetch_assoc()) {
    $data4[] = [$row4['Ubicacion'], (int)$row4['Numero_de_Registros']];
}

// Cerrar la conexión a la base de datos
$conn->close();

session_start();
require_once "../../Config/conexion.php";
$usuario = $_SESSION['id_user'];
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Incluir la biblioteca de Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="./styles/rcaracterizacion" />
</head>

<body>
    <!-- Elemento donde se dibujará la gráfica -->
    <div id="graf" class="graficosc">
        <div class= "grafico" id="grafico_1"></div>
        <div class= "grafico" id="grafico_2"></div>
        <div class= "grafico" id="grafico_3"></div>
        <div class= "grafico" id="grafico_4"></div>
    </div>
    <script type="text/javascript">
        // Cargar la biblioteca de visualización de Google Charts
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Llamar a la función drawChart cuando la biblioteca esté lista
        google.charts.setOnLoadCallback(grafico1);
        google.charts.setOnLoadCallback(grafico2);
        google.charts.setOnLoadCallback(grafico3);
        google.charts.setOnLoadCallback(grafico4);

        function grafico1() {
            // Crear un objeto DataTable de Google Charts y agregar los datos
            var data = google.visualization.arrayToDataTable(<?php echo json_encode($data); ?>);

            // Configurar las opciones de la gráfica
            var options = {
                title: 'Tipos de organizaciones registradas',
                pieHole: 0.4 // Agregar un agujero en el centro del gráfico (opcional)
            };

            // Crear la instancia de la gráfica y dibujar la gráfica circular en el elemento con el ID "chart_div"
            var chart = new google.visualization.PieChart(document.getElementById('grafico_1'));
            chart.draw(data, options);
        }

        function grafico2() {
            // Crear un objeto DataTable de Google Charts y agregar los datos
            var data2 = google.visualization.arrayToDataTable(<?php echo json_encode($data2); ?>);

            // Configurar las opciones de la gráfica
            var options = {
                title: 'Sectores económicos',
                pieHole: 0.4 // Agregar un agujero en el centro del gráfico (opcional)
            };

            // Crear la instancia de la gráfica y dibujar la gráfica circular en el elemento con el ID "chart_div"
            var chart = new google.visualization.PieChart(document.getElementById('grafico_2'));
            chart.draw(data2, options);
        }

        function grafico3() {

            var data3 = google.visualization.arrayToDataTable(<?php echo json_encode($data3); ?>);

            var options = {
                title: 'Situaciones geográficas'
            };

            var chart = new google.visualization.PieChart(document.getElementById('grafico_3'));

            chart.draw(data3, options);
        }

        function grafico4() {

            var data4 = google.visualization.arrayToDataTable(<?php echo json_encode($data4); ?>);

            var options = {
                title: 'Ubicaciones geográficas'
            };

            var chart = new google.visualization.PieChart(document.getElementById('grafico_4'));

            chart.draw(data4, options);
        }
    </script>
</body>

</html>