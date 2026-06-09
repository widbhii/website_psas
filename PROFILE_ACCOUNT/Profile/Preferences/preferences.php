<?php

include "../../../backend/session.php";
include "../../../backend/config.php";

if(!isset($_SESSION['user_id'])){
    header("Location: ../../../LOGIN_SIGNUP/Login/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$query = mysqli_query(

    $conn,

    "SELECT
        language,
        theme,
        location_preference
    FROM users
    WHERE id='$user_id'"

);

$user = mysqli_fetch_assoc($query);

$menu = "preferences";

/* THEME */

$current_theme =
strtolower(
    $user['theme']
);

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

<body class="<?php echo $current_theme; ?>">

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

        <?php
        if(isset($_GET['success'])){
        ?>
        <p
        style="
        color:green;
        margin-bottom:20px;
        font-weight:600;
        "
        >
            Preferences saved successfully!
        </p>
        <?php
        }
        ?>

        <form

        class="preferences-form"

        action="../../../backend/save_preferences.php"

        method="POST"

        >

            <!-- LANGUAGE -->

            <div class="input-group">

                <label>
                    Language
                </label>

                <select name="language">

                    <option
                    value="English"
                    <?php
                    if($user['language']=="English"){
                        echo "selected";
                    }
                    ?>
                    >
                        English
                    </option>

                    <option
                    value="Indonesia"
                    <?php
                    if($user['language']=="Indonesia"){
                        echo "selected";
                    }
                    ?>
                    >
                        Indonesia
                    </option>

                </select>

            </div>

            <!-- THEME -->

            <div class="input-group">

                <label>
                    Theme
                </label>

                <select name="theme">

                    <option
                    value="Default"
                    <?php
                    if($user['theme']=="Default"){
                        echo "selected";
                    }
                    ?>
                    >
                        Default
                    </option>

                    <option
                    value="Dark"
                    <?php
                    if($user['theme']=="Dark"){
                        echo "selected";
                    }
                    ?>
                    >
                        Dark
                    </option>

                </select>

            </div>

            <!-- LOCATION -->

            <div class="input-group">

                <label>
                    Location Preference
                </label>

                <label class="switch">

                    <input
                    type="checkbox"
                    name="location_preference"

                    <?php
                    if($user['location_preference']==1){
                        echo "checked";
                    }
                    ?>

                    >

                    <span class="slider"></span>

                </label>

            </div>

            <button
            type="submit"
            class="save-profile-btn"
            >
                Save Preferences
            </button>

        </form>

    </div>

</div>

</body>
</html>