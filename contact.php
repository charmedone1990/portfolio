<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Jackie Prior</title>
        <link rel="stylesheet" type="text/css" href="css/general.css"/>
    </head>

    <body>
        <div class="container">
            <? include 'menu.php' ?>
            <div class="banner">
                <img src="images/mainbanner.jpg" title="Main Logo" alt="Main Banner" />
            </div>
            <div class="text">
                <h1>Contact Me</h1>
                <p>If you would like to contact me please fill in the form below or click here to send me an email. If you would like to do it via a social network then my social network contacts are at the bottom of the page, just click on the images and it will take you to my pages. </p>
                <div class="centre">
                    <form action="emailme.php" method="post">
                        <p>Name:<input type="text" name="name" /></p>
                        <p>Email:<input type="text" name="email" /></p>
                        <p>Comment:<input type="text" name="comment" /></p>
                        <p><input type="submit" value="Submit" /></p>
                    </form>
                </div>
            </div>
            <? include'footer.php' ?>
        </div>
    </body>
</html>
