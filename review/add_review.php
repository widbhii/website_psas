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
    Write Review - ChillZone
  </title>

  <!-- FONT -->
  <link
    href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
    rel="stylesheet"
  >

  <!-- CSS -->
  <link
    rel="stylesheet"
    href="add_review.css"
  >

</head>

<body>

<!-- REVIEW FORM -->
<div class="review-card">

  <!-- TITLE -->
  <h2 class="review-title">
    Write Your Review
  </h2>

  <p class="review-subtitle">
    Share your experience with ChillZone places.
  </p>

  <!-- FORM -->
  <form
    action="../backend/add_review.php"
    method="POST"
    class="review-form"
  >

    <!-- NAME -->
    <div class="form-group">

      <label class="form-label">
        Full Name
      </label>

      <input
      type="text"
      name="username"
      class="form-input"
      placeholder="Enter your name..."
      value="<?php echo $_SESSION['username']; ?>"
      required
      >

    </div>

    <!-- CATEGORY -->
    <div class="form-group">

      <label class="form-label">
        Choose Category
      </label>

      <select
        id="categorySelect"
        name="category"
        class="form-input"
        required
      >

        <option value="">
          Select Category
        </option>

        <option value="Nature">
          Nature
        </option>

        <option value="Coffee">
          Coffee
        </option>

        <option value="Places">
          Places
        </option>

      </select>

    </div>

    <!-- PLACE -->
    <div class="form-group">

      <label class="form-label">
        Choose Place
      </label>

      <select
        id="placeSelect"
        name="place_name"
        class="form-input"
        required
      >

        <option value="">
          Select Place
        </option>

      </select>

    </div>

    <!-- RATING -->
    <div class="form-group">

      <label class="form-label">
        Rating
      </label>

      <div class="star-rating">

        <button
          type="button"
          data-value="1"
          class="star-btn"
        >
          ★
        </button>

        <button
          type="button"
          data-value="2"
          class="star-btn"
        >
          ★
        </button>

        <button
          type="button"
          data-value="3"
          class="star-btn"
        >
          ★
        </button>

        <button
          type="button"
          data-value="4"
          class="star-btn"
        >
          ★
        </button>

        <button
          type="button"
          data-value="5"
          class="star-btn"
        >
          ★
        </button>

      </div>

      <!-- VALUE -->
      <input
        type="hidden"
        name="rating"
        id="ratingValue"
        value="0"
        required
      >

    </div>

    <!-- REVIEW -->
    <div class="form-group">

      <label class="form-label">
        Review
      </label>

      <textarea
        name="review_text"
        class="form-input"
        rows="5"
        placeholder="Tell your experience..."
        required
      ></textarea>

    </div>

    <!-- BUTTON -->
    <button
      type="submit"
      class="submit-btn"
    >
      Submit Review
    </button>

  </form>

</div>

<!-- SCRIPT -->
<script>

/* =========================
   DATA TEMPAT
========================= */

const places = {

  Nature: [

    "Mount Slamet",
    "Baturraden Tourist Attraction",
    "Bayan Village & Cafe",
    "Limpakuwus Pine Forest",
    "Germanggis",
    "Menggala Ranch",
    "Curug Jenggala Waterfall",
    "Tirta Sela Waterfall",
    "Bayan Waterfall",
    "Silent Lake Waterfall",
    "Angel Waterfall"

  ],

  Coffee: [

    "Bayan Village & Cafe",
    "Arasta Alpha, Overste Isdiman",
    "Lembah Patih",
    "Ethos Digital Valley",
    "Cerita Alam",
    "Ebony Cafe",
    "L@ Puerto",
    "Social House",
    "AT NINE Coffee and Space",
    "Alas House",
    "Fore Coffee"

  ],

  Places: [

    "Rita Supermall",
    "Menara Pandang Teratai",
    "Bayan Village & Cafe",
    "The Village",
    "Small World",
    "The Forest Island",
    "Arcelio Aquapark",
    "Andhang Pangrenan Park",
    "Happy Time"

  ]

};

/* =========================
   SELECT
========================= */

const categorySelect =
document.getElementById(
"categorySelect"
);

const placeSelect =
document.getElementById(
"placeSelect"
);

/* =========================
   CHANGE CATEGORY
========================= */

categorySelect.addEventListener(
"change",
() => {

  const selectedCategory =
  categorySelect.value;

  placeSelect.innerHTML =

  '<option value="">Select Place</option>';

  if(selectedCategory in places){

    places[selectedCategory]
    .forEach(place => {

      const option =
      document.createElement("option");

      option.value = place;

      option.textContent = place;

      placeSelect.appendChild(option);

    });

  }

});

/* =========================
   STAR RATING
========================= */

const stars =
document.querySelectorAll(".star-btn");

const ratingValue =
document.getElementById(
"ratingValue"
);

stars.forEach((star, index) => {

  star.addEventListener("click", () => {

    const value =
    index + 1;

    ratingValue.value = value;

    stars.forEach((s, i) => {

      if(i < value){

        s.classList.add("active");

      }

      else{

        s.classList.remove("active");

      }

    });

  });

});

</script>

</body>
</html>