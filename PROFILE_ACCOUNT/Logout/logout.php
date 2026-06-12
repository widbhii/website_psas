<?php

include "../../backend/session.php";

$menu = "logout";

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
Log Out - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="logout.css"
>

</head>

<body>

<div class="settings-container">

    <?php include "../../sidebar.php"; ?>

    <div class="settings-content">

        <a
        href="../Profile_Menu/profile-menu.php"
        class="back-link"
        >
            ← Back to Profile
        </a>

        <h1>
            Log Out
        </h1>

        <!-- LOGOUT -->

        <div class="logout-section">

            <h2>
                Sign Out
            </h2>

            <div class="info-box">

                Log out from your ChillZone account on this device.

            </div>

            <a
            href="../../backend/logout.php"

            class="logout-btn"

            onclick="
            return confirm(
            'Are you sure you want to log out?'
            );
            "
            >
                Log Out
            </a>

        </div>

        <!-- DELETE ACCOUNT -->

        <div class="logout-section">

            <h2>
                Delete Account
            </h2>

            <div class="info-box">

                Permanently remove your account and all associated data.

            </div>

            <a
            href="../../backend/delete_account.php"

            class="delete-btn"

            onclick="
            return confirm(
            'This action cannot be undone. Delete account permanently?'
            );
            "
            >
                Delete Account
            </a>

        </div>

    </div>

</div>

</body>
</html>