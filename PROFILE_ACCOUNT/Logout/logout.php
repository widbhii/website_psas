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
        href="../Profile/Profile_Menu/profile-menu.php"
        class="back-link"
        >
            ← Back to Profile
        </a>

        <h1>
            Log Out
        </h1>

        <div class="logout-section">

            <h2>
                Log Out
            </h2>

            <div class="info-box">

                Sign out from your account

            </div>

            <a
            href="../../backend/logout.php"
            class="logout-btn"
            >
                Log Out
            </a>

        </div>

        <div class="logout-section">

            <h2>
                Delete Account
            </h2>

            <div class="info-box">

                Permanently remove your account and data

            </div>

            <a
            href="../../backend/delete_account.php"

            onclick="
            return confirm(
            'Delete account permanently?'
            );
            "

            class="delete-btn"
            >
                Delete Account
            </a>

        </div>

    </div>

</div>

</body>
</html>