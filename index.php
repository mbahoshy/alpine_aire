<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
	<title>Alpine Aire Heating and Cooling | Wenatchee Furnace and AC Repair</title>
		<!-- metatags -->
			<meta name='description' content='Welcome to Alpine Aire Heating and Cooling! We provide residential and commerical HVAC repair and replacement to the greater Wenatchee area.'>
			<meta name='keywords' content='Alpine Aire, Wenatchee HVAC Services, Alpine air, air conditioning repair, ac repair, ductless air conditioning'>
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
			<span itemprop='logo'><img src='../images/logo.png'	alt='Alpine Aire Wenatchee Logo'	/></span>
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
		<div id='main' class='white'>
			<div class='title_bar'>
				<h1><span class='b_name'>Alpine Aire Heating and Cooling Inc.</span>&nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;<span class='tagline'><i>Breathe Naturally</i></span></h1>
			</div>
			<div class='content_box'>
				<div id="slideshow">
					<img src="images/alpine-slideshow-1.jpg" alt="Heat Pump Installation" class="active" />
					<img src="images/alpine-slideshow-2.jpg" alt="Air Quality Comfort" />
					<img src="images/alpine-slideshow-3.jpg" alt="HVAC New Construction Job" />
				</div>
				<div class='top_text'>
					<p class='center'><i>Proudly serving our family and friends in North Central Washington since 1986.</i></p>
					<p class='center'>Alpine Aire performs HVAC service, maintenance, and repair in the following areas:</p>
						<ul class='fleft'>
							<li>Wenatchee Valley</li>
							<li>Cashmere</li>
							<li>Leavenworth</li>
							<li>Entiat</li>
							<li>Quincy</li>
						</ul>
						<ul class='fright'>
							<li>Rock Island</li>
							<li>Waterville</li>
							<li>Cle Elum</li>
							<li>Plain</li>
							<li>Lake Wenatchee</li>
						</ul>
				</div>
			</div>

			<!-- Schedule online -->
			<div class='servicebox fleft'>
				<div class='sbox_text fleft'>
					<h2>Don't take our word... <span class='underline'>Alpine Aire service speaks for itself !</span></h2>
					<div class='merits'>
						<p><span class='merit_h'>"I was so very impressed </span>with the <b>promptness and quality</b> of service I received. <!--We've always been very pleased with the work we've had done from Alpine Aire, but yesterday's service experience was phenomenal.--> We will gladly recommend your company to anyone we can. Thank you for having such a wonderful crew working with you!<span class='merit_name'>-Sheli from Wenatchee<span class='merit_h'>"</span></span></p>
						<!-- <p><span class='merit_h'>Quality - </span>The foremost goal of every HVAC service call, air conditioning repair, or replacement installation is <i>quality</i>. Located in the the heart of Wenatchee, we know the temperature extremes that our customers (and their HVAC systems) face on a daily basis. That is why we are committed to solving furnace repair and AC repair calls promptly and effectively. <b>We will repair your HVAC system right the first time</b>.</p>-->
					</div>
					<div class='merits'>
						<p><span class='merit_h'>"Miguel went the extra mile... </span>He explained everything clearly, and made excellent recommendations for maintaining the health of the system. His communication style was very professional and customer focused. He demonstrated a high level of HVAC system technical expertise. On a grading scale of A through F, <b>I would give him an A+.</b> <span class='merit_name'>-Chris from Wenatchee<span class='merit_h'>"</span></span></p>
					</div>
					<div class='merits'>
						<p><span class='merit_h'>"The new infinity system </span>is much much quieter than the old system. The first morning it was installed, I actually walked outside to see if the heat pump was working; <b>it was that quiet.</b> I want to thank you and your team for their professionalism and exprtise in installing the system.<span class='merit_name'>-Henry from East Wenatchee<span class='merit_h'>"</span></span></p>
					</div>
				</div>
				<form name='contact_form' class='fright' action='pages/contact_action.php' onsubmit="return validateForm();" method="post">
					<h2>Need HVAC Service Now? -- Schedule Fast and Easy Online!</h2>
					<p><i>Name:</i><br	/><input class='i_length' type="text" name="cf_name"></p>
					<p><i>Email Address:</i><br	/><input class='i_length' type="text" name="cf_email"></p>
					<p><i>Phone Number:</i>&nbsp;&nbsp;&nbsp;<input type='text' maxlength='10' name='cf_phone'></p>
					<p><i>Please briefly describe your problem:</i></p>
					<p><textarea maxlength='500' name="cf_message"></textarea></p>
						<input type="submit" value="Send">
						<input type="reset" value="Clear">
				</form>
			</div>
			
			<div class='clear'></div>
			<div class='sml_text fleft border_right'>
				<h2>Quick Answers</h2>
					<ul>
						<a href='pages/residential-repair-or-replace.php' ><img class='fleft' src='images/new_system.png'	/><li>Repair or Replace?</li></a>
						<a href='pages/residential-filter-maintenance.php' ><img class='fleft' src='images/filter_cabinet.png'	/><li>How often should I change my filter?</li></a>
						<a href='pages/residential-air-quality.php' ><img class='fleft' src='images/infinity_air_purifier.png'	/><li>How can I remove smoke and other odor causing particles?</li></a>
						<a href='pages/residential-energy-efficient.php' ><img class='fleft' src='images/energystar.png'	/><li>What are my Energy Efficient options?</li><a>
						<a href='pages/residential-financing.php' ><img class='fleft' src='images/financing.png'	/><li>Do you have financing?</li></a>
					</ul>
			</div>
			<div class='lrg_text fright green border_bottom'>
				
				<img class='fleft padright' src='images/infinity_20.png'	/>
				<h3>the most <i>efficient</i> ducted, air source dual fuel system available. <a target="_blank" href='http://www.carrier.com/homecomfort/en/us/innovation/#1'>Learn more</a></h3>
				<img class='fright padright' src='images/greenspeed.png'	/>
			</div>
			<div class='lrg_text fright'>
				<h2><i>Our HVAC service department specializes in:</i></h2>
					<div class='btest'>
					<ul class='fleft'>
						<li>Air conditioning repair, maintenance, and installation</li>
						<li>Warehouse heating</li>
						<li>Gas heating</li>
						<li>Radiant heat</li>
						<li>Ductless air conditioning</li>
						<li>Heat Recovery Ventilators</li>
					</ul>
					<ul class='fright'>
						<li>HVAC service of all makes and models of furnaces</li>		
						<li>Boiler</li>
						<li>Chillers</li>
						<li>Refrigeration and Freezers</li>
						<li>Gas piping</li>
						<li>and much more!!!</li>
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