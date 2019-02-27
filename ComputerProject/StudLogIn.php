<?php
include("serverer.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  //username and password sent from form
  $myusername = mysqli_real_escape_string($conn,$_POST['username']);
  $mypassword = mysqli_real_escape_string($conn,$_POST['password']);


  $sql = "SELECT username FROM studentusers WHERE username = '$myusername' and password = '$password'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];

  $count = mysqli_num_rows($result);

  //if result matched $myusername and $mypassword, table row must be 1 row

if($count == 1) {
  session_register("$myusername");
  $_SESSION['login_user'] = $myusername;

  header("location: welcome.php");
}
else{
  $error = "YOUR LOGIN NAME OR PASSWORD IS INVALID! :(";
}
}
?>
<html>
<head></head>
<title>Campus Placement System</title>
<link href="Style.css" rel="stylesheet" type="text/css" media="all">
<body>
        <h1>AFRICA NAZARENE CAMPUS PLACEMENT SYSTEM</h1>
    <!-- Navbar -->
<div class="topnav" id="Home">
        <a href="Home.php" target="_self">Home</a> 
        <a href="StudLogin.php" target="_self">Student Login</a> 
        <a href="CompanyLogin.php" target="_self">Company Login</a> 
        <a href="InternsNews.php" target="_self">Internship News</a> 
        <a href="AdminLogin.php" target="_blank">Admin Login</a>
        </div>

<h2>STUDENT LOGIN AND REGISTRATION</h2>
<p>Please Log in or register your Account</p>
  <div class="imgcontainer">
    <img src="StudAvatar.png" alt="Avatar" class="avatar">
  </div>

<form action = "" method = "post">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button><br>
    <span class="password"><a href="#">Forgot password?</a></span><br>
    <span Class="register"><a href="StudReg.php">Register Here If you do not have an account</a></span>
  </div>
</form>
</body>
</html>
