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
            <li class='web-app'><a href='help.php' title=''>Help</a></li>
            <li class='web-app'><a href='account_info.php' title=''>My account</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class='homepage-top'>
      <div class='homepage-top-in'>
        <div class='ht-text'>
          <h1>WELCOME</h1>
          <p>We are here to help you in anyway we can... so leave every group related activities to us...</p>
          <p> Hi ".$user." Thanks for visiting...</p>
          <p>We will do anything to satisfy you...</p>
        </div>
        <div class='ht-image'>
          <img class='ht-image-all' id='imgBanner' src='' alt='' title='' />
        </div>
      </div>
    </div>
    <div class='main'>
      <div class='main-block'>
        <div class='mb-image'><img src='settleup.jpg' alt='' title='' /></div>
        <div class='mb-text'>
          <h2><b>Settle up</b></h2>
          <p><b>Settle up any privious money OR pay new.</p>
             <div class='ht-buttons'>
          <a class='google-play' href='settleup.php' title='Google Play'>Settle Up</a>
        </div>
        </div>
      </div>
      <div class='main-block img-left'>
        <div class='mb-image'><img src='grouppay.jpg' alt='' title='' /></div>
        <div class='mb-text'>
          <h2><b>Group pay</b></h2>
          <p><b>Kill the rent, bills and many more with your friends.</b></p>
          <div class='ht-buttons'>
          <a class='google-play' href='grouppay.php' title='Google Play'>Group pay</a>
        </div>
        </div>
      </div>
      <div class='main-block'>
        <div class='mb-image'><img src='requests.jpg' alt='' title='' /></div>
        <div class='mb-text'>
          <h2><b>Requests sent to you</b></h2>
          <p><b>View the requests for group pay here... </b></p>
          <div class='ht-buttons'>
          <a class='google-play' href='table.php' title='Google Play'>Requests</a>
        </div>
        </div>
      </div>
      <script type='text/javascript'>
            var picPaths = ['symbol.png','symbol2.png','symbol3.png','symbol4.png'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,2000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
        </script>
  </body>
</html>";
}
else{
  header('location:startingpage.php'); 
exit(); 
}
?>