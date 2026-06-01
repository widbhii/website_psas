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

<title>Sign Up - ChillZone</title>

<link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Poppins:wght@300;400;500&family=Alatsi&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../style.css">
<link rel="stylesheet" href="signup.css">

</head>

<body>

<section class="signup-section">

<div class="container signup-wrap">

<div class="signup-left">

<h2>Get Started Now</h2>

<p>
Please enter your details.
</p>

<?php
if(isset($_GET['success'])){
?>
<p style="color:green;margin-bottom:15px;">
Account berhasil dibuat. Silakan login.
</p>
<?php
}
?>

<form
action="../../backend/signup.php"
method="POST"
>

<label>Name</label>

<input
type="text"
name="username"
placeholder="Enter your name"
required
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
id="signupPassword"
placeholder="Create Password"
required
>

<span
class="toggle-password"
onclick="toggleSignupPassword()"
>
👁
</span>

</div>

<small class="password-note">
Must be at least 8 characters.
</small>

<button
type="submit"
class="signup-btn"
>
Create Account
</button>

<p class="signin">

Already have an account?

<a href="../Login/login.php">
Sign In
</a>

</p>

</form>

</div>

<div class="signup-right">

<img
src="../../KEBUTUHAN ELEMENT/ChillZOne.png"
alt=""
>

</div>

</div>

</section>

<script>

function toggleSignupPassword(){

const passwordInput =
document.getElementById(
"signupPassword"
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