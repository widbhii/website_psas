<?php

session_start();

include "config.php";

/* CEK LOGIN */

if(!isset($_SESSION['email'])){

    echo json_encode([]);
    exit;

}

/* EMAIL LOGIN */

$email = $_SESSION['email'];

/* QUERY */

$sql = "SELECT * FROM saved_content
WHERE email='$email'

ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

/* ARRAY */

$data = [];

while($row = mysqli_fetch_assoc($result)){

    $data[] = $row;

}

/* JSON */

echo json_encode($data);

?>