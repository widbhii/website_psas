<?php

include "config.php";

/* AMBIL REVIEW TERBARU */

$sql = "SELECT * FROM reviews
ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);

$reviews = [];

/* LOOP DATA */

while($row = mysqli_fetch_assoc($result)){

    $reviews[] = $row;

}

/* KIRIM JSON */

echo json_encode($reviews);

?>