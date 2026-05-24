<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "website_psas"
);

if(!$conn){

    die("Connection failed");

}

$query =
"SELECT * FROM saved_spots";

$result =
mysqli_query($conn, $query);

$data = [];

while($row = mysqli_fetch_assoc($result)){

    $data[] = $row;

}

echo json_encode($data);

?>