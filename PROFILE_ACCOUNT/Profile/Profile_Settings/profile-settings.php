<?php

include "../../../backend/session.php";
include "../../../backend/config.php";

if(!isset($_SESSION['user_id'])){
    header("Location: ../../../LOGIN_SIGNUP/Login/login.php");
    exit();
}

$menu = "account";

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
Account Settings - ChillZone
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
href="profile-settings.css"
>

</head>

<body>

<div class="settings-container">

<?php include "../../../sidebar.php"; ?>
    
    <!-- CONTENT -->
    <div class="settings-content">

        <a
        href="../Profile_Menu/profile-menu.php"
        class="back-link"
        >
            ← Back to Profile
        </a>

        <h1>
            Account Settings
        </h1>

        <!-- PROFILE -->
        <div class="profile-section">

            <div class="profile-image-box">

                <?php
                if(!empty($user['profile_image'])){
                ?>

                <img
                src="../../../uploads/<?php echo $user['profile_image']; ?>"
                class="profile-image"
                >

                <?php
                }
                else{
                ?>

                <img
                src="../../../KEBUTUHAN ELEMENT/profile.png"
                class="profile-image"
                >

                <?php
                }
                ?>

            </div>

            <div class="profile-info">

                <h2>
                    <?php echo $user['username']; ?>
                </h2>

                <p>
                    <?php echo $user['email']; ?>
                </p>

            </div>

        </div>

        <!-- FORM -->
        <form

        class="settings-form"

        action="../../../backend/update_profile.php"

        method="POST"

        enctype="multipart/form-data"

        >

            <!-- PHOTO -->

            <div class="input-group">

                <label>
                    Change Profile Photo
                </label>

                <input
                type="file"
                name="profile_image"
                >

            </div>

            <!-- USERNAME -->

            <div class="input-group">

                <label>
                    Change Username
                </label>

                <input
                type="text"
                name="username"
                value="<?php echo $user['username']; ?>"
                >

            </div>

            <!-- EMAIL -->

            <div class="input-group">

                <label>
                    Change Email
                </label>

                <input
                type="email"
                name="email"
                value="<?php echo $user['email']; ?>"
                >

            </div>

            <!-- PASSWORD -->

            <div class="input-group">

                <label>
                    Change Password
                </label>

                <input
                type="password"
                name="password"
                placeholder="Leave blank if you don't want to change password"
                >

            </div>

            <button
            type="submit"
            class="save-profile-btn"
            >
                Save Changes
            </button>

        </form>

    </div>

</div>

</body>
</html>