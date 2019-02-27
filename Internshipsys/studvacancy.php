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
<title>Vacancy</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<body>
<!-- Navbar -->
<div class="topnav" id="Home"> 
		<a href="studhome.php">
  <img src="backbutton.png" alt="back home" style="width:20px;height:20px;border:0;">
</a> <font color="white">back to home page</font>
        </div>
<font color="orange" size="4">The following are the Companies that have posted vacancy position, contact them to be enrolled.</font>
<br>
<br>
<?php
$sql = "SELECT * FROM compvacancy"; 
if($result = mysqli_query($con, $sql)){ 
if(mysqli_num_rows($result) > 0){ 

echo "<table>"; 
echo "<tr>";  
echo "<th>Company ID</th>"; 
echo "<th>Company Name</th>";
echo "<th>Internship Position</th>"; 
echo "<th>Course Eligibility</th>";
echo "<th>Salary Range</th>";   
echo "<th>Email Address</th>"; 
echo "<th>Mobile No</th>"; 
echo "</tr>"; 

while($row = mysqli_fetch_array($result)){ 
echo "<tr>";  
echo "<td>" . $row['companyid'] . "</td>"; 
echo "<td>" . $row['companyname'] . "</td>";
echo "<td>" . $row['jobtitle'] . "</td>";
echo "<td>" . $row['coursetaking'] . "</td>";
echo "<td>" . $row['salary'] . "</td>"; 
echo "<td>" . $row['emailaddress'] . "</td>"; 
echo "<td>" . $row['contact'] . "</td>"; 
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
