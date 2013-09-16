<?php

$field_name = $_POST['cf_name'];
$field_email = strip_tags($_POST['cf_email']);
$field_phone = $_POST['cf_phone' ];
$field_message = $_POST['cf_message' ];


$mail_to = 'mattross@alpineaire.net';

$subject = 'Message from a customer, ' . $field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Email: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

$submit = $_GET['submit'];

switch ($submit) {
	case 'mobile':
		$location = '../mobile.php';
		break;
	default:
		$location = 'contact-alpine-aire.php';
}


if ($mail_status) { 

	$to = $field_email;
	$subject = "Alpine Aire Service Request";
	$body = "<img src='http://www.alpineaire.net/images/logo_small.png'	/><br	/><br	/>";
	$body .= "Hello ".$field_name.", <br	/><br	/>Thank you for choosing Alpine Aire for your HVAC service and repair needs. We have received your request for service, and will be in touch with you shortly.<br	/><br	/>";
	$body .= "Alpine Aire Heating and Cooling Inc<br	/>509.662.6846<br	/>1306 Walnut St. Wenatchee, WA";
	$headers2 = 'From: Alpine Aire <mattross@alpineaire.net>' . "\r\n";
	$headers2 .= 'Reply-To: mattross@alpineaire.net' . "\r\n";
	//the next two
	$headers2 .= "MIME-Version: 1.0\r\n";
	$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$headers2 .= 'X-Mailer: PHP/' . phpversion();

	mail($field_email, $subject, $body, $headers2);
	

?>

	<script language="javascript" type="text/javascript">
		alert('Message Successful! A confirmation email has been sent to the provided address. We will be in touch with you shortly.');
		window.location = '<?php echo $location;	?>';
		/* document.getElementById("demo").innerHTML="My First JavaScript"; */
	</script>
<?php
	
}

else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please send an email to mattross@alpineaire.net or call 509-662-6846');
		window.location = '<?php echo $location;	?>';
	</script>
<?php
}
?>
