<?php 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "computerproject"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error); 
}

$uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$psw = mysqli_real_escape_string($conn, $_REQUEST['psw']);
$compname = mysqli_real_escape_string ($conn, $_REQUEST['compname']);
$est = mysqli_real_escape_string($conn, $_REQUEST['est']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
$hrname = mysqli_real_escape_string($conn, $_REQUEST['hrname']);
$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$pword = mysqli_real_escape_string($conn, $_REQUEST['pword']);

// Encrypt password before storing in database (SECURITY)
$psw = md5($psw);
$pword = md5($pword);

$sql = "INSERT INTO studentusers (Firstname,Lastname,Email,MobileNo) 
VALUES ('$firstname','$lastname','$email','$mobileno')";

$sql = "INSERT INTO companyregistration (compname,est,email,contact,hrname,id,uname,pword)
VALUES ('$compname','$est','$email','$contact','$hrname','$id','$uname','$pword')";


if ($conn->query($sql) === TRUE) { 
	echo "New record created successfully"; 
	} else { 
		echo "Error: " . $sql . "<br>" . $conn->error; 
	} 
	$conn->close(); 

?>