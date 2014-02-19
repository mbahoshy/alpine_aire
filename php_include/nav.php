<?php

?>

<div id='navcontainer'>
	<ul class='nav'>
		<li><a <?php if ($page == 'home') {echo "class='navactive'";} else {echo "class='navun'";} ?> id='home' title='Alpine Aire Home' href='/index.php?p=0'>Home</a></li>
		<li><a <?php if ($page == 'residential') {echo "class='navactive'";} else {echo "class='navun'";} ?> title='Alpine Aire Residential Service' href='/pages/residential-hvac-service.php'>Residential</a></li>
		<li><a <?php if ($page == 'commercial') {echo "class='navactive'";} else {echo "class='navun'";} ?> title='Alpine Aire Commercial Service' href='/pages/commercial-hvac-service.php'>Commercial</a></li>
		<li><a <?php if ($page == 'about') {echo "class='navactive'";} else {echo "class='navun'";} ?> title='Alpine Aire About' href='/pages/about-alpine-aire.php'>About Alpine Aire</a></li>
		<li><a <?php if ($page == 'contact') {echo "class='navactive'";} else {echo "class='navun'";} ?> id='contact' title='Alpine Aire Contact' href='/pages/contact-alpine-aire.php'>Contact</a></li>
	</ul>
</div>