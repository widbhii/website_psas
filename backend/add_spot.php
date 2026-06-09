<?php

include "session.php";
include "koneksi.php";

if(!isset($_SESSION['user_id'])){
    header("Location: ../LOGIN_SIGNUP/Login/login.php");
    exit;
}

/* =========================
   AMBIL DATA FORM
========================= */

$title = mysqli_real_escape_string(
    $conn,
    trim($_POST['title'])
);

$category = mysqli_real_escape_string(
    $conn,
    trim($_POST['category'])
);

$location = mysqli_real_escape_string(
    $conn,
    trim($_POST['location'])
);

$description = mysqli_real_escape_string(
    $conn,
    trim($_POST['description'])
);

$opening_hours = mysqli_real_escape_string(
    $conn,
    trim($_POST['opening_hours'])
);

$price_range = mysqli_real_escape_string(
    $conn,
    trim($_POST['price_range'])
);

$contact = mysqli_real_escape_string(
    $conn,
    trim($_POST['contact'])
);

$user_id = $_SESSION['user_id'];

/* =========================
   VALIDASI
========================= */

if(

    empty($title)

    ||

    empty($category)

    ||

    empty($location)

    ||

    empty($description)

){

    die("Semua data wajib diisi.");

}

/* =========================
   VALIDASI GAMBAR UTAMA
========================= */

if(

    !isset($_FILES['image'])

    ||

    $_FILES['image']['error'] != 0

){

    die("Main image wajib diupload.");

}

$allowed = [

    "jpg",
    "jpeg",
    "png",
    "webp"

];

/* =========================
   MAIN IMAGE
========================= */

$main_ext = strtolower(

    pathinfo(

        $_FILES['image']['name'],

        PATHINFO_EXTENSION

    )

);

if(

    !in_array(
        $main_ext,
        $allowed
    )

){

    die("Format gambar utama tidak valid.");

}

$main_image =

    time()

    . "_"

    . rand(1000,9999)

    . "."

    . $main_ext;

move_uploaded_file(

    $_FILES['image']['tmp_name'],

    "../uploads/" . $main_image

);

/* =========================
   VIBES IMAGE
========================= */

$vibes_image = "";

if(

    isset($_FILES['vibes_image'])

    &&

    $_FILES['vibes_image']['error'] == 0

){

    $vibes_ext = strtolower(

        pathinfo(

            $_FILES['vibes_image']['name'],

            PATHINFO_EXTENSION

        )

    );

    if(

        in_array(
            $vibes_ext,
            $allowed
        )

    ){

        $vibes_image =

            "vibes_"

            . time()

            . "_"

            . rand(1000,9999)

            . "."

            . $vibes_ext;

        move_uploaded_file(

            $_FILES['vibes_image']['tmp_name'],

            "../uploads/" . $vibes_image

        );

    }

}

/* =========================
   INSERT DATABASE
========================= */

$sql = "

INSERT INTO spots(

title,
category,
location,
description,
image,
opening_hours,
price_range,
contact,
vibes_image,
created_by

)

VALUES(

'$title',
'$category',
'$location',
'$description',
'$main_image',
'$opening_hours',
'$price_range',
'$contact',
'$vibes_image',
'$user_id'

)

";

$result = mysqli_query(
    $conn,
    $sql
);

if($result){

    header(
        "Location: ../SPOT/Rekomendasi_Spot/spot_rekomendasi.php"
    );

    exit;

}

die(
    mysqli_error($conn)
);

?>