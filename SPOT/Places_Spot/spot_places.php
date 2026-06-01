<?php

include "../../backend/session.php";

include "../../backend/config.php";

/* =========================
   FETCH PLACES SPOTS
========================= */

$query = mysqli_query(

$conn,

"SELECT * FROM spots
WHERE category='Places'
ORDER BY title ASC"

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
    href="../Places_Spot/spot_places.php"
    class="active"
    >
    Places
    </a>

    <?php if(isset($_SESSION['user_id'])){ ?>

    <a
        href="../Add_Spot/add_spot.php"
        class="add-spot-menu"
    >
        + Add Spot
    </a>

    <?php } ?>

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

    <?php

    while($spot = mysqli_fetch_assoc($query)){

    ?>

    <div
      class="spot-card"

      data-id="<?php echo $spot['id']; ?>"

      data-name="<?php echo $spot['title']; ?>"

      data-image="../../GAMBAR UNTUK SPOT/<?php echo $spot['image']; ?>"

      data-location="<?php echo $spot['location']; ?>"

      data-category="<?php echo $spot['category']; ?>"
    >

      <!-- SAVE -->
      <input
        type="checkbox"
        class="save-toggle"
      >

      <label class="save-btn">
        ★
      </label>

      <!-- IMAGE -->
      <img
        src="../../GAMBAR UNTUK SPOT/<?php echo $spot['image']; ?>"
        class="card-img"
      >

      <!-- CONTENT -->
      <div class="card-content">

        <div class="tag">
          Spots
        </div>

        <h3>
          <?php echo $spot['title']; ?>
        </h3>

        <div class="location">
          <?php echo $spot['location']; ?>
        </div>

        <div class="btn-wrap">

          <a
            href="../Detail Spot/detail_spot.php?id=<?php echo $spot['id']; ?>"
          >

            <button type="button">
              Details
            </button>

          </a>

        </div>

      </div>

    </div>

    <?php

    }

    ?>

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

      card.style.display =
      "block";

    }

    else{

      card.style.display =
      "none";

    }

  });

});

</script>

</body>
</html>