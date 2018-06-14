<?php
//binding the submit
if(!isset($_POST['submit']))
{
	//form submit required
	echo "error; you need to submit the form!";
}
//init vars from form input form
$name = $_POST['name'];
$member_email = $_POST['email'];
$callsign = $_POST['callsign'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$license = $_POST['license']; 
$LicenseExp = $_POST['LicenseExp'];
$notes = $_POST['notes'];
$fam_name = $_POST['fam_name'];
$fam_callsign = $_POST['fam_callsign'];
$fam_phone = $_POST['fam_phone'];
$interest = implode(", ", $_POST['Interest']);

//$arrl = $_POST['arrl'];
//$interest = $_POST['Interest'];
//$type = $_POST['type'];
////////////////////////////////////////////////
// Validation and filtering
////////////////////////////////////////////////

//Validate 
if(empty($name)||empty($member_email)) {
    echo "Name and email are mandatory!";
    exit;
}

//if(($_POST['renewal'] != 'Yes') && ($_POST['newApp'] != 'Yes') {
    //echo "No form type selected!";
    //exit;
//}

//filter injected emails
if(IsInjected($member_email)) {
    echo "Bad email value!";
    exit;
}

//set arrl status from checkboxes
if($_POST['arrlCB'] == 'Yes') {
	$arrl = 'Yes, a current member';
} else {
	$arrl = 'No, not a current member';
}

//set the forma as a new application or a renewal from the checkboxes
if($_POST['renewal'] == 'Yes') {
	$type = 'renewal form';
} elseif ($_POST['newApp'] == 'Yes') {
	$type = 'new application form';
} else {
	echo "Please navigate back and check either as a new applicant or a renewal";
    exit;
}

///////////////////////////////////////////////////
//email body build for both individual and family 
//////////////////////////////////////////////////

if(empty($fam_name)) {

	//build the email for an individual renewal
	$email_from = 'KVHFCLUB@gmail.com';
	$email_subject = "KVHF club paypal $type";
	$email_body = "You have received a $type".
		"\n".
		"\n".
		"Name:\n $name\n".
		"\n".
		"Callsign:\n $callsign\n".
		"\n".
		"Email:\n $member_email\n".
		"\n".
		"Address:\n $address\n".
		"\n".
		"Phone Number:\n $phone\n".
		"\n".
		"Licence Class:\n $license\n".
		"\n".
		"License Expiration:\n $LicenseExp\n".
		"\n".
		"ARRL membership status:\n $arrl\n".
		"\n".
		"Interest in Amateur Radio:\n $interest\n".
		"\n".
		"Added Notes:\n $notes\n";
} else {
	//build the email for individual plus fam member
	$email_from = 'KVHFCLUB@gmail.com';
	$email_subject = "KVHF club paypal $type";
	$email_body = "You have received a $type".
		"\n".
		"\n".
		"Name:\n $name\n".
		"\n".
		"Callsign:\n $callsign\n".
		"\n".
		"Email:\n $member_email\n".
		"\n".
		"Address:\n $address\n".
		"\n".
		"Phone Number:\n $phone\n".
		"\n".
		"Licence Class:\n $license\n".
		"\n".
		"License Expiration:\n $LicenseExp\n".
		"\n".
		"ARRL membership status:\n $arrl\n".
		"\n".
		"Interest in Amateur Radio:\n $interest\n".
		"\n".
		"Family Member Name:\n $fam_name\n".
		"\n".
		"Family Member Callsign:\n $fam_callsign\n".
		"\n".
		"Family Member Phone Number:\n $fam_phone\n".
		"\n".
		"Added Notes:\n $notes\n".
		"\n";
}	
//////////////////////////////////////////////////////////
// Build the email
//////////////////////////////////////////////////////////   
    
$to = "daniel.melato@gmail.com, rickwa3usg@gmail.com, n3ecf.good@gmail.com, n3vqh1@gmail.com, barefoot.tim@gmail.com";
//$to = "daniel.melato@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $member_email \r\n";

//Send the email
mail($to,$email_subject,$email_body,$headers);
echo "$email_body";
//thank-you alert and return to index.
echo "<script>
alert('Thank you for being a valued member of W3HZU');
window.location.href='http://www.w3hzu.org';
</script>";

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)', 
              '(\t+)', 
              '(%0A+)', 
              '(%0D+)', //carriage return
              '(%08+)', //backspace
              '(%09+)' //Tab
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 