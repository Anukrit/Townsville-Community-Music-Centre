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

<div class="col-lg-9 col-md-8" style="background-image: url(images/guitarPlayer.jpg);     min-height: 400px; padding:40px; ">

  <div style="max-width:1000px; background-color:white; opacity: 0.85; padding: 10px;   word-wrap: break-word;">
    <h2 class="text-center">Sponsors</h2>
    <div>
          <div class="">
             <h3>The Music Centre receives vital support from the sponsors featured on this page</h3>
             <p>Our music concerts are well-publicised and well-attended and sponsors enjoy brand exposure throughout <br>
               the Arts community. We welcome sponsorship or assistance in any form.
             </p>
          </div>
          <div>
            <hr class="HR">
            <img border="0" src="images/SiteImages/TCCcolour150193.gif" align="left" hspace="10" alt="TCC logo">
            <span style="text-align:left; font-weight:bold; font-size:12pt; color:black;">
             Townsville City  Council
             <br></span>
             <span style="text-align:left; font-weight:normal; font-size:12pt; color:black;">
             The Council's Partnerships and Sponsorships scheme provides vital core funding which enables us to maintain the administrative base for all our other activities, and also provides the premises which house our office space.
             <br>
             The Council also assists with the performance venues for our concerts and workshops.

             <br clear="all"> </span>
          </div>
          <div>
            <hr class="HR">
            <img border="0" src="images/SiteImages/Qldlogo150169.png" align="left" hspace="10"  alt="GCBF logo">
            <span style="text-align:left; font-weight:bold; font-size:12pt; color:black;">
             Queensland Government
             <br></span>
             <span style="text-align:left; font-weight:normal; font-size:12pt; color:black;">
             The Gambling Community Benefit Fund has assisted us to obtain office equipment and sound and lighting equipment for our productions
             <br clear="all"></span>
          </div>
          <div style="background-color:white; opacity:1;">

            <div class="clear-both"></div>

          </div>
        </div>
    </div>
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
