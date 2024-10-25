<?php
if(!isset($_SESSION)){
session_start();}
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
          <h2><b>View Messages</b></h2>
          <p><b>The Request from the users you recieved are here!!!</p>
             <div class='ht-buttons'>
          <a class='google-play' href='admin_message_check.php' title='Google Play'>Inbox</a>
        </div>
        </div>
      </div>
      <div class='main-block img-left'>
        <div class='mb-image'><img src='grouppay.jpg' alt='' title='' /></div>
        <div class='mb-text'>
          <h2><b>View Data</b></h2>
          <p><b> You can view data exesting in the database here.</b></p>
          <div class='ht-buttons'>
          <a class='google-play' href='admin_view_page.php' title='Google Play'>View</a>
        </div>
        </div>
      </div>
      <div class='main-block'>
        <div class='mb-image'><img src='requests.jpg' alt='' title='' /></div>
        <div class='mb-text'>
          <h2><b>Update Data</b></h2>
          <p><b>You can update data here... </b></p>
          <div class='ht-buttons'>
          <a class='google-play' href='admin_update_page.php' title='Google Play'>Update</a>
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