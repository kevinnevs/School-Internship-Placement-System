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
<title>ALL COMPANY USERS AND THEIR RECORDS</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all">
<body>
<!-- Navbar -->
<div class="topnav" id="Home"> 
		<a href="adminhome.php">
  <img src="backbutton.png" alt="back home" style="width:20px;height:20px;border:0;">
</a> <font color="white">back to home page</font>
        </div>
<font color="orange" size="4">The following are the Companie users and their records present in the system.</font>
<br>
<br>
<?php
$sql = "SELECT * FROM compregister"; 
if($result = mysqli_query($con, $sql)){ 
if(mysqli_num_rows($result) > 0){ 

echo "<table>"; 
echo "<tr>";  
echo "<th>Company Name</th>"; 
echo "<th>Established</th>";
echo "<th>Company Email Address</th>"; 
echo "<th>Contact Details</th>";
echo "<th>Username</th>";         
echo "</tr>"; 

while($row = mysqli_fetch_array($result)){ 
echo "<tr>";  
echo "<td>" . $row['compname'] . "</td>"; 
echo "<td>" . $row['est'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['uname'] . "</td>";  
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