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
    <h2>Are you new to Townsville?</h2>
<p><span>
General information about Townsville is available at -<br>http://www.townsville.qld.gov.au/townsville/infocentre/Pages/default.aspx<br><br>

Townsville has a population of about 200,000 and is growing at about 1 suburb per year, so there is a lot of musical activity. All private schools and most government schools have music teachers.
The larger private schools are Townsville Grammar, the Cathedral School and Ryan Catholic College.
The larger public high schools are Kirwan and Pimlico.<br><br>

Music Teachers Association of Qld is a good source of information for local music teachers.<br>
The Townsville Branch contact is the Secretary  (Ms Margery Jorgensen)<br>
Phone (07) 47790382<br>
Email: mjo11750@bigpond.net.au<br>

Another active teacher's organisation is the Kodaly Music Education Institute of Australia -<br> www.kodaly.org.au/<br>
Information on their Townsville Chapter can be found at -<br>http://webapps.townsville.qld.gov.au/CommunityDirectory/Organisation/OrganisationDetails/1185<br><br>

Some local businesses also employ or assist music teachers. Try these - <br>heather@thekeyboardshop.com.au <br>and www.artiesmusiconline.com.au/<br><br>

Busking is permitted at several public spaces around the city with a Buskers Permit from the city council - phone 4727 9680.<br>
There is no age limit, but buskers 16 and under will need to be accompanied by a parent/guardian.<br>
             <br></span>
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
