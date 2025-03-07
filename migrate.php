<?php
$host = getenv("mysql.railway.internal");
$user = getenv("root");
$pass = getenv("MlwKMBhISSTHhnyCtxnOsxeKjTJfvaja");
$db   = getenv("railway");

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
