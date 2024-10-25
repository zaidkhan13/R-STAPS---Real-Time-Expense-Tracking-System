<?php
if(!isset($_SESSION)){
session_start();}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
echo "
<html>
<head>
	<title>Welcome to our foam</title>
	<link rel='stylesheet' type='text/css' href='projectstyle.css'/>
	<style>
 
        body {
             background-image: url('bg3.jpg') ;
             background-repeat: no-repeat;
            font-family: Verdana;
            text-align: center;
        }
 
        form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
 

        .form-control {
            text-align: left;
            margin-bottom: 25px;
        }
 

        .form-control label {
            display: block;
            margin-bottom: 10px;
        }
 
        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
        }
 
        .form-control input[type='radio'],
        .form-control input[type='checkbox'] {
            display: inline-block;
            width: auto;
        }

        button {
            background-color: #4cd3cf;
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            font-size: 21px;
            display: block;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
	 <div class='head'>
      <div class='head-in'>
        <a class='logo' href='index.html' title=''></a>
        <div class='menu-whole'>
          <a class='mobile-menu' href='/' title=''></a>
          <ul class='menu'>
            <li class='web-app'><a href='log_out.php' title=''>Log out</a></li>
            <li class='web-app'><a href='admin_mainpage.php' title=''>HOME</a></li>
          </ul>
        </div>
      </div>
    </div>
	<b><h1><p class='head'>Remove USER</p></h1></b>
	<h2><p class='head-in'>ARE YOU SURE YOU WANT TO REMOVE THE USER ???<br/> IF YES ENTER THE USER NAME...</p></h2>
		
<form id='form'  name='settleup' method='post' action='remove_user_last.php'>
		<div class='form-control'><b>
     <label for='name'>USER NAME</label><span class='required'> </span><br/>
		<input type='text' name='username' maxlength='100' placeholder='user name' required='required'/><br/>
	   </div>
	   <div class='form-control'>
		<p><input type='submit' name='submit' value='REMOVE'></p><br/></a></b>
	   </div></b>
		</form>
</body>
</html>";
}
else{
  header('location:startingpage.php'); 
exit(); 
}
?>