<?php

if(session_status() === PHP_SESSION_NONE){

    session_start();

}

if(!isset($_SESSION['user_id'])){

    echo "

    <script>

      alert('Please login first!');

      window.location='../LOGIN_SIGNUP/Login/login.php';

    </script>

    ";

    exit;
}

?>