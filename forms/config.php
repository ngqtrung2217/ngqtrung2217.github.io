<?php
$host = getenv('mysql.railway.internal');
$dbname = getenv('railway');
$user = getenv('root');
$pass = getenv('MlwKMBhISSTHhnyCtxnOsxeKjTJfvaja');
$port = getenv('3306');

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối MySQL thành công!";
} catch (PDOException $e) {
    die("Lỗi kết nối: " . $e->getMessage());
}
?>
