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
<h1>Contact Me</h1>
<p>If you would like to contact me please fill in the form below or click here to send me an email. If you would like to do it via a social network then my social network contacts are at the bottom of the page, just click on the images and it will take you to my pages. </p>
<div class="contactme">
<h2>Email Enquiry</h2>
    <form action="emailenquiry.php" method="post">
      <p>Name:<input type="text" name="name"></p>
	  <p>Phone:<input type="text" name="phone"></p>
      <p>Email:<input type="text" name="email"></p>
      <p>Enquiry:<input type="text" name="enquiry"></p>
      <p><input type="submit" value="Submit"></p>
      </form>
</div>

<div class="leavecomment">
<h2>Leave a comment</h2>
    <form action="emailcomment.php" method="post">
      <p>Name:<input type="text" name="name"></p>
      <p>Email:<input type="text" name="email"></p>
      <p>Comment:<input type="text" name="comment"></p>
      <p><input type="submit" value="Submit"></p>
      </form>
</div>
<div class="footer">
<? include 'footer.php' ?>
</div>
</div>
</html>
