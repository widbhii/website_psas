<?php

include "../../backend/session.php";

session_start();

include "../../backend/config.php";

/* AMBIL DATA USER */

$user_id = $_SESSION['user_id'];

$query =
mysqli_query(
$conn,
"SELECT * FROM users
WHERE id='$user_id'"
);

$user =
mysqli_fetch_assoc($query);

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

  <!-- FONT -->
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
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Alatsi&display=swap"
    rel="stylesheet"
  >

  <!-- CSS -->
  <link
    rel="stylesheet"
    href="profile-settings.css"
  >

</head>

<body>

<div class="settings-container">

  <!-- SIDEBAR -->
  <div class="sidebar">

    <a href="profile-settings.php">

      <button class="sidebar-btn active">
        Account Settings
      </button>

    </a>

    <a href="#">

      <button class="sidebar-btn">
        Preferences
      </button>

    </a>

    <a href="../Saved_Content/saved.php">

      <button class="sidebar-btn">
        Saved Content
      </button>

    </a>

    <a href="#">

      <button class="sidebar-btn">
        Support
      </button>

    </a>

    <a href="../../backend/logout.php">

      <button class="sidebar-btn">
        Log Out
      </button>

    </a>

  </div>

  <!-- CONTENT -->
  <div class="settings-content">

    <!-- TITLE -->
    <h1>
      Account Settings
    </h1>

    <!-- PROFILE -->
    <div class="profile-section">

      <!-- IMAGE -->
      <div class="profile-image-box">

        <img
          src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?q=80&w=2043&auto=format&fit=crop"
          class="profile-image"
        >

        <img
          src="../../KEBUTUHAN ELEMENT/profile.png"
          class="edit-icon"
        >

      </div>

      <!-- INFO -->
      <div class="profile-info">

        <h2>
          <?php
          echo $user['username'];
          ?>
        </h2>

        <p>
          <?php
          echo $user['email'];
          ?>
        </p>

      </div>

    </div>

    <!-- FORM -->
    <form
      class="settings-form"
      action="../../backend/update_profile.php"
      method="POST"
    >

      <!-- USERNAME -->
      <div class="input-group">

        <label>
          Change Username
        </label>

        <input
          type="text"
          name="username"
          placeholder="Change your Name"
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
          placeholder="Change your Email"
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
          placeholder="Change your Password"
        >

      </div>

      <!-- BUTTON -->
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