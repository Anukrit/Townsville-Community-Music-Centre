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
    <h2 class="text-center">Members</h2>
    <div>
           <div class="JGNdiv" style="text-align:left;font-size:12pt">
            You can support the Music Centre by becoming a Member and derive some benefits for yourself at the same time.
            Your subscription helps to keep us operating and we provide substantial discounts whenever possible. <br><br>
            For the Music Centre's own events, Members' ticket discounts can be as high as 50%!<br><br>
            <b>The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible!</b><br>
          </div>
          <div>
            <p>To become a Member, or to update an existing Membership
              <a href="docs/Membership applic form 2015.doc" target="_blank">Download the Application Form</a>
            </p>
            <p>
              <span>Complete and return the form with cheque to: <br>
              Townsville Community Music Centre<br>
              PO Box 1006, Townsville, Qld 4810<br>
              or email </span>
              <a href="mailto:admin@townsvillemusic.org.au?subject=About us page" target="_blank">admin@townsvillemusic.org.au </a>
              <span>or see below to pay online with PayPal or credit card:</span>
            </p>
            <div class="col-md-6 text-center">
              <h3>Individual membership <br><small>$25 per year</small> <h3>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ">
                <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online.">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>

            <div class="col-md-6 text-center">
              <h3>Tax-deductible donation <h3>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="67K2M93WVJM2L">
                <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online.">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>

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
