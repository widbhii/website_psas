<?php

session_start();

include "config.php";

/* =========================
   CEK LOGIN
========================= */

if(!isset($_SESSION['user_id'])){

    exit;

}

$user_id =
$_SESSION['user_id'];

$spot_id =
$_POST['spot_id'];

/* =========================
   AMBIL DATA SPOT
========================= */

$query = mysqli_query(

    $conn,

    "SELECT *
    FROM spots

    WHERE id='$spot_id'

    AND created_by='$user_id'"

);

if(mysqli_num_rows($query) == 0){

    exit;

}

$spot =
mysqli_fetch_assoc($query);

/* =========================
   HAPUS REVIEW
========================= */

mysqli_query(

    $conn,

    "DELETE FROM reviews

    WHERE spot_id='$spot_id'"

);

/* =========================
   HAPUS GAMBAR
========================= */

$imagePath =

"../uploads/"

.

$spot['image'];

if(

    !empty($spot['image'])

    &&

    file_exists($imagePath)

){

    unlink($imagePath);

}

/* =========================
   HAPUS SPOT
========================= */

mysqli_query(

    $conn,

    "DELETE FROM spots

    WHERE id='$spot_id'

    AND created_by='$user_id'"

);

/* =========================
   REDIRECT
========================= */

header(

"Location: ../SPOT/Rekomendasi_Spot/spot_rekomendasi.php"

);

exit;

?>