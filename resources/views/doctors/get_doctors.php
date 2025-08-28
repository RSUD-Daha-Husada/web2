<?php
header('Content-Type: application/json');
include 'koneksi.php';

$sql = "SELECT * FROM doctors ORDER BY name";
$result = $conn->query($sql);

$doctors = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $doctors[] = $row;
    }
}

echo json_encode($doctors);
$conn->close();
?>
