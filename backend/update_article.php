<?php

include "session.php";
include "koneksi.php";

$id =
(int)$_POST['id'];

$title =
mysqli_real_escape_string(
$conn,
$_POST['title']
);

$content =
mysqli_real_escape_string(
$conn,
$_POST['content']
);

$excerpt =
mysqli_real_escape_string(
$conn,
$_POST['excerpt']
);

$category =
mysqli_real_escape_string(
$conn,
$_POST['category']
);

$query =
mysqli_query(

$conn,

"SELECT *
FROM articles
WHERE id='$id'"

);

$data =
mysqli_fetch_assoc($query);

$image =
$data['image'];

if(

isset($_FILES['image'])

&&

$_FILES['image']['error']==0

){

$newImage =

time()

."_"

.$_FILES['image']['name'];

move_uploaded_file(

$_FILES['image']['tmp_name'],

"../uploads/".$newImage

);

$image =
$newImage;

}

mysqli_query(

$conn,

"UPDATE articles SET

title='$title',
content='$content',
excerpt='$excerpt',
category='$category',
image='$image'

WHERE id='$id'"

);

header(
"Location: ../ARTICLE/article.php"
);

exit;