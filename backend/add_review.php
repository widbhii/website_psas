<?php

session_start();

include "config.php";

/* =========================
   CEK LOGIN
========================= */

if (!isset($_SESSION['user_id'])) {

    echo "
    <script>
        alert('Please login first!');
        window.location='../LOGIN_SIGNUP/Login/login.php';
    </script>
    ";

    exit;
}

/* =========================
   AMBIL DATA SESSION
========================= */

$user_id = $_SESSION['user_id'];

/* =========================
   AMBIL DATA FORM
========================= */

$place_name = trim($_POST['place_name']);
$rating = trim($_POST['rating']);
$review_text = trim($_POST['review_text']);

/* =========================
   VALIDASI
========================= */

if (
    empty($place_name) ||
    empty($rating) ||
    empty($review_text)
) {

    echo "
    <script>
        alert('All fields must be filled!');
        window.history.back();
    </script>
    ";

    exit;
}

/* =========================
   CARI SPOT BERDASARKAN TITLE
========================= */

$spotQuery = mysqli_query(
    $conn,
    "SELECT id FROM spots WHERE title='$place_name'"
);

if (mysqli_num_rows($spotQuery) == 0) {

    echo "
    <script>
        alert('Place not found!');
        window.history.back();
    </script>
    ";

    exit;
}

$spotData = mysqli_fetch_assoc($spotQuery);

$spot_id = $spotData['id'];

/* =========================
   INSERT REVIEW
========================= */

$sql = "

INSERT INTO reviews(

spot_id,
user_id,
rating,
comment

)

VALUES(

'$spot_id',
'$user_id',
'$rating',
'$review_text'

)

";

$result = mysqli_query($conn, $sql);

if (!$result) {

    die(mysqli_error($conn));
}

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