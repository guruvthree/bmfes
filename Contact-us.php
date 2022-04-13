<?php
//All company information.
include_once("common/vthreeConstants.php");
$mybg5="mybg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("common/assests.php");?>	
    </head>
    <body>
<!--loader-->
<?php include_once("common/preloader.php");?>

<!--loader--> 
		<!--Header Section Start Here
		==================================-->
		<?php include_once("common/header.php"); ?>

		<!-- END HEADER -->
			<!-- CONTENT -->
			<!-- Intro Section -->
			<section class="inner-intro bg-img-contact light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Services Detail"><span>Contact Us</span></h1>
						<div class="page-breadcrumb">
							<span class="b-line l-left"></span>
						</div>
					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
				<div class="container">

					<div class="row">

						<div class="col-lg-8">

							<div class="headeing pb-30">
								<h2>Get in Touch</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<!-- Contact FORM -->
							<form class="contact-form " id="contact" action="" method="post" autocomplete="off">
								
								<div class="row">
									<div class="col-lg-6">
										<div class="form-field">
											<input class="input-sm form-full"   id="name" type="text" name="formname" placeholder="Your Name">
										</div>
										<div class="form-field">
										<input class="input-sm form-full"   id="mobile" type="text" name="formmobile"  placeholder="10 Digit Mobile Number">
										
										</div>
										<div class="form-field">
											<input class="input-sm form-full"  id="email" type="text" name="formemail" placeholder="Email" >
										</div>
										
									</div>
									<div class="col-lg-6">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="formmessage" placeholder="Your Message" ></textarea>
										</div>
									</div>
									<div class="col-lg-12 mt-30">
									<div id="warning" style="display:none;border-radius:5px;color:white;text-align:center;background:#222;width:60%;margin-left:20%"></div>	
									<br>
										<input type="submit" class="btn-text" id="submit" name="submit" value="Send Message" />
									</div>
								</div>
								<!-- IF MAIL SENT SUCCESSFULLY -->
<?php
/*
if(isset($_POST['submit']))
{
	@extract($_POST);
	$to = "gurunathanphp@gmail.com";
	$from = "GlobalExpoData" . ' <' . "globalexpodata.com" . '>';
	$subject = 'Enquiry from GlobalExpoData' ;
	
	$message = "Name : $formname <br/> Email : $formemail <br/> Subject : $formsubject <br/> Message : $formmessage";	
	
	$headers = ['From' => $formemail, 'Reply-To' => $formemail, 'Content-type' => 'text/html; charset=iso-8859-1'];
	
	mail($to,$subject,$message,$headers);	
	
	if ($result)
	{
		echo '<div><div role="alert" class="alert alert-success"><strong>Thanks</strong> Your message has been sent.</div></div>';
	}
	else
	{
		echo 'Sorry, unexpected error. Please try again later';
	}
	
}
*/


if(isset($_POST['submit']))
{
	$form_name= $_POST['formname'];
	$form_email= $_POST['formemail'];
	$form_mobile= $_POST['formmobile'];
	$form_message= $_POST['formmessage'];

	$to = "gurunathanphp@gmail.com";	
	
	//subject and the html message
	$subject = 'Message from ' . $form_name;	
	$message = 'Name: ' . $form_name . '<br/><br/>
		       Email: ' . $form_email . '<br/><br/>
			   Mobile: ' . $form_mobile . '<br/><br/>
		       Message: ' . nl2br($form_message) . '<br/>';
	
	$headers = ['From' => $form_email, 'Reply-To' => $form_email, 'Content-type' => 'text/html; charset=iso-8859-1'];
	
	$result = mail($to,$subject,$message,$headers);
	
	if ($result)
	{
		echo '<div><div role="alert" class="alert alert-success"><strong>Thanks</strong> Your message has been sent.</div></div>';
	}
	else
	{
		echo 'Sorry, unexpected error. Please try again later';
	}
}


?>
								
								<!-- END IF MAIL SENT SUCCESSFULLY -->
							</form>
							<!-- END Contact FORM -->
						</div>

						<div class="col-lg-4 contact mt-sm-30 mt-xs-30">
							<div class="headeing pb-20">
								<h2>Contact Info</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<div class="contact-info">

							
							
								<ul class="info">
									<li>
										<i class="icon ion-ios-location"></i>
											<p>
												<span class="mybold"><?php echo ADDRESS_LINE_1 ?></span> <br/>
												<?php echo ADDRESS_LINE_2 ?>
												<?php echo ADDRESS_LINE_3 ?>
												<?php echo ADDRESS_LINE_4 ?>
											</p>
									</li>

									<li>
										<i class="icon ion-android-call"></i>
											<p class="mt-10">
											<span> <a href="tel:<?php echo MOBILE ?>"><?php echo MOBILE ?></a></span>
											</p>
									</li>
									<li>
										<i class="icon ion-ios-email"></i>
											<p class="mt-10">
												<?php echo EMAIL ?>
											</p>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<!-- Map Section -->

			</section>
			
		<!-- Footer_Section -->
		<footer class="footer pt-50">
		<?php include_once("common/footer.php")?>
		</footer>
		<!-- Footer_Section_End -->
		<!-- Site Wraper End -->
	<!-- Site Wraper End --> 
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/tether.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.easing.js" type="text/javascript"></script> 

		<!-- fancybox Js -->
		<script src="assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="assets/js/owl.carousel.js" type="text/javascript"></script>
	
		<!-- imagesloaded Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
	
		<!-- revolution Js --> 
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script> 
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script> 
		<script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script> 
		<script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script> 
		<script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script> 
		<script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script> 
		<script type="text/javascript" src="assets/js/jquery.revolution.js"></script> 
		<!-- google map -->
		
        <!-- Mail Function Js --> 
        <!-- custom Js -->
		<script src="assets/js/custom.js" type="text/javascript"></script>


		<script>
	$(document).ready(function()
	{

	
		$("#submit").click(function(e)
		{
			var name=$("#name").val();
			var mobile=$("#mobile").val();
			var message = $("#message").val();
			var email=$("#email").val();
			
			var nameReg='^[A-Za-z]{3,50}$';
			var onlyAlpha='^[A-Za-z ]{3,50}$';
			var mobileRg='^[0-9]{10}$';
			var emailReg = '[a-z0-9]+@[a-z]+\.[a-z]{2,3}';

			if(name=="")
			{
				$("#warning").css("display","block");
				$("#name").focus();
				document.getElementById('warning').innerHTML='<span style="color:white;">Enter Valid Name<i class="em em-anguished" aria-role="presentation" aria-label="ANGUISHED FACE"></i></span>';
				return false;
			}
			else if(!mobile.match(mobileRg))
			{
				$("#warning").css("display","block");
				$("#mobile").focus();
				document.getElementById('warning').innerHTML='<span style="color:white;">Enter Valid 10 digit Mobile number<i class="em em-anguished" aria-role="presentation" aria-label="ANGUISHED FACE"></i></span>';
				return false;
			}
			else if(!email.match(emailReg))
			{
				$("#warning").css("display","block");
				$("#email").focus();
				document.getElementById('warning').innerHTML='<span style="color:white;">Enter Valid Email ID<i class="em em-anguished" aria-role="presentation" aria-label="ANGUISHED FACE"></i></span>';
				return false;
			}
			else if(message == "")
			{
				$("#warning").css("display","block");
				$("#message").focus();
				document.getElementById('warning').innerHTML='<span style="color:white;">Enter Message<i class="em em-anguished" aria-role="presentation" aria-label="ANGUISHED FACE"></i></span>';
				return false;
			}
			else
			{
				document.getElementById('warning').innerHTML='<span style="color:white;"><i class="em em-anguished" aria-role="presentation" aria-label="ANGUISHED FACE"></i></span>';
				return true;
			}
						
		});
	});
	

</script>   
		
    </body>

<!-- contact11:27-->
</html>


