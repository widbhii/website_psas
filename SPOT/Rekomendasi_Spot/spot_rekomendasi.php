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
    Spot Rekomendasi - ChillZone
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
    href="spot_rekomendasi.css"
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
        placeholder="Search all spots..."
        id="searchInput"
      >

    </div>

  </div>

  <!-- CARD WRAP -->
  <div
    class="card-wrap"
    id="cardWrap"
  >

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

<script>

/* =========================
   CARD WRAP
========================= */

const cardWrap =
document.getElementById(
  "cardWrap"
);

/* =========================
   ALL SPOTS DATA
========================= */

const allSpots = [

  /* ================= NATURE ================= */

  {
    id: "N1",
    name: "Mount Slamet",
    image: "../../GAMBAR UNTUK SPOT/gunung-slamet.png",
    location: "Baturraden",
    category: "Nature"
  },

  {
    id: "N2",
    name: "Baturraden Tourist Attraction",
    image: "../../GAMBAR UNTUK SPOT/lokawisata.png",
    location: "Baturraden",
    category: "Nature"
  },

  {
    id: "N3",
    name: "Bayan Village & Cafe",
    image: "../../GAMBAR UNTUK SPOT/bayan-village.png",
    location: "Baturraden",
    category: "Nature"
  },

  {
    id: "N4",
    name: "Limpakuwus Pine Forest",
    image: "../../GAMBAR UNTUK SPOT/hutan-pinus.png",
    location: "Baturraden",
    category: "Nature"
  },

  {
    id: "N5",
    name: "Germanggis",
    image: "../../GAMBAR UNTUK SPOT/germanggis.png",
    location: "Cilongok",
    category: "Nature"
  },

  {
    id: "N6",
    name: "Menggala Ranch",
    image: "../../GAMBAR UNTUK SPOT/menggala.png",
    location: "Pekuncen",
    category: "Nature"
  },

  {
    id: "N7",
    name: "Caub",
    image: "../../GAMBAR UNTUK SPOT/caub.png",
    location: "Baturraden",
    category: "Nature"
  },

  {
    id: "N8",
    name: "Jenggala Waterfall",
    image: "../../GAMBAR UNTUK SPOT/curug-jenggala.png",
    location: "Baturraden",
    category: "Nature"
  },

  {
    id: "N9",
    name: "Tirta Sela Waterfall",
    image: "../../GAMBAR UNTUK SPOT/curug-tirta.png",
    location: "Kedungbanteng",
    category: "Nature"
  },

  {
    id: "N10",
    name: "Bayan Waterfall",
    image: "../../GAMBAR UNTUK SPOT/curug-bayan.png",
    location: "Baturraden",
    category: "Nature"
  },

  {
    id: "N11",
    name: "Silent Lake Waterfall",
    image: "../../GAMBAR UNTUK SPOT/curug-telaga.png",
    location: "Karanglewas",
    category: "Nature"
  },

  {
    id: "N12",
    name: "Angel Waterfall",
    image: "../../GAMBAR UNTUK SPOT/curug-bidadari.png",
    location: "Baturraden",
    category: "Nature"
  },

  /* ================= COFFEE ================= */

  {
    id: "C1",
    name: "Bayan Village & Cafe",
    image: "../../GAMBAR UNTUK SPOT/bayan-village.png",
    location: "Baturraden",
    category: "Coffee"
  },

  {
    id: "C2",
    name: "Arasta Alpha",
    image: "../../GAMBAR UNTUK SPOT/arasta.png",
    location: "Purwokerto Timur",
    category: "Coffee"
  },

  {
    id: "C3",
    name: "Lembah Patih",
    image: "../../GAMBAR UNTUK SPOT/lembah-patih.png",
    location: "Baturraden",
    category: "Coffee"
  },

  {
    id: "C4",
    name: "Ethos Digital Valley",
    image: "../../GAMBAR UNTUK SPOT/ethos-digital.png",
    location: "Sumbang",
    category: "Coffee"
  },

  {
    id: "C5",
    name: "Cerita Alam",
    image: "../../GAMBAR UNTUK SPOT/cerita-alam.png",
    location: "Baturraden",
    category: "Coffee"
  },

  {
    id: "C6",
    name: "Ebony Cafe",
    image: "../../GAMBAR UNTUK SPOT/ebony.png",
    location: "Baturraden",
    category: "Coffee"
  },

  {
    id: "C7",
    name: "L@ Puerto",
    image: "../../GAMBAR UNTUK SPOT/l@.png",
    location: "Sokaraja",
    category: "Coffee"
  },

  {
    id: "C8",
    name: "Lav Cafe",
    image: "../../GAMBAR UNTUK SPOT/lav.png",
    location: "Purwokerto Timur",
    category: "Coffee"
  },

  {
    id: "C9",
    name: "Social House",
    image: "../../GAMBAR UNTUK SPOT/social.png",
    location: "Purwokerto Selatan",
    category: "Coffee"
  },

  {
    id: "C10",
    name: "AT NINE Coffee and Space",
    image: "../../GAMBAR UNTUK SPOT/at-nine.png",
    location: "Purwokerto Timur",
    category: "Coffee"
  },

  {
    id: "C11",
    name: "Alas House",
    image: "../../GAMBAR UNTUK SPOT/alas.png",
    location: "Purwokerto Timur",
    category: "Coffee"
  },

  {
    id: "C12",
    name: "Fore Coffee",
    image: "../../GAMBAR UNTUK SPOT/fore.png",
    location: "Purwokerto Utara",
    category: "Coffee"
  },

  /* ================= PLACES ================= */

  {
    id: "P1",
    name: "Rita Supermall",
    image: "../../GAMBAR UNTUK SPOT/rita-supermall.png",
    location: "Purwokerto Timur",
    category: "Places"
  },

  {
    id: "P2",
    name: "Menara Pandang Teratai",
    image: "../../GAMBAR UNTUK SPOT/menara.png",
    location: "Purwokerto Timur",
    category: "Places"
  },

  {
    id: "P3",
    name: "Bayan Village & Cafe",
    image: "../../GAMBAR UNTUK SPOT/bayan-village.png",
    location: "Baturraden",
    category: "Places"
  },

  {
    id: "P4",
    name: "The Village",
    image: "../../GAMBAR UNTUK SPOT/the-village.png",
    location: "Baturraden",
    category: "Places"
  },

  {
    id: "P5",
    name: "Small World",
    image: "../../GAMBAR UNTUK SPOT/small.png",
    location: "Baturraden",
    category: "Places"
  },

  {
    id: "P6",
    name: "The Forest Island",
    image: "../../GAMBAR UNTUK SPOT/the-forest.png",
    location: "Baturraden",
    category: "Places"
  },

  {
    id: "P7",
    name: "Arcelio Aquapark",
    image: "../../GAMBAR UNTUK SPOT/arcelio.png",
    location: "Purwokerto Utara",
    category: "Places"
  },

  {
    id: "P8",
    name: "Taman Andhang Pangrenan",
    image: "../../GAMBAR UNTUK SPOT/taman.png",
    location: "Karangklesem",
    category: "Places"
  },

  {
    id: "P9",
    name: "Happy Time",
    image: "../../GAMBAR UNTUK SPOT/happy.png",
    location: "Rita Supermall",
    category: "Places"
  }

];

/* =========================
   SHOW SPOTS
========================= */

function displaySpots(spots){

  cardWrap.innerHTML = "";

  if(spots.length === 0){

    cardWrap.innerHTML = `

      <h2
        style="
          width:100%;
          text-align:center;
          color:#4C312A;
          margin-top:40px;
        "
      >
        Spot not found.
      </h2>

    `;

    return;

  }

  spots.forEach(spot => {

    cardWrap.innerHTML += `

    <div class="spot-card">

      <img
        src="${spot.image}"
        class="card-img"
      >

      <div class="card-content">

        <div class="tag">
          ${spot.category}
        </div>

        <h3>
          ${spot.name}
        </h3>

        <div class="location">
          ${spot.location}
        </div>

        <div class="btn-wrap">

          <a href="../Detail Spot/detail_spot.php?id=${spot.id}">

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    `;

  });

}

/* =========================
   DEFAULT SPOTS
========================= */

displaySpots([

  allSpots[14],
  allSpots[15],
  allSpots[2],
  allSpots[27],
  allSpots[24],
  allSpots[7]

]);

/* =========================
   SEARCH
========================= */

const searchInput =
document.getElementById(
  "searchInput"
);

searchInput.addEventListener(
"keyup",

function(){

  const keyword =
  searchInput.value.toLowerCase();

  if(keyword === ""){

    displaySpots([

      allSpots[14],
      allSpots[15],
      allSpots[2],
      allSpots[27],
      allSpots[24],
      allSpots[7]

    ]);

    return;

  }

  const filteredSpots =
  allSpots.filter(spot =>

    spot.name.toLowerCase().includes(keyword)

    ||

    spot.location.toLowerCase().includes(keyword)

    ||

    spot.category.toLowerCase().includes(keyword)

  );

  displaySpots(filteredSpots);

});

</script>

</body>
</html>