<?php

$conn = mysqli_connect(

    "sql312.infinityfree.com",
    "if0_42168066",
    "ChillZOne",
    "if0_42168066_chillzone"

);

if(!$conn){

    die(
        "Connection failed: " .
        mysqli_connect_error()
    );

}

?>