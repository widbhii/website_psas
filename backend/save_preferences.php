<?php

include "session.php";
include "config.php";

if(!isset($_SESSION['user_id'])){
    exit();
}

$user_id = $_SESSION['user_id'];

$language = mysqli_real_escape_string(
    $conn,
    $_POST['language']
);

$theme = mysqli_real_escape_string(
    $conn,
    $_POST['theme']
);

$location_preference =
isset($_POST['location_preference'])
? 1
: 0;

mysqli_query(

    $conn,

    "UPDATE users SET

    language='$language',
    theme='$theme',
    location_preference='$location_preference'

    WHERE id='$user_id'"

);

header(
    "Location: ../PROFILE_ACCOUNT/Profile/Preferences/preferences.php?success=1"
);

exit();

?>