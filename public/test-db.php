<?php
// public/test-db.php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=klinik_laravel', 'root', '');
    echo "Database connection successful!<br>";
    
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM doctors");
    $result = $stmt->fetch();
    echo "Doctors count: " . $result['count'] . "<br>";
    
    if ($_POST) {
        $stmt = $pdo->prepare("INSERT INTO doctors (name, specialty, title, description, phone, email, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW())");
        $stmt->execute([$_POST['name'], $_POST['specialty'], $_POST['title'], $_POST['description'], $_POST['phone'], $_POST['email']]);
        echo "Doctor inserted successfully!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Nama" required><br>
    <input type="text" name="specialty" placeholder="Spesialisasi" required><br>
    <input type="text" name="title" placeholder="Jabatan" required><br>
    <textarea name="description" placeholder="Deskripsi" required></textarea><br>
    <input type="text" name="phone" placeholder="Telepon" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit">Submit</button>
</form>