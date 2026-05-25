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

  <!-- FONT -->
  <link
    href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500&family=Alatsi&display=swap"
    rel="stylesheet"
  >

  <!-- CSS -->
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

<!-- NAVBAR -->
<?php

$page = "article";

include "../navbar.php";

?>

<!-- ARTICLE -->
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

  <!-- CARD WRAP -->
  <div class="article-wrap">

    <!-- ARTICLE 1 -->
    <div
      class="article-card"
      data-name="Recommended Cozy Cafes in Purwokerto For Hanging Out"
    >

      <img
        src="../GAMBAR UNTUK SPOT/article1.png"
        class="article-img"
      >

      <div class="article-content">

        <p class="tag">
          Article
        </p>

        <h3>
          Recommended cozy cafes in Purwokerto for hanging out
        </h3>

        <div class="btn-wrap">

          <a href="Article_Read/article_1.php">

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
      data-name="Fun places in Purwokerto for walking around and hanging out"
    >

      <img
        src="../GAMBAR UNTUK SPOT/article2.png"
        class="article-img"
      >

      <div class="article-content">

        <p class="tag">
          Article
        </p>

        <h3>
          Fun places in Purwokerto for walking around and hanging out
        </h3>

        <div class="btn-wrap">

          <a href="Article_Read/article_2.php">

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
      data-name="Healing spots in Purwokerto with the best natural views"
    >

      <img
        src="../GAMBAR UNTUK SPOT/article3.png"
        class="article-img"
      >

      <div class="article-content">

        <p class="tag">
          Article
        </p>

        <h3>
          “Healing spots in Purwokerto with the best natural views.”
        </h3>

        <div class="btn-wrap">

          <a href="Article_Read/article_3.php">

            <button>
              Read
            </button>

          </a>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- FOOTER -->
<footer>

  <p>
    © 2026 ChillZone. All rights reserved.
  </p>

  <p>
    Create your vibe · Zone your moment · Own your experience
  </p>

</footer>

<!-- SEARCH SCRIPT -->
<script>

const searchInput =
document.getElementById("searchInput");

const articleCards =
document.querySelectorAll(".article-card");

searchInput.addEventListener("keyup", function(){

    const keyword =
    this.value.toLowerCase();

    articleCards.forEach(card => {

        const articleName =
        card.getAttribute("data-name").toLowerCase();

        if(articleName.includes(keyword)){

            card.style.display = "block";

        }

        else{

            card.style.display = "none";

        }

    });

});

</script>

</body>
</html>