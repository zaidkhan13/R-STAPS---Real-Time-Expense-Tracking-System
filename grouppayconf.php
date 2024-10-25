<?php
if(!isset($_SESSION)){
    session_start();
}
if($_POST['submit']==' NEXT '){
$amount=$_POST['amount'];
$num=$_POST['people'];
$newamount=round(($amount/$num),2);
}
$_SESSION['Number']=$num;


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
<form id = 'form' name='grouppayconf' method='post' action='grouppayfinal.php'>
        <div class='form-control'><b>
      <label for='name'>Please mention the reason</label><span class='required'> </span><br/>
        <input type='text' name='why' maxlength='100' placeholder='' required='required'/><br/>
       </div>
       <div class='form-control'>";     

       for($i=1;$i<$num;$i++){
        echo "<label for='phone' >"."Phone number:-".$i."</label><span class='required'></span><br/>";
         echo "<input type='text' name='phone".$i."' maxlength='20' placeholder='' required='required'/>";
       echo"  <label for='Amount'>"."Amount:-".$i."</label><span class='required'> </span><br/>";
      echo"    <input type='text' name='amt".$i."' maxlength='12' value='".$newamount."' /><br/>";
    }
    echo "   </div>
       <div class='form-control'>
        <p><input type='submit' name='submit' value=' NEXT '></p><br/></a></b>
      </div>
        </form>
</body>
</html>";
?>