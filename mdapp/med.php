<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MDUrban</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <link href="http://allfont.net/allfont.css?fonts=agency-fb" rel="stylesheet" type="text/css" />-->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">


<script src="scripts/jquery-1.11.0.min.js"></script>
   


    <link href="css/carousel.css" rel="stylesheet">
        <style>



 @font-face{
        font-family:'berlin';
        src: url('Berlin Sans FB Bold.ttf');
      
    }





 @font-face{
        font-family:'berlin2';
        src: url('Berlin Sans FB Regular.ttf');
      
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
      margin-left:10px;
       width:250px;
      min-width:200px;
}

.navwrp .ul0{
    float: left;
      margin-left:100px;
      width:60px;
      margin-right:50px;
      
}
.ul0 img{ display:block;
margin:auto;}
.navwrp .ul2{
      float: right;
 width:500px;
      min-width:250px;
}

.navwrp .ul2 li {    
 margin-left:15px;  

       position:relative;
}

.navwrp .ul3{
 width:150px;
 height:180px;
 background-color: rgba(0, 153, 51,0.9);
 margin-top:40px;
  position:absolute;
  right:0%;
  margin-right:10px;
}

.navwrp .ul3 li{
margin-left:-20px;
font-size:12px;
}



.bar1, .bar2, .bar3 {
    width: 30px;
    height:2px;
    background-color:#b3ffb3;
    margin: 9px auto;
    transition: 0.4s;
}

.bar_div{
  width:30px;
  margin-left:10px;
  float:right;
   margin-right:10px;
   display:none;

}
.ul3{ display:none;}

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
   min-width:325px;
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

.rss {
	max-width: 95%;
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
      

.side-nav {
 position:fixed;top:35%;left:-3px;overflow-x:hidden;overflow-y:hidden;
 /* this section calls the dropHeader animation we defined above */
  animation-name: sidenav;
  animation-iteration-count: 1;
  animation-timing-function: ease-out;
  animation-duration: 10s;

}

.side-text {
font-weight:bolder;
  white-space: nowrap; 
  color: white;
  font-size: 12px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.side:hover .side-overlay {
  width: 60px;
}

.side-overlay2 {
  width: 60px;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 77, 0, 0.4);
  overflow: hidden;
  height: 60px;
  transition: .5s ease;
  border-radius:5px;
}

.side-overlay {
    
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 77, 0, 0.4);
  overflow: hidden;
  width: 0;
  height: 60px;
  transition: .5s ease;
  border-radius:5px;
}

@keyframes sidenav {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}
.after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: #FFF;
    background: rgba(0, 0, 0, .8);
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 77, 0, 0.7);
  overflow: hidden;
  width: 66px;
  height: 0;
  transition: .5s ease;
}

.icon-cont:hover .overlay {
  height: 72px;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 12px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  font-weight:bolder;
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
    top:300px;
    left:50%;
    
}


.home{max-width:400px ;min-width:333px;height:500px; float:left;}

.test{width:350px; background-color:white;
box-shadow: 0px 0px 5px green;padding-top:1px;padding-bottom:1px;float:left;margin-left:30px;}

.profile{width:350px; background-color:white; 
box-shadow: 0px 0px 5px green;height:500px;padding-top:1px;float:left;margin-left:30px;}

.bottom-nav{ max-width:330px; min-width:330px;height:50px;margin: 0 auto; display: none;}

@media only screen and (min-width:700px) and (max-width:1200px)
{

  .home{max-width:400px ;min-width:333px;height:500px; margin:0 auto;float:none;}

.test{width:350px; background-color:white;
box-shadow: 0px 0px 5px green;margin:20px auto;padding-top:1px;padding-bottom:1px;float:none;}


.profile{width:350px; background-color:white; margin:20px auto;
box-shadow: 0px 0px 5px green;height:500px;padding-top:1px;float:none;}

.bottom-nav{ display: inline;}

.navwrp .ul0{
      margin-left:60px;
      margin-right:20px;
      
}
.navwrp .ul1{
  margin-left:0px;
       width:100px;
}

.navwrp .ul2{
 display:none
}
.bar_div{
  display:inline;
}
.ul3{ display: inline;}

}
@media only screen and (min-width:400px) and (max-width:699px)
{
  .home{max-width:500px ;min-width:333px;height:500px;margin:0 auto;float:none;}

.test{width:350px; background-color:white;
box-shadow: 0px 0px 5px green;margin:20px auto;padding-top:1px;padding-bottom:1px;float:none;}


.profile{width:350px; background-color:white; margin:20px auto;
box-shadow: 0px 0px 5px green;height:500px;padding-top:1px;float:none;}

.bottom-nav{ display: inline;}

.navwrp .ul0{
      margin-left:50px;
      width:60px;
      margin-right:15px;
      
}
.navwrp .ul1{
  margin-left:0px;
       width:100px;
}
.navwrp .ul2{
 display:none
}

.bar_div{
  display:inline;
}
.ul3{ display: inline;}

}

@media only screen and (min-width:100px) and (max-width:399px)
{
.home{max-width:500px ;min-width:333px;height:500px;margin:0 auto;float:none;}

.test{width:350px; background-color:white;
box-shadow: 0px 0px 5px green;margin:20px auto;padding-top:1px;padding-bottom:1px;float:none;}


.profile{width:350px; background-color:white; margin:20px auto;
box-shadow: 0px 0px 5px green;height:500px;padding-top:1px;float:none;}

.bottom-nav{ display: inline;}

.navwrp .ul0{
    float: left;
      margin-left:10px;
      width:60px;
      margin-right:0px;
      
}
.navwrp .ul1{
  
  margin-left:0px;
       width:100px;
} 
.navwrp .ul2{
 display:none
}

.bar_div{
  display:inline;
}

.ul3{ display: inline;}
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
<li><a href="#"><div class="pro"><img src="img/Ayo.png"  width="25" height="25" style="border-radius:10px; 
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

  <div class="bar_div"><a id="tggle" href="#">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
  </a>
  </div>

<ul class="ul3">
<li><div id="noti_Counter1"></div><a href="#"><img src="img/mail.png"  width="23" height="23" >&nbsp; inbox</a></li>
<li> <div id="noti_Counter"></div><a  href="#"><img src="img/bell.png" id="
" width="23" height="23" style="">&nbsp;notification</a>

</li>

<li><a  href="#"><img src="img/settg.png"  width="23" height="23" >&nbsp; settings</a></li>
<li><a  href="../login.html">Logout</a></li>
</ul> 





</div>
</div>


<div style="max-width:1200px; margin:20px auto;">

<div  class="home"  
<div style="width:85%; margin:0 auto;background-color:white;height:500px;padding-top:10px; box-shadow: 0px 0px 5px green;">
<div class="rss"style="background-image:url(img/medi.png);background-repeat:no-repeat;
background-size:contain;height:480px; background-color:#fff;color:green;border-radius:0px;margin:0 auto;">
<div> <h3>Hi Paul,</h3><h2> Push the button below for Medical Attention</h2></div>


  <input type="checkbox" id="buttonThree"  style="display:none"/>
  <label for="buttonThree"> 
    <i id="click"></i>
  </label>
  <img src="img/push.png" width="100" height="100" style="position:relative; display:block;-webkit-animation: push 5s infinite; /* Safari 4.0 - 8.0 */
    -webkit-animation-direction: alternate;
    left:110px;
    animation: push 5s 5;
    animation-direction: alternate;">
  <div class="countdown" id="countdown"></div>
  
</div>
</div>
</div>


<div class="test" >

<div class="rec" style="width:95%;margin:10px auto; border:1px solid green;height:480px;">

<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/heart.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">45bit/Min</div>
  </div></div>Heartbeat</div>

<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/weighing.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">75kg</div>
  </div></div>Weight</div>


<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/sugar.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">75kg</div>
  </div></div>Blood Glucose level</div>


<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/blood.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">110mm</div>
  </div></div>Blood Pressure</div>

<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/pitcher.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">---</div>
  </div></div>Blood Water Level</div>

<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/height.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">186mm</div>
  </div></div>Height</div>


<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/blood1.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">---</div>
  </div></div>Cholesterol Level</div>

<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/carrot.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">---</div>
  </div></div>Basic Metabolic Rate (BMR)</div>

<div style="float:left;text-align:center; font-size:13px;color:green;width:70px;height:100px;margin-top:38px;margin-left:28px;">
<div class="icon-cont" style="border:2px solid green ;border-radius:5px;position:relative;">
<img src="img/muc.png" width="64" height="64" style="margin:4px auto;display:block;"><div class="overlay">
    <div class="text">---</div>
  </div></div> Percentage Muscle</div>

</div>

</div>


<div class="profile" >
<div  style="width:95%;border:2px solid #fff;  margin:10px auto;"> 
<div style="width:100%;height:230px; 

background: rgba(55,219,46,1);
background: -moz-linear-gradient(left, rgba(55,219,46,1) 0%, rgba(7,12,20,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(55,219,46,1)), color-stop(100%, rgba(7,12,20,1)));
background: -webkit-linear-gradient(left, rgba(55,219,46,1) 0%, rgba(7,12,20,1) 100%);
background: -o-linear-gradient(left, rgba(55,219,46,1) 0%, rgba(7,12,20,1) 100%);
background: -ms-linear-gradient(left, rgba(55,219,46,1) 0%, rgba(7,12,20,1) 100%);
background: linear-gradient(to right, rgba(55,219,46,1) 0%, rgba(7,12,20,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#37db2e', endColorstr='#070c14', GradientType=1 );">
<img src="img/edit.png" width="30" height="30" style="top:0;margin-top:20px; margin-left:55px; right:0;cursor:pointer;">
<hr style="float:left;width:32%; margin-top:95px;border: none;
    height:2px;
    color: #fff;
    background-color: #fff;">
<div style="margin:0 auto; margin-top:30px;width:36%;height:121px;border:2px solid white;
border-radius:50%; float:left;background-image:url(img/Ayo.png);background-repeat:no-repeat;background-size:contain;">

</div>
<hr style="float:left;width:32%; margin-top:45px;border: none;
    height: 2px;
    color: #fff;
    background-color: #fff;">

<div style="clear:both; width:100%;text-align:center;color:white;font-size:12px;"> 
<div style="font-size:18px;">Oluyege Paul</div>
Software Developer @ Global Corporate Health Systems
</div>
</div>
</div>

<div style="width:93%; height:50px; background-color:#fff;margin:13px auto; box-shadow: 0px 0px 2px green;">

<img src="img/premium.png" width="30" height="30" style=" top:0;margin-top:10px;  margin-left:10px; left:0;cursor:pointer;">
<div style="margin-left:50px;margin-top:-25px;color:green;"> Verified Corporate Account</div>
<img src="img/plus.png" width="20" height="20" data-popup-open="popup-1" style=" top:0;margin-top:-42px;  margin-left:300px; right:0;cursor:pointer;">
</div>
<div style="width:93%; height:50px; background-color:#fff;margin:13px auto; box-shadow: 0px 0px 2px green;">

<img src="img/med.png" width="30" height="30" style="top:0;margin-top:10px;  margin-left:10px; left:0;cursor:pointer;">
<div style="margin-left:50px;margin-top:-25px;color:green;"> Your Medical Records</div>

<img src="img/plus.png" width="20" height="20" data-popup-open="popup-1" style="top:0;margin-top:-42px;  margin-left:300px; right:0;cursor:pointer;">

</div>
<div style="width:93%; height:50px; background-color:#fff;margin:13px auto; box-shadow: 0px 0px 2px green;">

<img src="img/diam.png" width="30" height="30" style=" top:0;margin-top:10px;  margin-left:10px; left:0;cursor:pointer;">
<div style="margin-left:50px;margin-top:-25px;color:green;"> Your Personal Records</div>

<img src="img/plus.png" width="20" height="20" data-popup-open="popup-1" style="top:0;margin-top:-42px;  margin-left:300px; right:0;cursor:pointer;">
</div>
</div>




<div class="bottom-nav">
  <div style="margin:0 auto;max-width:200px; min-width:100px;height:40px;">
  <div style="margin-left:0px;margin-right:19px;float:left; font-size:12px;text-align:center;"><a href="#"  id="profile"><img width="35"hieght="35"  src="img/profile.png"><br><strong>profile</strong></a></div>
 <div  style="margin-left:20px;margin-right:20px;float:left; font-size:12px;text-align:center;" ><a href="#"  id="home"><img width="35"hieght="35"  src="img/action.png"><br><strong>home</strong></a></div>
 <div style="margin-left:19px;float:left;font-size:12px;text-align:center;"><a href="#"  id="test"><img width="35" hieght="35"  src="img/test.png"><br><strong>Test</strong></a></div>
</div>
</div>

</div>



<div class="box1" data-popup="popup-1" style=" max-width:520px;height:220px; margin:50px auto;background-color:white;position:absolute;
    width:90%;
    padding:40px;
    margin-top: 30px;
    top:50%;
    left:50%;
    -webkit-transform:translate(-50%, -50%);
    transform:translate(-50%, -50%);
    box-shadow:0px 2px 6px rgba(0, 153, 51,0.4);
    border-radius:3px;
    z-index:9;
    display:none;
    box-shadow: 0 0 0 5px green;
    animation: 3s animateBorderOne ease infinite;
    border-radius: 5px;
    border:1px solid #fff;
    background-image:url(img/Ayo.png);
    background-repeat:no-repeat;
    width:100%;
    background-size:cover;">


<div class="popup-close" data-popup-close="popup-1">x</div>
<div class="after" style="color: #33ff33;">

<img src="img/Ayo.png" width="200" height="200" style="float:left;width:36%;margin-top:10px;margin-left:10px;margin-right:10px;">
<div style="float:left;width:55%;margin-top:13px;font-size:12px;">
<p><span><img src="img/name.png" width="25" height="25"><strong> Holders Name : </strong></span>  Oluyege Paul</p><br>
<p><span><img src="img/type.png" width="25" height="25"><strong>  Account Type :</strong> </span> Corporate Account</p><br>
<p><span> <img src="img/reg.png" width="25" height="25"><strong> Registered By :</strong></span>  Global Corporate Health System</p>
<p><span> <img src="img/checked.png" width="25" height="25"><strong> Subscription Validity :</strong></span>  01/17 - 12/17(1 Year)</p>
</div>
</div>
</div>





<div class="side-nav" style="display:none">

  <div class="side" style="width:70px;height:70px;position:relative">
<a href="health.php"><div style="border:1px solid green; border-radius:5px;width:60px;background-color:#fff; height:60px;margin-bottom:5px;">
<img src="img/health.png" width="50" height="50" style="display:block;margin:3px auto;">
<div class="side-overlay">
    <div class="side-text">Health</div>
  </div></div></a>
</div>

 <div class="side" style="width:70px;height:70px;position:relative">
<a href="med.php"><div style="border:1px solid green; border-radius:5px;width:60px;background-color:#fff; height:60px;margin-bottom:5px;">
<img src="img/med.png" width="50" height="50" style="display:block;margin:3px auto;">
<div class="side-overlay2">
    <div class="side-text">MED</div>
  </div></div></a>
</div>

 <div class="side" style="width:70px;height:70px;position:relative">
<a href="#"><div style="border:1px solid green; border-radius:5px;width:60px;background-color:#fff; height:60px;margin-bottom:5px;">
<img src="img/insur.png" width="50" height="50" style="display:block;margin:3px auto;">
<div class="side-overlay">
    <div class="side-text">INSURE</div>
  </div></div></a>
</div>

 <div class="side" style="width:70px;height:70px;position:relative">
<a href="#"><div style="border:1px solid green; border-radius:5px;width:60px;background-color:#fff; height:60px;margin-bottom:5px;">
<img src="img/shop.png" width="50" height="50" style="display:block;margin:3px auto;">
<div class="side-overlay">
    <div class="side-text">E-COMM</div>
  </div></div></a>
</div>
</div>




<div id="loader"></div>

<div class="botton_bar" style="display:none;
position:fixed;
bottom:0%;
width:450px;
height:50px;
background-color:green;
margin:auto;
bottom:0;
left:33.5%;
border-top-left-radius: 10px;
border-top-right-radius: 10px;"> </div>

<!--
-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script  src="js/bootstrap.min.js"></script> -->
</div>
  </body>
</html>

<script>


var originalWidth = $(window).width();
$(window).bind('resize', function(e) {
  if (window.RT) clearTimeout(window.RT);
  window.RT = setTimeout(function() {
    if (Math.abs($(window).width() - originalWidth) > 100) {
      this.location.reload(false); /* false to get page from cache */
    }
  }, 200);
});


if ( $(window).width() < 1200) {      
 
 $(function(){
    $(".ul3").hide();
   
    $("#tggle").on("click", function(){
       
           $(".ul3, .menu-items2").toggle();
    });
    

});

  $(document).ready(function() {
     $('.profile').hide();
    $('.test').hide();
    $('.home').fadeIn(2000);
   
});

$("#profile").click(function() {
    $('.profile').fadeIn(1000);
    $('.home').hide();
    $('.test').hide();

})

$("#test").click(function() {
     $('.test').fadeIn(1000);
     $('.home').hide();
     $('.profile').hide();

})

$("#home").click(function() {
   $('.home').fadeIn(1000);
   $('.test').hide();
   $('.profile').hide();
})


} 
else {
  //Add your javascript for small screens here 
}



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

