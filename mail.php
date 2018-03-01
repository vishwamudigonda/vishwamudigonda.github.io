
<!-- 

<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$mobilenumber = $_POST['mobilenumber'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "vmudigonda333@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

-->

<?php 
$action=$_REQUEST['action'];
if ($action=="") /** display the contact form */
	{
	?>
	<form action="mail.php" method="post">
		<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					
		<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					
		<input type="text" name="Mobile number" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
					
		<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
		<input type="submit" value="Send">
					
	</form>

	<?php
	}
else/* send the submitted data */
	}
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$mobilenumber = $_POST['mobilenumber'];
	$message=$_REQUEST['message'];
	if (($name=="")||($email=="")||($mobilenumber=="")||($message==""))
		{
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";  
		}
	else
		$from="From: $name<$email>\r\nReturn-path: $email";
		$subject="Message sent using your contact form";
		mail("vmudigonda333@gmail.com", $subject, $message, $from);
		echo "Email sent!";
		}
	}
?>