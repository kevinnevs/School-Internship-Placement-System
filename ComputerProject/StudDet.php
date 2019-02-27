<html>
<head></head>
<title>Student Details</title>
<link href="Style.css" rel="stylesheet" type="text/css" media="all"> 
<body>
<!-- Navbar -->
 <div class="topnav" id="Home">
    <a href="Home.php" target="_self">Home</a> 
    <a href="StudLogin.php" target="_self">Student Login</a> 
    <a href="CompanyLogin.php" target="_self">Company Login</a> 
    <a href="InternsNews.php" target="_self">Internship News</a> 
    <a href="AdminLogin.php" target="_blank">Admin Login</a>
    </div>
<!-- Form -->
<form action="action_page.php">
<div class="container">
<label for="ssca"><b>SSC Aggregate</b></label>
<input type="text" name="ssca" required>
<br>
<label for="hsca"><b>HSC Aggregate</b></label>
<input type="text" name="hsca" required>
<br>
<label for="colla"><b>College Aggregate</b></label>
<input type="text" name="colla" required>
<br>
<label for="department"><b>Department</b></label>
<select name="dropdown">
<option value="beit" selected>BE IT</option>
<option value="law" selected>Law</option>
<option value="theology" selected>Theology</option>
<option value="arts" selected>Arts</option>
<option value="education" selected>Education</option>
</select>
<button type="button" class="searchbtn">SEARCH</button>
<br>
<br>
<label for="email"><b>Mail To:</b></label>
<input type="text" name="email" required>
Body: <br>
<textarea rows="5" cols="50" name="email">
</textarea> <br>
</form>
</body>
</html>