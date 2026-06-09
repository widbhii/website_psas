<?php

include "session.php";
include "config.php";

/* HARUS LOGIN */

if(!isset($_SESSION['user_id'])){
    exit("Login required");
}

/* HARUS ADA SPOT ID */

if(!isset($_POST['spot_id'])){
    exit("Spot ID missing");
}

$user_id = $_SESSION['user_id'];

$spot_id = (int)$_POST['spot_id'];

/* CEK SUDAH ADA ATAU BELUM */

$check = mysqli_query(

    $conn,

    "SELECT *
     FROM saved_spots
     WHERE user_id='$user_id'
     AND spot_id='$spot_id'"

);

if(mysqli_num_rows($check) > 0){

    mysqli_query(

        $conn,

        "DELETE FROM saved_spots
         WHERE user_id='$user_id'
         AND spot_id='$spot_id'"

    );

    echo "removed";

}
else{

    mysqli_query(

        $conn,

        "INSERT INTO saved_spots
        (user_id, spot_id)

        VALUES

        ('$user_id','$spot_id')"

    );

    echo "saved";

}