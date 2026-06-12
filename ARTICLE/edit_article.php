<?php

include "../backend/session.php";
include "../backend/koneksi.php";

if(!isset($_GET['id'])){
    die("Article not found");
}

$article_id = (int)$_GET['id'];
$user_id = $_SESSION['user_id'];

$query = mysqli_query(

    $conn,

    "SELECT *
     FROM articles
     WHERE id='$article_id'
     AND created_by='$user_id'"

);

if(mysqli_num_rows($query)==0){

    die("Article not found or access denied");

}

$article = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
Edit Article - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="edit_article.css"
>

</head>

<body>

<div class="spot-card">

    <h2 class="spot-title">
        Edit Article
    </h2>

    <p class="spot-subtitle">
        Update your article.
    </p>

    <form
    action="../backend/update_article.php"
    method="POST"
    enctype="multipart/form-data"
    >

        <input
        type="hidden"
        name="article_id"
        value="<?php echo $article['id']; ?>"
        >

        <!-- TITLE -->

        <div class="form-group">

            <label class="form-label">
                Article Title
            </label>

            <input
            type="text"
            name="title"
            class="form-input"
            value="<?php echo htmlspecialchars($article['title']); ?>"
            required
            >

        </div>

        <!-- CONTENT -->

        <div class="form-group">

            <label class="form-label">
                Article Content
            </label>

            <textarea
            name="content"
            class="form-input"
            rows="10"
            required
            ><?php echo htmlspecialchars($article['content']); ?></textarea>

        </div>

        <!-- CURRENT IMAGE -->

        <div class="form-group">

            <label class="form-label">
                Current Image
            </label>

            <img
            src="../uploads/<?php echo $article['image']; ?>"
            id="previewImage"
            class="preview-image"
            style="display:block;"
            >

        </div>

        <!-- CHANGE IMAGE -->

        <div class="form-group">

            <label class="form-label">
                Change Image
            </label>

            <input
            type="file"
            name="image"
            id="imageInput"
            class="form-input"
            accept="image/*"
            >

        </div>

        <button
        type="submit"
        class="submit-btn"
        >
            Update Article
        </button>

    </form>

</div>

<script>

const imageInput =
document.getElementById(
    "imageInput"
);

const previewImage =
document.getElementById(
    "previewImage"
);

imageInput.addEventListener(

    "change",

    function(){

        const file =
        this.files[0];

        if(file){

            previewImage.src =
            URL.createObjectURL(file);

            previewImage.style.display =
            "block";

        }

    }

);

</script>

</body>
</html>