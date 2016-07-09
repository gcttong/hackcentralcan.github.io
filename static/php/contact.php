<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$formcontent="Name: $name\n\nEmail: $email\n\nMessage: $message";
	
	// Enter the email where you want to receive the notification when someone submit form
	$recipient = "kenkenh94@gmail.com";
	
	$subject = "Add Me To The List";
	
	$mailheader = "From: $email\\r\\n";
	$mailheader .= "Reply-To: $email\\r\\n";
	
	$success = mail($recipient, $subject, $formcontent, $mailheader);
	
	if ($success == true){
	
?>
	
	<script language="javascript" type="text/javascript">
		alert('Thank you for you e-mail. We will contact you shortly.');
		window.location = "../index.html";
	</script>
	
<?php
	
	} else {
	
?>

    <script language="javascript" type="text/javascript">
		alert('Message not sent.');
		window.location = "../index.html";
    </script>
	
<?php

    }
	
?>