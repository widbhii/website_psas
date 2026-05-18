<?php

include "config.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(strlen($password) < 8){

    echo "
    <script>
      alert('Password harus minimal 8 karakter!');
      window.location='../LOGIN_SIGNUP/Signup/signup.html';
    </script>
    ";

    exit;
}

$sql = "INSERT INTO users(username,email,password)
VALUES('$username','$email','$password')";

mysqli_query($conn, $sql);

echo "Signup successful";

?>