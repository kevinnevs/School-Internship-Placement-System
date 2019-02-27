<html>
<head></head>
<title>Student Registration</title>
<link href="Style.css" rel="stylesheet" type="text/css" media="all">
<body>
<h1>STUDENT REGISTRATION FORM</h1>
 <!-- Navbar -->
 <div class="topnav" id="Home">
    <a href="Home.php" target="_self">Home</a> 
    <a href="StudLogin.php" target="_self">Student Login</a> 
    <a href="CompanyLogin.php" target="_self">Company Login</a> 
    <a href="InternsNews.php" target="_self">Internship News</a> 
    <a href="AdminLogin.php" target="_blank">Admin Login</a>
    </div>

<form action="action_page.php">
<div class="container">
<label for="fname"><b>First Name</b></label>
<input type="text" placeholder="Enter your name" name="fname" required>
<br>
<label for="mname"><b>Middle Name</b></label>
<input type="text" placeholder="Enter the name" name="mname" required>
<br>
<label for="lname"><b>Last Name</b></label>
<input type="text" placeholder="Enter name" name="lname" required>
<br>
<br>
<label for="gender"><b>Gender</b></label>
<select name="dropdown">
<option value="Male" selected>Male</option>
<option value="Female" selected>Female</option>
</select>
<br>
<br>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Email address" name="email" required>
<br>
<label for="contact"><b>Contact No</b></label>
<input type="text" placeholder="Number" name="contact" required>
<br>
<label for="city"><b>City</b></label>
<input type="text" placeholder="city" name="city" required>
<br>
<label for="Address"><b>Address</b></label>
<input type="text" placeholder="Your address" name="address" required>
<br>
<br>
<label for="fileupload"><b>Photo</b></label>
<input type="file" name="fileupload" accept="image/*" />
<br>
<br>
<br>
<label for="dob"><b>Date of Birth</b></label>
<input type="datetime" name="dob" required>
<br>
<br>
<label for="age"><b>Age</b></label>
<input type="text" placeholder="Your age" name="age" required>
<br>
<label for="grade"><b>KCSE GRADE</b></label>
<input type="text" name="grade" required>
<br>
<label for="yearpass"><b>Year of Passing</b></label>
<input type="text" name="yearpass" required>
<br>
<label for="prevcourse"><b>Previous Course</b></label>
<input type="text" name="prevcourse" required>
<br>
<label for="prevgrade"><b>Previous Course GPA</b></label>
<input type="text" name="prevgrade" required>
<br>
<br>
<label for="dept"><b>Your Department</b></label>
<select name="dropdown">
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
<label for="extracurr"><b>Extra Curriculum</b></label>
<input type="text" placeholder="Your extra Curriculum Activities" name="extracurr" required>
<br>
<label for="qualification"><b>Other qualification</b></label>
<input type="text" name="qualification" required>
<br>
<label for="uname"><b>Choose Username</b></label>
<input type="text" name="uname" required>
<br>
<label for="pword"><b>Password</b></label>
<input type="password" name="pword" required>
<br>
<label for="sid"><b>Student ID</b></label>
<input type="text" placeholder="Your Student ID Number" name="sid" required>
<br>
<button type="submit">Register</button>
</div>
</form>
</body>
</html>