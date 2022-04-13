<?php
//All company information.
include_once ("common/vthreeConstants.php");
$mybg3="mybg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once ("common/assests.php"); ?>		
		<style>
			.gbox{-display:none;}
			#gbox_1{display:block;}
			html{scroll-behavior:smooth;}
		</style>
		<script>
			/*
			function show_box(p,e)
			{
				var cl=document.getElementsByClassName('gbox');
				
				for(i=0;i<cl.length;i++)
				{
					cl[i].style.display="none";
				}
				
				document.getElementById("gbox_"+p).style.display="block";
				e.preventDefault();
			}
			*/
		</script>
	</head>
	<body>
		<!--loader-->
		<?php include_once ("common/preloader.php"); ?>

		<!--loader-->
		<!--Header Section Start Here
		==================================-->
		<header>
		<?php include_once ("common/header.php"); ?>
		</header>

		<!-- END HEADER -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Services Detail"><span>Services</span></h1>
						<div class="page-breadcrumb">
							<span class="b-line l-left "></span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- Intro Section -->
		<!-- Service Section -->
	
		<div id="services-section" class="padding ptb-xs-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sx-12">
						<div class="single-sidebar-widget">
							<div class="special-links">
							<br> <br>
								<ul>
<?php
for ($i = 0;$i < count($serviceList);$i++)
{ ?>
<li>

<a href="#show_service_<?php echo $i ?>" class="glink active" id="glink_<?php echo $i ?>" href="#" onClick="show_box(1,event)">
	<?php echo $serviceList[$i] ?>

</a>
</li>

 <?php
}
?>
		
			
								</ul>
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-8 mt-xs-30 mt-sm-30">
						
						<div class="gbox" id="gbox_1">
							<div class="text-box mt-40">

							<div class="row clearfix">
								<div class="col">
									<p>New technologies and products for the automotive market. ERM develops both hardware and software telematics solutions. ERM has pioneered Fleet Management Systems and has a global presence.</p>
									<p>Since 1985 ERM Advanced Telematics (Israel) has been developing new technologies and products for the automotive market. ERM develops both hardware and software telematics solutions. ERM has pioneered in Fleet Management Systems and has global presence.</p>
								</div>
							</div>
							
							<div class="row mt-30 mt-xs-15 clearfix">
								<div class="col-md-5" style="border:3px solid gray" >
								<figure>
									<img  id="show_service_0" src="assets/images/service/service1.svg" alt="">
								</figure>
									
								</div>
							</div>


								<div class="box-title mb-20">
									<h3><?php echo $serviceList[0] ?></h3>
								</div>
								<div class="text-content">
									<p class="g_justify">
									Driving Behavior technology answers the need to educate drivers, while they drive, and simultaneously log their behavior for management and future use. The Driving Behavior technology includes a 3-dimentional black box application that provides accurate and relevant information regarding the driver’s activities and maneuvers before and during an accident event.

									ERM’s Driving Behavior distinguishes between different types of maneuvers, and reports violation according to the level of severity. The technology was designed for simple and fast implementation, and thus differentiate between different types of vehicles, allowing accurate reporting.

									During an accident event, the Driving Behavior technology automatically launches its black-box feature that logs 75 seconds before and after the impact. The data is registered in a very high sampling rate (1mS) including time stamp and location of each sample record, thereby enabling very accurate and detailed accident reconstruction and analysis for the fleet manager and/or insurance companies use.
									</p>
									
									
								</div>
							</div>
						</div>


						<!-- service 2 starts -->

						<div class="gbox" id="gbox_1">
							<!-- <div class="full-pic">
								<figure>
									<img src="assets/images/service/service2.svg" alt="">
								</figure>
							</div> -->
							<div class="text-box mt-40">

							<div class="row mt-45 mt-xs-15 clearfix">
								<div class="col-md-5" style="border:3px solid gray" >
								<figure>
									<img id="show_service_1" src="assets/images/service/service2.svg" alt="">
								</figure>
									
								</div>
								<div class="col-md-7 text-box">
									<div class="box-title mb-20 mt-sm-30 mt-xs-30">
										<!-- <h3>Aenean suscipit eget mi act</h3> -->
									</div>
									<div class="text-content">
										<!-- <p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
										</p> -->
									</div>
								</div>
							</div>


								<div class="box-title mb-20">
									<h3><?php echo $serviceList[1] ?></h3>
								</div>
								<div class="text-content">
									<p class="g_justify">
									AVL (Automatic Vehicle Location) technology is used for tracking and telematics applications: connected car, different logistics applications, vehicle diagnostics, driver and passenger safety and more. Using ERM’s AVL technology is making it possible for the fleet manager to track the vehicle locations in real time and have better control over the fleet and drivers’ performances.

									ERM’s AVL technology is used as the foundation of any solution we offer our partners and customers, and it is unique in the market thanks to its high flexibility and modularity.

									AVL technology enables quick and simple integration process by using Single-Wire-Interface and a flat dynamic protocol that on-the-fly builds the transmitted record with only the selected parameters that were initially requested, and also in the form that was predefined by the partner for server integration.

									The technology also supports almost unlimited additional features enrichment, as external add-ons and accessories, physically connected to its proprietary Single-Wire-Interface.
									</p>
									
									
								</div>
							</div>
						</div>

						<!-- service 2 ends -->




							<!-- service 3 starts -->

							<div class="gbox" id="gbox_1">
							<!-- <div class="full-pic">
								<figure>
									<img src="assets/images/service/service2.svg" alt="">
								</figure>
							</div> -->
							<div class="text-box mt-40">

							<div class="row mt-45 mt-xs-15 clearfix">
								<div class="col-md-5" style="border:3px solid gray" >
								<figure>
									<img id="show_service_2" src="assets/images/service/service3.svg" alt="">
								</figure>
									
								</div>
								<div class="col-md-7 text-box">
									<div class="box-title mb-20 mt-sm-30 mt-xs-30">
										<!-- <h3>Aenean suscipit eget mi act</h3> -->
									</div>
									<div class="text-content">
										<!-- <p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
										</p> -->
									</div>
								</div>
							</div>


								<div class="box-title mb-20">
									<h3><?php echo $serviceList[2] ?></h3>
								</div>
								<div class="text-content">
									<p class="g_justify">

									ERM’s CANbus Interface technology is designed for advanced vehicle diagnostic applications. It offers sophisticated event based tools to monitor, enquire, analyze and transmit information about the vehicle’s systems and sensors in real-time. The multi-protocol supported CAN Interface, enables a deep understanding of the numerous scenarios in a vehicle’s day to day activities.

 

ERM’s CAN Interface technology offer two main tools:
<ul>
	<li>Rule Engine - enables the fleet manager to set multi-dimensional CAN parameters rules, on which violation will trigger an event and send the relevant information in real-time to the fleet manager server resulting in considerably better controlling of the fleet’s operation and performances.</li>
 	<li>
	 Multi-Dimensional Histograms - enable deep analysis of particular situations during the vehicle's life.
	 </li>
</ul>

								
									</p>
									
									
								</div>
							</div>
						</div>

						<!-- service 3 ends -->

 
							<!-- service 4 starts -->

							<div class="gbox" id="gbox_1">
							<!-- <div class="full-pic">
								<figure>
									<img src="assets/images/service/service2.svg" alt="">
								</figure>
							</div> -->
							<div class="text-box mt-40">

							<div class="row mt-45 mt-xs-15 clearfix">
								<div class="col-md-5" style="border:3px solid gray" >
								<figure>
									<img id="show_service_3" src="assets/images/service/service5.svg" alt="">
								</figure>
									
								</div>
								<div class="col-md-7 text-box">
									<div class="box-title mb-20 mt-sm-30 mt-xs-30">
										<!-- <h3>Aenean suscipit eget mi act</h3> -->
									</div>
									<div class="text-content">
										<!-- <p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
										</p> -->
									</div>
								</div>
							</div>


								<div class="box-title mb-20">
									<h3><?php echo $serviceList[3] ?></h3>
								</div>
								<div class="text-content">
									<p class="g_justify">

									Fuel Monitoring technology is designed to alert, in real-time, of any fuel related event whether during ignition ON or OFF, and to assist in preventing vehicle fuel theft.

Fuel Monitoring technology is designed to read and analyze the data from fuel floats and fuel sensors. A special algorithm levels the data in order to present a steady consumption report similar to the fuel gauge, for any presentation layer in an application. Once leveled, the Fuel Monitoring technology will detect and alert irregular consumption events, such as fuel theft or refueling events.

By a unique mechanism the technology supports an automatic or manual calibration process. The information received is highly accurate and the fuel theft reports are presented in percentages or liters.

Using ERM’s Fuel Monitoring technology, fleet managers now have one less thing to worry about, as fuel theft detection and prevention has never been easier.

 


								
									</p>
									
									
								</div>
							</div>
						</div>

						<!-- service 4 ends -->





							<!-- service 5 starts -->

							<div class="gbox" id="gbox_1">
							<!-- <div class="full-pic">
								<figure>
									<img src="assets/images/service/service2.svg" alt="">
								</figure>
							</div> -->
							<div class="text-box mt-40">

							<div class="row mt-45 mt-xs-15 clearfix">
								<div class="col-md-5" style="border:3px solid gray" >
								<figure>
									<img id="show_service_4" src="assets/images/service/service4.svg" alt="">
								</figure>
									
								</div>
								<div class="col-md-7 text-box">
									<div class="box-title mb-20 mt-sm-30 mt-xs-30">
										<!-- <h3>Aenean suscipit eget mi act</h3> -->
									</div>
									<div class="text-content">
										<!-- <p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
										</p> -->
									</div>
								</div>
							</div>


								<div class="box-title mb-20">
									<h3><?php echo $serviceList[4] ?></h3>
								</div>
								<div class="text-content">
									<p class="g_justify">

									Wireless Connect technology aims to enable wireless connectivity between its wide range of hardware products and selected add-ons, accessories and sensors.

The Wireless Connect is implemented by using multiple communication technologies to support more wireless sensing and data transmit abilities both for in-vehicle use and for connected vehicles.

The Wireless Connect technology supports various protocols such as: IEEE 802.11x, Short-Range wireless communication, and proprietary RF protocols, and also embedded communication modules by using 2G, 3G, and 4G cellular generations.

ERM's Wireless Connect technology also enables the support of various IoT applications, for example: In-vehicle Wi-Fi Hot Spot and Wi-Fi Telematics, wireless tagging, mobile phone or tablet communication using Short-Range wireless communication and others.

ERM’s Wireless Connect ensures quick and easy installation by using wireless sensors, integration to mobile terminals/phones and the ability to offer wireless communication services to users and third-party devices in the vehicle (multimedia streaming, ELD supported devices, etc.)
 


								
									</p>
									
									
								</div>
							</div>
						</div>

						<!-- service 5 ends -->




						<!-- service 6 starts -->

						<div class="gbox" id="gbox_1">
							<!-- <div class="full-pic">
								<figure>
									<img src="assets/images/service/service2.svg" alt="">
								</figure>
							</div> -->
							<div class="text-box mt-40">

							<div class="row mt-45 mt-xs-15 clearfix">
								<div class="col-md-5" style="border:3px solid gray" >
								<figure>
									<img id="show_service_5" src="assets/images/service/service6.svg" alt="">
								</figure>
									
								</div>
								<div class="col-md-7 text-box">
									<div class="box-title mb-20 mt-sm-30 mt-xs-30">
										<!-- <h3>Aenean suscipit eget mi act</h3> -->
									</div>
									<div class="text-content">
										<!-- <p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
										</p> -->
									</div>
								</div>
							</div>


								<div class="box-title mb-20">
									<h3><?php echo $serviceList[5] ?></h3>
								</div>
								<div class="text-content">
									<p class="g_justify">

								We	developed several technologies for automotive security and cyber-attacks prevention for the automotive sector and the cyber-security market.

ERM’s patented technology for cyber-attacks prevention is designed to protect vehicles against ransomware and other cyber-attacks from external communication interfaces.

Cyber technology is suited for both OEMs and aftermarket implementations and is designed to protect against unauthorized breach through external communication interfaces such as an OBD plug, BT module, an infotainment system and similar.

For more traditional vehicle security protection, ERM has developed technology to delay the thieves as much as possible. The technology includes an immobilization system with a wireless interface, control over vehicle doors and windows and a set of sensors for towing alert and vehicle breach.

With ERM’s advanced Vehicle Security and Cyber technology, OEM’s and vehicle distributors can obtain direct communication with their customers for long-term periods, while securing their customer’s vehicle CANbus, preventing hacking, and monitoring breaches and towing attempts.

Fleet managers can benefit from after-market implementations of ERM’s technologies and have better protection while monitoring their vehicle fleets, receiving real-time alerts on each security related event.

								
									</p>
									
									
								</div>
							</div>
						</div>

						<!-- service 6 ends -->




							<!-- service 7 starts -->

							<div class="gbox" id="gbox_1">
							<!-- <div class="full-pic">
								<figure>
									<img src="assets/images/service/service2.svg" alt="">
								</figure>
							</div> -->
							<div class="text-box mt-40">

							<div class="row mt-45 mt-xs-15 clearfix">
								<div class="col-md-5" style="border:3px solid gray" >
								<figure>
									<img id="show_service_6" src="assets/images/service/service7.svg" alt="">
								</figure>
									
								</div>
								<div class="col-md-7 text-box">
									<div class="box-title mb-20 mt-sm-30 mt-xs-30">
										<!-- <h3>Aenean suscipit eget mi act</h3> -->
									</div>
									<div class="text-content">
										<!-- <p>
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
											Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
										</p> -->
									</div>
								</div>
							</div>


								<div class="box-title mb-20">
									<h3><?php echo $serviceList[6] ?></h3>
								</div>
								<div class="text-content">
									<p class="g_justify">

								We	 develops designated technologies and customized solutions to answer our partner’s requests, assisting them to undertake unique and particular projects. All this as part of ERM’s strategy to support its partners in expanding their businesses and penetrating new niches.

ERM’s Segment technologies, both proprietary and market standard, can be presented as a part of a tracking device, or introduced as an Add-on to a tracking device. In order to offer full accessibility and support to third-party sensors and applications, ERM develops External Device Adaptors (EDA), using Segment technologies.

Even if you haven’t found the technology or solution that answers your needs, please don’t hesitate to contact us and we will be happy to utilize our vast experience and knowledge to assist you in developing the right solution for your needs.
									</p>
									
									
								</div>
							</div>
						</div>

						<!-- service 7 ends -->

						
					
					
						
						<!-- <div class="gbox" id="gbox_2">
							<div class="full-pic">
								<figure>
									<img src="assets/images/service/Health.jpg" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<div class="box-title mb-20">
									<h3>HealthCare Data</h3>
								</div>
								<div class="text-content">
									<p class="g_justify">
										If you are looking for a database to reach out to your target audience in Healthcare Industry, and then opt for our Healthcare Email List, today. Our comprehensive database includes contact details of hospitals, fitness institutions, pharmacies, and clinics. Healthcare Industry is a vast and diverse sector that requires special knowledge while creating a database.
										</p>

										<p class="g_justify">Our top-notch Healthcare Email List will assist you in exploring diverse business opportunities. Our data fields are segmented to keep our email databases available for any kind of modification to meet our customers’ requirements.
										</p>
										
										<p class="g_justify">Optin Contacts’ cost-effective, well-researched and targeted email list is the right solution for marketers to make an investment. Optin Contacts’ Healthcare Industry List will keep you ahead of your competitors in this industry.
									</p>
								</div>
							</div>
						</div> -->
						
					
						<!-- Technology Data -->
						<!-- <div class="gbox" id="gbox_3">
							<div class="full-pic">
								<figure>
									<img src="assets/images/service/Tech.jpeg" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<div class="box-title mb-20">
									<h3>Technology Data</h3>
								</div>
								<div class="text-content">
									<p class="g_justify">
									Technology Users Email List which will help you grown your business and bring quality leads for your business, then your search ends here. An accurate and targeted email list is the lifeline for a successful email campaign. 
									</p>
									<p class="g_justify">
									As we know, technology is right now at the heart of any business management and the level of accuracy required for maintaining a credible database is a difficult task. However, to stay a step ahead of your competitors it is essential to have a successful marketing campaign.
									</p>
									<p class="g_justify">
									Email marketing is an integral part of any businesses in today’s digital world. With our technology email lists, now you can create an industry best email campaign and get connected with some of the leading businesses. Our database contains details of thousands of users who are using various software platforms such as SAP, JD Edwards, CISCO and much more.
									</p>
								</div>
							</div>
						</div>
						 -->
					
						<!-- CusromList Data -->
						<!-- <div class="gbox" id="gbox_4">
							<div class="full-pic">
								<figure>
									<img src="assets/images/service/Custom.jpg" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<div class="box-title mb-20">
									<h3>Custome List Data</h3>
								</div>
								<div class="text-content">
									<p class="g_justify">
									We are also specialized in Custom List Build, We have in-house data team whole compile, verify, append, cleanse data for your target criteria along with this our Customer verification team calls and email every contacts and confirms if the contact details are correct, Our accuracy standards mean lower bounce rates, and better deliverability to protect email sender reputation.
									</p>
									
									<p class="g_justify">The contacts database that you would purchase from us will be for your perpetual usage (Multiple usage), we would send these contacts in the form on Excel, or .CSV. This means you get to own this list for lifetime, use it infinite times. You can also circulate this data to your entire sales team. Hence you can call, email or send flyers to your prospects unlimited number of contact.
									</p>
								</div>
							</div>
						</div> -->
					
						
						
						<!-- Tradeshow & Conference Data -->
						<!-- <div class="gbox" id="gbox_5">
							<div class="full-pic">
								<figure>
									<img src="assets/images/service/Conference.jpg" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<div class="box-title mb-20">
									<h3>Trade Show & Conference Data</h3>
								</div>
								<div class="text-content">
									<p class="g_justify">
									Attendance lists for seminars and conferences. A must for companies that provide instructional services or specialized products for upwardly mobile business professionals, All Business Summit can provide targeted lists of attendees at various seminars, conferences, and major industry events to give you an edge in reaching these business contacts directly.
									</p>

									<p class="g_justify">When you need to increase attendance at your trade show or conference, or sell more exhibit space, look no further than us. We offer targeted e-mail, telemarketing, and direct mail lists, along with online display advertising, list cleaning, merge-purge, and predictive modeling programs. With our Attendees Mailing Lists, All Business Summit provides you all that your event needs – updated, verified, and accurate contact details of various Trade Shows Attendees including IT decision makers, business owners, C-level executives, etc. across the world. 
									</p>
									<p class="g_justify">
									These professionals are responsive to offers related to business services, financial services, education, IT, and many more, so that you can connect and stay in touch with an array of prospects that will be looking forward to attending your business events, seeing your booth, and buying your latest offering.
									</p>
								</div>
							</div>
						</div> -->
					
					
					</div>
					
				</div>
			</div>
		</div>
		<!-- Service Section end -->

		<!-- Footer_Section -->
		
		<footer class="footer pt-50">
		<?php include_once ("common/footer.php") ?>
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
		<!-- custom Js -->
		<script src="assets/js/custom.js" type="text/javascript"></script>

	</body>

<!-- services-details08:23-->
</html>
