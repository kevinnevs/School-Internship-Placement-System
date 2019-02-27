<?php
include "config.php";

if(isset($_POST['but_submit'])){

$compname = mysqli_real_escape_string($con, $_POST['compname']); 
$est = mysqli_real_escape_string($con, $_POST['est']); 
$email = mysqli_real_escape_string($con, $_POST['email']); 
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$hrname = mysqli_real_escape_string($con, $_POST['hrname']); 
$id = mysqli_real_escape_string($con, $_POST['id']);
$uname = mysqli_real_escape_string($con, $_POST['uname']); 
$pword = mysqli_real_escape_string($con, $_POST['pword']);

$sql = "INSERT INTO compregister (compname,est,email,contact,id,uname,pword) VALUES ('$compname','$est','$email','$contact','$id','$uname','$pword')";
if ($con->query($sql) === TRUE) { 
echo "<h5>You have been registered successfully<h5>"; } 
else { 
echo "Error: " . $sql . "<br>" . $con->error; 
}
} 
?>

<html>
<head></head>
<title>COMPANY REGISTRATION</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<body>
<h1>COMPANY REGISTRATION FORM</h1>
 <!-- Navbar -->
 <div class="topnav" id="Home">
    <a href="homepage.php" target="_self">Home</a> 
    <a href="studlogin.php" target="_self">Student Login</a> 
    <a href="complogin.php" target="_self">Company Login</a> 
    <a href="InternsNews.html" target="_self">Internship News</a> 
    <a href="adminlogin.php" target="_blank">Admin Login</a>
    </div>
    
<form method="post" action="compregister.php">
<div class="container">
<b>Company Name</b>
<input type="text" name="compname" placeholder="Enter the Company name" id="compname" required>
<br>
<b>Established</b>
<input type="text" name="est" placeholder="Established date" id="est" required>
<br>
<b>Email</b>
<input type="text" name="email" placeholder="email address" id="email" required>
<br>
<b>Contact</b>
<input type="text" name="contact" placeholder="Contact details" id="contact" required>
<br>
<b>HR Name</b>
<input type="text" name="hrname" placeholder="HR name" id="hrname" required>
<br>
<b>Your ID</b>
<input type="text" name="id" placeholder="Enter ID" id="id" required>
<br>
<b>Username</b>
<input type="text" name="uname" placeholder="Enter Username" id="uname" required>
<br>
<b>Password</b>
<input type="password" name="pword" placeholder="Enter Password" id="pword" required>
<br>
<input type="submit" value="Submit" name="but_submit" id="but_submit" />
</div>
</form>

</body>
</html>