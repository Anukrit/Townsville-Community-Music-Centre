<?php
session_start();
include_once('config.php');
?>
<html>
    <head>
        <title>
            Home
        </title>
    </head>
<body>
<?php
include_once('menu.php');
?>
<div style="margin:auto" class="row">

<div class="col-lg-9 col-md-8" style="background-image: url(images/guitarPlayer.jpg); min-height: 400px; padding:40px; ">
  <div style="max-width:1000px; background-color:white; opacity: 0.85; padding: 10px;   word-wrap: break-word; margin-bottom:20px;">
    <h2>Events</h2>
    <div style="background: black; opacity: 1; padding: 20px; text-align: center; color: white; font-size: large;"><p>7:30pm Saturday 28th October <br>
    Townsville Civic Theatre</p>
    </div>
    <div>
      <img src="images/events/BRO-2017-Serenade.jpg">
      <img src="images/events/TShop300web.jpg">
    </div>
  </div>

  <div style="background-color:#fff; padding:20px; width: 50%; min-width:350px; float:left; margin-right:10px; ">
    <span style="text-align: center; font-weight:bold; font-size:14pt; color:black;">
     SUNDAY VARIETY CONCERT
    </span>
    <span style="text-align:left; font-weight:bold; font-size:12pt; color:black;">
     <br>Presented by Friends of the Theatre
    </span>
    <span style="text-align:left; font-weight:normal; font-size:12pt; color:black;">
     <br>2pm Sunday 29 October at Pimlico Performing Arts Centre
     <br>Fulham Road
    </span>
    <span style="text-align: left; font-weight:bold; font-size:12pt; color:black;">
     <br>Enquiries - please phone 4723 7879
    </span>
 </div>

 <div style="background-color:#fff; padding:20px; width: 45%; min-width:350px; float:left; :">
    <span style="text-align: center; font-weight:bold; font-size:14pt; color:black;">
     SUNDAY VARIETY CONCERT
    </span>
    <span style="text-align:left; font-weight:bold; font-size:12pt; color:black;">
     <br>Presented by Friends of the Theatre
    </span>
    <span style="text-align:left; font-weight:normal; font-size:12pt; color:black;">
     <br>2pm Sunday 26 November at Pimlico Performing Arts Centre
     <br>Fulham Road
    </span>
    <span style="text-align: left; font-weight:bold; font-size:12pt; color:black;">
     <br>Enquiries - please phone 4723 7879
    </span>
 </div>

<div style="clear:both;"></div>
</div>

<?php include('sidebar.php'); ?>



</div>

<!--This code is used for changing the active item on the menu-->
<script>
$(document).ready(function(){
$('#home').addClass("active");
});
</script>
<!-- The above code is used to change the active item on the menu. To be explicitly pasted on each page that is created-->
</body>
</html>
