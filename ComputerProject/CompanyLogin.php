<html>
<head></head>
<title>Company Login</title>
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

<h2>COMPANY LOGIN AND REGISTRATION</h2>
<p>Please Log in or register your Account</p>
<form action="action_page.php">
  <div class="imgcontainer">
    <img src="CompanyAvatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button><br>
    <span class="psw"><a href="#">Forgot password?</a></span><br>
    <span Class="register"><a href="CompReg.html">Register Here If you do not have an account</a></span>
  </div>
</form>
</body>
</html>