<?php 
if ($_POST['submit'] == 'Login'){ 
$login = $_POST['username']; 
$password = $_POST['password'];   
if($login== 'admin' && $password=='admin' ){ 
$count = 1;
} 
else{ 
include('registrationconformation_no.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
if( $count == 1){ 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $login; 
header('location:admin_mainpage.php'); 
} 
else{ 
include('registrationconformation_no.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
} 
else{ 
header("location: startingpage.php"); 
exit(); 
} 
?>
