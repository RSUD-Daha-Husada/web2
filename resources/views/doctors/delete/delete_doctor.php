<?php
header('Content-Type: application/json');
include 'koneksi.php';

// Cek apakah request adalah POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Metode request tidak valid']);
    exit;
}

$id = $_POST['id'];

// Ambil data dokter untuk mendapatkan path gambar
$sql = "SELECT image FROM doctors WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$doctor = $result->fetch_assoc();

// Hapus gambar jika ada
if ($doctor && $doctor['image'] && file_exists($doctor['image'])) {
    unlink($doctor['image']);
}

// Hapus data dari database
$sql = "DELETE FROM doctors WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode([
        'success' => true, 
        'message' => 'Dokter berhasil dihapus'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Gagal menghapus dokter: ' . $conn->error
    ]);
}

$stmt->close();
$conn->close();
?>