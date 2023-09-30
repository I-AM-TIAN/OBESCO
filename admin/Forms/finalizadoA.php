<?php
// Conexión a la base de datos (reemplaza con tus credenciales y detalles de conexión)
session_start();
require_once "../../Config/conexion.php";
$usuario = $_SESSION['id_user'];
$buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
$resultado = mysqli_fetch_array($buscar_org);
$id_org = $resultado['id_organizacion'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obesco_bdd";
$port = "3312";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos
$sql = "SELECT proms1, proms2, proms3, proms4, proms5, proms6, id_organizacion FROM asociatividad WHERE id_organizacion = $id_org";

$result = $conn->query($sql);

// Crear un arreglo de datos para la gráfica
$data = array();
$data[] = ['Section', 'Promedio'];

while ($row = $result->fetch_assoc()) {
    $i = 0;
    $data[] = [(int)$row['id_organizacion'],'Desarrollo de la asociatividad', (float)$row['proms1']];
    $data[] = [(int)$row['id_organizacion'],'Generación de trabajo, ingresos, calidad de vida', (float)$row['proms2']];
    $data[] = [(int)$row['id_organizacion'],'Capacidad de gestión empresarial', (float)$row['proms3']];
    $data[] = [(int)$row['id_organizacion'],'Capacidades de mercadeo', (float)$row['proms4']];
    $data[] = [(int)$row['id_organizacion'],'Capacidades productivas', (float)$row['proms5']];
    $data[] = [(int)$row['id_organizacion'],'Capacidades para el servicio', (float)$row['proms6']];
}


// Cerrar la conexión a la base de datos
$conn->close();

?>

<!DOCTYPE html>
<html>

<head>
    <!-- Incluir la biblioteca de Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <!-- Elemento donde se dibujará la gráfica -->
    <div id="grafico_1" style="width: 1200px; height: 400px; display: inline-block;"></div>
    <script type="text/javascript">
        // Cargar la biblioteca de visualización de Google Charts
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Llamar a la función drawChart cuando la biblioteca esté lista
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php echo json_encode($data); ?>);

            var options = {
                title: 'Indicadores de asociatividad',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('grafico_1'));

            chart.draw(data, options);
        }
    </script>
</body>

</html>