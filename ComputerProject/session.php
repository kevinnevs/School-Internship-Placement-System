<?php
include('serverer.php');
session_start();

$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($conn,"SELECT username FROM studentusers WHERE username = '$user_check'");
$row = mysqli_fetch_array($ses_sql,MYSQL_ASSOC);

$login_session = $row['username'];

if(isset($_SESSION['login_user'] && $_SESSION['login_user'] === true)) {
	header("location:welcome.php");
}
?>