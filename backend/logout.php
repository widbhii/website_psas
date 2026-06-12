<?php

session_start();

/* HAPUS SEMUA SESSION */
$_SESSION = [];

/* HANCURKAN SESSION */
session_destroy();

/* KEMBALI KE HALAMAN LOGIN */
header(
    "Location: ../LOGIN_SIGNUP/Login/login.php"
);

exit;

?>