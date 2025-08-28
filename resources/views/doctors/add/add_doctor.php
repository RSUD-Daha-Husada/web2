<?php
header('Content-Type: application/json');
include 'koneksi.php';

// Cek apakah request adalah POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Metode request tidak valid']);
    exit;
}

// Ambil data dari form
$name = $_POST['name'];
$specialty = $_POST['specialty'];
$title = $_POST['title'];
$description = $_POST['description'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$schedule = $_POST['schedule'];

// Handle upload gambar
$image = "";
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/doctors/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $fileName = time() . '_' . basename($_FILES['image']['name']);
    $targetPath = $uploadDir . $fileName;
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        $image = $targetPath;
    }
}

// Insert data ke database
$sql = "INSERT INTO doctors (name, specialty, title, image, description, phone, email, education, experience, schedule) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $name, $specialty, $title, $image, $description, $phone, $email, $education, $experience, $schedule);

if ($stmt->execute()) {
    $newId = $conn->insert_id;
    echo json_encode([
        'success' => true, 
        'message' => 'Dokter berhasil ditambahkan',
        'id' => $newId
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Gagal menambahkan dokter: ' . $conn->error
    ]);
}

$stmt->close();
$conn->close();
?>
