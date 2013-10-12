<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> -->
	<meta name="description" content="JQuery Parallax Animation Demo developed using jQuery plugin and layered transparent images to create banner animation effects when the mouse hovers over." />
	<meta name="keywords" content="jQuery parallax demo,jquery image animation demo" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<script type="text/javascript" src="../js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" language="JavaScript" src="jquery.jparallax.min.js" ></script>
<script type="text/javascript" language="JavaScript" src="jquery.event.frame.js" ></script>
<script type="text/javascript" src="../script.js"></script>

      <!-- BuySellAds Ad Code -->
      <link rel="stylesheet" href="../bsa_styles.css" />
      <script type="text/javascript" src="../bsa_script.js"></script>
      <script type="text/javascript">
      (function(){
        var bsa = document.createElement('script');
           bsa.type = 'text/javascript';
           bsa.async = true;
           bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
        (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
      })();
      </script>
      <!-- End BuySellAds Ad Code -->

<title>jQuery4u Demo - The Parallax Effect</title>

<link rel="stylesheet" type="text/css" href="../styles.css">
<style lang="text/css">
#content { background-color:#FFFFFF; width:950px; min-height:550px; text-align:left; padding:0px; margin:20px 0px 0px 0px;  }
p {
	margin: 20px !important;
}
 #parallax-header { height:200px; background-color:gray;  }
 #parallax {position:relative; overflow:hidden; width:950px; height:250px;
	background-image:url('background.jpg');
 }
 #header { margin-bottom:20px; }
.parallax-viewport {
    position: relative;     /* relative, absolute, fixed */
    overflow: hidden;
}
.parallax-layer {
    position: absolute;
}

</style>

<script type="text/javascript">
jQuery(document).ready(function()
{
	$('#parallax .parallax-layer')
	.parallax({
		mouseport: $('#parallax')
	});
});
</script>

</head>
<body>
<div id="page-wrap" style="border:none;">

	<?php include("../header.php"); ?>

<div id="content" style="margin-left:-30px;margin-top: 0px;">

    <h1 style="padding-left:25px;">jQuery4u Demo - The Parallax Effect</h1>

<div id="parallax" class="clear">
	<div class="parallax-layer" style="width:1200px; height:250px;">
		<img src="grass.png" alt="" style="width:1200px; height:250px;"/>
	</div>
	<div class="parallax-layer" style="width:500px; height:250px;">
		<img src="frog2.png" alt="" style="width:500px; height:250px;"/>
	</div>
   <div class="parallax-layer" style="width:1200px; height:300px;">
		<img src="butterflies3.png" alt="" style="width:1200px; height:300px;"/>
   </div>
</div>

<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae sapien ac nulla vehicula luctus. Ut ut tortor ut quam interdum faucibus. Morbi sit amet pellentesque libero. Phasellus sed velit leo. Ut faucibus, massa in auctor ultrices, urna tortor condimentum dui, ac dictum mauris augue et neque. Quisque vehicula lobortis odio lacinia semper. Quisque pellentesque diam non sem pellentesque tempor.
</p>
<p>
Aenean suscipit felis sit amet tortor tincidunt ac ullamcorper neque fringilla. Vestibulum a neque elit, ac vestibulum dui. Maecenas et lectus vitae lorem adipiscing interdum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris euismod elit mi, eu tempor eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis eu facilisis dolor.
</p>
<p>
<a class="seelivedemo" href="http://jquery4u.com/animation/jquery-parallax-tutorial/">Tutorial</a>
<a class="seelivedemo" href="https://github.com/sdeering/jquery-parallax-effect">Download</a>
</p>

</div>

	<!-- footer (includes analytics) -->
	<?php include("../footer.php"); ?>

</div> <!-- end page wrap -->
</body>
</html>