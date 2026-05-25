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
    Coffee Spots - ChillZone
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
    href="spot_coffee.css"
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

      <a
        href="spot_coffee.php"
        class="active"
      >
        Coffee
      </a>

      <a href="../Places_Spot/spot_places.php">
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
        placeholder="Search coffee spots..."
        id="searchInput"
      >

    </div>

  </div>

  <!-- CARD WRAP -->
  <div class="card-wrap">

    <!-- CARD 1 -->
    <div
      class="spot-card"

      data-id="C1"

      data-name="Bayan Village & Cafe"

      data-image="../../GAMBAR UNTUK SPOT/bayan-village.png"

      data-location="Baturraden"

      data-category="Coffee"
    >

      <input type="checkbox" id="save1" class="save-toggle">

      <label for="save1" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/bayan-village.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Bayan Village & Cafe
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C1">

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

      data-id="C2"

      data-name="Arasta Alpha"

      data-image="../../GAMBAR UNTUK SPOT/arasta.png"

      data-location="Purwokerto Timur"

      data-category="Coffee"
    >

      <input type="checkbox" id="save2" class="save-toggle">

      <label for="save2" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/arasta.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Arasta Alpha
        </h3>

        <div class="location">
          Purwokerto Timur
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C2">

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

      data-id="C3"

      data-name="Lembah Patih"

      data-image="../../GAMBAR UNTUK SPOT/lembah-patih.png"

      data-location="Baturraden"

      data-category="Coffee"
    >

      <input type="checkbox" id="save3" class="save-toggle">

      <label for="save3" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/lembah-patih.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Lembah Patih
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C3">

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

      data-id="C4"

      data-name="Ethos Digital Valley"

      data-image="../../GAMBAR UNTUK SPOT/ethos-digital.png"

      data-location="Sumbang"

      data-category="Coffee"
    >

      <input type="checkbox" id="save4" class="save-toggle">

      <label for="save4" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/ethos-digital.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Ethos Digital Valley
        </h3>

        <div class="location">
          Sumbang
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C4">

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

      data-id="C5"

      data-name="Cerita Alam"

      data-image="../../GAMBAR UNTUK SPOT/cerita-alam.png"

      data-location="Baturraden"

      data-category="Coffee"
    >

      <input type="checkbox" id="save5" class="save-toggle">

      <label for="save5" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/cerita-alam.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Cerita Alam
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C5">

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

      data-id="C6"

      data-name="Ebony Cafe"

      data-image="../../GAMBAR UNTUK SPOT/ebony.png"

      data-location="Baturraden"

      data-category="Coffee"
    >

      <input type="checkbox" id="save6" class="save-toggle">

      <label for="save6" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/ebony.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Ebony Cafe
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C6">

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

      data-id="C7"

      data-name="L@ Puerto"

      data-image="../../GAMBAR UNTUK SPOT/l@.png"

      data-location="Sokaraja"

      data-category="Coffee"
    >

      <input type="checkbox" id="save7" class="save-toggle">

      <label for="save7" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/l@.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          L@ Puerto
        </h3>

        <div class="location">
          Sokaraja
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C7">

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

      data-id="C8"

      data-name="Lav Cafe"

      data-image="../../GAMBAR UNTUK SPOT/lav.png"

      data-location="Purwokerto Timur"

      data-category="Coffee"
    >

      <input type="checkbox" id="save8" class="save-toggle">

      <label for="save8" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/lav.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Lav Cafe
        </h3>

        <div class="location">
          Purwokerto Timur
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C8">

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

      data-id="C9"

      data-name="Social House"

      data-image="../../GAMBAR UNTUK SPOT/social.png"

      data-location="Purwokerto Selatan"

      data-category="Coffee"
    >

      <input type="checkbox" id="save9" class="save-toggle">

      <label for="save9" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/social.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Social House
        </h3>

        <div class="location">
          Purwokerto Selatan
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C9">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 10 -->
    <div
      class="spot-card"

      data-id="C10"

      data-name="AT NINE Coffee and Space"

      data-image="../../GAMBAR UNTUK SPOT/at-nine.png"

      data-location="Purwokerto Timur"

      data-category="Coffee"
    >

      <input type="checkbox" id="save10" class="save-toggle">

      <label for="save10" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/at-nine.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          AT NINE Coffee and Space
        </h3>

        <div class="location">
          Purwokerto Timur
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C10">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 11 -->
    <div
      class="spot-card"

      data-id="C11"

      data-name="Alas House"

      data-image="../../GAMBAR UNTUK SPOT/alas.png"

      data-location="Purwokerto Timur"

      data-category="Coffee"
    >

      <input type="checkbox" id="save11" class="save-toggle">

      <label for="save11" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/alas.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Alas House
        </h3>

        <div class="location">
          Purwokerto Timur
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C11">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <!-- CARD 12 -->
    <div
      class="spot-card"

      data-id="C12"

      data-name="Fore Coffee"

      data-image="../../GAMBAR UNTUK SPOT/fore.png"

      data-location="Purwokerto Utara"

      data-category="Coffee"
    >

      <input type="checkbox" id="save12" class="save-toggle">

      <label for="save12" class="save-btn">
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/fore.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Coffee
        </div>

        <h3>
          Fore Coffee
        </h3>

        <div class="location">
          Purwokerto Utara
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=C12">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

  </div>

</section>

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

    /* FILTER */

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