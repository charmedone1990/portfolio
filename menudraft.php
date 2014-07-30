<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>The Wedding of Ben & Jackie</title>
        <link rel="stylesheet" type="text/css" href="css/general.css"/>
    </head>

    <body>
        <div class="container">
            <? include 'weddingmenu.php' ?>
            <div class="banner">
                <img src="images/weddingmainbanner.jpg" title="Main Logo" alt="Main Logo" />
            </div>
            
  <div class="sidebar1">
      <p><img src="images/weddingmainbanner.jpg" alt="Main Logo" width="100%" height="100" title="Main Logo" />
      <img src="images/weddingmainbanner.jpg" alt="Main Logo" width="100%" height="100" title="Main Logo" />
      <img src="images/weddingmainbanner.jpg" alt="Main Logo" width="100%" height="100" title="Main Logo" />
      <img src="images/weddingmainbanner.jpg" alt="Main Logo" width="100%" height="100" title="Main Logo" /></p>
	</div>
    
  <div class="text2">
  
    <h1>Menu</h1>
    <p>Fill in this form for each individual in your party joining us for our wedding. Please select one thing from each drop down box and select enter. Then sit down and wait :) ... bet you cant wait for this delicious food :)
    
    <h2>What would you like to eat?</h2>
    <form name="menu "action="menuaction.php">
<table width="50%" border="1" align="center">
  <tr>
  	<td><strong>Name:</strong></td>
    <td><input name="name" type="text" value="Who are you?"></td>
  </tr>
  <tr>
    <td width="94"><strong>Starter:</strong></td>
    <td width="255">
    <select name="Starter">
      <option value="select">Please Select</option>
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
</select>
	</td>
  </tr>
  <tr>
    <td><strong>Main Meal:</strong></td>
    <td>
    <select name="Main Meal">
      <option value="select">Please Select</option>
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
</select>
</td>
  </tr>
  <tr>
    <td><strong>Dessert:</strong></td>
    <td>
<select name="Dessert">
  <option value="select">Please Select</option>
<option value="applepie">Apple Pie</option>
<option value="profiteroles">Profiteroles</option>
</select>
</td>
  </tr>
  <tr>
  <th colspan="2"><input type="submit"></th>
  </tr>
</table>
</form>
  </div>
  </div>                
           <? include 'footer.php' ?>
        </div>
    </body>

</html>