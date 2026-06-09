<?php

include "session.php";
include "config.php";

header('Content-Type: application/json');

if(!isset($_SESSION['user_id'])){
    echo json_encode([]);
    exit();
}

$user_id = $_SESSION['user_id'];

$query = mysqli_query(

    $conn,

    "SELECT

        spots.id,
        spots.title,
        spots.location,
        spots.category,
        spots.image

    FROM saved_spots

    INNER JOIN spots

    ON saved_spots.spot_id = spots.id

    WHERE saved_spots.user_id = '$user_id'

    ORDER BY spots.title ASC"

);

$data = [];

while($row = mysqli_fetch_assoc($query)){

    $data[] = [

        "spot_id"   => $row['id'],

        "spot_name" => $row['title'],

        "location"  => $row['location'],

        "category"  => $row['category'],

        "spot_image" => "/website_psas/uploads/" . $row['image']

    ];

}

echo json_encode($data);