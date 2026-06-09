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
                class="<?php echo ($page == 'home') ? 'active' : ''; ?>"
            >
                Home
            </a>

            <!-- SPOTS -->
            <a
                href="/website_psas/SPOT/Rekomendasi_Spot/spot_rekomendasi.php"
                class="<?php echo ($page == 'spots') ? 'active' : ''; ?>"
            >
                Spots
            </a>

            <!-- REVIEW -->
            <a
                href="/website_psas/REVIEW/review.php"
                class="<?php echo ($page == 'review') ? 'active' : ''; ?>"
            >
                Review
            </a>

            <!-- ARTICLE -->
            <a
                href="/website_psas/ARTICLE/article.php"
                class="<?php echo ($page == 'article') ? 'active' : ''; ?>"
            >
                Article
            </a>

        </nav>

        <!-- PROFILE -->
        <a
            href="/website_psas/PROFILE_ACCOUNT/Profile/Profile_Menu/profile-menu.php"
            class="profile-link"
        >

            <img
                src="/website_psas/KEBUTUHAN ELEMENT/user icon 1.png"
                class="profile"
                alt="Profile"
            >

        </a>

    </div>

</header>