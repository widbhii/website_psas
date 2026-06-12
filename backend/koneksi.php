<?php

$conn = mysqli_connect(
    "sql312.infinityfree.com",
    "if0_42168066",
    "ChillZOne",
    "if0_42168066_chillzone"
);

if(!$conn){
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>