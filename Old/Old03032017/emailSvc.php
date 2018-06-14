<?php
//binding the submit
if(!isset($_POST['submit']))
{
	//form submit required
	echo "error; you need to submit the form!";
}
//local vars from form input
$name = $_POST['name'];
$member_email = $_POST['email'];
$callsign = $_POST['callsign'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$license = $_POST['license']; 
$LicenseExp = $_POST['LicenseExp'];
$arrl = $_POST['arrl'];
$notes = $_POST['notes'];

//Validate 
if(empty($name)||empty($member_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}
if(empty($notes)) 
{
    echo "No notes!";
    exit;
}
//filter injected emails
if(IsInjected($member_email))
{
    echo "Bad email value!";
    exit;
}
//build the email
$email_from = 'KVHFCLUB@gmail.com';
$email_subject = "new membership renewal form";
$email_body = "You have received a new renewal form".
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
    "Added Notes:\n $notes\n";
    
    
//$to = "daniel.melato@gmail.com, rickwa3usg@gmail.com, barefoot.tim@gmail.com";
$to = "daniel.melato@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $member_email \r\n";

//Send the email
mail($to,$email_subject,$email_body,$headers);

//thank-you alert and return to index.
echo "<script>
alert('Thank you for being a valued member of W3HZU');
window.location.href='http://danielmelato.com';
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