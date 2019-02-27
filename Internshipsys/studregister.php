<?php
include "config.php";

if(isset($_POST['but_submit'])){

$fname = mysqli_real_escape_string($con, $_POST['fname']); 
$mname = mysqli_real_escape_string($con, $_POST['mname']); 
$lname = mysqli_real_escape_string($con, $_POST['lname']); 
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$email = mysqli_real_escape_string($con, $_POST['email']); 
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']); 
$fileupload = mysqli_real_escape_string($con, $_POST['fileupload']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$age = mysqli_real_escape_string($con, $_POST['age']);
$grade = mysqli_real_escape_string($con, $_POST['grade']);
$yearofpass = mysqli_real_escape_string($con, $_POST['yearofpass']);
$prevcourse = mysqli_real_escape_string($con, $_POST['prevcourse']);
$prevgrade = mysqli_real_escape_string($con, $_POST['prevgrade']);
$dept = mysqli_real_escape_string($con, $_POST['dept']);
$extracurr = mysqli_real_escape_string($con, $_POST['extracurr']);
$qualification = mysqli_real_escape_string($con, $_POST['qualification']);
$uname = mysqli_real_escape_string($con, $_POST['uname']);
$pword = mysqli_real_escape_string($con, $_POST['pword']);
$sid = mysqli_real_escape_string($con, $_POST['sid']);

$sql = "INSERT INTO studregister (fname,mname,lname,gender,email,contact,city,fileupload,dob,age,grade,yearofpass,prevcourse,prevgrade,dept,extracurr,qualification,uname,pword,sid) VALUES ('$fname','$mname','$lname','$gender','$email','$contact','$city','$fileupload','$dob','$age','$grade','$yearofpass','$prevcourse','$prevgrade','$dept','$extracurr','$qualification','$uname','$pword','$sid')";
if ($con->query($sql) === TRUE) { 
echo "<h5>New record created successfully<h5>"; } 
else { 
echo "Error: " . $sql . "<br>" . $con->error; 
}
} 
?>


<html>
<head></head>
<title>Student Registration</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<body>
<h1>STUDENT REGISTRATION FORM</h1>
 <!-- Navbar -->
 <div class="topnav" id="Home">
    <a href="homepage.php" target="_self">Home</a> 
    <a href="studLogin.php" target="_self">Student Login</a> 
    <a href="complogin.php" target="_self">Company Login</a> 
    <a href="InternsNews.html" target="_self">Internship News</a> 
    <a href="adminlogin.php" target="_blank">Admin Login</a>
    </div>

<form method="post" action="studregister.php">
<div class="container">
<b>First Name</b>
<input type="text" placeholder="Enter your name" name="fname" id="fname" required>
<br>
<b>Middle Name</b>
<input type="text" placeholder="Enter the name" name="mname" id="mname" required>
<br>
<b>Last Name</b>
<input type="text" placeholder="Enter name" name="lname" id="lname" required>
<br>
<br>
<b>Gender</b>
<select name="gender" id="gender">
<option value="Male" selected>Male</option>
<option value="Female" selected>Female</option>
</select>
<br>
<br>
<b>Email</b>
<input type="text" placeholder="Email address" name="email" id="email" required>
<br>
<b>Contact No</b>
<input type="text" placeholder="Number" name="contact" id="contact" required>
<br>
<b>City</b>
<input type="text" placeholder="city" name="city" id="city" required>
<br>
<b>Address</b>
<input type="text" placeholder="Your address" name="address" id="address" required>
<br>
<br>
<b>Photo</b>
<input type="file" name="fileupload" id="fileupload" accept="image/*" />
<br>
<br>
<br>
<b>Date of Birth</b>
<input type="datetime" placeholder="year,month,date" name="dob" id="dob" required>
<br>
<br>
<b>Age</b>
<input type="text" placeholder="Your age" name="age" id="age" required>
<br>
<b>KCSE GRADE</b>
<input type="text" name="grade" id="grade" required>
<br>
<b>Year of Passing</b>
<input type="text" name="yearofpass" id="yearofpass" required>
<br>
<b>Previous Course</b>
<input type="text" name="prevcourse" id="prevcourse" required>
<br>
<b>Previous Course GPA</b>
<input type="text" name="prevgrade" id="prevgrade" required>
<br>
<br>
<b>Your Department</b>
<select name="dept" id="dept">
    <option value="Arts" selected>Arts</option>
    <option value="Computer Science" selected>Computer Science</option>
    <option value="Criminology" selected>Criminology</option>
    <option value="Business Administration" selected>Business Administration</option>
    <option value="Mass Communication" selected>Mass Communication</option>
    <option value="Theology" selected>Theology</option>
    <option value="Education" selected>Education</option>
    </select>
    <br>
    <br>
<b>Extra Curriculum</b>
<input type="text" placeholder="Your extra Curriculum Activities" name="extracurr" id="extracurr" required>
<br>
<b>Other qualification</b>
<input type="text" name="qualification" id="qualification" required>
<br>
<b>Choose Username</b>
<input type="text" name="uname" id="uname" required>
<br>
<b>Password</b>
<input type="password" name="pword" id="pword" required>
<br>
<b>Student ID</b>
<input type="text" placeholder="Your Student ID Number" name="sid" id="sid" required>
<br>
<input type="submit" value="Submit" name="but_submit" id="but_submit" />
</div>
</form>
</body>
</html>