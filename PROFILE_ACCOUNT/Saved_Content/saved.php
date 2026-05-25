<?php

include "../../backend/session.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Saved Content - ChillZone</title>

  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Boogaloo&family=Alatsi&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="saved.css">

</head>

<body>

<div class="saved-container">

  <!-- SIDEBAR -->
  <div class="sidebar">

    <button class="sidebar-btn">
      Account Settings
    </button>

    <button class="sidebar-btn">
      Preferences
    </button>

    <button class="sidebar-btn active">
      Saved Content
    </button>

    <button class="sidebar-btn">
      Support
    </button>

    <button class="sidebar-btn">
      Log Out
    </button>

  </div>

  <!-- RIGHT CONTENT -->
  <div class="saved-content">

    <!-- TITLE -->
    <h1>
      Saved Content
    </h1>

    <!-- SUBTITLE -->
    <h2>
      Wishlist Places
    </h2>

    <!-- SAVE CONTENT BOX -->
    <div 
      class="saved-card-wrap"
      id="wishlist-container"
    >

    </div>

  </div>

</div>

<!-- SCRIPT -->
<script>

const wishlistContainer =
document.getElementById(
  "wishlist-container"
);

/* FETCH */

fetch("../../backend/fetch_saved.php")

.then(response => response.json())

.then(data => {

    /* EMPTY */

    if(data.length === 0){

        wishlistContainer.innerHTML = `

          <p class="empty-text">
            No saved spots yet.
          </p>

        `;

        return;

    }

    /* LOOP */

    data.forEach(item => {

        wishlistContainer.innerHTML += `

        <div class="spot-card">

          <!-- IMAGE -->
          <img
            src="${item.spot_image}"
            class="card-img"
          >

          <!-- CONTENT -->
          <div class="card-content">

            <div class="tag">
              ${item.category}
            </div>

            <h3>
              ${item.spot_name}
            </h3>

            <div class="location">
              ${item.location}
            </div>

            <div class="btn-wrap">

              <button>
                Details
              </button>

            </div>

          </div>

        </div>

        `;

    });

})

.catch(error => {

    console.log(error);

});

</script>

</body>
</html>