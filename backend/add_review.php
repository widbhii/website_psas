<?php

session_start();

include "config.php";

/* =========================
   AMBIL DATA SESSION
========================= */

$user_id =
$_SESSION['user_id'];

/* =========================
   AMBIL DATA FORM
========================= */

$username =
$_POST['username'];

$category =
$_POST['category'];

$place_name =
$_POST['place_name'];

$rating =
$_POST['rating'];

$review_text =
$_POST['review_text'];

/* =========================
   VALIDASI
========================= */

if(

    empty($username) ||
    empty($category) ||
    empty($place_name) ||
    empty($rating) ||
    empty($review_text)

){

    echo "

    <script>

      alert('All fields must be filled!');

      window.history.back();

    </script>

    ";

    exit;
}

/* =========================
   INSERT DATABASE
========================= */

$sql = "

INSERT INTO reviews(

user_id,
username,
category,
place_name,
rating,
review_text

)

VALUES(

'$user_id',
'$username',
'$category',
'$place_name',
'$rating',
'$review_text'

)

";

/* JALANKAN */

mysqli_query($conn, $sql);

/* =========================
   BERHASIL
========================= */

echo "

<script>

  alert('Review submitted successfully!');

  window.location='../REVIEW/review.php';

</script>

";

?>