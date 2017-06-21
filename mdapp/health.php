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
        font-family:'berlin2';
        src: url('Berlin Sans FB Regular.ttf');
      
    }





 @font-face{
        font-family:'Jura';
        src: url('font/jura-Regular.otf');
      
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
      font-size:13px;
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
      


#shiva
{
  width: 100px;
    height: 100px;
    background: red;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px;
  float:left;
  margin:5px;
}
.count
{
  line-height: 100px;
  color:white;
  margin-left:30px;
  font-size:25px;
}
#talkbubble {
   width: 120px;
   height: 80px;
   background: red;
   position: relative;
   -moz-border-radius:    10px;
   -webkit-border-radius: 10px;
   border-radius:         10px;
  float:left;
  margin:20px;
}
#talkbubble:before {
   content:"";
   position: absolute;
   right: 100%;
   top: 26px;
   width: 0;
   height: 0;
   border-top: 13px solid transparent;
   border-right: 26px solid red;
   border-bottom: 13px solid transparent;
}

.linker
{
  font-size : 20px;
  font-color: black;
}



.slideshow {
  width: 294px;
  margin: 0 auto;
  overflow: hidden;
  font-size:12px;
}

.slideshow-container {
  width: 600px;
  transition: 1s ease;

}

.slideshow-container:hover {
  animation-play-state: paused;
}

.slide-cont {
  width: 294px;
  display: inline-block;
position:relative;
  text-align: center;
}

.slide {
  animation: slide 10s ease infinite;
}

@keyframes slide {
  0% {
    transform: translateX(0%);
  }
  
  12.5% {
    transform: translateX(0%);
  }
  
  25% {
    transform: translateX(0%);
  }
  
  37.5% {
    transform: translateX(0%);
  }
  
  50% {
    transform: translateX(-50%);
  }
  
  62.5% {
    transform: translateX(-50%);
  }
  
  75% {
    transform: translateX(-50%);
  }
  
  87.5% {
    transform: translateX(-50%);
  }
  
  99% {
    transform: translateX(-0%);
  }
  
  100% {
    transform: translateX(0);
  }
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




@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.h-tips{
  margin-top:10px;width:52%;float:left;
}

.r-side{
 width:22%; float:left;
}

.r-side-activity{width:100%;height:250px;}

.r-side-wow{width:100%; background-color:white;margin:auto;margin-bottom:20px;
 border:1px solid #b3ffb3;border-radius:2px;
 box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);}

 .chall{display:none;}

 .l-side{width:26%;float:left;
 }

@media only screen and (min-width:700px) and (max-width:1200px)
{

.navwrp .ul0{
      margin-left:40px;
      margin-right:20px;
      
}
.navwrp .ul1{
  margin-left:0px;
       width:100px;
}
.navwrp .ul2{
width:350px;
}

.h-tips{
  margin-top:10px;min-width:600px;margin:0 auto;float:none;
}

.r-side{
 width:580px;float: none;margin:0 auto;height: 250px;
}

.r-side-activity{
  width:48%;height:250px; float: left;
  }
.r-side-wow{display:none}
 
 .chall{width:300px;margin:auto;display: inline;}

 .slideshow-container {
  width: 1190px;
  
  margin-top:10px;

}
.l-side{
  display: none;
}

.slide {
  animation: slide 20s ease infinite;
}

@keyframes slide {
  0% {
    transform: translateX(0%);
  }
  
  12.5% {
    transform: translateX(0%);
  }
  
  25% {
    transform: translateX(-25%);
  }
  
  37.5% {
    transform: translateX(-25%);
  }
  
  50% {
    transform: translateX(-50%);
  }
  
  62.5% {
    transform: translateX(-50%);
  }
  
  75% {
    transform: translateX(-75%);
  }
  
  87.5% {
    transform: translateX(-75%);
  }
  
  99% {
    transform: translateX(0%);
  }
  
  100% {
    transform: translateX(0);
  }
}

}
@media only screen and (min-width:400px) and (max-width:699px)
{


.navwrp .ul0{
      margin-left:50px;
      width:60px;
      margin-right:15px;
      
}
.navwrp .ul1{
  margin-left:0px;
       width:100px;
}
.r-side{
 width:22%; float:left; display:none
}

.l-side{
  display: none;
}

.h-tips{
  margin-top:10px;min-width:600px;margin:0 auto;float:none;
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

.r-side{
 width:22%; float:left; display:none
}
.l-side{
  display: none;
}

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
.h-tips{
  margin-top:10px;min-width:600px;margin:0 auto;float:none;
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



<div class="container-fluid" style="min-width: 700px;">

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




<div class="content row" style="max-width:1200px;min-width:330px; margin:20px auto; overflow:hidden;">

<div class="r-side ">

          <div class="r-side-activity" >

          <div class="" style="width:100%;background-color:#fff;
        margin:auto;margin-bottom:10px;text-align:center"><h4> <img src="img/activity.png" width="20" height="20"> &nbsp Activity Tracker</h4></div>
          

                  <div class="" style="width:100%; background-color:white;margin:auto;margin-bottom:20px;height:200px;
                border:1px solid #b3ffb3;border-radius:2px;"> 
<div style="width:95%; margin:10px auto; height:45px; font-size:12px;border: 1px solid #33ff33; border-radius:3px;padding:2px 2px 2px 2px;">
<img src="img/week.png" width="15" height="15"> &nbsp Weekly Wellness Challenge <br>
<div style="width:95%"><img src="img/prog.png" width="15" height="15" style="float:left;"><div style="float:left"> &nbsp Progress &nbsp</div>
 <div style="width:50%; border:1px solid green;float:left;height:16px;"><div id="prog" style=";background-color:green;border:1px solid green;height:15px;color:white;text-align:center;float:left;"></div></div>
 </div></div>
                
            

<div style="width:95%; margin:10px auto; height:45px; font-size:12px;border: 1px solid #33ff33; border-radius:3px;padding:2px 2px 2px 2px;">
<img src="img/week.png" width="15" height="15"> &nbsp Monthly Fitness Challenge <br>
<div style="width:95%"><img src="img/prog.png" width="15" height="15" style="float:left;"><div style="float:left"> &nbsp Progress &nbsp</div>
 <div style="width:50%; border:1px solid green;float:left;height:16px;"><div id="prog" style=";background-color:green;border:1px solid green;height:15px;color:white;text-align:center;float:left;"></div></div>
 </div></div>

     <div style="width:95%; margin:10px auto; height:45px; font-size:12px;border: 1px solid #33ff33; border-radius:3px;padding:2px 2px 2px 2px;">
<img src="img/week.png" width="15" height="15"> &nbsp Monthly Wellness Challenge <br>
<div style="width:95%"><img src="img/prog.png" width="15" height="15" style="float:left;"><div style="float:left"> &nbsp Progress &nbsp</div>
 <div style="width:50%; border:1px solid green;float:left;height:16px;"><div id="prog" style=";background-color:green;border:1px solid green;height:15px;color:white;text-align:center;float:left;"></div></div>
 </div></div>           
            

                  </div>
                  </div>


<div class="chall" >

<section class="slideshow">
  <div class="slideshow-container slide">

                  <div class="slide-cont" style=" background-color:white;margin:auto;margin-bottom:20px;height:230px;
                  box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);"> 

                  <div class="" style="background-image:url(img/wellness.jpg); width:100%; height:100px; 
                  background-repeat:no-repeat;background-size:cover;">
            
                    <div class="ovtext" style="background-color:rgba(0, 77, 0,.7);color:white; width:100%;
                    padding: 7px 7px;  position:relative;
            top: 69%;text-align:center;">Wellness challenge with Dr Paul</div>


                </div>
                <div style="text-align:left;color:#003300;margin-left:10px;"><br>
            <p><img src="img/time.png" width="15" height="15">&nbsp  Challenge Length : 14 Days</p>
<p><img src="img/avatar.png" width="15" height="15">&nbsp Challenge Participants : 1,655 People</p>

<a href=""><div style="height:30px;border-radius:3px;text-align:center; width:250px;margin:0 auto;padding-top:5px;background-color:green;color:white;">Join Weekly Challenge</div></a>
</div>
  </div>

   <div class="slide-cont" style=" background-color:white;margin:auto;margin-bottom:20px;height:230px;
                  box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);"> 

                  <div class="" style="background-image:url(img/fitness2.jpg); width:100%; height:100px; 
                  background-repeat:no-repeat;background-size:cover;">
            
                    <div class="ovtext" style="background-color:rgba(0, 77, 0,.7);color:white; width:100%;
                    padding: 7px 7px;  position:relative;
            top: 69%;text-align:center;">Fitness Challenge with Coach Toyin</div>


                </div>
                <div style="text-align:left;color:#003300;margin-left:10px;"><br>
            <p><img src="img/time.png" width="15" height="15">&nbsp  Challenge Length : 14 Days</p>
<p><img src="img/avatar.png" width="15" height="15">&nbsp Challenge Participants : 1,655 People</p>

<a href=""><div style="height:30px;border-radius:3px;text-align:center; width:250px;margin:0 auto;padding-top:5px;background-color:green;color:white;">Join Weekly Challenge</div></a>
</div>
  </div>

   <div class="slide-cont" style=" background-color:white;margin:auto;margin-bottom:20px;height:230px;
                  box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);"> 

                  <div class="" style="background-image:url(img/chall.jpg);   width:100%; height:100px; 
                  background-repeat:no-repeat;background-size:cover;">
            
                    <div class="ovtext" style="background-color:rgba(0, 77, 0,.7);color:white; width:100%;
                    padding: 7px 7px;  position:relative;
            top: 69%;text-align:center;">Fitness Challenge with Dr David</div>


                </div>
                <div style="text-align:left;color:#003300;margin-left:10px;"><br>
            <p><img src="img/time.png" width="15" height="15">&nbsp  Challenge Length : 14 Days</p>
<p><img src="img/avatar.png" width="15" height="15">&nbsp Challenge Participants : 1,655 People</p>

<a href=""><div style="height:30px;border-radius:3px;text-align:center; width:250px;margin:0 auto;padding-top:5px;background-color:green;color:white;">Join Monthly Challenge</div></a>
</div>
  </div>


  <div class="slide-cont" style=" background-color:white;margin:auto;margin-bottom:20px;height:230px;
                  box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);"> 

                  <div class="" style="background-image:url(img/fitness.jpg);  width:100%; height:100px; 
                  background-repeat:no-repeat;background-size:cover;">
            
                    <div class="ovtext" style="background-color:rgba(0, 77, 0,.7);color:white; width:100%;
                    padding: 7px 7px;  position:relative;
            top: 69%;text-align:center;">Fitness Challenge with Dr David</div>


                </div>
                <div style="text-align:left;color:#003300;margin-left:10px;"><br>
            <p><img src="img/time.png" width="15" height="15">&nbsp  Challenge Length : 14 Days</p>
<p><img src="img/avatar.png" width="15" height="15">&nbsp Challenge Participants : 1,655 People</p>

<a href=""><div style="height:30px;border-radius:3px;text-align:center; width:250px;margin:0 auto;padding-top:5px;background-color:green;color:white;">Join Monthly Challenge</div></a>
</div>
  </div>





  </div>
</section>
</div>


<div class="r-side-wow" > 

 <div class="" style="width:100%;background-color:#fff;color:green;
        margin: 10px auto;text-align:center; font-weight:bold;">
<img src="img/wow2.png" width="250" height="200"style="100%; margin:auto;display:block;">
</div>
</div>

</div>

<div class="h-tips">


<div class="" style="width:96%;padding-top:1px;padding-bottom:1px;background-color:white;margin:auto;margin-bottom:20px; box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);
color:#003300;text-align:center;"><h3><img src="img/tips.png" width="50" height="50"> &nbsp Health, Fitness and Wellness Tips</h3></div>

          <div class="" style="width:96%; background-color:white;margin:auto;margin-bottom:20px;padding-bottom:20px;box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);">
          <div class="" style="background-color:white;width:100%;height:90px;border:1px solid #b3ffb3;
         border-radius:2px;color:#003300;">
          <div style="float:left; margin:20px;"><img src="img/Ayo.png" class="" style="
          width:50px; height:50px; border-radius:50%;"></div> 
          <div class="" style="float:left;margin-top:25px;">Posted by Oluyege Paul<br>
        
          <div style="font-size:12px;"> <img src="img/category.png" width="13" height="13"> Wellness &nbsp &nbsp <img src="img/time.png" width="13" height="13"> Jan. '17, 10:20pm</div>
          </div>

          </div>
          
           <div class="contentxt" style="width:93%;
          border:1px solid #b3ffb3; margin:auto; margin-top: 20px;border-radius:2px;
          color:#003300;padding:10px 10px 10px 10px;">
          
          Replace "I" with "We" and watch "Illness" become "Wellness". What a concept!
Sharecare employee @mississippi_snow found this inspiring message on an after-work walk along the @atlantabeltline.

<div class="portrait"style="background-image:url(img/img.jpg);margin-top:10px; width: 500px;
    height: 300px;
    display:inline-block;
    vertical-align: top;
    background-size:cover;
    background-position:50% 50%;">
  
</div>

           </div>

          <div class="comment" style="width:80%; margin: 10px auto">
          <img src="img/Ayo1.png" width="30"height=30px style="border-radius:3px;margin-left:20px;margin-right:20px;border:1px solid green;float:left" >
          <textarea style="width:75%;height:30px;border-radius:3px;border:1px solid #33ff33;" ></textarea>
            </div>

            <div class="comment" style="width:80%; margin: 10px auto">
          <img src="img/Ayo.png" width="30"height=30px style="border-radius:3px;margin-left:20px;margin-right:20px;border:1px solid green;float:left" >
          <span style="width:75%;height:30px;font-size:11px;" > Nice one.. can't wait for my illness to become Wellness truely</span>
            </div>

          </div>
          
   
</div> 



<div class="side-nav" >

  <div class="side" style="width:70px;height:70px;position:relative">
<a href="health.php"><div style="border:1px solid green; border-radius:5px;width:60px;background-color:#fff; height:60px;margin-bottom:5px;">
<img src="img/health.png" width="50" height="50" style="display:block;margin:3px auto;">
<div class="side-overlay2">
    <div class="side-text">Health</div>
  </div></div></a>
</div>

 <div class="side" style="width:70px;height:70px;position:relative">
<a href="med.php"><div style="border:1px solid green; border-radius:5px;width:60px;background-color:#fff; height:60px;margin-bottom:5px;">
<img src="img/med.png" width="50" height="50" style="display:block;margin:3px auto;">
<div class="side-overlay">
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


<div class="l-side"  >
         
       <div class="" style="width:100%;margin:auto;">
          
          <div class="" style="width:100%; background-color:#fff;margin: 5px auto;;text-align:center;
          box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);"><h4>Weekly Challenges</h4></div>


<section class="slideshow">
  <div class="slideshow-container slide">

                  <div class="slide-cont" style=" background-color:white;margin:auto;margin-bottom:20px;height:300px;
                  box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);border-radius:5px;"> 

                  <div class="" style="background-image:url(img/wellness.jpg); width:100%; height:150px; 
                  background-repeat:no-repeat;background-size:cover;">
            
                    <div class="ovtext" style="background-color:rgba(0, 77, 0,.7);color:white; width:100%;
                    padding: 10px 10px;  position:relative;
            top: 73%;text-align:center;">Wellness challenge with Dr Paul</div>


                </div>
                <div style="text-align:left;color:#003300;margin-left:20px;"><br><br>
            <p><img src="img/time.png" width="15" height="15">&nbsp  Challenge Length : 14 Days</p>
<p><img src="img/avatar.png" width="15" height="15">&nbsp Challenge Participants : 1,655 People</p>
</div>
<a href=""><div style="height:30px;border-radius:3px;text-align:center; width:280px;margin:0 auto;padding-top:5px;background-color:green;color:white;">Join Challenge</div></a>


                  </div>

   <div class="slide-cont" style=" background-color:white;margin:auto;margin-bottom:20px;height:300px;
                  box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);border-radius:5px;"> 

                  <div class="" style="background-image:url(img/fitness2.jpg); width:100%; height:150px; 
                  background-repeat:no-repeat;background-size:cover;">
            
                    <div class="ovtext" style="background-color:rgba(0, 77, 0,.7);color:white; width:100%;
                    padding: 10px 10px;  position:relative;
            top: 73%;text-align:center;">Fitness Challenge with Coach Toyin</div>


                </div>
                <div style="text-align:left;color:#003300;margin-left:20px;"><br><br>
            <p><img src="img/time.png" width="15" height="15">&nbsp  Challenge Length : 14 Days</p>
<p><img src="img/avatar.png" width="15" height="15">&nbsp Challenge Participants : 1,655 People</p>
</div>
<a href=""><div style="height:30px;border-radius:3px;text-align:center; width:280px;margin:0 auto;padding-top:5px;background-color:green;color:white;">Join Challenge</div></a>


                  </div>


  </div>
</section>


 <div class="" style="width:100%; background-color:#fff;margin: 5px auto;text-align:center;
          box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);"><h4>Monthly Challenges</h4></div>


<section class="slideshow">
  <div class="slideshow-container slide">

                     <div class="slide-cont" style=" background-color:white;margin:auto;margin-bottom:20px;height:300px;
                  box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);border-radius:5px;"> 

                  <div class="" style="background-image:url(img/chall.jpg); width:100%; height:150px; 
                  background-repeat:no-repeat;background-size:cover;">
            
                    <div class="ovtext" style="background-color:rgba(0, 77, 0,.7);color:white; width:100%;
                    padding: 10px 10px;  position:relative;
            top: 73%;text-align:center;">Nutrition Challenge with Nutritionist Teju</div>


                </div>
                <div style="text-align:left;color:#003300;margin-left:20px;"><br><br>
            <p><img src="img/time.png" width="15" height="15">&nbsp  Challenge Length : 14 Days</p>
<p><img src="img/avatar.png" width="15" height="15">&nbsp Challenge Participants : 1,655 People</p>
</div>
<a href=""><div style="height:30px;border-radius:3px;text-align:center; width:280px;margin:0 auto;padding-top:5px;background-color:green;color:white;">Join Challenge</div></a>


                  </div>



   <div class="slide-cont" style=" background-color:white;margin:auto;margin-bottom:20px;height:300px;
                  box-shadow: 0px 1px 1px 1px rgba(0, 153, 51,0.1);border-radius:5px;"> 

                  <div class="" style="background-image:url(img/fitness.jpg); width:100%; height:150px; 
                  background-repeat:no-repeat;background-size:cover;">
            
                    <div class="ovtext" style="background-color:rgba(0, 77, 0,.7);color:white; width:100%;
                    padding: 10px 10px;  position:relative;
            top: 73%;text-align:center;">Fitness Challenge with Dr David</div>


                </div>
                <div style="text-align:left;color:#003300;margin-left:20px;"><br><br>
            <p><img src="img/time.png" width="15" height="15">&nbsp  Challenge Length : 14 Days</p>
<p><img src="img/avatar.png" width="15" height="15">&nbsp Challenge Participants : 1,655 People</p>
</div>
<a href=""><div style="height:30px;border-radius:3px;text-align:center; width:280px;margin:0 auto;padding-top:5px;background-color:green;color:white;">Join Challenge</div></a>

                  </div>

  </div>
</section>
    </div>

</div>
</div>

</div>

</div>

<!--
<div>

<div id="shiva"><span class="count">200</span></div>

<div style="clear:both"></div>

<div id="talkbubble"><span class="count">2000000</span></div>

-->
</div>

<div id="loader"></div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script  src="js/bootstrap.min.js"></script> -->
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


} 
else {
  //Add your javascript for small screens here 
}

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 10000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});






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

<script>
window.onload = function(){
  var elem = document.getElementById("prog");   
  var width = 0;
  var id = setInterval(frame, 100);
  function frame() {
    if (width >= 50) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
};
</script>