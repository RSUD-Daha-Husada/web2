<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Metode permintaan tidak valid']);
    exit;
}

// ambil data
$fields = ['name','title','specialty','description','phone','email','education','experience','schedule'];
foreach ($fields as $f) {
    if (empty($_POST[$f])) {
        http_response_code(422);
        echo json_encode(['error' => "$f wajib diisi"]);
        exit;
    }
}

// foto opsional
$image = '';
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    $fileName = time() . '_' . basename($_FILES['image']['name']);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        $image = $targetFile;
    }
}

try {
    $sql = "INSERT INTO doctors 
            (name, title, specialty, description, phone, email, education, experience, schedule, image)
            VALUES (:name, :title, :specialty, :description, :phone, :email, :education, :experience, :schedule, :image)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name'       => $_POST['name'],
        ':title'      => $_POST['title'],
        ':specialty'  => $_POST['specialty'],
        ':description'=> $_POST['description'],
        ':phone'      => $_POST['phone'],
        ':email'      => $_POST['email'],
        ':education'  => $_POST['education'],
        ':experience' => $_POST['experience'],
        ':schedule'   => $_POST['schedule'],
        ':image'      => $image
    ]);

    echo json_encode(['success' => true, 'id' => $pdo->lastInsertId()]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>