<?php

session_start();

include "config.php";

if(!isset($_SESSION['user_id'])){

    exit;

}

$review_id = $_POST['review_id'];

$user_id = $_SESSION['user_id'];

$sql = "

DELETE FROM reviews

WHERE id='$review_id'

AND user_id='$user_id'

";

mysqli_query($conn, $sql);

header(
"Location: ../REVIEW/review.php"
);

exit;

?>