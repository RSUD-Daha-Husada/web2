<?php
header('Content-Type: application/json');
include 'koneksi.php';

// Cek apakah request adalah POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Metode request tidak valid']);
    exit;
}

// Ambil data dari form
$id = $_POST['id'];
$name = $_POST['name'];
$specialty = $_POST['specialty'];
$title = $_POST['title'];
$description = $_POST['description'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$schedule = $_POST['schedule'];

// Ambil data dokter yang ada
$sql = "SELECT image FROM doctors WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$doctor = $result->fetch_assoc();
$image = $doctor['image'];

// Handle upload gambar baru jika ada
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/doctors/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $fileName = time() . '_' . basename($_FILES['image']['name']);
    $targetPath = $uploadDir . $fileName;
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        // Hapus gambar lama jika ada
        if ($image && file_exists($image)) {
            unlink($image);
        }
        $image = $targetPath;
    }
}

// Update data di database
$sql = "UPDATE doctors SET name = ?, specialty = ?, title = ?, image = ?, description = ?, 
        phone = ?, email = ?, education = ?, experience = ?, schedule = ? WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssi", $name, $specialty, $title, $image, $description, $phone, $email, $education, $experience, $schedule, $id);

if ($stmt->execute()) {
    echo json_encode([
        'success' => true, 
        'message' => 'Data dokter berhasil diperbarui'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Gagal memperbarui data dokter: ' . $conn->error
    ]);
}

$stmt->close();
$conn->close();
?>