<?php
if(!isset($_SESSION)){
	session_start();
}
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
            <li class='web-app'><a href='mainpage.php' title=''>HOME</a></li>
          </ul>
        </div>
      </div>
    </div>
	<b><h1><p class='head'>Group Pay</p></h1></b>
	<h2><p class='head-in'>Pay anyone along with your group...</p></h2>
	
<form id='form' name='grouppay' method='post' action='grouppayconf.php'>
		<div class='form-control'><b>
		<label for='Amount'>Amount</label><span class='required'> </span><br/>
		<input type='Amount' name='amount' maxlength='12'required='required'/><br/>
		</div>
		<div class='form-control'>
			<label for='people'>Number of People</label><span class='required'> </span><br/>
		<input type='radio' name='people' value='2' required='required'>2<br/>
		<input type='radio' name='people' value='3' required='required'>3<br/>
		<input type='radio' name='people' value='4' required='required' >4<br/>
		<input type='radio' name='people' value='5' required='required'>5<br/>
		<input type='radio' name='people' value='6' required='required'>6<br/>
		<input type='radio' name='people' value='7' required='required' >7<br/>
	   </div>
	   <div class='form-control'>
		<p><input type='submit' name='submit' value=' NEXT '></p><br/></a></b>
	   </div></b>
		</form>
</body>
</html>";
?>