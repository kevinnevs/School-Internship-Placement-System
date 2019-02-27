<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $pword = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $pword != ""){

        $sql_query = "select count(*) as cntUser from studregister where uname='".$uname."' and pword='".$pword."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: studhome.php');
        }else{
            echo "<h4>Invalid username or password<h4>";
        }

    }

}
?>

<html>
<head></head>
<title>Student Login Page</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all"> 
<body>
<h1>AFRICA NAZARENE CAMPUS PLACEMENT SYSTEM</h1>
    <!-- Navbar -->
<div class="topnav" id="Home">
        <a href="homepage.php" target="_self">Home</a> 
        <a href="studlogin.php" target="_self">Student Login</a> 
        <a href="complogin.php" target="_self">Company Login</a> 
        <a href="InternsNews.html" target="_self">Internship News</a> 
        <a href="adminlogin.php" target="_self">Admin Login</a>
        </div>
<div class="container">
    <form method="post" action="">
        <div class="imgcontainer">
    <img src="StudAvatar.png" alt="Avatar" class="avatar">
  </div>
  <div class="container" style="background-color:#f1f1f1">
            <h1>Please Key In Your Credentials To Login</h1>
                <input type="text" id="txt_uname" name="txt_uname" placeholder="Username" />
           
                <input type="password" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
				</div>
    </form>
	<p>Don't have an account?</p>
 <a href="studregister.php">
  <img src="signupbutton.jpg" alt="back home" style="width:100px;height:100px;border:10;">
</body>
</html>