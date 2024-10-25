<?php
if(!isset($_SESSION)){
session_start();}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
echo "
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Payment</title>
        <link rel='stylesheet' media='screen' type='text/css' href='projectstyle.css' />
        <style >
            
            @charset 'UTF-8';
body {
  font-family: 'Montserrat', sans-serif;
  background: url('bg3.jpg');
  transition: all 0.3s;
}

.wrap {
  width: 600px;
  height: 600px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  perspective: 1000px;
}

.holo {
  overflow: hidden;
  position: absolute;
  right: 35px;
  width: 90px;
  height: 100px;
  border-radius: 8px;
  background: linear-gradient(135deg, #e59f2d 0%, #ffea30 25%, #ff8528 71%, #ffdd89 100%);
}

.line {
  margin: -20px;
  width: 90px;
  height: 50px;
  border: 2px solid #ff8528;
  border-radius: 4px;
}
.line:nth-child(2) {
  margin: -40px;
}
.line:nth-child(3) {
  margin: 10px 20px;
}

.face {
  position: relative;
  z-index: 1;
  box-sizing: border-box;
  width: 450px;
  height: 350px;
  border-radius: 15px;
  background: white;
  padding: 35px 30px;
  transform: rotateY(-25deg);
  transition: all 0.3s;
}
.face img {
  display: block;
  width: 100px;
}
.face:hover {
  transform: rotateY(0deg);
}

#number {
  margin: 90px 0 40px;
  position: relative;
  display: inline-block;
}
#number:before {
  position: absolute;
  font-size: 10px;
  top: -20px;
  content: 'card number';
}
#number input {
  font-size: 30px;
  width: 90px;
  outline: none;
  border: none;
}

#holder {
  position: relative;
  display: block;
}
#holder:before {
  position: absolute;
  font-size: 10px;
  top: -20px;
  content: 'cardholder';
}
#holder input {
  font-size: 26px;
  width: 260px;
  outline: none;
  border: none;
  float: left;
  margin-right: 16px;
  text-transform: uppercase;
}

#date {
  position: relative;
  display: block;
}
#date span {
  float: left;
  font-size: 26px;
  opacity: 0.4;
  margin-right: 4px;
}
#date:before {
  position: absolute;
  font-size: 10px;
  top: -20px;
  content: 'valid date';
}
#date input {
  font-size: 26px;
  width: 40px;
  outline: none;
  float: left;
  border: none;
  text-transform: uppercase;
}

.back {
  overflow: hidden;
  position: absolute;
  top: 130px;
  left: 100px;
  z-index: -1;
  box-sizing: border-box;
  width: 450px;
  height: 300px;
  border-radius: 15px;
  background: #f1e02d;
  padding: 35px 30px;
  transform: rotateY(25deg);
  transition: all 0.3s;
}
.back:before {
  position: absolute;
  font-size: 10px;
  right: 60px;
  top: 200px;
  content: 'CVV';
}
.back input::-moz-placeholder {
  color: black;
  opacity: 0.5;
}
.back input:-ms-input-placeholder {
  color: black;
  opacity: 0.5;
}
.back input::placeholder {
  color: black;
  opacity: 0.5;
}
.back:hover {
  transform: rotateY(0deg);
}

#cvv {
  position: absolute;
  top: 220px;
  right: 15px;
}
#cvv span {
  font-size: 26px;
}
#cvv input {
  font-size: 26px;
  width: 60px;
  outline: none;
  border: none;
  background: transparent;
  text-transform: uppercase;
}

#cardline {
  width: 160%;
  height: 60px;
  opacity: 0.8;
  background: black;
}

.sumbit {
  position: absolute;
  top: 460px;
  left: 100px;
  border: none;
  outline: none;
  background: #69ffc8;
  width: 200px;
  height: 80px;
  border-radius: 15px;
  text-transform: uppercase;
  font-size: 18px;
  font-weight: 700;
  transform: rotateY(0deg);
  transition: all 0.3s;
}
.sumbit:hover {
  background: #00f0ff;
  transform: rotateY(15deg);
}

input[type=checkbox] {
  display: none;
}

/* to hide the checkbox itself */
input[type=checkbox] + label:before {
  cursor: pointer;
  opacity: 0.4;
  font-family: FontAwesome;
  display: inline-block;
  font-size: 22px;
  content: '';
  color: black;
  transition: all 0.2s;
}

/* checked icon */
input[type=checkbox]:checked + label:before {
  content: '';
  opacity: 1;
  color: #ff8528;
}
        </style>
    </head>
    <body>
        <script>
            $('#number input').keyup(function () {
  if (this.value.length == this.maxLength) {
    $(this).next('#number input').focus();
  }
});

$('#date input').keyup(function () {
  if (this.value.length == this.maxLength) {
    $(this).next('#date input').focus();
  }
});



//Place this plugin snippet into another file in your applicationb
(function ($) {
    $.toggleShowPassword = function (options) {
        var settings = $.extend({
            field: '#password',
            control: '#toggle_show_password',
        }, options);

        var control = $(settings.control);
        var field = $(settings.field)

        control.bind('click', function () {
            if (control.is(':checked')) {
                field.attr('type', 'text');
            } else {
                field.attr('type', 'password');
            }
        })
    };
}(jQuery));

//Here how to call above plugin from everywhere in your application document body
$.toggleShowPassword({
    field: '#number input',
    control: '#show'
});
        </script>
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
    <div>
        <div class='wrap'>
            <div class='face'>
                <div class='holo'>
                    <div class='line'></div>
                    <div class='line'></div>
                    <div class='line'></div>
                </div>
                <div class='logo'>
                  <img src='visa.jpg' alt='' />
                </div>
                <div id='number'>
                    <input placeholder='0000' maxlength='4' type='password'></input><input placeholder='0000' maxlength='4' type='password'></input><input placeholder='0000' maxlength='4' type='password'></input><input placeholder='0000' maxlength='4' type='password'></input>
                </div>
                <input id='show' type='checkbox'/>
                <label for='show'></label>
                <div id='holder'>
                    <input placeholder='Name on card' maxlength='16'></input>
                </div>
                <div id='date'>
                    <input placeholder='05' maxlength='2'></input>
                    <span>/</span>
                    <input placeholder='16' maxlength='2'></input>
                </div>
            </div>
            <div class='back'>
                <div id='cardline'></div>
                <div id='cvv'>
                    <span>&#x275A;&#x275A;&#x275A;</span>
                    <input placeholder='16' maxlength='3'></input>
                </div>
            </div>
            <button class='sumbit'>submit</button>
        </div>
    </body>
</html>";
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?> 