<?php

include "session.php";
include "config.php";

/* =========================
   CEK LOGIN
========================= */

if(!isset($_SESSION['user_id'])){
    header("Location: ../LOGIN_SIGNUP/Login/login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

/* =========================
   DATA FORM
========================= */

$username =
mysqli_real_escape_string(
$conn,
$_POST['username']
);

$email =
mysqli_real_escape_string(
$conn,
$_POST['email']
);

$password =
$_POST['password'];

/* =========================
   QUERY DASAR
========================= */

$sql = "

UPDATE users

SET

username='$username',

email='$email'

";

/* =========================
   PASSWORD
========================= */

if(!empty($password)){

    $hashed_password =
    password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    $sql .= ",

    password='$hashed_password'

    ";

}

/* =========================
   PROFILE IMAGE
========================= */

if(

isset($_FILES['profile_image'])

&&

$_FILES['profile_image']['error'] == 0

){

    $file_name =
    time()
    .
    "_"
    .
    basename(
        $_FILES['profile_image']['name']
    );

    $target_dir =
    "../uploads/profile/";

    if(
    !is_dir($target_dir)
    ){
        mkdir(
            $target_dir,
            0777,
            true
        );
    }

    $target_file =
    $target_dir
    .
    $file_name;

    move_uploaded_file(

        $_FILES['profile_image']['tmp_name'],

        $target_file

    );

    $sql .= ",

    profile_image='$file_name'

    ";

}

/* =========================
   UPDATE USER
========================= */

$sql .= "

WHERE id='$user_id'

";

mysqli_query(
$conn,
$sql
);

/* =========================
   REDIRECT
========================= */

header(
"Location: ../PROFILE_ACCOUNT/Profile_Settings/profile-settings.php?success=1"
);

exit;

?>