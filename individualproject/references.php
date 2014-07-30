<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="charlottecss.css" /> 
<title>LP Photography</title>
</head>

<body>
<div class="container">
<div class="banner">
<img src="images/lpbanner.jpg" height="225" width="100%" TITLE="Main Logo" alt="Main Banner">
</div>
<? include 'menu.php' ?>
<div class="pagetext">
<h1>References/Comments</h1>
<h3>Previous Comments....</h3>
<p align="center"><strong>"Very creative"</strong> Made By: <em>Anonymous</em></p>
<h3>Make a request?</h3>

    <form action="emailreference.php" method="post">
      <p>Name:<input type="text" name="name"></p>
      <p>Email:<input type="text" name="email">
      <p>Subject:<input type="text" name="subject">
      <p>Comment:<input type="textarea" name="comment">
      <p><input type="submit" value="Submit"></p>
      </form>
</div>
</html>
