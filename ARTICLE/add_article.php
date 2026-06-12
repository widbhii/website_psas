<?php

include "../backend/session.php";
include "../backend/config.php";

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
Add Article - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="add_article.css"
>

</head>

<body>

<div class="spot-card">

    <h2 class="spot-title">
        Add Article
    </h2>

    <p class="spot-subtitle">
        Share your article with ChillZone.
    </p>

    <form
    action="../backend/add_article.php"
    method="POST"
    enctype="multipart/form-data"
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
            placeholder="Enter article title..."
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

            placeholder="Write your article here..."

            required

            ></textarea>

        </div>

        <!-- IMAGE -->

        <div class="form-group">

            <label class="form-label">
                Article Image
            </label>

            <input
            type="file"
            name="image"
            id="imageInput"
            class="form-input"
            accept="image/*"
            required
            >

            <img
            id="previewImage"
            class="preview-image"
            >

        </div>

        <button
        type="submit"
        class="submit-btn"
        >
            Add Article
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