<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="scripts/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
<script src="scripts/mootools-1.2-more.js" type="text/javascript"></script>
<script src="scripts/jd.gallery.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="charlottecss.css" /> 
<link rel="stylesheet" href="css/jd.gallery.css" type="text/css" media="screen" />
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
<?include("resizer.php")?>
<body>
<div class="container">
<div class="banner">
<img src="images/lpbanner.jpg" height="225" width="100%" TITLE="Main Logo" alt="Main Banner">
</div>
<? include 'menu.php' ?>
    
<div class="pagetext">
<h1>Gallery</h1>
<div id="myGallery">
<div class="imageElement">
<h3>Leaves</h3>
<p>Close up shot of leaves</p>
<a href="mypage1.html" title="open image" class="open"></a>
<img src="images/P1120820.JPG" class="full" />
</div>
<div class="imageElement">
<h3>Identity</h3>
<p>Close up of the unique pattern that is finger prints</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/P1120823.JPG" class="full" />
</div>
<div class="imageElement">
<h3>Magnetic beads</h3>
<p>Close up of metalic beads</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/P1120841.JPG" class="full" />
</div>
<div class="imageElement">
<h3>Sharpening 1</h3>
<p>Red Pencil shavings make unique shapes</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/P1120852.JPG" class="full" />
</div>
<div class="imageElement">
<h3>Sharpening 2</h3>
<p>Yellow pencil shavings</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/P1120866.JPG" class="full" />
</div>
<div class="imageElement">
<h3>Holidays</h3>
<p>Close up of a variety</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/P1120882.JPG" class="full" />
</div>
<div class="imageElement">
<h3>Boats</h3>
<p>Boats off the coast in Cornwall</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/boats.jpg" class="full" />
</div> 
<div class="imageElement">
<h3>Insect</h3>
<p>Tiny insect found in my back garden</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/bug1.jpg" class="full" />
</div> 
<div class="imageElement">
<h3>Footprints</h3>
<p>Foot imprints on a sandy beach in Cornwall</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/footprints.jpg" class="full" />
</div>     
    
<script type="text/javascript">
function startGallery() {
var myGallery = new gallery($('myGallery'), {
timed: false,
showArrows: true,
showCarousel: false,
embedLinks: false,
useThumbGenerator: true
});
}
window.addEvent('domready', startGallery);
</script>
</div>
<div class="footer">
<? include 'footer.php' ?>
</div>
</div>
</html>
