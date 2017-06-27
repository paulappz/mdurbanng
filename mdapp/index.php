

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MDUrban</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/thumbnail-gallery.css" rel="stylesheet">
  <script src="scripts/jquery-1.11.0.min.js"></script>
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">

</head>

<body>

  <div class="container-fluid">
    <div class="nav-ban nav-ban-extra">
      <div class="navwrp">
        <div class="ul0">
          <a href="index.php"><img src="img/logo3.png" width=37; height="37"></a>
        </div>

        <ul class="ul1">
          <li>
            <a href="#">
              <div class="pro">
                <img src="img/Ayo.png" width="25" height="25" style="border-radius:10px; 
">Oluyege Paul</div>
</a>
</li>
</ul>

<ul class="ul2">
  <li>
    <div id="noti_Counter1"></div><a href="#"><img src="img/mail.png"  width="23" height="23" style=""></a>
</li>
<li>
  <div id="noti_Counter"></div><a href="#"><img src="img/bell.png" id="noti_Button" width="23" height="23" style=""></a>

<div id="notifications">
  <h3>Notifications</h3>
  <div style="height:300px;"></div>
<div class="seeAll"><a href="#">See All</a></div>
</div>
</li>

<li><a href="#"><img src="img/settg.png"  width="23" height="23" style=""></a>
</li>
<li><a href="../login.html">Logout</a></li>
</ul>

<div class="bar_div">
  <a id="tggle" href="#">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </a>
</div>

<ul class="ul3">
  <li>
    <div id="noti_Counter1"></div>
    <a href="#"><img src="img/mail.png" width="23" height="23">&nbsp; inbox</a>
  </li>
  <li>
    <div id="noti_Counter"></div><a href="#"><img src="img/bell.png" id="
" width="23" height="23" style="">&nbsp;notification</a>

</li>

<li>
  <a href="#"><img src="img/settg.png" width="23" height="23">&nbsp; settings</a>
</li>
<li><a href="../login.html">Logout</a></li>
</ul>


</div>
</div>



    <div class="wlcnote">
Welcome, Paul Oluyege.
    </div>



<div class="wlc">

    We need to know more about You, We promise to keep your detials confidential.
Click the button and Kindly fill the your Profile form 

</div> 



<div style="width:100px; margin:80px auto;"><a class="typeform-share" href="https://teewhy.typeform.com/to/AnADvT" data-mode="1" target="_blank" style="padding:10px 10px; border-radius:5px; background-color:green;color:white;
 box-shadow: 0px 5px 0px rgba(0, 153, 51,0.4);text-decoration:none; margin:auto;">Profile Form</a>
</div>

<div class="app-nav" >

<div class="app-link" >
<div  class="app-link-in" >
<a href="health.php"><img src="img/health.png" width="40px";height:"40px;" ></a>
</div>Health</div>



<div class="app-link" >
<div  class="app-link-in" >
<a href="med.php"><img src="img/med.png" width="40px";height:"40px;" ></a>
</div>Medical</div>



<div class="app-link" >
<div  class="app-link-in" >
<a href="#"><img src="img/insur.png" width="40px";height:"40px;" ></a>
</div>Insurance</div>


<div class="app-link" >
<div  class="app-link-in last-app-link-in" >
<a href="#"><img src="img/shop.png" width="40px";height:"40px;" ></a>
</div>E-Com</div>

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


 if ($(window).width() < 700) {

    $(function () {
      $(".ul3").hide();

      $("#tggle").on("click", function () {

        $(".ul3, .menu-items2").toggle();
      });


    });


  }
  else {
    //Add your javascript for small screens here 
  }







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
