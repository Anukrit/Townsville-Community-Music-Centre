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
    <h2>Musos</h2>
    <div style="background: black; opacity: 1; padding: 20px; text-align: center; color: white; font-size: large;">

      <h3>Free listing for Music Centre members!</h3>
      <p>Publicise yourself, your band or organisation here!</p>
      <p>   Send your information, photos, etc. to email
        <a href="mailto:admin@townsvillemusic.org.au?subject=Musos page" target="_blank"> admin@townsvillemusic.org.au </a>
        or mail to -<br>Townsville Community Music Centre, PO Box 1006, Townsville Q. 4810
      </p>
    </div>
  </div>

<hr class="HR">

  <div style="background-color:#fff; padding:20px; float:left; margin-right:10px; text-align:center;">
    <div style="margin-top:20px;">
      <img border="0" src="images/musos/TCBSaxLogo800.jpg" width="600px" align="center" hspace="10" alt="TCB logo">
       <span style="text-align:left; font-weight:normal; font-size:10pt; color:black;"><br clear="left">
       <b>The Townsville Concert Band are currently looking for musician members. </b>
       <br>This is a local community band who meet once a week for rehearsals, and who play gigs around town throughout the year.
       The band plays a range of different styles of concert band music, ranging from classical to musical theatre and modern.
       <br><b>All levels and ages are welcome.</b>
       </span>
       <p>
         For more information, <a href="mailto:hollie.clark1@jcu.edu.au" target="_blank"> email us </a><br>
         or phone Hollie: 04019 151 185<br>
         or phone Mark: 0408 088 675<br>
         <a href=" https://www.facebook.com/TownsvilleConcertBand" target="_blank"> see our Facebook page</a>
       </p>
    </div>

    <hr class="HR">

    <div style="margin-top:20px;">
             <h3>The Camerata Singers</h3>

             <img border="0" src="images/musos/Camerata.jpg" width="600" align="center" hspace="10" vspace="10" alt="Poms from Oz">
      <p>
       The concept of the Camerata Singers originated in the 1980s when Susan Grinsell, who was teaching voice at James Cook University realised that ensemble singing was sadly lacking for tertiary music students. Since then, Susan, along with repetiteur Carol DallOsto, has strived to bring quality ensemble singing to the wider community by performing at events from the Ingham Italian Festival through to Cotters Markets in the mall.
       <br><br>
       The Camerata Singers comprises a group of trained singers, both male and female, from age 18 and over who strive to provide quality performances in a range of styles from classical through to A cappella and contemporary.  A number of members also regularly participate in local music theatre and theatre productions.
      </p>
      <p>For further information or bookings contact the Music Centre 4724 2086<br></p>
      <a href="mailto:admin@townsvillemusic.org.au?subject=Website enquiry" target="_blank">or email admin@townsvillemusic.org.au</a>
    </div>

    <hr class="HR">

    <div style="margin-top:20px;">
          <h3>Celtic Fyre</h3>
             <img border="0" src="images/musos/Celtic-Fyre-Wall-with-Fire8.jpg" align="center" hspace="10" vspace="10" alt="Celtic Fyre">
             <span style="text-align:left; font-weight:normal; font-size:10pt; color:black;"><br clear="left">
             <b>The alternative celtic rock band from North Queensland</b><br><br>
             Typical audience response: - "WOW - I wasn't
             prepared for that! Racing around the stage in kilts, blowing bagpipes, jumping
             from one instrument to the next, these guys know how to entertain!" <br><br>
             They will break your heart with the mournful and eerie sounds of the Great
             Highland Bagpipe and then crank it up real hard and rock you 'til you drop. <br><br>
             This 11 piece band  is a fun-loving kick-em-in-the-pants band that just wants to rock - celtic style!
             <br><br>
           </p>
             <a href="http://www.celticfyre.com/" target="_blank"> www.celticfyre.com </a>
    </div>



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
