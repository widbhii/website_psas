<?php

include "../../../backend/session.php";

if(!isset($_SESSION['user_id'])){
    header("Location: ../../../LOGIN_SIGNUP/Login/login.php");
    exit();
}

$menu = "preferences";

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
Preferences - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="preferences.css"
>

</head>

<body>

<div class="settings-container">

<?php include "../../../sidebar.php"; ?>

<div class="settings-content">

    <a
    href="../Profile_Menu/profile-menu.php"
    class="back-link"
    >
        ← Back to Profile
    </a>

    <h1>
        Preferences
    </h1>

    <div class="preferences-card">

        <h2>
            Customize Your Experience
        </h2>

        <p>
            ChillZone automatically personalizes your experience
            based on your activity, saved content, reviews,
            and interests.
        </p>

        <div class="preference-box">

            <div>

                <h3>
                    Personalized Recommendations
                </h3>

                <p>
                    Get spot and article recommendations
                    based on your activity.
                </p>

            </div>

            <span class="status">
                Active
            </span>

        </div>

        <div class="preference-box">

            <div>

                <h3>
                    Saved Content
                </h3>

                <p>
                    Access your saved spots and articles
                    anytime.
                </p>

            </div>

            <span class="status">
                Active
            </span>

        </div>

        <div class="preference-box">

            <div>

                <h3>
                    Review History
                </h3>

                <p>
                    Manage and view all your reviews.
                </p>

            </div>

            <span class="status">
                Active
            </span>

        </div>

        <div class="preference-box">

            <div>

                <h3>
                    Account Personalization
                </h3>

                <p>
                    Your account is optimized automatically.
                </p>

            </div>

            <span class="status">
                Active
            </span>

        </div>

    </div>

</div>

</div>

</body>
</html>