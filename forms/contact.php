<?php
require 'config.php'; // Kết nối đến database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->execute([$name, $email]);

    echo "Dữ liệu đã được lưu!";
}
?>
