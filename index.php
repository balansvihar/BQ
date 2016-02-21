<!DOCTYPE html>
<html>
	<head>
		<title>bq.js - Balquery | Balan's Query | - Balsoft </title>
		<meta name="balquery, bq.js, balan's query, simple javascript framework, lightweight framework, simple  jquery" />
		<meta name="description" content="BQ.js or Bquery or Balquery is a lightest javascript framework. BQ is simpler and easy-to-use. Like most other javascript framework bq.js supports  DOM manipulation,  event handling and  AJAX. " />
		<?php include("meta.php")  ?>
		<link rel="shortcut icon" href="favicon.ico">
		<meta property=og:url content=http://bqjs.balsoft.in>
		<meta property=og:image content=http://bqjs.balsoft.in/images/bq-logo.png />
		<meta property=og:title content="bq.js" />
		<meta property=og:site_name content=bqjs.balsoft.in />
		<meta property=og:description content="BQ.js or Bquery or Balquery is a lightest javascript framework. BQ is simpler and easy-to-use. Like most other javascript framework bq.js supports  DOM manipulation,  event handling and  AJAX." />
		<meta property=og:type content=website />
		<meta property=og:locale content=en_us />		
	</head>
	<body>
			<?php $menu="index"; include("header.php"); ?>
			<section class="titleSec">
				<article class="title float-left">
					<h1>bq.js</h1>
					<h2>Easiest, lightest & fastest...</h2>
					<p>BQ.js or Bquery or Balquery is a lightest javascript framework. BQ is simpler and easy-to-use. Like most other javascript framework bq.js supports  DOM manipulation,  event handling and  AJAX. </p>
					<a class="button" href="http://bqjs.balsoft.in/js/bq.js" title="Download bq.min.js Now">
						<span>Download bq.js Now</span>
					</a>
				</article>	
				<article class="clipart float-right">
				<img src="images/$bq.png"/>
				<div class="fbHolder">
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=206870145993714&version=v2.0";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<div class="fb-like" data-href="http://bqjs.balsoft.in/" data-width="200px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>	
				<div class="clear"></div>
				</article>
				<div class="clear"></div>
			</section>
			<div class="why">
				<section>
					<article class="title float-left">
						<h2>Why everyone love bq.js?</h2>
						<p>Normally when we develope a jquery application we will be using one some certain number of function other unused function reside inside the library taking some space. More over jquery 1.x version uses sizzlejs for selecting elements which helps in supporting other older versions of browsers</p>
						<p>Bq.js has only the most used function which is almost same kind functions like jquery. This elimnates space and makes bq a lightest framework. Since we will be using bq.js only for modern browsers most of the older browser complablites can be eliminated. These two technique make bq.js super light and faster than jquery2.x.	Bq.js has router event handler like backbone.js which help to develop single page application.</p>
					</article>
					<article class="boy float-right">
					</article>
					<div class="clear"></div>
				</section>
			</div>
			<section class="adv">
					<article>
						<h1>Advantage of bq.js !</h1>
						<h2>Uisng  bq.js  in your web application has many advantages. Some of the advantages of using bq.js are listed below</h2>
					</article>
					<div>
						<article class="advItem float-left">
							<div class="img portable"></div>
							<h3>Portable</h3>
							<p>The bq.js is very small in size and it is portable so that one can be included in multiple page of the project.</p>
						</article>
						
						<article class="advItem float-left center">
							<div class="img support"></div>
							<h3>Modern Browsers</h3>
							<p>The bq.js multiple javascript function which support all mordern browsers. </p>
						</article>

						<article class="advItem float-left">
							<div class="img speed"></div>
							<h3>Speed</h3>
							<p>Since the bq.js is very less in size and has very less the perfomance will be very high when compare to other library.</p>
						</article>
						<div class="clear"></div>
					</div>
			</section>
			<section class="beta">
					<article>
						<p>bq.js is in beta version and still getting powerful, more function will be added often, so please keep in touch...:)</p>
					</article>
			</section>
			<?php include("footer.php")?>
<?php if( $_SERVER['SERVER_NAME'] =="www.balsoft.in" || $_SERVER['SERVER_NAME'] =="balsoft.in"|| $_SERVER['SERVER_NAME'] =="bqjs.balsoft.in" ){?>
	<script>
	window.onload=function(){
		setTimeout(function(){
			var link = document.createElement('link')
			link.setAttribute('rel', 'stylesheet')
			link.setAttribute('type', 'text/css')
			link.setAttribute('href', 'http://fonts.googleapis.com/css?family=Raleway:500');
			document.getElementsByTagName('head')[0].appendChild(link);
		}, 100);
	};
	</script>
<?php }
flush();
$mod = "BQJS";
include ("../hits.php");
 ?>
	</body>
</html>