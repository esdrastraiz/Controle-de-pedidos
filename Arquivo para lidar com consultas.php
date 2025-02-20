<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "PedidosDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM pedidos";
if (isset($_GET['data'])) {
    $data = $_GET['data'];
    $query .= " WHERE DATE(data_hora) = '$data'";
}

$result = $conn->query($query);

$pedidos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $pedidos[] = $row;
    }
}

echo json_encode($pedidos);

$conn->close();
?>
