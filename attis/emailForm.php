<?
/* POST info */
$title=$_POST["title"];
$other=$_POST["txtother"];
$firstName=$_POST["firstName"];
$surname=$_POST["surname"];
$address1=$_POST["address1"];
$address2=$_POST["address2"];
$address3=$_POST["address3"];
$town=$_POST["town"];
$postCode=$_POST["postCode"];
$emailAddres=$_POST["emailAddress"];
$contactNumber=$_POST["contactNumber"];
$firstName=$_POST["materialsHandling"];
$firstName=$_POST["healthAndSafetyServicesAndTraining"];
$firstName=$_POST["fireSafety"];
  
/* recipients */
$to = "benjaminsproule@gmail.com"; // note the comma

/* subject */
$subject = "Service Form";

/* message */
$message = '
<html>
  <head>
    <title>Service Form</title>
  </head>
  <body>
    Title: '. $title .'
    Other: '. $other .'
    First Name: '. $firstName .'
    Surname: '. $surname .'
    Address1: '. $address1 .'
    Address2: '. $address2 .'
    Address3: '. $address3 .'
    Town: '. $town .'
    Post Code: '. $postCode .'
    Email Address: '. $emailAddress .'
    Contact Number:'. $contactNumber .'
  </body>
</html>
';

/* To send HTML mail, you can set the Content-type header. */
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* additional headers */
$headers .= "To: Me <richard@attis.co.uk>";
$headers .= "From: ". $emailAddress ."\r\n";

/* and now mail it */
mail($to, $subject, $message, $headers);
?>