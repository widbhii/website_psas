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
    Review - ChillZone
  </title>

  <!-- FONT -->
  <link
    href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
    rel="stylesheet"
  >

  <!-- CSS -->
  <link
    rel="stylesheet"
    href="../style.css"
  >

  <link
    rel="stylesheet"
    href="review.css"
  >

</head>

<body>

    <?php

    $page = "review";
    
    include "../navbar.php";

  ?>  

  </div>

<!-- REVIEW -->
<section class="review-section">

  <!-- TITLE -->
  <div class="review-title">

    <h2>
      User Reviews
    </h2>

    <p>
      See what people say about their favorite places.
    </p>

  </div>

  <!-- REVIEW WRAP -->
  <div
    class="review-wrap"
    id="reviewWrap"
  >

  </div>

  <!-- BUTTON -->
  <div class="review-btn-wrap">

    <a
      href="add_review.php"
      class="write-btn"
    >
      + Write Your Review
    </a>

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

<!-- SCRIPT -->
<script>

/* =========================
   CONTAINER
========================= */

const reviewWrap =
document.getElementById(
"reviewWrap"
);

/* =========================
   FETCH REVIEW
========================= */

fetch("../backend/fetch_review.php")

.then(response => response.json())

.then(data => {

  /* EMPTY */

  if(data.length === 0){

    reviewWrap.innerHTML = `

      <p class="empty-review">
        No reviews yet.
      </p>

    `;

    return;
  }

  /* LOOP */

  data.forEach(review => {

    /* BINTANG */

    let stars = "";

    for(let i = 0; i < review.rating; i++){

      stars += "★";

    }

    /* INISIAL */

    const initials =

    review.username
    .substring(0,2)
    .toUpperCase();

    /* CARD */

    reviewWrap.innerHTML += `

      <div class="review-card">

        <!-- TOP -->
        <div class="review-top">

          <!-- PROFILE -->
          <div class="profile-circle brown">

            ${initials}

          </div>

          <!-- USER -->
          <div>

            <h3>
              ${review.username}
            </h3>

            <div class="stars">
              ${stars}
            </div>

          </div>

        </div>

        <!-- PLACE -->
        <div class="place-tag">

          ${review.place_name}

        </div>

        <!-- REVIEW -->
        <p class="review-text">

          "${review.review_text}"

        </p>

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