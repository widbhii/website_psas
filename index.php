<?php

session_start();

if(isset($_SESSION['user_id'])){

    header("Location: HOME/home.php");

}else{

    header("Location: LOGIN_SIGNUP/Login/login.php");

}

exit;

?>