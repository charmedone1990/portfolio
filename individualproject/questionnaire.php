<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="charlottecss.css" /> 
<title>LP Photography</title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28571867-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div class="container">
<div class="banner">
<img src="images/lpbanner.jpg" height="225" width="100%" TITLE="Main Logo" alt="Main Banner">
</div>
<? include 'menu.php' ?>
<? include 'search.php' ?>
<div class="pagetext">
<h1>Questionnaires</h1>
<h2>How you reached the website?</h2>
<p>All information collected from this questionnaire will help me find out whether advertising online is easy to do and if it is successful. </p>
<form action="questionnairereference.php" method="post">
<p><strong>1. Where did you hear about the website?</strong></br>
<input type="checkbox" name="1" value="socialmedia" /> Social Media website such as Facebook or Twitter</br>
<input type="checkbox" name="1" value="searchengine" /> Search Engine</br>
<input type="checkbox" name="1" value="website" /> From another website link</br>
<input type="checkbox" name="1" value="graphic" /> From a graphic banner on another website</br>
<input type="checkbox" name="1" value="friend" /> Friend</br>
<input type="checkbox" name="1" value="dontremember " /> Don’t remember </br>
Other (Comment Box) <input type="text" name="1comment" /></p>

<p><strong>2.How satisfied are you with your experience with L P Photography? </strong></br>
<input type="radio" name="2" value="verysatisfied" />Very satisfied </br>
<input type="radio" name="2" value="satisfied" /> Satisfied </br>
<input type="radio" name="2" value="neutral" /> Neutral</br>
<input type="radio" name="2" value="dissatisfied" /> Dissatisfied</br>
<input type="radio" name="2" value="verydissatisfied" />Very dissatisfied</p>

<p><strong>3. How many pages did you browse during this visit?</strong></br>
<input type="radio" name="3" value="1to2" /> 1 to 2</br>
<input type="radio" name="3" value="3to4" /> 3 to 4</br>
<input type="radio" name="3" value="5" /> 5</br>
<input type="radio" name="3" value="all" /> All</p>

<p><strong>4. How likely are you to revisit this website?</strong></br>
<input type="radio" name="4" value="verylikely" /> Very likely</br>
<input type="radio" name="4" value="somewhat" /> Somewhat likely</br>
<input type="radio" name="4" value="unlikely" /> Unlikely </br>
<input type="radio" name="4" value="willnot" /> Will not</br>
<input type="radio" name="4" value="notsure" /> Not sure</p>

<p><strong>5. How likely are you to recommend our website? </strong></br>
<input type="radio" name="5" value="verylikely" /> Very likely</br>
<input type="radio" name="5" value="somewhat" /> Somewhat likely</br>
<input type="radio" name="5" value="unlikely" /> Unlikely </br>
<input type="radio" name="5" value="willnot" /> Will not</br>
<input type="radio" name="5" value="notsure" /> Not sure</p>

<p><strong>6. How often do you click on banner adverts? </strong></br>
<input type="radio" name="5" value="always" /> Always</br>
<input type="radio" name="5" value="sometimes" /> Sometimes</br>
<input type="radio" name="5" value="rarely" /> Rarely </br>
<input type="radio" name="5" value="never" /> Never</p>

<p><strong>7. Was our website easy to navigate around?</strong></br>
<input type="radio" name="7" value="yes" /> Yes</br>
<input type="radio" name="7" value="no" /> No</p>
    
<p><strong>8. What web browser did you use? </strong></br>
<input type="radio" name="8" value="firefox" /> Firefox</br>
<input type="radio" name="8" value="internetexplorer" /> Internet Explorer</br>
<input type="radio" name="8" value="googlechrome" /> Google Chrome</br>
<input type="radio" name="8" value="safari" /> Safari</br>   
<input type="radio" name="8" value="opera" /> Opera</br> 
<input type="radio" name="8" value="other" /> Other</p>     
    
<p><strong>9. Did you find everything you were looking for? </strong></br>
<input type="radio" name="9" value="yes" /> Yes</br>
<input type="radio" name="9" value="no" /> No</p>

<p><strong>10. Do you have any comments? </strong></br>
<input type="text" name="10" /></p>
<input type="submit" value="Submit" />
</form>

<div class="footer">
<? include 'footer.php' ?>
</div>
</div>
</html>
