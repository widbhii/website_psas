<?php

include "config.php";

/* AMBIL DATA FORM */

$username = $_POST['username'];
$category = $_POST['category'];
$place_name = $_POST['place_name'];
$rating = $_POST['rating'];
$review_text = $_POST['review_text'];

/* VALIDASI */

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

/* INSERT KE DATABASE */

$sql = "INSERT INTO reviews
(username, category, place_name, rating, review_text)
VALUES
('$username','$category','$place_name','$rating','$review_text')";

mysqli_query($conn, $sql);

/* BERHASIL */

echo "
<script>
  alert('Review submitted successfully!');
  window.location='../REVIEW/review.html';
</script>
";

?>