<header class="navbar">

  <div class="nav-inner">

    <!-- LOGO -->
    <h1 class="logo">
      ChillZone
    </h1>

    <!-- MENU -->
    <nav class="menu">

      <!-- HOME -->
      <a 
        href="/website_psas/HOME/home.php"

        class="<?php

        if($page == 'home'){

          echo 'active';

        }

        ?>"
      >
        Home
      </a>

      <!-- SPOTS -->
      <a 
        href="/website_psas/SPOT/Rekomendasi_Spot/spot_rekomendasi.php"

        class="<?php

        if($page == 'spots'){

          echo 'active';

        }

        ?>"
      >
        Spots
      </a>

      <!-- REVIEW -->
      <a 
        href="/website_psas/REVIEW/review.php"

        class="<?php

        if($page == 'review'){

          echo 'active';

        }

        ?>"
      >
        Review
      </a>

      <!-- ARTICLE -->
      <a 
        href="/website_psas/ARTICLE/article.php"

        class="<?php

        if($page == 'article'){

          echo 'active';

        }

        ?>"
      >
        Article
      </a>

    </nav>

    <!-- PROFILE -->
    <a href="/website_psas/PROFILE_ACCOUNT/profile-menu.php">

      <img
        src="/website_psas/KEBUTUHAN ELEMENT/user icon 1.png"
        class="profile"
      >

    </a>

  </div>

</header>