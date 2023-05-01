<?php
// Koneksi ke database
$host = 'db';

$user = 'user';

$pass = 'password';

$mydatabase = 'MYSQL_DATABASE';

$conn = new mysqli($host, $user, $pass, $mydatabase);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menghitung jumlah user
$query = "SELECT COUNT(*) as total_users FROM users";
$result = $conn->query($query);

// Ambil hasil query
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Jumlah user: " . $row["total_users"];
    }
} else {
    echo "Tidak ada data user.";
}

// Tutup koneksi database
$conn->close();
?>