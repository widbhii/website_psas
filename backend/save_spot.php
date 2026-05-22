<?php

include "config.php";

if(isset($_POST['spot_id'])){

    $spot_id = $_POST['spot_id'];

    // sementara pakai user id 1 dulu
    $user_id = 1;

    // cek apakah sudah ada
    $check = mysqli_query($conn,
    "SELECT * FROM saved_content
    WHERE user_id='$user_id'
    AND spot_id='$spot_id'");

    if(mysqli_num_rows($check) > 0){

        echo "already";

    } else {

        $insert = mysqli_query($conn,
        "INSERT INTO saved_content(user_id, spot_id)
        VALUES('$user_id','$spot_id')");

        if($insert){

            echo "saved";

        } else {

            echo "error";

        }

    }

} else {

    echo "no spot id";

}
?>