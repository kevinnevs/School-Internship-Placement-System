<?php
include "config.php";

if(isset($_POST['but_submit'])){

$companyid = mysqli_real_escape_string($con, $_POST['companyid']); 
$companyname = mysqli_real_escape_string($con, $_POST['companyname']); 
$jobtitle = mysqli_real_escape_string($con, $_POST['jobtitle']); 
$coursetaking = mysqli_real_escape_string($con, $_POST['coursetaking']);
$salary = mysqli_real_escape_string($con, $_POST['salary']); 
$emailaddress = mysqli_real_escape_string($con, $_POST['emailaddress']);
$contact = mysqli_real_escape_string($con, $_POST['contact']); 

$sql = "INSERT INTO compvacancy (companyid,companyname,jobtitle,coursetaking,salary,emailaddress,contact) VALUES ('$companyid','$companyname','$jobtitle','$coursetaking','$salary','$emailaddress','$contact')";
if ($con->query($sql) === TRUE) { 
echo "<h5>New record created successfully<h5>"; } 
else { 
echo "Error: " . $sql . "<br>" . $con->error; 
}
} 
?>
<html>
<head></head>
<title>Vacancy</title>
<link href="Style.css" rel="stylesheet" type="text/css" media="all">
<body>
<!-- Navbar -->
<div class="topnav" id="Home"> 
		<a href="comphome.php">
  <img src="backbutton.png" alt="back home" style="width:20px;height:20px;border:0;">
</a>        
<font color="white">back to home page</font>
        </div>
<h1>POST NEW VACANCY</h1>
<div>
<font color="orange" size="5">Please fill the form below</font>
</div>
<form method="post" action="compvacancy.php">
<div class="container">
<b>Company ID</b>
<input type="text" name="companyid" id="companyid" required>
<br>
<b>Company Name</b>
<input type="text" name="companyname" id="companyname" required>
<br>
<b>Job Title</b>
<input type="text" name="jobtitle" id="jobtitle" required>
<br>
<b>Course Taking</b>
<input type="text" name="coursetaking" id="coursetaking" required>
<br>
<b>Salary</b>
<input type="text" name="salary" id="salary" required>
<br>
<b>Email Address</b>
<input type="text" name="emailaddress" id="emailaddress" required>
<br>
<b>Contact</b></label>
<input type="text" name="contact" id="contact" required>
<br>
<input type="submit" value="Submit" name="but_submit" id="but_submit" />
</div>
</form>

</body>
</html>
