<?php
include('../template/dashboard.php');
$usuario = $_SESSION['id_user'];
$buscar_org = mysqli_query($conexion, "SELECT id_organizacion FROM organizaciones WHERE id_usuario=$usuario");
$resultado = mysqli_fetch_array($buscar_org);
$id_org = $resultado['id_organizacion'];
// Conexión a la base de datos (reemplaza con tus credenciales y detalles de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obesco";
$port = "3308";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos
$sql = "SELECT totalasohom,totalasamuj FROM caracterizacion where id_organizacion = $id_org;";

$result = $conn->query($sql);

// Crear un arreglo de datos para la gráfica
$data = array();
$data[] = ['Género', 'Total de asociados'];

while ($row = $result->fetch_assoc()) {
    $data[] = ['Hombres', (int)$row['totalasohom']];
    $data[] = ['Mujeres', (int)$row['totalasamuj']];
}


//Grafico 2

$sql2 = "SELECT empleadoshom,empleadosmuj FROM caracterizacion where id_organizacion = $id_org;";
$result2 = $conn->query($sql2);

// Crear un arreglo de datos para la gráfica
$data2 = array();
$data2[] = ['Género', 'Total de empleados'];

while ($row = $result2->fetch_assoc()) {
    $data2[] = ['Hombres', (int)$row['empleadoshom']];
    $data2[] = ['Mujeres', (int)$row['empleadosmuj']];
}


//Grafico 3

$sql3 = "SELECT asociadoses1, asociadoses2, asociadoses3, asociadoses4 FROM caracterizacion where id_organizacion = $id_org";

$result3 = $conn->query($sql3);

// Crear un arreglo de datos para la gráfica
$data3 = array();
$data3[] = ['Estrato', 'Total de asociados'];

while ($row3 = $result3->fetch_assoc()) {
    $data3[] = ['Estrato 1', (int)$row3['asociadoses1']];
    $data3[] = ['Estrato 2', (int)$row3['asociadoses2']];
    $data3[] = ['Estrato 3', (int)$row3['asociadoses3']];
    $data3[] = ['Estrato 4', (int)$row3['asociadoses4']];
}

//Grafico 4

$sql4 = "SELECT empleados1s, empleados12s, empleados23s, empleados4s FROM caracterizacion WHERE id_organizacion = $id_org";

$result4 = $conn->query($sql4);

// Crear un arreglo de datos para la gráfica
$data4 = array();
$data4[] = ['SLMLV', 'Total de empleados'];

while ($row4 = $result4->fetch_assoc()) {
    $data4[] = ['1 SMLV', (int)$row4['empleados1s']];
    $data4[] = ['1-2 SMLV', (int)$row4['empleados12s']];
    $data4[] = ['23 SMLV', (int)$row4['empleados23s']];
    $data4[] = ['4 SMLV', (int)$row4['empleados4s']];
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/caracterizacion.css">
    <link rel="stylesheet" href="../styles/finalizado.css">
    <!-- Incluir la biblioteca de Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
</head>

<body>
    <!-- Elemento donde se dibujará la gráfica -->
    <div class="graficos">
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
                title: 'Equidad de género en los asociados',
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
                title: 'Equidad de género en los empleados',
                pieHole: 0.4 // Agregar un agujero en el centro del gráfico (opcional)
            };

            // Crear la instancia de la gráfica y dibujar la gráfica circular en el elemento con el ID "chart_div"
            var chart = new google.visualization.PieChart(document.getElementById('grafico_2'));
            chart.draw(data2, options);
        }

        function grafico3() {

            var data3 = google.visualization.arrayToDataTable(<?php echo json_encode($data3); ?>);

            var options = {
                title: 'Estratificación de los asociados'
            };

            var chart = new google.visualization.PieChart(document.getElementById('grafico_3'));

            chart.draw(data3, options);
        }

        function grafico4() {

            var data4 = google.visualization.arrayToDataTable(<?php echo json_encode($data4); ?>);

            var options = {
                title: 'Equidad salarial'
            };

            var chart = new google.visualization.PieChart(document.getElementById('grafico_4'));

            chart.draw(data4, options);
        }
    </script>
</body>

</html>