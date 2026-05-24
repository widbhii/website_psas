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

/* DATA */

$spot_id =
$_POST['spot_id'];

$spot_name =
$_POST['spot_name'];

$spot_image =
$_POST['spot_image'];

$location =
$_POST['location'];

$category =
$_POST['category'];

/* CEK DUPLIKAT */

$check =
mysqli_query(
    $conn,
    "SELECT * FROM saved_spots
     WHERE spot_id='$spot_id'"
);

if(mysqli_num_rows($check) > 0){

    echo "already";

}

else{

    $query =
    "INSERT INTO saved_spots
    (
      spot_id,
      spot_name,
      spot_image,
      location,
      category
    )

    VALUES
    (
      '$spot_id',
      '$spot_name',
      '$spot_image',
      '$location',
      '$category'
    )";

    if(mysqli_query($conn, $query)){

        echo "saved";

    }

    else{

        echo "failed";

    }

}

?>