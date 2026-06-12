<?php

include "../backend/session.php";
include "../backend/koneksi.php";

$query = mysqli_query(

    $conn,

    "SELECT *
     FROM articles
     ORDER BY id DESC"

);

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
Article - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="../style.css"
>

<link
rel="stylesheet"
href="article.css"
>

</head>

<body>

<?php

$page = "article";

include "../navbar.php";

?>

<section class="spots">

```
<div class="spots-top">

    <div class="category-box">

        <a
        href="article.php"
        class="active"
        >
            All Articles
        </a>

        <?php
        if(isset($_SESSION['user_id'])){
        ?>

        <a
        href="add_article.php"
        class="add-spot-menu"
        >
            + Add Article
        </a>

        <?php
        }
        ?>

    </div>

    <div class="search-box">

        <img
        src="../KEBUTUHAN ELEMENT/search.png"
        class="search-icon"
        >

        <input
        type="text"
        id="searchInput"
        placeholder="Search article..."
        >

    </div>

</div>

<div class="card-wrap">

    <?php

    while($article = mysqli_fetch_assoc($query)){

    ?>

    <div
    class="spot-card"
    data-name="<?php echo strtolower($article['title']); ?>"
    >

        <?php

        if(
        isset($_SESSION['user_id'])
        &&
        $_SESSION['user_id'] == $article['created_by']
        ){

        ?>

        <form
        class="delete-form"
        action="../backend/delete_article.php"
        method="POST"
        onsubmit="return confirm('Delete this article?')"
        >

            <input
            type="hidden"
            name="article_id"
            value="<?php echo $article['id']; ?>"
            >

            <button
            type="submit"
            class="delete-icon"
            >
                🗑
            </button>

        </form>

        <?php
        }
        ?>

        <img
        src="../uploads/<?php echo $article['image']; ?>"
        class="card-img"
        alt="<?php echo htmlspecialchars($article['title']); ?>"
        >

        <div class="card-content">

            <div class="tag">
                Article
            </div>

            <h3>

                <?php

                echo htmlspecialchars(
                    $article['title']
                );

                ?>

            </h3>

            <div class="location">

                <?php

                echo substr(

                    strip_tags(
                        $article['content']
                    ),

                    0,

                    100

                );

                ?>...

            </div>

            <div class="btn-wrap">

                <a
                href="detail_article.php?id=<?php echo $article['id']; ?>"
                >
                    <button
                    type="button"
                    >
                        Read
                    </button>
                </a>

                <?php

                if(
                isset($_SESSION['user_id'])
                &&
                $_SESSION['user_id']
                ==
                $article['created_by']
                ){

                ?>

                <a
                href="edit_article.php?id=<?php echo $article['id']; ?>"
                >
                    <button
                    type="button"
                    class="edit-card-btn"
                    >
                        Edit
                    </button>
                </a>

                <?php
                }
                ?>

            </div>

        </div>

    </div>

    <?php

    }

    ?>

</div>
```

</section>

<script>

const searchInput =
document.getElementById(
    "searchInput"
);

const cards =
document.querySelectorAll(
    ".spot-card"
);

searchInput.addEventListener(

    "keyup",

    function(){

        const keyword =
        this.value.toLowerCase();

        cards.forEach(card=>{

            const title =
            card.dataset.name;

            if(
            title.includes(keyword)
            ){

                card.style.display =
                "block";

            }

            else{

                card.style.display =
                "none";

            }

        });

    }

);

</script>

</body>
</html>