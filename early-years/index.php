<?php include "includes/earlyyears-header.php" ?>

<?php
$users_agent = $_SERVER['HTTP_USER_AGENT'];
session_start();
 ?>
<body>
    
    <?php
@$msg=$_REQUEST['msg'];
if($msg=='alreay-exists')
{
	echo "<script> alert('You have already Applied') </script>";
	$_SESSION['users_agent']=$users_agent;
}

$msg=base64_decode($msg);

if($msg=='thanks')
{
    if(file_exists('includes/thankyou_popup.php'))
    {
		include "includes/thankyou_popup.php";
    }
}

else
{
	if(isset($_SESSION['users_agent']))
	{
	}
		else
		{
			//include "includes/admission_popup.php";  //when need for pop-up of early years uncomment this line
			$_SESSION['users_agent']=$users_agent;
		}

}
?>
<!-- Main wrapper -->
<div class="wrapper" id="wrapper">

<!-- Header -->
<?php include "includes/ey-navigation.php" ?>			
<!-- //Header -->		


<!-- Strat Slider Area -->
<?php //include "includes/home-page-banner-slider.php" ?>			
<!-- End Slider Area -->


<!-- Start Welcame Area -->
<?php include "includes/ey-about.php" ?>					
<!-- End Welcame Area -->

<!-- Start Our Service Area -->
<!-- <?php  ?>							 --><!-- include "includes/ey-classes.php" -->
<!-- End Our Service Area -->


<!-- Start Enroll -->
<?php include "includes/ey-enroll.php" ?>							
<!-- End Enroll -->


<!-- Start our Class Area -->
<?php include "includes/ey-pricing.php" ?>									
<!-- End our Class Area -->


<!-- Start Testimonial Area -->
<?php include "includes/ey-testimonials.php" ?>											
<!-- End Testimonial Area -->


<!-- Start Our Gallery Area -->
<?php include "includes/ey-gallery.php" ?>		
<!-- End Our Gallery Area -->


<!-- Start Blog Area -->
<?php include "includes/ey-blogs.php" ?>				
<!-- End Blog Area -->


<!-- Start upcomming Area -->
<?php //include "includes/ey-events.php" ?>						
<!-- End upcomming Area -->


<!-- Start upcomming Area -->
<?php include "includes/ey-contact.php" ?>						
<!-- End upcomming Area -->


<!-- Start Subscribe Area -->
<?php// include "includes/ey-subscribe.php" ?>								
<!-- End Subscribe Area -->


<!-- Footer Area -->
<?php include "includes/ey-footer.php" ?>								