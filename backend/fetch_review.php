<?php

include "config.php";

$sql = "

SELECT

reviews.id,
reviews.user_id,
reviews.rating,
reviews.comment,
reviews.created_at,

users.username,

spots.title AS place_name

FROM reviews

JOIN users
ON reviews.user_id = users.id

JOIN spots
ON reviews.spot_id = spots.id

ORDER BY reviews.created_at DESC

";

$result = mysqli_query($conn, $sql);

$reviews = [];

while($row = mysqli_fetch_assoc($result)){

    $reviews[] = [

        "id" => $row["id"],
        "user_id" => $row["user_id"],
        "username" => $row["username"],
        "place_name" => $row["place_name"],
        "rating" => $row["rating"],
        "review_text" => $row["comment"],
        "created_at" => $row["created_at"]

    ];

}

header("Content-Type: application/json");

echo json_encode($reviews);

?>