<?php
	$name = $_POST['name'];
	$email = trim($_POST['email']);
	$formcontent="Name: $name\n\nEmail: $email\n";
	$recipient = "kenkenh94@gmail.com";
	$subject = "Add Me To The List";

	$mailheader = "From: $email\\r\\n";
	$mailheader .= "Reply-To: $email\\r\\n";

    error_reporting(0);

    $Ok = ereg("^([a-zA-Z0-9_\.-]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$", $email);
    if ($Ok) {
        $success = mail($recipient, $subject, $formcontent, $mailheader);

        if(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$UNameFrm))
        {
        ?>
    <script language = 'javascript'>
        alert('Thank you, your address was added to our Mailing List');
        history.go(-1);
        </script>
    <?
        exit();
        }
    }

    else {
        if(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$UNameFrm))
        {
        ?>
    <script language = 'javascript'>
        alert('Sorry, please provide a valid Email address.');
        history.go(-1);
        </script>
    <?
        exit();
        }
    }
?>