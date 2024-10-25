<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
 echo "<html>
  <head>
    <link rel='stylesheet' media='screen' type='text/css' href='projectstyle.css' />
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
    <div class='homepage-top'>
      <div class='homepage-top-in'>
          <h1><center>WELCOME ADMIN<center></h1>
      </div>
    </div>
    <div class='main'>
      <div class='main-block'>
        <div class='mb-image'><img src='settleup.jpg' alt='' title='' /></div>
        <div class='mb-text'>
          <h2><b>View Users</b></h2>
          <p><b>You can view all the users on R-staps</p>
             <div class='ht-buttons'>
          <a class='google-play' href='userdata.php' title='Google Play'>VIEW</a>
        </div>
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