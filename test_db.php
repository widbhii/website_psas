<?php

include "backend/koneksi.php";

$query =
mysqli_query(
$conn,
"SELECT COUNT(*) as total FROM users"
);

$data =
mysqli_fetch_assoc($query);

echo "Total user: " . $data['total'];

?>