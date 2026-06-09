<?php

include "../../../backend/session.php";
include "../../../backend/config.php";

/* =========================
   CEK LOGIN
========================= */

if(!isset($_SESSION['user_id'])){
    header("Location: ../../../LOGIN_SIGNUP/Login/login.php");
    exit;
}

/* =========================
   AMBIL DATA USER
========================= */

$user_id = $_SESSION['user_id'];

$query = mysqli_query(

    $conn,

    "SELECT * FROM users
    WHERE id='$user_id'"

);

$user = mysqli_fetch_assoc($query);

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
Profile Menu - ChillZone
</title>

<link
rel="preconnect"
href="https://fonts.googleapis.com"
>

<link
rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin
>

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="profile-menu.css"
>

</head>

<body>

<div class="menu-card-container">

    <!-- HEADER -->
    <div class="menu-card-header">

        <img
        src="../../../KEBUTUHAN ELEMENT/love.png"
        class="love-art"
        alt=""
        >

    </div>

    <!-- CONTENT -->
    <div class="container">

        <div class="menu-card-body">

            <!-- LEFT -->
            <div class="body-left-content">

                <div class="floating-user-badge">

                    <div class="user-avatar-box">

                        <img
                        src="<?php
                        echo !empty($user['profile_image'])
                        ?
                        '../../../uploads/profile/'.$user['profile_image']
                        :
                        '../../../KEBUTUHAN ELEMENT/profile.png';
                        ?>"
                        alt="Avatar"
                        class="avatar-img"
                        >

                    </div>

                    <div class="user-info-text-box">

                        <h4>
                            <?php echo $user['username']; ?>
                        </h4>

                        <p>
                            <?php echo $user['email']; ?>
                        </p>

                    </div>

                </div>

                <img
                src="../../../KEBUTUHAN ELEMENT/ChillZOne.png"
                class="chillzone-banner-img"
                alt=""
                >

            </div>

            <!-- RIGHT -->
            <div class="body-right-navigation">

                <a
                href="../Profile_Settings/profile-settings.php"
                class="menu-link"
                >
                    Account Settings
                </a>

                <a
                href="../Preferences/preferences.php"
                class="menu-link"
                >
                    Preferences
                </a>

                <a
                href="../Saved_Content/saved.php"
                class="menu-link"
                >
                    Saved Content
                </a>

                <a
                href="../../Support/support.php"
                class="menu-link"
                >
                    Support
                </a>

                <a
                href="../../../backend/logout.php"
                class="menu-link logout-link"
                onclick="return confirm('Log out from ChillZone?')"
                >
                    Log Out
                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>