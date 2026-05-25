<?php

include "../backend/session.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">

  <title>
    ChillZone
  </title>

  <!-- FONT -->
  <link
    href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500&family=Alatsi&display=swap"
    rel="stylesheet"
  >

  <!-- CSS -->
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="home.css">

</head>

<body>

<!-- NAVBAR -->
<?php

$page = "home";

include "../navbar.php";

?>

<!-- HERO -->
<section class="hero">

  <div class="container hero-wrap">

    <!-- LEFT -->
    <div class="hero-left">

      <h2>
        Create your vibe
      </h2>

      <h2>
        Zone your moment
      </h2>

      <h2>
        Own your experience
      </h2>

      <p>
        Find your favorite hangout spot,
        explore vibes,
        and book your moment easily.
      </p>

      <!-- BUTTON -->
      <a
        href="../SPOT/Rekomendasi_Spot/spot_rekomendasi.php"
        class="btn"
      >
        Find Your Spot
      </a>

    </div>

    <!-- RIGHT -->
    <div class="hero-right">

      <img
        src="../KEBUTUHAN ELEMENT/ChillZOne.png"
      >

    </div>

  </div>

</section>

<!-- TEAR -->
<section class="tear-section">

  <img
    src="../KEBUTUHAN ELEMENT/tear.png"
    class="tear"
  >

  <!-- TEXT -->
  <div class="tear-text">

    <h2>
      Get to know ChillZone better
    </h2>

    <p>
      Scroll down to see more
    </p>

    <img
      src="../KEBUTUHAN ELEMENT/element 2.png"
      class="spark"
    >

  </div>

  <!-- CAT -->
  <img
    src="../KEBUTUHAN ELEMENT/element 1.png"
    class="cat-left"
  >

  <img
    src="../KEBUTUHAN ELEMENT/element 3.png"
    class="cat-right"
  >

</section>

<!-- CONTACT -->
<section class="contact">

  <div class="container contact-wrap">

    <!-- LEFT -->
    <div class="contact-left">

      <h2>
        Connect<br>
        With Us
      </h2>

      <p class="desc">
        We’d love to hear from you!
      </p>

      <p class="desc2">
        If you have any questions,
        feel free to contact us anytime.
      </p>

      <!-- INFO -->
      <div class="info">

        <!-- EMAIL -->
        <div class="info-item">

          <img
            src="../KEBUTUHAN ELEMENT/email.png"
          >

          <a href="mailto:chillzone@gmail.com">

            chillzone@gmail.com

          </a>

        </div>

        <!-- PHONE -->
        <div class="info-item">

          <img
            src="../KEBUTUHAN ELEMENT/phone.png"
          >

          <a
            href="https://wa.me/6281228952618"
            target="_blank"
          >

            081228952618

          </a>

        </div>

        <!-- INSTAGRAM -->
        <div class="info-item">

          <img
            src="../KEBUTUHAN ELEMENT/instagram.png"
          >

          <a
            href="https://instagram.com/chillzone_"
            target="_blank"
          >

            @chillzone_

          </a>

        </div>

      </div>

    </div>

    <!-- RIGHT -->
    <div class="contact-right">

      <form>

        <div class="row">

          <input
            type="text"
            placeholder="First Name"
          >

          <input
            type="text"
            placeholder="Last Name"
          >

        </div>

        <input
          type="email"
          placeholder="Email"
        >

        <textarea
          placeholder="Message"
        ></textarea>

        <button class="btn send">

          Send

        </button>

      </form>

    </div>

  </div>

</section>

<!-- FOOTER -->
<footer>

  <p>
    © 2026 ChillZone.
    All rights reserved.
  </p>

  <p>
    Create your vibe ·
    Zone your moment ·
    Own your experience
  </p>

</footer>

</body>
</html>