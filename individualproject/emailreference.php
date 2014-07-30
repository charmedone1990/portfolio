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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jackie Prior</title>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: Tahoma, Geneva, sans-serif;
	background: #B0C4DE;
}
h1 	{
    background-color: #00CCCC;
    color: Black;
    font-family: "Arial";
    padding: 5px;
    text-align: center;
}
h3 	{
    background-color: #BDEDFF;
    color: Black;
    font-family: "Arial";
    padding: 5px;
    text-align: center;
}
div.container {
	width: 800px;
	overflow: hidden;
	margin: 10px auto;
	background: #FFF;
	padding: 5px;
	height:auto;
}
div.navigation {
	float:right;
	width: 250px;
	height: auto;
	margin: 10px auto;
	border:#000;
	padding: 5px;
}
div.pagetext {
	float:left;
	width: 100%;
	height: auto;
	border:#000;
}
div.banner {
	width: 900;
	overflow: hidden;
	margin: 0px;
	border:#000;
}
ul
{
list-style-type:none;
margin:0;
padding-left:0;
overflow:auto;
width:100%;
}
li
{
float:left;
font-size:18px;
font-family:Arial ;
}

div.mainnavigation
{
background-color:#99F;
margin:auto;
width:100%;

}
div.footer
{
	 background-color:#99F;
	 width:auto;
	 margin:auto;
}

</style>
</head>

<body>
<div class="container">
<div class="banner">
<img src="images/mainbanner.jpg" height="225" width="100%" TITLE="Main Logo" alt="Main Banner">
</div>
<? include 'menu.php' ?>
<div class="pagetext">
<h1>References/Comments</h1>
<p align="center"> Thank You very much for your reference/comment, please check back for updates to my site.</p>
</div>
</html>