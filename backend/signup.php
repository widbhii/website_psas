<?php

include "config.php";

/* =========================
   AMBIL DATA FORM
========================= */

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

/* =========================
   VALIDASI INPUT KOSONG
========================= */

if(
    empty($username) ||
    empty($email) ||
    empty($password)
){

    echo "
    <script>
      alert('Semua data wajib diisi!');
      window.location='../LOGIN_SIGNUP/Signup/signup.html';
    </script>
    ";

    exit;
}

/* =========================
   VALIDASI PASSWORD
========================= */

if(strlen($password) < 8){

    echo "
    <script>
      alert('Password harus minimal 8 karakter!');
      window.location='../LOGIN_SIGNUP/Signup/signup.html';
    </script>
    ";

    exit;
}

/* =========================
   VALIDASI USERNAME
   TIDAK BOLEH ADA SPASI
========================= */

for($i = 0; $i < strlen($username); $i++){

    if($username[$i] == " "){

        echo "
        <script>
          alert('Username tidak boleh memakai spasi!');
          window.location='../LOGIN_SIGNUP/Signup/signup.html';
        </script>
        ";

        exit;
    }

}

/* =========================
   VALIDASI PASSWORD
   HARUS ADA ANGKA
========================= */

$hasNumber = false;

for($i = 0; $i < strlen($password); $i++){

    if(is_numeric($password[$i])){

        $hasNumber = true;

    }

}

if($hasNumber == false){

    echo "
    <script>
      alert('Password harus memiliki angka!');
      window.location='../LOGIN_SIGNUP/Signup/signup.html';
    </script>
    ";

    exit;
}

/* =========================
   AMBIL DATA USER
========================= */

$check =
mysqli_query($conn, "SELECT * FROM users");

/* =========================
   LOOPING CEK EMAIL
   & USERNAME
========================= */

while($row = mysqli_fetch_assoc($check)){

    /* EMAIL SUDAH ADA */

    if($row['email'] == $email){

        echo "
        <script>
          alert('Email sudah terdaftar!');
          window.location='../LOGIN_SIGNUP/Signup/signup.html';
        </script>
        ";

        exit;
    }

    /* USERNAME SUDAH ADA */

    if($row['username'] == $username){

        echo "
        <script>
          alert('Username sudah dipakai!');
          window.location='../LOGIN_SIGNUP/Signup/signup.html';
        </script>
        ";

        exit;
    }

}

/* =========================
   INSERT USER BARU
========================= */

/* HASH PASSWORD */

$passwordHash =
password_hash(
$password,
PASSWORD_DEFAULT
);

/* INSERT */

$sql = "INSERT INTO users(username,email,password)

VALUES(

'$username',
'$email',
'$passwordHash'

)";

mysqli_query($conn, $sql);

/* =========================
   SIGNUP BERHASIL
========================= */

echo "
<script>
  alert('Signup berhasil!');
  window.location='../LOGIN_SIGNUP/Login/login.html';
</script>
";

?>