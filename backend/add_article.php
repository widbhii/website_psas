<?php

include "session.php";
include "koneksi.php";

$title =
mysqli_real_escape_string(
$conn,
trim($_POST['title'])
);

$content =
mysqli_real_escape_string(
$conn,
trim($_POST['content'])
);

$user_id =
$_SESSION['user_id'];

if(

empty($title)

||

empty($content)

){

    echo "

    <script>

    alert('Semua data wajib diisi!');

    window.history.back();

    </script>

    ";

    exit;

}

/* UPLOAD IMAGE */

$imageName =
$_FILES['image']['name'];

$tmpName =
$_FILES['image']['tmp_name'];

$error =
$_FILES['image']['error'];

if($error != 0){

    die("Upload image failed");

}

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

    die("Invalid image format");

}

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

move_uploaded_file(

$tmpName,

"../uploads/" .
$newImageName

);

/* INSERT */

mysqli_query(

$conn,

"INSERT INTO articles(

title,
content,
image,
created_by

)

VALUES(

'$title',
'$content',
'$newImageName',
'$user_id'

)"

);

header(

"Location: ../ARTICLE/article.php"

);

exit;

?>