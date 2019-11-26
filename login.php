<?php
session_start();
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
include "koneksi.php"; 
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'";
	$result = mysqli_query($connect,$query);
	$cek = mysqli_num_rows($result);

	if($cek > 0){
		session_start();
		$_SESSION['username'] = $username;
		header("Location: index.php");
	}
}
if(isset($session['username'])){ // Jika session username ada berarti dia sudah login
  header("location: index.php"); // Kita Redirect ke halaman welcome.php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login | Pocket Medicines</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<style>
a.fa {
  padding: 10px;
  width: 50px;
  text-align: center;
  margin: 5px 1px;
  border-radius: 50%;
}
a.fa: hover {
    opacity: 0.7;
}
a.fa-facebook {
  background: #3B5998;
  color: white;
}
a.fa-twitter {
  background: #55ACEE;
  color: white;
}
a.fa-instagram {
  background: #125688;
  color: white;
}
a.fa-tumblr {
  background: #2c4762;
  color: white;
}
a.fa-skype {
  background: #00aff0;
  color: white;
}
</style>

<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-190 p-b-30">
<form class="login100-form validate-form"  method="post">
<div class="login100-form-avatar">
<img src="logo.jpg" alt="AVATAR">
</div>
<span class="login100-form-title p-t-20 p-b-45">
POCKET MEDICINES
</span>
<div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
<input class="input100" type="text" name="username" placeholder="Username">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user"></i>
</span>
</div>

<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock"></i>
</span>
</div>

<div class="container-login100-form-btn p-t-10">
	<input type="submit" name="login" value="Login" class="login100-form-btn">
</div>
<div class="text-center w-full p-t-25 p-b-230">
<a href="register.php" class="txt1">
<b>Have no account? Register now
</a><br><br><br><br><br>

<span class="login100-form-title p-t-10 p-b-20">
	<a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-tumblr"></a>
    <a href="#" class="fa fa-skype"></a>
</span>
</div>


</div>
</form>
</div>
</div>
</div>

<script src="vendor/jquery/jquery-3.2.1.min.js" type="54f9624b8c7a3482c21ceaef-text/javascript"></script>

<script src="vendor/bootstrap/js/popper.js" type="54f9624b8c7a3482c21ceaef-text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="54f9624b8c7a3482c21ceaef-text/javascript"></script>

<script src="vendor/select2/select2.min.js" type="54f9624b8c7a3482c21ceaef-text/javascript"></script>

<script src="js/main.js" type="54f9624b8c7a3482c21ceaef-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="54f9624b8c7a3482c21ceaef-text/javascript"></script>
<script type="54f9624b8c7a3482c21ceaef-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="54f9624b8c7a3482c21ceaef-|49" defer=""></script></body>
</html>
