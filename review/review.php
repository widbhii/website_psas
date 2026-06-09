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

  <link
    href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
    rel="stylesheet"
  >

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

<section class="review-section">

  <div class="review-title">

    <h2>
      User Reviews
    </h2>

    <p>
      See what people say about their favorite places.
    </p>

  </div>

  <div
    class="review-wrap"
    id="reviewWrap"
  >

  </div>

  <div class="review-btn-wrap">

    <a
      href="add_review.php"
      class="write-btn"
    >
      + Write Your Review
    </a>

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

/* =========================
   USER LOGIN
========================= */

const currentUserId =
<?php echo $_SESSION['user_id']; ?>;

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

  if(data.length === 0){

    reviewWrap.innerHTML = `

      <p class="empty-review">
        No reviews yet.
      </p>

    `;

    return;
  }

  data.forEach(review => {

    let stars = "";

    for(let i = 0; i < review.rating; i++){

      stars += "★";

    }

    const initials =

    review.username
    .substring(0,2)
    .toUpperCase();

    let deleteButton = "";

    if(review.user_id == currentUserId){

      deleteButton = `

      <div class="review-actions">

        <form
          action="../backend/delete_review.php"
          method="POST"
          onsubmit="return confirm('Delete this review?')"
        >

          <input
            type="hidden"
            name="review_id"
            value="${review.id}"
          >

          <button
            type="submit"
            class="delete-btn"
          >

            🗑 Delete Review

          </button>

        </form>

      </div>

      `;

    }

    reviewWrap.innerHTML += `

      <div class="review-card">

        <div class="review-top">

          <div class="profile-circle brown">

            ${initials}

          </div>

          <div>

            <h3>
              ${review.username}
            </h3>

            <div class="stars">

              ${stars}

            </div>

          </div>

        </div>

        <div class="place-tag">

          ${review.place_name}

        </div>

        <p class="review-text">

          "${review.review_text}"

        </p>

        <span class="review-date">

          ${review.created_at}

        </span>

        ${deleteButton}

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