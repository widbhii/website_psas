<?php

include "session.php";
include "koneksi.php";

/* =========================
   AMBIL DATA FORM
========================= */

$title =
trim($_POST['title']);

$category =
trim($_POST['category']);

$location =
trim($_POST['location']);

$description =
trim($_POST['description']);

$user_id =
$_SESSION['user_id'];

/* =========================
   VALIDASI
========================= */

if(

empty($title) ||

empty($category) ||

empty($location) ||

empty($description)

){

    echo "

    <script>

    alert('Semua data wajib diisi!');

    window.history.back();

    </script>

    ";

    exit;

}

/* =========================
   UPLOAD IMAGE
========================= */

$imageName =
$_FILES['image']['name'];

$tmpName =
$_FILES['image']['tmp_name'];

$error =
$_FILES['image']['error'];

if($error !== 0){

    echo "

    <script>

    alert('Gagal upload gambar!');

    window.history.back();

    </script>

    ";

    exit;

}

/* EXTENSION */

$extension =
strtolower(

pathinfo(
$imageName,
PATHINFO_EXTENSION
)

);

$allowed = [

'jpg',
'jpeg',
'png',
'webp'

];

if(

!in_array(
$extension,
$allowed
)

){

    echo "

    <script>

    alert('Format gambar harus JPG, PNG atau WEBP!');

    window.history.back();

    </script>

    ";

    exit;

}

/* NAMA BARU */

$newImageName =

time()

.

"_"

.

rand(1000,9999)

.

"."

.

$extension;

/* PATH */

$uploadPath =

"../uploads/"

.

$newImageName;

/* MOVE FILE */

move_uploaded_file(

$tmpName,

$uploadPath

);

/* =========================
   INSERT DATABASE
========================= */

$sql =

"INSERT INTO spots(

title,
category,
location,
description,
image,
created_by

)

VALUES(

'$title',
'$category',
'$location',
'$description',
'$newImageName',
'$user_id'

)";

$result =
mysqli_query(
$conn,
$sql
);

/* =========================
   SUCCESS
========================= */

if($result){

    echo "

    <script>

    alert('Spot berhasil ditambahkan!');

    window.location='../SPOT/Rekomendasi_Spot/spot_rekomendasi.php';

    </script>

    ";

}

else{

    echo "

    <script>

    alert('Gagal menambahkan spot!');

    window.history.back();

    </script>

    ";

}

?>