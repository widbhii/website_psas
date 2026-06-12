<?php

include "session.php";
include "koneksi.php";

$id =
(int)$_POST['article_id'];

$query =
mysqli_query(

$conn,

"SELECT image
FROM articles
WHERE id='$id'"

);

$data =
mysqli_fetch_assoc($query);

if(

!empty($data['image'])

&&

file_exists(
"../uploads/".$data['image']
)

){

unlink(
"../uploads/".$data['image']
);

}

mysqli_query(

$conn,

"DELETE FROM articles
WHERE id='$id'"

);

header(
"Location: ../ARTICLE/article.php"
);

exit;