<?php

include "../backend/session.php";
include "../backend/koneksi.php";

if(!isset($_GET['id'])){

    die("Article not found");

}

$article_id = (int)$_GET['id'];

$query = mysqli_query(

    $conn,

    "SELECT *
     FROM articles
     WHERE id='$article_id'"

);

if(mysqli_num_rows($query) == 0){

    die("Article not found");

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
<?php echo htmlspecialchars($article['title']); ?>
</title>

<link
href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="../style.css"
>

<link
rel="stylesheet"
href="detail_article.css"
>

</head>

<body>

<?php

$page = "article";

include "../navbar.php";

?>

<section class="article-section">

    <!-- TITLE -->

    <div class="article-title-box">

        <h1>

            <?php

            echo htmlspecialchars(
                $article['title']
            );

            ?>

        </h1>

    </div>

    <!-- LINE -->

    <div class="article-line"></div>

    <!-- IMAGE -->

    <div class="article-image-wrap">

        <img
        src="../uploads/<?php echo $article['image']; ?>"
        class="article-image"
        alt="<?php echo htmlspecialchars($article['title']); ?>"
        >

    </div>

    <!-- CONTENT -->

    <div class="article-content">

        <p>

            <?php

            echo nl2br(

                htmlspecialchars(
                    $article['content']
                )

            );

            ?>

        </p>

        <!-- BACK BUTTON -->

        <a
        href="article.php"
        class="back-btn"
        >
            ← Back to Articles
        </a>

    </div>

</section>

<footer>

    <p>
        © 2026 ChillZone.
        All rights reserved.
    </p>

    <p>
        Create your vibe ·
        Zone your moment ·
        Own your experience
    </p>

</footer>

</body>
</html>