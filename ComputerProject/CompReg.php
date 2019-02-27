<html>
<head</head>
<title>COMPANY REGISTRATION</title>
<link href="Style.css" rel="stylesheet" type="text/css" media="all">
<body>
<form action="server.php" method="post"> 
<h1>COMPANY REGISTRATION FORM</h1>
 <!-- Navbar -->
 <div class="topnav" id="Home">
    <a href="Home.php" target="_self">Home</a> 
    <a href="StudLogin.php" target="_self">Student Login</a> 
    <a href="CompanyLogin.php" target="_self">Company Login</a> 
    <a href="InternsNews.php" target="_self">Internship News</a> 
    <a href="AdminLogin.php" target="_blank">Admin Login</a>
    </div>
    
<div class="container">
<label for="compname"><b>Company Name</b></label>
<input type="text" placeholder="Enter the Company name" name="compname" required>
<br>
<label for="est"><b>Established</b></label>
<input type="text" placeholder="Established date" name="est" required>
<br>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="email address" name="email" required>
<br>
<label for="contact"><b>Contact</b></label>
<input type="text" placeholder="Contact details" name="contact" required>
<br>
<label for="hrname"><b>HR Name</b></label>
<input type="text" placeholder="HR name" name="hrname" required>
<br>
<label for="id"><b>Your ID</b></label>
<input type="text" placeholder="Enter ID" name="id" required>
<br>
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="uname" required>
<br>
<label for="pword"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="pword" required>
<br>
<button type="submit" name="companyregistration" class="btn">Register</button>
</div>
</form>
</body>
</html>