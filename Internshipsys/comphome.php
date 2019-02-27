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
 <a href="studdetcomp.php">
  <img src="studdetailslogo.jpg" alt="student details" style="width:150px;height:150px;border:0;"></a>
<br>
<br>
<font color="green">VIEW STUDENT DETAILS</font>
<br>
<br>
<a href="compvacancy.php">
  <img src="postvacancylogo.png" alt="company details" style="width:150px;height:150px;border:0;"></a>
  <br>
  <br>
<font color="green">POST NEW VACANCY</font>
<br>
<br>
<form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
</body>
</html>