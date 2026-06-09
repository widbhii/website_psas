<?php

include "../backend/session.php";

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

<section class="article-section">

    <!-- SEARCH -->

    <div class="search-wrap">

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

    <!-- ARTICLE CARDS -->

    <div class="article-wrap">

        <!-- ARTICLE 1 -->

        <div
        class="article-card"
        data-name="Recommended Cozy Cafes in Purwokerto For Hanging Out"
        >

            <img
            src="../uploads/article1.png"
            class="article-img"
            >

            <div class="article-content">

                <div class="tag">
                    Article
                </div>

                <h3>
                    Recommended Cozy Cafes in Purwokerto For Hanging Out
                </h3>

                <div class="btn-wrap">

                    <a
                    href="Article_Read/article_1.php"
                    >
                        <button>
                            Read
                        </button>
                    </a>

                </div>

            </div>

        </div>

        <!-- ARTICLE 2 -->

        <div
        class="article-card"
        data-name="Fun Places in Purwokerto For Walking Around and Hanging Out"
        >

            <img
            src="../uploads/article2.png"
            class="article-img"
            >

            <div class="article-content">

                <div class="tag">
                    Article
                </div>

                <h3>
                    Fun Places in Purwokerto For Walking Around and Hanging Out
                </h3>

                <div class="btn-wrap">

                    <a
                    href="Article_Read/article_2.php"
                    >
                        <button>
                            Read
                        </button>
                    </a>

                </div>

            </div>

        </div>

        <!-- ARTICLE 3 -->

        <div
        class="article-card"
        data-name="Healing Spots in Purwokerto With The Best Natural Views"
        >

            <img
            src="../uploads/article3.png"
            class="article-img"
            >

            <div class="article-content">

                <div class="tag">
                    Article
                </div>

                <h3>
                    Healing Spots in Purwokerto With The Best Natural Views
                </h3>

                <div class="btn-wrap">

                    <a
                    href="Article_Read/article_3.php"
                    >
                        <button>
                            Read
                        </button>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<footer>

    <p>
        © 2026 ChillZone. All rights reserved.
    </p>

    <p>
        Create your vibe · Zone your moment · Own your experience
    </p>

</footer>

<script>

const searchInput =
document.getElementById(
    "searchInput"
);

const articleCards =
document.querySelectorAll(
    ".article-card"
);

searchInput.addEventListener(

    "keyup",

    function(){

        const keyword =
        this.value.toLowerCase();

        articleCards.forEach(card => {

            const title =
            card.dataset.name
            .toLowerCase();

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