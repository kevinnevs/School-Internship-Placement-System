<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>


<html>
<head></head>
<title>Company Page</title>
<link href="Style.css" rel="stylesheet" type="text/css" media="all"> 
<body>
<h1>WELCOME!</h1>
<div class="container">
<p>What would you like to do?<p>
   <a href="studvacancy.php">
  <img src="studdetcomplogo.jpg" alt="student details" style="width:150px;height:150px;border:0;"></a>
<br>
<br>
<font color="green">VIEW INTERNSHIP VACANCY</font>
<br>
<br>
<a href="newvaccomp.php">
  <img src="newvaccomplogo.png" alt="company details" style="width:150px;height:150px;border:0;"></a>
  <br>
  <br>
<font color="green">VIEW ALL COMPANIES</font>
<br>
<br>
</body>
<form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
</html>