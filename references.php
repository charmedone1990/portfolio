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
                <img src="images/mainbanner.jpg" height="225" TITLE="Main Logo" alt="Main Banner" />
            </div>
            <div class="text">
                <div class="centre">
                    <h1>References/Comments</h1>
                    <h3>Previous Comments....</h3>
                    <p class="center"><strong>"Very creative"</strong> Made By: <em>Anonymous</em></p>
                    <h3>Make a request?</h3>

                    <form action="emailreference.php" method="post">
                        <p>Name:<input type="text" name="name" /></p>
                        <p>Email:<input type="text" name="email" /></p>
                        <p>Subject:<input type="text" name="subject" /></p>
                        <p>Comment:<textarea name="comment"></textarea></p>
                        <p><input type="submit" value="Submit" /></p>
                    </form>
                </div>
            </div>
            <? include 'footer.php' ?>
        </div>
    </body>
</html>
