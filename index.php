<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
	<title>Alpine Aire Heating and Cooling | Wenatchee Furnace and AC Repair</title>
		<!-- metatags -->
			<meta name='description' content='Welcome to Alpine Aire Heating and Cooling! We provide residential and commerical HVAC repair and replacement to the greater Wenatchee area.'>
			<meta name='keywords' content='Alpine Aire, Wenatchee HVAC Services, Wenatchee heating company, Alpine air, air conditioning repair, ac repair, ductless air conditioning'>
			<meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1?>
			<meta name='viewport' content='width=device-width, initial-scale=.5, maximum-scale=1'>
			
		<!-- no cache -->
			<meta http-equiv="Pragma" content="no-cache">
			<meta http-equiv="Expires" content="-1">
			<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
		
		<!-- stylesheets -->
			<link rel="stylesheet" href='css/allcss.css'	type='text/css'	/>
			<link rel="stylesheet" href='css/index_3.css'	type='text/css'	/>

		<!-- scripts -->
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script>
			
			//slideshow
			
			function slideSwitch() {
				var $active = $('#slideshow IMG.active');

				if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

				// use this to pull the images in the order they appear in the markup
				var $next =  $active.next().length ? $active.next()
				: $('#slideshow IMG:first');

				$active.addClass('last-active');

				$next.css({opacity: 0.0})
				.addClass('active')
				.animate({opacity: 1.0}, 1000, function() {
					$active.removeClass('active last-active');
				});
			}

			$(function() {
				setInterval( "slideSwitch()", 5000 );
			});
			  
			</script>
			
			<script type="text/javascript">
			

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-33504014-1']);
			  _gaq.push(['_setDomainName', 'alpineaire.net']);
			  _gaq.push(['_trackPageview']);

			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

			  
			  function validateForm()
				{
				var y=document.forms["contact_form"]["cf_name"].value;
				if (y==null || y=="")
				  {
				  alert("First name must be filled out");
				  return false;
				  }
				  
				  
				var x=document.forms["contact_form"]["cf_email"].value;
				var atpos=x.indexOf("@");
				var dotpos=x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
				  {
				  alert("Not a valid e-mail address");
				  return false;
				  }
				  
				

				var z=document.forms["contact_form"]["cf_phone"].value;
				if (z==null || z=="" || isNaN(z))
				  {
				  alert("Phone number must be filled out");
				  return false;
				  }					  
				  
				}
				

				

				
				
			</script>
			<?php
				@include("Mobile_Detect.php");
				$detect = new Mobile_Detect();
				if ($detect->isMobile() && isset($_GET['p']))
				{
				$detect = "false";
				}
				elseif ($detect->isMobile())
				{
					echo'<script> window.location="mobile.php"; </script> ';
				}			
			?>
</head>
<body>

	<div id='page'>
		<div id ='hb_blue'></div><div id='hb_light'></div>
		<div id='header' class='gradient' itemscope itemtype="http://www.schema.org/LocalBusiness">
			<span itemprop='logo'><img src='images/logo.png'	alt='Alpine Aire Wenatchee Logo'	/></span>
			<div id='callbox' class='gradientcall'>
				<h4>Call now!</h4>
				<h5><span itemprop='telephone'>509.662.6846</span></h5>
			</div>
		</div>

		<div id='navcontainer'>
			<ul class='nav'>
				<li><a class='navactive' id='home' href='index.php?p=0'>Home</a></li>
				<li><a class='navun' href='pages/residential-hvac-service.php'>Residential</a></li>
				<li><a class='navun' href='pages/commercial-hvac-service.php'>Commercial</a></li>
				<li><a class='navun' href='pages/about-alpine-aire.php'>About Alpine Aire</a></li>
				<li><a class='navun' id='contact' href='pages/contact-alpine-aire.php'>Contact</a></li>
			</ul>
		</div>
			<div class='title_bar'>
				<h1><span class='b_name'>Alpine Aire Heating &amp; Cooling Inc.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tagline'><i>Breathe Naturally</i></span></h1>
			</div>
			<div class='content_box'>
				<div id="slideshow">
					<img src="images/alpine-slideshow-1.jpg" alt="Heat Pump Installation" class="active round" />
					<img src="images/alpine-slideshow-2.jpg" alt="Air Quality Comfort" class='round'/>
					<img src="images/alpine-slideshow-3.jpg" alt="HVAC New Construction Job" class='round'/>
				</div>
				<div class='absolute'>
					<div class='top_text'>
						<p class='center'><i>Proudly serving our family and friends in North Central Washington since 1986.</i></p>
						<!-- <p class='center'>Alpine Aire performs HVAC service in the following areas:</p> -->
							<ul class='fleft'>
								<a href='pages/wenatchee-heating-and-air-conditioning.php'><li>Wenatchee Valley</li></a>
								<a href='pages/cashmere-heating-and-air-conditioning.php'><li>Cashmere</li></a>
								<a href='pages/leavenworth-heating-and-air-conditioning.php'><li>Leavenworth</li></a>
								<a href='pages/entiat-heating-and-air-conditioning.php'><li>Entiat</li></a>
								<a href='pages/quincy-heating-and-air-conditioning.php'><li>Quincy</li></a>
							</ul>
							<ul class='fright'>
								<a href='pages/rock-island-heating-and-air-conditioning.php'><li>Rock Island</li></a>
								<a href='pages/waterville-heating-and-air-conditioning.php'><li>Waterville</li></a>
								<a href='pages/cle-elum-heating-and-air-conditioning.php'><li>Cle Elum</li></a>
								<a href='pages/plain-heating-and-air-conditioning.php'><li>Plain</li></a>
								<a href='pages/lake-wenatchee-heating-and-air-conditioning.php'><li>Lake Wenatchee</li></a>
							</ul>
					</div>
				</div>
			</div>
		<div id='main' class='white'>


			<!-- Schedule online -->
			<div class='servicebox fleft'>
				<form name='contact_form' class='fleft' action='pages/contact_action.php' onsubmit="return validateForm();" method="post">
					<h2>Schedule Fast and Easy Online!</h2>
					<p><label><i>Name:</i></label><br	/><input class='i_length' type="text" name="cf_name"></p>
					<p><label><i>Email Address:</i></label><br	/><input class='i_length' type="text" name="cf_email"></p>
					<p><label><i>Phone Number:</i></label><br /><input type='text' maxlength='10' name='cf_phone'></p>
					<p><label><i>Please briefly describe your problem:</i></label></p>
					<p><textarea maxlength='500' name="cf_message"></textarea></p>
						<input class='form-button fleft' type="reset" value="Clear">
						<input class='form-button fright send' type="submit" value="Send">
				</form>
				<div class='merits'>
	
						<p class='margin-ten'><b>Choose Alpine Aire Heating &amp; Cooling,</b></p>
						<p>Alpine Aire offers the best customer experience possible for HVAC service, maintenance and repairs. To us, the customer experience means a few things.</p>
						<p>Most importantly, we want the customer to feel comfortable. From the air coming out of your vents, to a friendly smile at the door. Alpine Aire staff are trained to put the customer first.</p>
						<p>When a furnace or air conditioner breaks dows in North Central Washington, it needs to get fixed right the first time. Our knowledgeable HVAC service technicians can diagnose any make or model of heat pump, furnace, or air conditioner that runs your home.</p>
						<p>Trust Alpine Aire with all of your heating and cooling needs!</p>
				</div>
			</div>
			
			<div class='clear'></div>
			<div class='full-text fleft margin-top-spec'>
				<h2>Quick Answers</h2>
					<div class='icon'>
						<a href='pages/residential-repair-or-replace.php' ><div class='icon-card'><p>Repair or Replace?</p><img src='images/new_system.png'	/></div></a>
						<a href='pages/residential-filter-maintenance.php' ><div class='icon-card'><p>How often should I change my filter?</p><img src='images/filter_cabinet.png'	/></div></a>
						<a href='pages/residential-air-quality.php' ><div class='icon-card'><p>How can I remove odor causing particles?</p><img  src='images/infinity_air_purifier.png'	/></div></a>
						<a href='pages/residential-energy-efficient.php' ><div class='icon-card'><p>What are my Energy Efficient options?</p><img src='images/energystar.png'	/></div><a>
						<a href='pages/residential-financing.php' ><div class='icon-card'><p>Do you have financing?</p><img src='images/financing.png'	/></div></a>
					</div>
			</div>
			<div class='clear'></div>
			<div class='full-text fright margin-top-spec margin-bottom-spec'>
				<h2><i>Our HVAC service department specializes in:</i></h2>
					<div class='btest'>
					<ul class='fleft'>
						<a href=''><li>Air Conditioners</li></a>
						<a href=''><li>Heat Pumps</li>
						<a href=''><li>Electric Heat</li>
						<a href=''><li>Radiant Heat</li>
						<a href=''><li>Ductless air conditioning</li>
						<a href=''><li>Heat Recovery Ventilators</li>
					</ul>
					<ul class='fleft'>
						<a href=''><li>Gas Furnaces</li></a>		
						<a href=''><li>Boilers</li></a>
						<a href=''><li>Chillers</li></a>
						<a href=''><li>Refrigeration and Freezers</li></a>
						<a href=''><li>Gas piping</li></a>
						<a href=''><li>and much more!!!</li></a>
					</ul>
						<a href=''><li>Gas Furnaces</li></a>		
						<a href=''><li>Boilers</li></a>
						<a href=''><li>Chillers</li></a>
						<a href=''><li>Refrigeration and Freezers</li></a>
						<a href=''><li>Gas piping</li></a>
						<a href=''><li>and much more!!!</li></a>
					</ul>
					</div>
			</div>
			
		</div>
		
		<!-- footer -->
		<div itemscope itemtype="http://www.schema.org/LocalBusiness">
			<h5><span itemprop="name">Alpine Aire Heating and Cooling Inc.</span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<span itemprop="telephone">509.662.6846</span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<span itemprop="address">1306 Walnut St. Wenatchee, WA</span></h5>
			<h5><a href='../mobile.php'>Mobile Site</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<a href='../pages/contact-alpine-aire.php'>Contact</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<a href='../pages/alpine-aire-hvac-jobs.php'>Jobs</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<a target="_blank" href='http://www.facebook.com/pages/Alpine-Aire-Heating-Cooling/565406576819846'>Like us on Facebook!</a></h5>
			
		</div>
	
		<div id='certs'>
			<a target='_blank' href='http://www.epa.gov/'><img src='images/epa.png' alt='EPA Certified' /></a>
			<a target='_blank' href='http://www.natex.org/'><img class='padleft' src='images/nate_certified.png'	alt='NATE Certified Technicians'	/></a>
			<a target='_blank' href='http://www.carrier.com/homecomfort/en/us/'><img class='padleft' src='images/carrierdealer.png'	alt='Factory Authorized Carrier Dealer'	/></a>
			
		</div>
	
		<!-- contact popup
		
		<div id="myModal" class="reveal-modal large">

			
			<a class="close-reveal-modal">&#215;</a>
		</div>
		 -->
		 
	</div>

</body>
</html>