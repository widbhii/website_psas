<?php

session_start();

include "config.php";

$email = trim($_POST['email']);
$password = trim($_POST['password']);

/* VALIDASI KOSONG */

if(empty($email) || empty($password)){

    echo "
    <script>
      alert('Data harus diisi!');
      window.location='../LOGIN_SIGNUP/Login/login.html';
    </script>
    ";

    exit;
}

/* CEK USER */

$sql = "SELECT * FROM users
        WHERE email='$email'
        AND password='$password'";

$result = mysqli_query($conn, $sql);

/* LOGIN BERHASIL */

if(mysqli_num_rows($result) == 1){

    $_SESSION['email'] = $email;

    header("Location: ../HOME/home.html");
    exit;

} else {

    /* LOGIN GAGAL */

    echo "
    <script>
      alert('Email atau Password salah!');
      window.location='../LOGIN_SIGNUP/Login/login.html';
    </script>
    ";

    exit;
}

?>