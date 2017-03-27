<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MDUrban</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
     <link href="css/thumbnail-gallery.css" rel="stylesheet">
  

   


    <link href="css/carousel.css" rel="stylesheet">
        <style>
                body{
                  font-family: jura;
                  margin:0;
                  padding: 0;
                  width: 100%;
                  background-image: url(img/bg.jpg);
                  background-repeat: no-repeat;
                  background-size: cover;
                  height: 600px;
                }



 @font-face{
        font-family:'berlin';
        src: url('Berlin Sans FB Bold.ttf');
      
    }





 @font-face{
        font-family:'berlin2';
        src: url('Berlin Sans FB Regular.ttf');
      
    }

     @font-face{
        font-family:'digit';
        src: url('font/DS-DIGIT.TTF');
      
    }


                body{
                  font-family: jura;
                  margin:0;
                  padding: 0;
                  width: 100%;
                  background-color:#e6ffe6;
                  background-repeat: no-repeat;
                  background-size: cover;
                  height: 600px;
                }
@keyframes dropnav {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}



.container-fluid{
  padding:0px;
  margin:0px;
  height: 100%;
  width: 100%;
}
a:hover{
  text-decoration: none;

}  


  

/* SHIFT */
.nav-ban ul li a {
  position:relative;
  z-index: 1;
  
}

/* NAVIGATION */

.nav-ban {
  width: 100%;
  margin: 0 auto;
  background-color:rgba(0, 153, 51,0.9);
  height:42px;
 /* this section calls the dropHeader animation we defined above */
  animation-name: dropnav;
  animation-iteration-count: 1;
  animation-timing-function: ease-out;
  animation-duration: 2s;

}

.navwrp ul {
  list-style: none;

}
.navwrp .ul1{
      float: left;
      margin-left:20px;
       width:250px;
      min-width:250px;
      overflow:hidden;
}

.navwrp .ul0{
    float: left;
      margin-left:200px;
      width:60px;
      margin-right:100px;
      
}
.ul0 img{ display:block;
margin:auto;}

.navwrp .ul2{
      float: right;
 width:700px;
      min-width:300px;
}
.navwrp .ul2{
      float: right;
 width:700px;
      min-width:300px;
}
.navwrp .ul2 li {    
 margin-left:40px;  

       position:relative;
}

.navwrp ul li {
  display: inline-block;
}

.navwrp ul li a {
  display: block;
  padding: 7px;
  text-decoration: none;
  color: #b3ffb3;
  font-weight: 500;
  margin: 0 5px; 

}

.navwrp ul li a:hover {
  color: #fff;
}

.wlcnote{
    text-align:center;
    font-size:28px;
    color:green;
    font-weight:700;
    min-width:300px;
    margin-top:200px;
    clear:both;
}
.wlc{
    width:80%;
    margin:20px auto;
    text-align:center;
    color:green;
    font-size:18px;
     font-weight:400;
}
.navwrp{
   min-width:899px;
   width:100%;
   position:absolute;
   z-index:9;
}

    .pro img{
margin-right:10px;
    }

    .pro{
      font-size:12px;
    }


@media only screen and (min-width:700px) and (max-width:995px)
{

}
@media only screen and (min-width:400px) and (max-width:699px)
{

}



@media only screen and (min-width:100px) and (max-width:399px)
{

}  


.rss {
	max-width: 90%;
	height: 450px;
	text-align: center;
  border:1px solid green;

}


label {
	width: 120px;
	height: 30px;
	display: inline-block;
	margin-top: 55px;
	position: relative;
	border-radius: 14px;
	-webkit-background-clip: padding-box;
	-moz-background-clip: padding-box;
	background-clip: padding-box;
 background: #3e7523;
  background-image: -webkit-linear-gradient(top, #3e7523, #79bd75);
  background-image: -moz-linear-gradient(top, #3e7523, #79bd75);
  background-image: -ms-linear-gradient(top, #3e7523, #79bd75);
  background-image: -o-linear-gradient(top, #3e7523, #79bd75);
  background-image: linear-gradient(to bottom, #3e7523, #79bd75);
	box-shadow: inset 0 2px 5px 0 rgba(0, 0, 0, 0.1), inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
	line-height: 30px;
	font-style: normal;
	color: #fff;
	text-shadow: 0 1px 1px rgba(0,0,0,0.1);
	font-weight: bold;
	-webkit-box-reflect: below 0px
		-webkit-gradient(linear, left top, left bottom,
		color-stop(0.5, transparent),
		to(rgba(255, 255, 255, 0.3)));
	-moz-transition: all 1s ease-in;
	-webkit-transition: all 1s ease-in;
	-o-transition: all 1s ease-in;
	transition: all 1s ease-in;
	cursor: pointer;
}

label.attention:hover {
	background: rgb(238,159,7);
	background: -moz-linear-gradient(top,  rgba(238,159,7,1) 0%, rgba(240,171,8,1) 45%, rgba(243,182,15,1) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(238,159,7,1)), color-stop(45%,rgba(240,171,8,1)), color-stop(100%,rgba(243,182,15,1)));
	background: -webkit-linear-gradient(top,  rgba(238,159,7,1) 0%,rgba(240,171,8,1) 45%,rgba(243,182,15,1) 100%);
	background: -o-linear-gradient(top,  rgba(238,159,7,1) 0%,rgba(240,171,8,1) 45%,rgba(243,182,15,1) 100%);
	background: -ms-linear-gradient(top,  rgba(238,159,7,1) 0%,rgba(240,171,8,1) 45%,rgba(243,182,15,1) 100%);
	background: linear-gradient(to bottom,  rgba(238,159,7,1) 0%,rgba(240,171,8,1) 45%,rgba(243,182,15,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ee9f07', endColorstr='#f3b60f',GradientType=0 );
}
label.attention:hover:before {
	content: "☢"; /* &#9762; */
	font-size: 22px
}
input[type=checkbox]:checked ~ label.attention:hover:before  {
	content: "on";
	font-size: 14px
}


label i {
	position: absolute;
	top: -4px;
	right:90px;
	width: 36px;
	height: 36px;
	display: block;
	border-radius: 36px;
	background: rgb(255,255,255);
	background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 11%, rgba(228,228,228,1) 50%, rgba(221,221,221,1) 53%, rgba(205,205,205,1) 97%, rgba(191,191,191,1) 100%);
	background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 11%, rgba(228,228,228,1) 50%, rgba(221,221,221,1) 53%, rgba(205,205,205,1) 97%, rgba(191,191,191,1) 100%);
	background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 11%, rgba(228,228,228,1) 50%, rgba(221,221,221,1) 53%, rgba(205,205,205,1) 97%, rgba(191,191,191,1) 100%);
	background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 11%, rgba(228,228,228,1) 50%, rgba(221,221,221,1) 53%, rgba(205,205,205,1) 97%, rgba(191,191,191,1) 100%);
	background: linear-gradient(top, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 11%, rgba(228,228,228,1) 50%, rgba(221,221,221,1) 53%, rgba(205,205,205,1) 97%, rgba(191,191,191,1) 100%);
	box-shadow: inset 0 -3px 3px 0 rgba(0, 0, 0, 0.1), inset 0 -1px 1px 0 rgba(255, 255, 255, 0.4), 0 2px 0 0 rgba(0, 0, 0, 0.2);
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	transition: all 200ms ease;
}

label i:before {
	content: "";
	display: block;
	position: absolute;
	top: 50%;
	left: 50%;
	width: 18px;
	height: 18px;
	margin: -9px 0 0 -9px;
	border-radius: 18px;
	background: rgb(239,239,239);
	background: -webkit-linear-gradient(top, rgba(239,239,239,1) 0%, rgba(225,225,225,1) 6%, rgba(225,225,225,1) 24%, rgba(229,229,229,1) 94%, rgba(242,242,242,1) 100%);
	background: -moz-linear-gradient(top, rgba(239,239,239,1) 0%, rgba(225,225,225,1) 6%, rgba(225,225,225,1) 24%, rgba(229,229,229,1) 94%, rgba(242,242,242,1) 100%);
	background: -o-linear-gradient(top, rgba(239,239,239,1) 0%, rgba(225,225,225,1) 6%, rgba(225,225,225,1) 24%, rgba(229,229,229,1) 94%, rgba(242,242,242,1) 100%);
	background: -ms-linear-gradient(top, rgba(239,239,239,1) 0%, rgba(225,225,225,1) 6%, rgba(225,225,225,1) 24%, rgba(229,229,229,1) 94%, rgba(242,242,242,1) 100%);
	background: linear-gradient(top, rgba(239,239,239,1) 0%, rgba(225,225,225,1) 6%, rgba(225,225,225,1) 24%, rgba(229,229,229,1) 94%, rgba(242,242,242,1) 100%);
	box-shadow: inset 0 1px 0 0 rgba(0, 0, 0, 0.1);
}
label:hover i {
	box-shadow: inset 0 -3px 3px 0 rgba(0, 0, 0, 0.1), inset 0 -1px 1px 0 rgba(255, 255, 255, 0.4), 0 2px 0 0 rgba(0, 0, 0, 0.3);
}
label:active i:before {
	box-shadow: inset 0 1px 0 0 rgba(0, 0, 0, 0.3);
}

label:before {
	content: "Request";
	margin-left: 30px;
	text-transform: uppercase;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	transition: all 200ms ease;
}

label:after {
	content: "";
	right: 115px;
	width: 150px;
	font-size: 12px;
	color: green;
	text-shadow: 0 1px 1px rgba(255,255,255,0.5), 0 -1px 1px rgba(0,0,0,0.1);
	position: absolute;
	top: 0;
}

input[type=checkbox]:checked ~ label:before {
	content: "Cancel";
	text-transform: uppercase;
	margin-right: 30px;
	margin-left: 0;
}

input[type=checkbox]:checked ~ label:after {
	content: "";
	right: -130px;
  font-size:20px;
}

input[type=checkbox]:checked ~ label{
	background: rgb(141,173,51);
	background: -webkit-radial-gradient(center, ellipse cover, rgba(141,173,51,1) 0%, rgba(146,178,55,1) 24%, rgba(157,187,64,1) 55%, rgba(166,194,78,1) 100%);
	background: -moz-radial-gradient(center, ellipse cover, rgba(141,173,51,1) 0%, rgba(146,178,55,1) 24%, rgba(157,187,64,1) 55%, rgba(166,194,78,1) 100%);
	background: -o-radial-gradient(center, ellipse cover, rgba(141,173,51,1) 0%, rgba(146,178,55,1) 24%, rgba(157,187,64,1) 55%, rgba(166,194,78,1) 100%);
	background: -ms-radial-gradient(center, ellipse cover, rgba(141,173,51,1) 0%, rgba(146,178,55,1) 24%, rgba(157,187,64,1) 55%, rgba(166,194,78,1) 100%);
	background: radial-gradient(center, ellipse cover, rgba(141,173,51,1) 0%, rgba(146,178,55,1) 24%, rgba(157,187,64,1) 55%, rgba(166,194,78,1) 100%);
}

input[type=checkbox]:checked ~ label i {
	right: -6px;
}

/* you can hide leter */
input:before {
	content: "Logic:";
	margin-left: -35px;
	font-size: 10px;
	color: #333;
}
input {
	position: absolute;
	bottom: 5px;
	left: 50%;
	margin-left: 10px;
	opacity: .1;
  -webkit-transition: all 0.3s ease-out; 
     -moz-transition: all 0.3s ease-out; 
       -o-transition: all 0.3s ease-out; 
          transition: all 0.3s ease-out; 
} 
input:hover {
	opacity: 1;
}
.countdown{
margin-top:20px;color:green;display:none;font-size:50px;font-weight:400;font-family:'digit';}
.countdown-show{
  display:block;
}

@keyframes push {
    0%   { left: 110px; top: 0px;}
    50%  { left: 200px; top: 0px;}

    100% { left: 110px; top: 0px;}
}

    
    
@keyframes animateBorderOne {
  to {
    box-shadow: 0 0 0 5px #E0E4CC;
  }
}

.popup-close {
    width:30px;
    height:30px;
    padding-top:0px;
    display:inline-block;
    position:absolute;
    top:0px;
    right:0px;
    transition:ease 0.25s all;
    -webkit-transform:translate(50%, -50%);
    transform:translate(50%, -50%);
    border-radius:1000px;
    background:#fff;
    font-family:Arial, Sans-Serif;
    font-size:20px;
    text-align:center;
    line-height:100%;
    background-color:white;
    color:green;
    border:4px solid green;
      z-index:90000;
}
 
.popup-close:hover {
    -webkit-transform:translate(50%, -50%) rotate(180deg);
    transform:translate(50%, -50%) rotate(180deg);
    background:#fff;
    text-decoration:none;
   cursor:pointer;
}

    #noti_Container {
        position:relative;
    }


   
    /* A CIRCLE LIKE BUTTON IN THE TOP MENU. */
    #noti_Button {
      
  width:22px;
        height:22px;
        line-height:22px;
        border-radius:50%;
        -moz-border-radius:50%; 
        -webkit-border-radius:50%;
        
        margin:-3px 10px 0 10px;
        cursor:pointer;
    }
        
    /* THE POPULAR RED NOTIFICATIONS COUNTER. */
    #noti_Counter, #noti_Counter1 {
        display:block;
        position:absolute;
        background:#E1141E;
        color:#FFF;
        font-size:12px;
        font-weight:normal;
        padding:1px 3px;
        margin:5px 0 0 25px;
        border-radius:2px;
        -moz-border-radius:2px; 
        -webkit-border-radius:2px;
        z-index:9;
    }
        
    /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
    #notifications {
        display:none;
        width:300px;
        position:absolute;
        top:30px;
        left:0;
        background:#FFF;
        border:solid 1px rgba(100, 100, 100, .20);
        -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
        z-index: 9;
        margin-top:5px;
    }
    /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
    #notifications:before {         
        content: '';
        display:block;
        width:0;
        height:0;
        color:transparent;
        border:10px solid #CCC;
        border-color:transparent transparent #FFF;
        margin-top:-20px;
        margin-left:22px;
    }
        
 
        
    .seeAll {
        background:#F6F7F8;
        padding:8px;
        font-size:12px;
        font-weight:bold;
        border-top:solid 1px rgba(100, 100, 100, .30);
        text-align:center;
    }
    .seeAll{
        color:green;
    }
    .seeAll a:hover {
        background:#F6F7F8;
        color:green;
        text-decoration:underline;
    }
.ul2 h3 {
        display:block;
        color:green; 
        background:#FFF;
        font-weight:bold;
        font-size:13px;    
        padding:8px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }
      


#loader {
    border: 8px solid rgba(255,255,255,.8); /* Light grey */
    border-top: 8px solid green ;/* Blue */
    border-radius: 50%;
    width: 100px;
    height: 100px;
    margin:0 auto;
    animation: spin 2s linear infinite;
    position:absolute;
    z-index:9;
    top:300px;left:50%;
}



 </style>
  </head>
  <body>



<div class="container-fluid">

<div class="nav-ban nav-ban-extra">
<div class="navwrp">


<div class="ul0"> 
  <a href="index.php"><img src="img/logo3.png" width=37; height="37"></a>
</div> 



<ul class="ul1">
<li><a href="#"><div class="pro"><img src="img/user.png"  width="25" height="25" style="border-radius:10px; 
">Oluyege Paul</div></a></li>
</ul> 

<ul class="ul2">
<li><div id="noti_Counter1"></div><a href="#"><img src="img/mail.png"  width="23" height="23" style=""></a></li>
<li> <div id="noti_Counter"></div><a  href="#"><img src="img/bell.png" id="noti_Button" width="23" height="23" style=""></a>

 <div id="notifications">
                    <h3>Notifications</h3>
                    <div style="height:300px;"></div>
                    <div class="seeAll"><a href="#">See All</a></div>
                </div>
</li>


<li><a  href="#"><img src="img/settg.png"  width="23" height="23" style=""></a></li>
<li><a  href="../login.html">Logout</a></li>
</ul> 


</div >
</div>




    <div class="wlcnote">
Welcome, Paul Oluyege.
    </div>



<div class="wlc">

    We need to know more about You, We'll keep your detials confidential.
Click the button and Kindly fill the your Profile form 

</div> 



<div style="width:100px; margin:40px auto;"><a class="typeform-share" href="https://teewhy.typeform.com/to/AnADvT" data-mode="1" target="_blank" style="padding:10px 10px; border-radius:5px; background-color:green;color:white;
 box-shadow: 0px 5px 0px rgba(0, 153, 51,0.4);text-decoration:none; margin:auto;">Profile Form</a>
</div>


<div style="width:680px; margin:auto; padding:10px;">

<div style="float:left;text-align:center; width:120px; height:120px;margin-right:40px;font-weight:bolder;color:green;">
<div  style="background-color:rgba(255, 255, 255, 0.7); box-shadow: 0 0 0 5px #00cc00;
    animation: 5s animateBorderOne ease infinite;
    border-radius: 5px;">
<a href="health.php"><img src="img/health.png" width="80px";height:"80px;" ></a>
</div>Health</div>



<div style="float:left;text-align:center; width:120px; height:120px;margin-right:40px;font-weight:bolder;color:green;">
<div  style="background-color:rgba(255, 255, 255, 0.7); box-shadow: 0 0 0 5px #00cc00;
    animation: 5s animateBorderOne ease infinite;
    border-radius: 5px;">
<a href="med.php"><img src="img/med.png" width="80px";height:"80px;" ></a>
</div>Medical</div>



<div style="float:left;text-align:center; width:120px; height:120px;margin-right:40px;font-weight:bolder;color:green;">
<div  style="background-color:rgba(255, 255, 255, 0.7); box-shadow: 0 0 0 5px #00cc00;
    animation: 5s animateBorderOne ease infinite;
    border-radius: 5px;">
<a href="#"><img src="img/insur.png" width="80px";height:"80px;" ></a>
</div>Insurance</div>


<div style="float:left;text-align:center; width:120px; height:120px;margin-right:40px;font-weight:bolder;color:green;">
<div  style="background-color:rgba(255, 255, 255, 0.7); box-shadow: 0 0 0 5px #00cc00;
    animation: 5s animateBorderOne ease infinite;
    border-radius: 5px;">
<a href="#"><img src="img/shop.png" width="80px";height:"80px;" ></a>
</div>E-Commerce</div>

</div>

<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm_share',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()</script>
   

<!--
<div class="popup" data-popup="popup-2">
    <div class="popup-inner">
      
       <div class="form_div">
       
    </div>

      
        <p><a data-popup-close="popup-2" href="#" style="color:white">Close</a></p>
        <a class="popup-close" data-popup-close="popup-2" href="#">x</a>
    </div>
</div> 
   
-->

</div>



<div id="loader"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script  src="js/bootstrap.min.js"></script> -->
  </body>
</html>


<script>

  /*  
    $(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

        e.preventDefault();
    });

    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

        e.preventDefault();
    });
});

*/



var $loading = $('#loader').hide();
$(document)
  .ajaxStart(function () {
    $loading.show();
  })
  .ajaxStop(function () {
    $loading.hide();
  });


</script>

<script>

$(function(){


$( "#click" ).click(function() {

if ($('input').prop('checked') == false)
{ 

$(".countdown").addClass("countdown-show");
time();
}
else{
   
 console.log(counter);
  reset();
   $(".countdown").removeClass("countdown-show");
}


});

    // Display 'counter' wherever you want to display it.


});



function reset(){
   counter = 60;
   clearInterval(interval);

}

var counter = 60;
var interval;
function time(){
    counter--;
    interval = setTimeout("time()", 1000);
    document.getElementById("countdown").innerHTML = "00 : "+ counter;
    if (counter < 10){
document.getElementById("countdown").innerHTML = "00 : 0"+ counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter == 0 || counter < 0) {
        clearInterval(interval);
      document.getElementById("countdown").innerHTML = "<div style='font-size:18px;font-family:'jura';'>Your request is on processing, Expect a call from a doctor soon<div>";
       $('input').prop('checked', false);
       
        // Display a login box
    }

}


var $loading = $('#loader').hide();
$(document)
  .ajaxStart(function () {
    $loading.show();
  })
  .ajaxStop(function () {
    $loading.hide();
  });





  $(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(1000);

        e.preventDefault();
    });

    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(1000);

        e.preventDefault();
    });
});



 $(document).ready(function () {

        // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
        $('#noti_Counter')
            .css({ opacity: 0 })
            .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);

 $('#noti_Counter1')
            .css({ opacity: 0 })
            .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);



        $('#noti_Button').click(function () {

            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            $('#notifications').fadeToggle('fast', 'linear', function () {
                if ($('#notifications').is(':hidden')) {
                    $('#noti_Button').css('background-color', 'rgba(0, 153, 51,0.9);');
                }
                else $('#noti_Button').css('background-color', 'rgba(0, 153, 51,0.9);');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
            });

            $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        $(document).click(function () {
            $('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                $('#noti_Button').css('background-color', 'rgba(0, 153, 51,0.9);');
            }
        });

        $('#notifications').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });


</script>
