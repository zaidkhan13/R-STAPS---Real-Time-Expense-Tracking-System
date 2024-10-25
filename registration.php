<?php
if($_POST['submit']=='submit'){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
$link=mysqli_connect('localhost','root','','rstaps',3308);
if(!$link){
	die('Failed to connect to server :');
}
$query1="SELECT * FROM regform WHERE email= '$email'";
$result1=mysqli_query($link,$query1);{
	if(mysqli_num_rows($result1)>=1){
		include('registrationconformation_no.php');
         echo "<center><h1>Registration Unsuccessfull !!!<br/>Email already exists <br/> Please Enter valid details..</h1></center>";
         exit();	
       }}
$query2="SELECT * FROM regform WHERE phone= '$phone'";
$result2=mysqli_query($link,$query2);{
	if(mysqli_num_rows($result2)>=1){
		include('registrationconformation_no.php');
         echo "<center><h1>Registration Unsuccessfull !!!<br/>Phone number already exists <br/> Please Enter valid details..</h1></center>";
         exit();	
       }}
 $query3="SELECT * FROM regform WHERE username= '$username'";
$result3=mysqli_query($link,$query3);{
	if(mysqli_num_rows($result3)>=1){
		include('registrationconformation_no.php');
         echo "<center><h1>Registration Unsuccessfull !!!<br/>User already exists <br/> Please Enter valid details..</h1></center>";
         exit();	
       }  }
$query="INSERT INTO regform values ('$firstname','$lastname','$email','$date','$gender','$phone','$username','$password')";
$result=mysqli_query($link,$query);
if($result==True){
	$count=1;
}
else{
	include('registrationconformation_no.php');

echo "<center><h1>Registration Unsuccessfull !!!<br/>Invalid input <br/> Please Retry ...</h1></center>";

	exit();
}
if($count==1){
	include('registrationconformationyes.php');
echo "
	<br/><h1><center>Congratulations !!! <br/>Registration Successfull...<br/></h1></center>";
    exit();
}
else{
	include('registrationconformation_no.php');
	echo "<center><h1>Registration Unsuccessfull !!!<br/>User already exists <br/> Please Retry ...</h1></center>";
	exit();
}
}
else{
	header("location: startingpage.php");
	exit();
}

?>




