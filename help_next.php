<?php
if(!isset($_SESSION)){
	session_start();
	}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
date_default_timezone_set("Asia/Kolkata");
if($_POST['submit']=='submit'){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$time=date("Y-m-d H:i:s");
$link=mysqli_connect('localhost','root','','rstaps',3308);
if(!$link){
	die("Failed to connect to database");}
$query1="SELECT * from regform where phone= '$phone' ";
$result1=mysqli_query($link,$query1);{
	if(mysqli_num_rows($result1)>=1){
		//proceed forwad here
	   $query="INSERT into help values ('$name','$email','$phone','$message','$time')";
       $result2=mysqli_query($link,$query);
       if($result2==True){
       	$count=1;
       }
       else{
       	include("help.php");
       	echo "<center> Error ! Please enter valid details.. <center>";
       	exit();
       }
	}
	else{
		include("help.php");
		echo "<center> Enter vaild phone number !!!<center>";
		exit();
	}
}
if($count==1){
	header('location:mainpage.php');
}
else{
	include("help.php");
	echo "<center> Please enter valid details!!!<center>";
	exit();
}
}
else{
	include("help.php");
	exit();
}
}
else{
  header('location:startingpage.php'); 
  echo "session over";
exit(); 
}
?>
