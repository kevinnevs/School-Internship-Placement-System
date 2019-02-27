<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $pword = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $pword != ""){

        $sql_query = "select count(*) as cntUser from compregister where uname='".$uname."' and pword='".$pword."'";
        $result = mysqli_query($con,$sql_query);
		if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: comphome.php');
        }else{
            echo "<h4>Invalid username or password<h4>";
        }

    }

}
?>

<html>
<head></head>
<title>Company Login Page</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all"> 
<body>
<h1>AFRICA NAZARENE CAMPUS PLACEMENT SYSTEM</h1>
    <!-- Navbar -->
<div class="topnav" id="Home">
        <a href="homepage.php" target="_self">Home</a> 
        <a href="studlogin.php" target="_self">Student Login</a> 
        <a href="Complogin.php" target="_self">Company Login</a> 
        <a href="InternsNews.html" target="_self">Internship News</a> 
        <a href="adminlogin.php" target="_blank">Admin Login</a>
        </div>
<div class="container">
    <form method="post" action="">
        <div class="imgcontainer">
    <img src="CompanyAvatar.png" alt="Avatar" class="avatar">
  </div>
  <div class="container" style="background-color:#f1f1f1">
            <h1>Please Key In Your Credentials To Login</h1>
                <input type="text" id="txt_uname" name="txt_uname" placeholder="Username" />
           
                <input type="password" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
				</div>
    </form>
<p>Don't have an account?</p>
 <a href="compregister.php">
  <img src="signupbutton.jpg" alt="back home" style="width:100px;height:100px;border:10;">
</body>
</html>