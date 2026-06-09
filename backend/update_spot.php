<?php

include "session.php";
include "config.php";

if(!isset($_SESSION['user_id'])){
    exit;
}

$user_id = $_SESSION['user_id'];

$spot_id = (int)$_POST['spot_id'];

$title = mysqli_real_escape_string(
    $conn,
    $_POST['title']
);

$category = mysqli_real_escape_string(
    $conn,
    $_POST['category']
);

$location = mysqli_real_escape_string(
    $conn,
    $_POST['location']
);

$description = mysqli_real_escape_string(
    $conn,
    $_POST['description']
);

$opening_hours = mysqli_real_escape_string(
    $conn,
    $_POST['opening_hours']
);

$price_range = mysqli_real_escape_string(
    $conn,
    $_POST['price_range']
);

$contact = mysqli_real_escape_string(
    $conn,
    $_POST['contact']
);

/* =========================
   CEK OWNER
========================= */

$check = mysqli_query(

    $conn,

    "SELECT *
     FROM spots
     WHERE id='$spot_id'
     AND created_by='$user_id'"

);

if(mysqli_num_rows($check)==0){

    die("Access denied.");

}

$spot = mysqli_fetch_assoc($check);

$image_name = $spot['image'];

$vibes_image = $spot['vibes_image'];

/* =========================
   UPDATE MAIN IMAGE
========================= */

if(

isset($_FILES['image'])

&&

$_FILES['image']['error']==0

){

    $new_image =
    time() . "_" .
    basename($_FILES['image']['name']);

    if(

        move_uploaded_file(

            $_FILES['image']['tmp_name'],

            "../uploads/" . $new_image

        )

    ){

        if(

            !empty($spot['image'])

            &&

            file_exists(
                "../uploads/" .
                $spot['image']
            )

        ){

            unlink(
                "../uploads/" .
                $spot['image']
            );

        }

        $image_name =
        $new_image;

    }

}

/* =========================
   UPDATE VIBES IMAGE
========================= */

if(

isset($_FILES['vibes_image'])

&&

$_FILES['vibes_image']['error']==0

){

    $new_vibes =
    "vibes_" .
    time() . "_" .
    basename($_FILES['vibes_image']['name']);

    if(

        move_uploaded_file(

            $_FILES['vibes_image']['tmp_name'],

            "../uploads/" . $new_vibes

        )

    ){

        if(

            !empty($spot['vibes_image'])

            &&

            file_exists(
                "../uploads/" .
                $spot['vibes_image']
            )

        ){

            unlink(
                "../uploads/" .
                $spot['vibes_image']
            );

        }

        $vibes_image =
        $new_vibes;

    }

}

/* =========================
   UPDATE DATABASE
========================= */

mysqli_query(

    $conn,

    "UPDATE spots SET

    title='$title',
    category='$category',
    location='$location',
    description='$description',
    opening_hours='$opening_hours',
    price_range='$price_range',
    contact='$contact',
    image='$image_name',
    vibes_image='$vibes_image'

    WHERE id='$spot_id'"

);

header(

"Location: ../SPOT/Detail Spot/detail_spot.php?id=$spot_id"

);

exit;

?>