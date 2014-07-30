<?
/* POST info */
$question1=$_POST["1"];
$question2=$_POST["2"];
$question3=$_POST["3"];
$question4=$_POST["4"];
$question5=$_POST["5"];
$question6=$_POST["6"];
$question7=$_POST["7"];
$question8=$_POST["8"];
$question9=$_POST["9"];
$question10=$_POST["10"];

/* recipients */
$to = "jackieprior@blueyonder.co.uk"; // note the comma

/* subject */
$subject = "Questionnaire";

/* message */
$message = '
<html>
<head>
    <title>Questionnaire</title>
  </head>
  <body>
   1. Where did you hear about the website?: '. $question1 .'
   2.How satisfied are you with your experience with L P Photography?: '. $question2 .'
   3. How many pages did you browse during this visit?: '. $question3 .'
   4. How likely are you to revisit this website?: '. $question4 .'
   5. How likely are you to recommend our website?: '. $question5 .'
   6. How often do you click on banner adverts?: '. $question6 .'
   7. Was our website easy to navigate around?: '. $question7 .'
   8. What web browser did you use?: '. $question8 .' 
   9. Did you find everything you were looking for?: '. $question9 .' 
   10. Do you have any comments?: '. $question10 .'1 
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
<title>LP Photography</title>
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
<img src="images/lpbanner.jpg" height="225" width="100%" TITLE="Main Logo" alt="Main Banner">
</div>
<? include 'menu.php' ?>
<div class="pagetext">
<h1>Questionnaire</h1>
<p align="center"> Thank You very much for answering our questionnaire.</p>
</div>
</html>