<head>
<script src="scripts/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
<script src="scripts/mootools-1.2-more.js" type="text/javascript"></script>
<script src="scripts/jd.gallery.js" type="text/javascript"></script> 
<link rel="stylesheet" href="css/jd.gallery.css" type="text/css" media="screen" />
</head>
<?include("resizer.php")?>
<body>
<div id="myGallery">
<div class="imageElement">
<h3>Item 1 Title</h3>
<p>Item 1 Description</p>
<a href="mypage1.html" title="open image" class="open"></a>
<img src="images/p2.jpg" class="full" />
</div>
<div class="imageElement">
<h3>Item 2 Title</h3>
<p>Item 2 Description</p>
<a href="mypage2.html" title="open image" class="open"></a>
<img src="images/p1.jpg" class="full" />
</div>
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
</body>