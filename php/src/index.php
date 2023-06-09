<?php

$host = 'db';

$user = 'user';

$pass = 'password';

$mydatabase = 'MYSQL_DATABASE';

$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->id . " " . $user->nama . " " . $user->alamat . " " . $user->jabatan;
    echo "<br>";
}

$query = "SELECT COUNT(*) as total_users FROM users";
$result = $conn->query($query);

// Ambil hasil query
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>";
        echo "Jumlah user: " . $row["total_users"];
    }
} else {
    echo "Tidak ada data user.";
}
?>