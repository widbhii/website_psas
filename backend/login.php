<?php

session_start();

include "koneksi.php";

/* =========================
   AMBIL DATA FORM
========================= */

$email = trim($_POST['email']);

$password = trim($_POST['password']);

/* =========================
   VALIDASI KOSONG
========================= */

if(empty($email) || empty($password)){

    echo "
    <script>

      alert('Data harus diisi!');

      window.location='../LOGIN_SIGNUP/Login/login.php';

    </script>
    ";

    exit;
}

/* =========================
   CEK EMAIL
========================= */

$sql = "SELECT * FROM users
        WHERE email='$email'";

$result = mysqli_query($conn, $sql);

/* =========================
   CEK USER ADA
========================= */

if(mysqli_num_rows($result) == 1){

    /* AMBIL DATA USER */

    $user =
    mysqli_fetch_assoc($result);

    /* =========================
       CEK PASSWORD HASH
    ========================= */

    if(

      password_verify(
      $password,
      $user['password']
      )

    ){

        /* =========================
           SESSION LOGIN
        ========================= */

        $_SESSION['email']
        = $user['email'];

        $_SESSION['user_id']
        = $user['id'];

        $_SESSION['username']
        = $user['username'];

        /* =========================
           LOGIN BERHASIL
        ========================= */

        header("Location: ../HOME/home.php");

        exit;

    }

    else{

        /* PASSWORD SALAH */

        echo "
        <script>

          alert('Email atau Password salah!');

          window.location='../LOGIN_SIGNUP/Login/login.php';

        </script>
        ";

        exit;

    }

}

else{

    /* EMAIL TIDAK ADA */

    echo "
    <script>

      alert('Email atau Password salah!');

      window.location='../LOGIN_SIGNUP/Login/login.php';

    </script>
    ";

    exit;
}

?>