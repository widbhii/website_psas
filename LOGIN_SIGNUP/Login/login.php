<?php

session_start();

if(isset($_SESSION['user_id'])){

  header("Location: ../../HOME/home.php");
  exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - ChillZone</title>

<link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500&family=Alatsi&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../style.css">
<link rel="stylesheet" href="login.css">

</head>

<body>

<section class="login">

<div class="container login-wrap">

<div class="login-left">

<h2>Welcome Back</h2>

<p>
Welcome back! Please enter your details.
</p>

<?php
if(isset($_GET['error'])){
?>
<p style="color:red;margin-bottom:15px;">
Email atau Password salah!
</p>
<?php
}
?>

<form
action="../../backend/login.php"
method="POST"
>

<label>Email</label>

<input
type="email"
name="email"
placeholder="Enter your email"
required
>

<label>Password</label>

<div class="password-box">

<input
type="password"
name="password"
id="loginPassword"
placeholder="Enter Password"
required
>

<span
class="toggle-password"
onclick="toggleLoginPassword()"
>
👁
</span>

</div>

<button
type="submit"
class="btn login-btn"
>
Login
</button>

<p class="signup">

Don't have an account?

<a href="../Signup/signup.php">
Sign Up
</a>

</p>

</form>

</div>

<div class="login-right">

<img
src="../../KEBUTUHAN ELEMENT/ChillZOne.png"
alt=""
>

</div>

</div>

</section>

<script>

function toggleLoginPassword(){

const passwordInput =
document.getElementById(
"loginPassword"
);

if(passwordInput.type === "password"){

passwordInput.type = "text";

}
else{

passwordInput.type = "password";

}

}

</script>

</body>
</html>