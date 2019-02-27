<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $pword = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $pword != ""){

        $sql_query = "select count(*) as cntUser from adminuser where uname='".$uname."' and pword='".$pword."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: adminhome.php');
        }else{
            echo "<h4>Invalid username or password<h4>";
        }

    }

}
?>


<html>
<head></head>
<title>Admin Login Page</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all"> 
<body>

<h2>Admin Login Form</h2>
 <!-- Navbar -->
<div class="topnav" id="Home">
        <a href="homepage.php" target="_self">Home</a> 
        <a href="studlogin.php" target="_self">Student Login</a> 
        <a href="complogin.php" target="_self">Company Login</a> 
        <a href="InternsNews.html" target="_self">Internship News</a> 
        <a href="adminlogin.php" target="_self">Admin Login</a>
        </div>

  <form method="post" action="">
    <div class="imgcontainer">
      <img src="adminloginlogo.png" alt="Avatar" class="avatar">
    </div>

  <div class="container" style="background-color:#f1f1f1">
      <b>Username</b>
      <input type="text" id="txt_uname" placeholder="Enter Username" name="txt_uname" required>

      <b>Password</b>
      <input type="password" id="txt_pwd" placeholder="Enter Password" name="txt_pwd" required>
      <br>
	  <br>
      <input type="submit" value="Submit" name="but_submit" id="but_submit" />
    </div>
  </form>
</div>

</body>
</html>
