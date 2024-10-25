<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
echo"
<html>
  
<head>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content=
        'width=device-width, initial-scale=1.0'>
    <title>
        Table
    </title>
      <link rel='stylesheet' type='text/css' href='projectstyle.css'/>

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

<div class='main'>
<div class='main-block'>
    <form id='form'>
        <div class='form-control'>
           <img src='ok.jpg' alt='Avatar' class='avatar'>
        <div class='ht-buttons'>
       <a class='microsoft-store' href='mainpage.php' title='Microsoft Store'>BACK</a>
        </button>
        </div>
    </form>
    </div>
    </div>
</body>
  
</html>";





}
else{
  header('location:startingpage.php'); 
exit(); 
}
?>