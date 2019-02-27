<?php
include "config.php"
?>

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<link href="style.css" rel="stylesheet" type="text/css" media="all"> 
<body>
<!-- Navbar -->
<div class="topnav" id="Home"> 
		<a href="comphome.php">
  <img src="backbutton.png" alt="back home" style="width:20px;height:20px;border:0;">
</a> <font color="white">back to home page</font>
        </div>
<h2>All Student Details</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">First Name</th>
    <th style="width:40%;">Last Name</th>
	<th style="width:40%;">Age</th>
    <th style="width:40%;">Gender</th>
    <th style="width:40%;">GPA</th>
    <th style="width:40%;">Course</th>
    <th style="width:40%;">Email</th>
    <th style="width:40%;">Contact</th>
  </tr>
  <tr>
    <td>Kevin</td>
    <td>Njuguna</td>
	<td>18</td>
    <td>Male</td>
    <td>4</td>
    <td>Computer Science</td>
    <td>kevinnjuguna2@gmail.com</td>   
	<td>078490589</td>
  </tr>
  <tr>
    <td>James</td>
    <td>Jay</td>
	<td>22</td>
    <td>Male</td>
    <td>4</td>
    <td>BBIT</td>
    <td>jamesj@gmail.com</td>   
	<td>0712342123</td>
  </tr>
  <tr>
    <td>Mary</td>
    <td>Poppins</td>
	<td>30</td>
    <td>Female</td>
    <td>4</td>
    <td>Law</td>
    <td>mpoppins@gmail.com</td>   
	<td>0734354325</td>
  </tr>
  <tr>
    <td>Phillip</td>
    <td>Asub</td>
	<td>24</td>
    <td>Male</td>
    <td>3.1</td>
    <td>Peace and Conflict</td>
    <td>pasin@gmail.com</td>   
	<td>0735934523</td>
  </tr>
  <tr>
    <td>Winnie</td>
    <td>Chege</td>
	<td>20</td>
    <td>Female</td>
    <td>3.6</td>
    <td>Community Development</td>
    <td>winykatechege@gmail.com</td>   
	<td>074569849</td>
  </tr>
  <tr>
    <td>Mercy</td>
    <td>Bakes</td>
	<td>26</td>
    <td>Female</td>
    <td>3.9</td>
    <td>Criminology</td>
    <td>bakesm@gmail.com</td>   
	<td>0772642053</td>
  </tr>
  <tr>
    <td>Charity</td>
    <td>Chengen</td>
	<td>27</td>
    <td>Female</td>
    <td>3.8</td>
    <td>Computer Science</td>
    <td>ChengenC@gmail.com</td>   
	<td>074365240</td>
  </tr>
  <tr>
    <td>Purity</td>
    <td>Nkirote</td>
	<td>23</td>
    <td>Female</td>
    <td>4</td>
    <td>Mass Communication</td>
    <td>Nkirotep@gmail.com</td>   
	<td>0745324403</td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
