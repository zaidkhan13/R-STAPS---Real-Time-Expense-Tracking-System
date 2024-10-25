
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <link rel="stylesheet" media="screen" type="text/css" href="projectstyle.css" /> 
  </head>
  <body>



    
    <div class="head">
      <div class="head-in">
        <a class="logo" href="index.html" title=""></a>
        <div class="menu-whole">
          <a class="mobile-menu" href="/" title=""></a>
          <ul class="menu">
            <li class="web-app"><a href="http://localhost/miniproject/aboutus.html" title="">About us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="homepage-top">
      <div class="homepage-top-in">
        <div class="ht-text">
          <h1>Sharing expenses with friends?</h1>
          <p>R-STAPS keeps track of your gang’s expenses – great for travellers, roommates, couples and others.</p>
        </div>
        <div class="ht-image">
          <img class="ht-image-all" id="imgBanner" src="" alt="" title="" />
        </div>
        <div class="ht-buttons">
          <a class="microsoft-store" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">New User </a>
          <a class="microsoft-store" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log in </a>
          <a class="microsoft-store" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Admin</a>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="main-block">
        <div class="mb-image"><img src="girlphone.jpg" alt="" title="" /></div>
        <div class="mb-text">
          <h2><b>Kill the rent</b></h2>
          <p><b>Set up rent shares once with flat-mates and pay it easily.</p>
             <p>R-STAPS make it easier for you to divide you rent among you friends and roommates.</b></p>
        </div>
      </div>
      <div class="main-block img-left">
        <div class="mb-image"><img src="moneysharing.jpg" alt="" title="" /></div>
        <div class="mb-text">
          <h2><b>Share the fun</b></h2>
          <p><b>Settle-up balances for any group activities from trips to movies to dinner and lunches.</b></p>
        </div>
      </div>
      <div class="main-block">
        <div class="mb-image"><img src="phonegirl.jpg" alt="" title="" /></div>
        <div class="mb-text">
          <h2><b>Keep track of your money</b></h2>
          <p><b>R-STAPS keep your every data in its database, so no worries about keeping the record of your transactions we are here. </b></p>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="footer-in">
        <p>Only For College Project Purpose</p>
        <p class="footer-links"><a href="http://deccancollege.ac.in/" title="">Visit our campus</a></p>
      </div>
    </div>





<div id="id01" class="modal">
  
  <form class="modal-content animate"  method="post" action="login_check.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="boy.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="submit" value="Login" >Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <div>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></div>
      </div>
  </form>
</div>


<div id="id03" class="modal">
  
  <form class="modal-content animate"  method="post" action="admin_login_check.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="admin.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Admin ID</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="submit" value="Login">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <div>
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button></div>
      </div>
  </form>
</div>






<div  id="id02" class="modal">
  <form class="modal-content animate"  method="post" action="registration.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="regnew.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="container">

        <div class="form-control">
            <label for="name" id="label-name"> Name </label>
            <input type="text" name="firstname"  placeholder="Enter your first name" required="required" />
            <input type="text" name="lastname" placeholder="Enter your last name"  required="required" />
        </div>
        <div class="form-control">
            <label for="email" id="label-email"> Email </label>
            <input type="email" name="email"  placeholder="Enter your email"  required="required" />
        </div>
        <div class="form-control">
            <label for="age" id="label-age">Date of birth</label>
            <input type="date" name="date" placeholder="Enter your age" required="required" />
        </div>
        <div class="form-control">
            <label>Gender </label>
            <label for="recommed-1">
             <input type="radio" name="gender" value="m"   required="required">Male</input>
            </label>
            <label for="recommed-2">
                <input type="radio" name="gender"  value="f"  required="required">Female</input>
            </label>
            <label for="recommed-3"> <input type="radio" name="gender" value="o" required="required">Others</input>
            </label>
        </div>
         <div class="form-control">
            <label for="phone">Phone </label>
        <input type="text" name="phone" placeholder="+91-" required="required" />
        </div>
         <div class="form-control">
        <label for="username">Username</label>
        <input type="text"  name="username" placeholder="Enter your username " required="required" />
        </div>
        <div class="form-control">
        <label for="comment">Password</label>
        <input type="password" name="password" required="required" />
        </div>
        <button  type="submit" name="submit"value="submit">Submit</button>
      </div>
      <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
    </form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<script type="text/javascript">
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
</html>