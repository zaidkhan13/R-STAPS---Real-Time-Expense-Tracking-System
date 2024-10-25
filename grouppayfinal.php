<?php
if(!isset($_SESSION)){
session_start();}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
date_default_timezone_set("Asia/Kolkata");
$time=date("Y-m-d H:i:s");
if($_POST['submit']==' NEXT '){
	$reason=$_POST['why'];
	$link=mysqli_connect('localhost','root','','rstaps',3308);
    if(isset($_POST['phone1'])){
        $phone=$_POST['phone1'];
        $amount=$_POST['amt1'];
         $query1="SELECT * from regform where phone= '$phone' ";
        $result1=mysqli_query($link,$query1);
       if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO pay values ('$user','$phone','$amount','$reason','$time')";
        $result=mysqli_query($link,$query);
        if($result==True){
            $count=1;
        }
       else{
        include("grouppay.php");
        echo "<center> Error ! Please enter valid details..user1 <center>";
        exit();
    }}
        else{
        include("grouppay.php");
        echo "<center> User ".$phone." does not exist on R-STRAPS !!!  Process terminated !!!<center>";
        exit();

    }}
    if(isset($_POST['phone2'])){
        $phone=$_POST['phone2'];
        $amount=$_POST['amt2'];
         $query1="SELECT * from regform where phone= '$phone' ";
        $result1=mysqli_query($link,$query1);
       if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO pay values ('$user','$phone','$amount','$reason','$time')";
        $result3=mysqli_query($link,$query);
        if($result3==True){
            $count=1;
        }
    else{
        include("grouppay.php");
        echo "<center> Error ! Please enter valid details..user2 <center>";
        exit();
    }}
        else{
        include("grouppay.php");
        echo "<center> User ".$phone." does not exist on R-STRAPS !!!   Request has been sent to existing users 1 only..<center>";
        exit();

    }}
    if(isset($_POST['phone3'])){
        $phone=$_POST['phone3'];
        $amount=$_POST['amt3'];
         $query1="SELECT * from regform where phone= '$phone' ";
        $result1=mysqli_query($link,$query1);
        if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO pay values ('$user','$phone','$amount','$reason','$time')";
        $result4=mysqli_query($link,$query);
    if($result4==True){
            $count=1;
        }
    else{
        include("grouppay.php");
        echo "<center> Error ! Please enter valid details..user3 <center>";
        exit();
    }}
        else{
        include("grouppay.php");
        echo "<center> User ".$phone." does not exist on R-STRAPS !!!   Request has been sent to existing users 1 and 2 only...<center>";
        exit();
    }}
    if(isset($_POST['phone4'])){
        $phone=$_POST['phone4'];
        $amount=$_POST['amt4'];
         $query1="SELECT * from regform where phone= '$phone' ";
        $result1=mysqli_query($link,$query1);
        if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO pay values ('$user','$phone','$amount','$reason','$time')";
        $result5=mysqli_query($link,$query);
    if($result5==True){
            $count=1;
        }
    else{
        include("grouppay.php");
        echo "<center> Error ! Please enter valid details..User4 <center>";
        exit();
    }}
        else{
        include("grouppay.php");
        echo "<center> User ".$phone." does not exist on R-STRAPS !!!   Request has been sent to existing users 1 , 2 and 3 only ....<center>";
        exit();
    }}
    if(isset($_POST['phone5'])){
        $phone=$_POST['phone5'];
        $amount=$_POST['amt5'];
         $query1="SELECT * from regform where phone= '$phone' ";
       $result1=mysqli_query($link,$query1);
        if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO pay values ('$user','$phone','$amount','$reason','$time')";
        $result6=mysqli_query($link,$query);
    if($result6==True){
            $count=1;
        }
    else{
        include("grouppay.php");
        echo "<center> Error ! Please enter valid details..user5 <center>";
        exit();
    }}
        else{
        include("grouppay.php");
        echo "<center> User ".$phone." does not exist on R-STRAPS !!!   Request has been sent to existing users 1 , 2 ,3 and 4 only ....<center>";
        exit();
    }}
    if(isset($_POST['phone6'])){
        $phone=$_POST['phone6'];
        $amount=$_POST['amt6'];
         $query1="SELECT * from regform where phone= '$phone' ";
        $result1=mysqli_query($link,$query1);
        if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO pay values ('$user','$phone','$amount','$reason','$time')";
        $result7=mysqli_query($link,$query);
    if($result7==True){
            $count=1;
        }
    else{
        include("grouppay.php");
        echo "<center> Error ! Please enter valid details.. user6<center>";
        exit();
    }}
        else{
        include("grouppay.php");
        echo "<center> User ".$phone." does not exist on R-STRAPS !!!   Request has been sent to existing users 1 , 2 , 3 , 4 and 5 only ....<center>";
        exit();
    }}
    if(isset($_POST['phone7'])){
        $phone=$_POST['phone7'];
        $amount=$_POST['amt7'];
         $query1="SELECT * from regform where phone= '$phone' ";
        $result1=mysqli_query($link,$query1);
         if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO pay values ('$user','$phone','$amount','$reason','$time')";
        $result8=mysqli_query($link,$query);
    if($result8==True){
            $count=1;
        }
    else{
        include("grouppay.php");
        echo "<center> Error ! Please enter valid details.. user7<center>";
        exit();
    }}
         else{
        include("grouppay.php");
        echo "<center> User ".$phone." does not exist on R-STRAPS !!!    Request has been sent to existing users only...<center>";
        exit();
    }
    }
if($count==1){
    header('location:payment.php');
}
else{
    include("grouppay.php");
    echo "<center> Please enter valid details!!! Process Terminated !!! Please enter valid details  again...<center>";
    exit();
}
}
else{
    include("grouppay.php");
    exit();
}
}
else{
  header('location:startingpage.php'); 
  echo "session over";
exit(); 
}
?>