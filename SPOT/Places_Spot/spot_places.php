<?php

include "../../backend/session.php";

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
    Places Spots - ChillZone
  </title>

  <!-- FONT -->
  <link
    href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500&family=Alatsi&display=swap"
    rel="stylesheet"
  >

  <!-- CSS -->
  <link
    rel="stylesheet"
    href="../../style.css"
  >

  <link
    rel="stylesheet"
    href="spot_places.css"
  >

</head>

<body>

<!-- NAVBAR -->
<?php

$page = "spots";

include "../../navbar.php";

?>

<!-- SPOTS -->
<section class="spots">

  <!-- TOP -->
  <div class="spots-top">

    <!-- CATEGORY -->
    <div class="category-box">

      <a href="../Nature_Spot/spot_nature.php">
        Nature
      </a>

      <a href="../Coffee_Spot/spot_coffee.php">
        Coffee
      </a>

      <a
        href="spot_places.php"
        class="active"
      >
        Places
      </a>

    </div>

    <!-- SEARCH -->
    <div class="search-box">

      <img
        src="../../KEBUTUHAN ELEMENT/search.png"
        class="search-icon"
      >

      <input
        type="text"
        placeholder="Search places..."
        id="searchInput"
      >

    </div>

  </div>

  <!-- CARD WRAP -->
  <div class="card-wrap">

    <!-- CARD 1 -->
    <div
      class="spot-card"

      data-id="P1"

      data-name="Rita Supermall"

      data-image="../../GAMBAR UNTUK SPOT/rita-supermall.png"

      data-location="Purwokerto Timur"

      data-category="Places"
    >

      <input type="checkbox" id="save1" class="save-toggle">

      <label for="save1" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/rita-supermall.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Rita Supermall
        </h3>

        <div class="location">
          Purwokerto Timur
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P1">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 2 -->
    <div
      class="spot-card"

      data-id="P2"

      data-name="Menara Pandang Teratai"

      data-image="../../GAMBAR UNTUK SPOT/menara.png"

      data-location="Purwokerto Timur"

      data-category="Places"
    >

      <input type="checkbox" id="save2" class="save-toggle">

      <label for="save2" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/menara.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Menara Pandang Teratai
        </h3>

        <div class="location">
          Purwokerto Timur
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P2">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 3 -->
    <div
      class="spot-card"

      data-id="P3"

      data-name="Bayan Village & Cafe"

      data-image="../../GAMBAR UNTUK SPOT/bayan-village.png"

      data-location="Baturraden"

      data-category="Places"
    >

      <input type="checkbox" id="save3" class="save-toggle">

      <label for="save3" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/bayan-village.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Bayan Village & Cafe
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P3">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 4 -->
    <div
      class="spot-card"

      data-id="P4"

      data-name="The Village"

      data-image="../../GAMBAR UNTUK SPOT/the-village.png"

      data-location="Baturraden"

      data-category="Places"
    >

      <input type="checkbox" id="save4" class="save-toggle">

      <label for="save4" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/the-village.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          The Village
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P4">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 5 -->
    <div
      class="spot-card"

      data-id="P5"

      data-name="Small World"

      data-image="../../GAMBAR UNTUK SPOT/small.png"

      data-location="Baturraden"

      data-category="Places"
    >

      <input type="checkbox" id="save5" class="save-toggle">

      <label for="save5" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/small.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Small World
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P5">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 6 -->
    <div
      class="spot-card"

      data-id="P6"

      data-name="The Forest Island"

      data-image="../../GAMBAR UNTUK SPOT/the-forest.png"

      data-location="Baturraden"

      data-category="Places"
    >

      <input type="checkbox" id="save6" class="save-toggle">

      <label for="save6" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/the-forest.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          The Forest Island
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P6">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 7 -->
    <div
      class="spot-card"

      data-id="P7"

      data-name="Arcelio Aquapark"

      data-image="../../GAMBAR UNTUK SPOT/arcelio.png"

      data-location="Purwokerto Utara"

      data-category="Places"
    >

      <input type="checkbox" id="save7" class="save-toggle">

      <label for="save7" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/arcelio.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Arcelio Aquapark
        </h3>

        <div class="location">
          Purwokerto Utara
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P7">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 8 -->
    <div
      class="spot-card"

      data-id="P8"

      data-name="Taman Andhang Pangrenan"

      data-image="../../GAMBAR UNTUK SPOT/taman.png"

      data-location="Karangklesem"

      data-category="Places"
    >

      <input type="checkbox" id="save8" class="save-toggle">

      <label for="save8" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/taman.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Taman Andhang Pangrenan
        </h3>

        <div class="location">
          Karangklesem
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P8">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 9 -->
    <div
      class="spot-card"

      data-id="P9"

      data-name="Happy Time"

      data-image="../../GAMBAR UNTUK SPOT/happy.png"

      data-location="Rita Supermall"

      data-category="Places"
    >

      <input type="checkbox" id="save9" class="save-toggle">

      <label for="save9" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/happy.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Happy Time
        </h3>

        <div class="location">
          Rita Supermall
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=P9">

            <button type="button">
              Details
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

/* =========================
   SEARCH SPOT
========================= */

const searchInput =
document.getElementById(
  "searchInput"
);

const spotCards =
document.querySelectorAll(
  ".spot-card"
);

/* SEARCH EVENT */

searchInput.addEventListener(
"keyup",

function(){

  const keyword =
  searchInput.value.toLowerCase();

  spotCards.forEach(card => {

    const spotName =
    card.getAttribute(
      "data-name"
    ).toLowerCase();

    const location =
    card.getAttribute(
      "data-location"
    ).toLowerCase();

    const category =
    card.getAttribute(
      "data-category"
    ).toLowerCase();

    if(

      spotName.includes(keyword)
      ||

      location.includes(keyword)
      ||

      category.includes(keyword)

    ){

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