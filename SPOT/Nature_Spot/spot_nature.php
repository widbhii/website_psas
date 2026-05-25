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
    Nature Spots - ChillZone
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
    href="spot_nature.css"
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

      <a
        href="spot_nature.php"
        class="active"
      >
        Nature
      </a>

      <a href="../Coffee_Spot/spot_coffee.php">
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
        placeholder="Search nature spots..."
        id="searchInput"
      >

    </div>

  </div>

  <!-- CARD WRAP -->
  <div class="card-wrap">

    <!-- CARD 1 -->
    <div
      class="spot-card"

      data-id="N1"

      data-name="Mount Slamet"

      data-image="../../GAMBAR UNTUK SPOT/gunung-slamet.png"

      data-location="Baturaden"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save1"
        class="save-toggle"
      >

      <label
        for="save1"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/gunung-slamet.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Mount Slamet
        </h3>

        <div class="location">
          Baturaden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N1">

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

      data-id="N2"

      data-name="Baturraden Tourist Attraction"

      data-image="../../GAMBAR UNTUK SPOT/lokawisata.png"

      data-location="Baturaden"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save2"
        class="save-toggle"
      >

      <label
        for="save2"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/lokawisata.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Baturraden Tourist Attraction
        </h3>

        <div class="location">
          Baturaden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N2">

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

      data-id="N3"

      data-name="Bayan Village & Cafe"

      data-image="../../GAMBAR UNTUK SPOT/bayan-village.png"

      data-location="Baturraden"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save3"
        class="save-toggle"
      >

      <label
        for="save3"
        class="save-btn"
      >
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

          <a href="../Detail Spot/detail_spot.php?id=N3">

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

      data-id="N4"

      data-name="Limpakuwus Pine Forest"

      data-image="../../GAMBAR UNTUK SPOT/hutan-pinus.png"

      data-location="Baturraden"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save4"
        class="save-toggle"
      >

      <label
        for="save4"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/hutan-pinus.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Limpakuwus Pine Forest
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N4">

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

      data-id="N5"

      data-name="Germanggis"

      data-image="../../GAMBAR UNTUK SPOT/germanggis.png"

      data-location="Cilongok"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save5"
        class="save-toggle"
      >

      <label
        for="save5"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/germanggis.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Germanggis
        </h3>

        <div class="location">
          Cilongok
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N5">

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

      data-id="N6"

      data-name="Menggala Ranch"

      data-image="../../GAMBAR UNTUK SPOT/menggala.png"

      data-location="Pekuncen"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save6"
        class="save-toggle"
      >

      <label
        for="save6"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/menggala.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Menggala Ranch
        </h3>

        <div class="location">
          Pekuncen
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N6">

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

      data-id="N7"

      data-name="Cafe"

      data-image="../../GAMBAR UNTUK SPOT/caub.png"

      data-location="Baturraden"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save7"
        class="save-toggle"
      >

      <label
        for="save7"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/caub.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Caub
        </h3>

        <div class="location">
          Baturaden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N7">

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

      data-id="N8"

      data-name="Jenggala Waterfall"

      data-image="../../GAMBAR UNTUK SPOT/curug-jenggala.png"

      data-location="Baturraden"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save8"
        class="save-toggle"
      >

      <label
        for="save8"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/curug-jenggala.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Jenggala Waterfall
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N8">

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

      data-id="N9"

      data-name="Tirta Sela Waterfall"

      data-image="../../GAMBAR UNTUK SPOT/curug-tirta.png"

      data-location="Kedungbanteng"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save9"
        class="save-toggle"
      >

      <label
        for="save9"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/curug-tirta.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Tirta Sela Waterfall
        </h3>

        <div class="location">
          Kedungbanteng
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N9">

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

      data-id="N10"

      data-name="Bayan Waterfall"

      data-image="../../GAMBAR UNTUK SPOT/curug-bayan.png"

      data-location="Baturraden"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save10"
        class="save-toggle"
      >

      <label
        for="save10"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/curug-bayan.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Bayan Waterfall
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N10">

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

      data-id="N11"

      data-name="Silent Lake Waterfall"

      data-image="../../GAMBAR UNTUK SPOT/curug-telaga.png"

      data-location="Karanglewas"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save11"
        class="save-toggle"
      >

      <label
        for="save11"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/curug-telaga.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Silent Lake Waterfall
        </h3>

        <div class="location">
          Karanglewas
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N11">

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

      data-id="N12"

      data-name="Angel Waterfall"

      data-image="../../GAMBAR UNTUK SPOT/curug-bidadari.png"

      data-location="Baturraden"

      data-category="Nature"
    >

      <input
        type="checkbox"
        id="save12"
        class="save-toggle"
      >

      <label
        for="save12"
        class="save-btn"
      >
        ★
      </label>

      <img
        src="../../GAMBAR UNTUK SPOT/curug-bidadari.png"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          Angel Waterfall
        </h3>

        <div class="location">
          Baturraden
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=N12">

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