<?
/* POST info */
$name=$_POST["name"];
$email=$_POST["email"];
$comment=$_POST["comment"];
$subject=$_POST["subject"];


/* recipients */
$to = "jackieprior@blueyonder.co.uk"; // note the comma

/* subject */
$subject = "Contact";

/* message */
$message = '
<html>
  <head>
    <title>Contact Me</title>
  </head>
  <body>
    Name: '. $name .'
   Email Address: '. $email .'
   Subject:'. $subject .'
    Comment:'. $comment .'
  </body>
</html>
';

/* To send HTML mail, you can set the Content-type header. */
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* additional headers */
$headers .= "To: Me <jackieprior@blueyonder.co.uk>";
$headers .= "From: ". $emailAddress ."\r\n";

/* and now mail it */
mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/general.css"/>
        <title>Jackie Prior</title>
    </head>
    <body>
        <div class="container">
            <? include 'menu.php' ?>
            <div class="banner">
                <img src="images/mainbanner.jpg" title="Main Logo" alt="Main Banner">
            </div>
            <div class="text">
                <h1>References/Comments</h1>
                <p>Thank You very much for your reference/comment, please check back for updates to my site.</p>
            </div>
            <? include 'footer.php' ?>
        </div>
    </body>
</html>