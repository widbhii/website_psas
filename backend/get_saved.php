<?php

include "config.php";

$user_id = 1;

$query = mysqli_query($conn, "

SELECT 
saved_content.id,
spots.title,
spots.category,
spots.location,
spots.image

FROM saved_content

JOIN spots
ON saved_content.spot_id = spots.id

WHERE saved_content.user_id = '$user_id'

ORDER BY saved_content.id DESC

");

$data = [];

while($row = mysqli_fetch_assoc($query)){

    $data[] = $row;

}

echo json_encode($data);

?>