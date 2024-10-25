
<?php
if(!isset($_SESSION)){
session_start();}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
$link=mysqli_connect('localhost','root','','rstaps',3308);
if(!$link)
{ 
die('Failed to connect to server: ');
 } 
$query="SELECT * from help";
$result=mysqli_query($link,$query);
if($result==False){
  echo"Fetch Unsuccessful";
}
if(mysqli_num_rows($result)>=1){

echo "
<html>
<head>
  <meta charset='utf-8'>
  <title>table</title>
  <link rel='stylesheet' media='screen' type='text/css' href='projectstyle.css' />
  <style>

/* Google fonts - Open Sans */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
/* colors */
/* body */
body {
  background: url('bg3.jpg');
  font-family: 'Open Sans', sans-serif;
}

/* links */
.nfl a, .mlb a, .nhl a, .pga a {
  text-decoration: none;
  transition: color 0.2s ease-out;
}

.nfl a {
  color: #4fc0d2;
}

/* wrapper */
.wrapper {
  width: 100%;
  max-width: 1000px;
  margin: 20px auto 100px auto;
  padding: 0;
  background: rgba(26, 26, 26, 0.9);
  color: rgba(255, 255, 255, 0.9);
  overflow: hidden;
  position: relative;
}

/* lists */
.row ul {
  margin: 0;
  padding: 0;
}

.row ul li {
  margin: 0;
  font-size: 16px;
  font-weight: normal;
  list-style: none;
  display: inline-block;
  width: 20%;
  box-sizing: border-box;
}
@media only screen and (max-width: 767px) and (min-width: 480px) {
  .row ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 479px) {
  .row ul li {
    font-size: 13px;
  }
}

.title ul li {
  padding: 15px 13px;
}

.row ul li {
  padding: 5px 10px;
}

/* rows */
.row {
  padding: 20px 0;
  height: 30px;
  font-size: 0;
  position: relative;
  overflow: hidden;
  transition: all 0.2s ease-out;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.row:hover {
  background-color: rgba(26, 26, 26, 0.9);
  height: 65px;
}
@media only screen and (max-width: 767px) {
  .row:hover {
    height: 85px;
  }
}
@media only screen and (max-width: 359px) {
  .row:hover {
    height: 105px;
  }
}

.title {
  padding: 25px 0 5px 0;
  height: 45px;
  font-size: 0;
  background-color: rgba(255, 255, 255, 0.1);
  border-left: 3px solid rgba(255, 255, 255, 0.1);
}

.title:hover {
  height: 45px;
  background-color: rgba(255, 255, 255, 0.1);
  border-left: 3px solid rgba(255, 255, 255, 0.1);
}

@media only screen and (max-width: 767px) {
  .title-hide {
    display: none;
  }
}

.nfl {
  border-left: 3px solid #1c616c;
}


.row-fadeIn-wrapper {
  opacity: 0;
  font-size: 0;
  height: 0;
  overflow: hidden;
  position: relative;
  transition: all 0.2s ease-out;
  -webkit-animation: fadeIn 0.4s ease-out 2s 1 alternate;
          animation: fadeIn 0.4s ease-out 2s 1 alternate;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

.row-fadeIn-wrapper:hover {
  height: 35px;
}
@media only screen and (max-width: 767px) {
  .row-fadeIn-wrapper:hover {
    height: 55px;
  }
}
@media only screen and (max-width: 359px) {
  .row-fadeIn-wrapper:hover {
    height: 75px;
  }
}

.fadeIn {
  padding: 20px 0;
  font-size: 0;
  position: absolute;
  transition: all 0.2s ease-out;
  width: 100%;
}

.fadeIn:hover {
  background-color: rgba(26, 26, 26, 0.9);
}

/* row two - fadeOut */
.row-fadeOut-wrapper {
  font-size: 0;
  overflow: hidden;
  position: relative;
  transition: all 0.2s ease-out;
  -webkit-animation: fadeOut 0.4s ease-out 8s 1 alternate;
          animation: fadeOut 0.4s ease-out 8s 1 alternate;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  opacity: 1;
  height: 65px;
}

.row-fadeOut-wrapper:hover {
  height: 100px;
}

/* update content */
.update-row {
  -webkit-animation: update 0.5s ease-out 12s 1 alternate;
          animation: update 0.5s ease-out 12s 1 alternate;
}

.update1 {
  position: absolute;
  top: 25px;
  display: inline-block;
  opacity: 1;
  -webkit-animation: update1 1s ease-out 12s 1 alternate;
          animation: update1 1s ease-out 12s 1 alternate;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

.update2 {
  position: absolute;
  top: 25px;
  display: inline-block;
  opacity: 0;
  -webkit-animation: update2 4s ease-out 13s 1 alternate;
          animation: update2 4s ease-out 13s 1 alternate;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

/* more content */
ul.more-content li {
  position: relative;
  top: 15px;
  font-size: 13px;
  margin: 0;
  padding: 10px 13px;
  display: block;
  height: 50px;
  width: 100%;
  color: rgba(128, 128, 128, 0.9);
}
@media only screen and (max-width: 767px) {
  ul.more-content li {
    font-size: 11px;
  }
}

/* small content */
.small {
  color: rgba(102, 102, 102, 0.9);
  font-size: 10px;
  padding: 0 10px;
  margin: 0;
}
@media only screen and (max-width: 767px) {
  .small {
    display: none;
  }
}

@keyframes fadeIn {
  from {
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    padding: 0;
  }
  to {
    background: rgba(51, 51, 51, 0.1);
    opacity: 1;
    padding: 0 0 65px 0;
  }
}
@keyframes fadeIn {
  from {
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    padding: 0;
  }
  to {
    background: rgba(51, 51, 51, 0.1);
    opacity: 1;
    padding: 0 0 65px 0;
  }
}
@-webkit-keyframes fadeOut {
  from {
    background: rgba(51, 51, 51, 0.1);
    opacity: 1;
    height: 65px;
  }
  to {
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    height: 0;
  }
}
@keyframes fadeOut {
  from {
    background: rgba(51, 51, 51, 0.1);
    opacity: 1;
    height: 65px;
  }
  to {
    background: rgba(255, 255, 255, 0.1);
    opacity: 0;
    height: 0;
  }
}
@-webkit-keyframes update {
  0% {
    background: rgba(51, 51, 51, 0.1);
  }
  50% {
    background: rgba(255, 255, 255, 0.1);
  }
  100% {
    background: rgba(51, 51, 51, 0.1);
  }
}
@keyframes update {
  0% {
    background: rgba(51, 51, 51, 0.1);
  }
  50% {
    background: rgba(255, 255, 255, 0.1);
  }
  100% {
    background: rgba(51, 51, 51, 0.1);
  }
}
@-webkit-keyframes update1 {
  0% {
    opacity: 0;
  }
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes update1 {
  0% {
    opacity: 0;
  }
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes update2 {
  0% {
    opacity: 0;
    color: rgba(255, 255, 255, 0.9);
  }
  20% {
    opacity: 1;
    color: #52d29a;
  }
  100% {
    opacity: 1;
    color: rgba(255, 255, 255, 0.9);
  }
}
@keyframes update2 {
  0% {
    opacity: 0;
    color: rgba(255, 255, 255, 0.9);
  }
  20% {
    opacity: 1;
    color: #52d29a;
  }
  100% {
    opacity: 1;
    color: rgba(255, 255, 255, 0.9);
  }
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
            <li class='web-app'><a href= 'admin_mainpage' title=''>HOME</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div>
  <section class='wrapper'>
    <!-- Row title -->
    <main class='row title'>
      <ul>
        <li>User Name</li>
        <li>Phone no.</li>
        <li>Time</li>
        <li><span class='title-hide'></span> email</li>
      </ul>
    </main>";
  while ($row = mysqli_fetch_assoc($result))
{ 
echo"
    <!-- Row 1 - fadeIn -->
    <section class='row-fadeIn-wrapper'>
      <article class='row fadeIn nfl'>


        <ul>
          <li><a href='#'>".$row["name"]." </a><span class='small'>sent you</span></li>
          <li>".$row["phone"]."</li>
          <li>".$row["time"]."</li>
          <li>".$row["email"]."</li>
        </ul>
        <ul class='more-content'>
          <li>Message is :-".$row["message"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          </li>
        </ul>   
   </article>
  </section>";}
echo"
</div>
</body>
</html>";
}
else{
  include("success.php");
  echo "<center><h1>No Messages !!!</h1><center>";
}} 
else{ 
header('location:startingform.php'); 
exit(); 
} 
?>