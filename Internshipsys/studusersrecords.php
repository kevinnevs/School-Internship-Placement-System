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
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<title>ALL STUDENT USERS AND THEIR RECORDS</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<body>
<!-- Navbar -->
<div class="topnav" id="Home"> 
		<a href="adminhome.php">
  <img src="backbutton.png" alt="back home" style="width:20px;height:20px;border:0;">
</a> <font color="white">back to home page</font>
        </div>
<font color="orange" size="4">The following are the students users and their records present in the system.</font>
<br>
<br>
<?php
$sql = "SELECT * FROM studregister"; 
if($result = mysqli_query($con, $sql)){ 
if(mysqli_num_rows($result) > 0){ 

echo "<table>"; 
echo "<tr>";  
echo "<th>First Name</th>"; 
echo "<th>Middle Name</th>";
echo "<th>Last Name</th>"; 
echo "<th>Gender</th>";
echo "<th>Email Address</th>";   
echo "<th>Contact</th>"; 
echo "<th>City of Residence</th>"; 
echo "<th>Address</th>"; 
echo "<th>File Upload</th>"; 
echo "<th>Date Of Birth</th>";
echo "<th>Age</th>";
echo "<th>Grade Points</th>"; 
echo "<th>Year Of Graduation</th>"; 
echo "<th>Previous Course</th>"; 
echo "<th>Previous Grade</th>";
echo "<th>Department</th>"; 
echo "<th>Extra Curriculum</th>";
echo "<th>Special skills and Qualification</th>";
echo "<th>Username</th>"; 
echo "<th>Student ID number</th>";      
echo "</tr>"; 

while($row = mysqli_fetch_array($result)){ 
echo "<tr>";  
echo "<td>" . $row['fname'] . "</td>"; 
echo "<td>" . $row['mname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['email'] . "</td>"; 
echo "<td>" . $row['contact'] . "</td>"; 
echo "<td>" . $row['city'] . "</td>"; 
echo "<td>" . $row['address'] . "</td>"; 
echo "<td>" . $row['fileupload'] . "</td>"; 
echo "<td>" . $row['dob'] . "</td>"; 
echo "<td>" . $row['age'] . "</td>"; 
echo "<td>" . $row['grade'] . "</td>"; 
echo "<td>" . $row['yearofpass'] . "</td>"; 
echo "<td>" . $row['prevcourse'] . "</td>"; 
echo "<td>" . $row['prevgrade'] . "</td>"; 
echo "<td>" . $row['dept'] . "</td>"; 
echo "<td>" . $row['extracurr'] . "</td>"; 
echo "<td>" . $row['qualification'] . "</td>"; 
echo "<td>" . $row['uname'] . "</td>"; 
echo "<td>" . $row['sid'] . "</td>"; 
echo "</tr>"; 
} 
echo "</table>";
mysqli_free_result($result); } 
else{ 
echo "No records matching your query were found."; 
} 
} 
else { 
echo "Error: " . $sql . "<br>" . $con->error; 
} 
$con->close(); 
?>	


</div>
</form>
</body>
</html>