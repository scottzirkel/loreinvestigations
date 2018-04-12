<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="author" content="Scott Zirkel">		
		<title>Lore Investigations</title>
		<link rel="stylesheet" href="media/styles/reset.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="media/styles/common.css" type="text/css" media="screen"/>
		<script src="media/scripts/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="media/scripts/html5.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1><a href="index.php">Lore Investigations</a></h1>
				<div id="nav">
					<ul>
						<li><a href="http://store.scottzirkel.com/index.php?route=product/product&product_id=54" class="store">Store</a></li>
						<li><a href="about.php" class="about">About</a></li>
					</ul>
				</div>
			</div>
			<div id="content">
				<div id="content-top"></div>
				<h2>Lore Investigations is now available as a digital download!</h2>
				<h3><a href="http://store.scottzirkel.com/index.php?route=product/product&product_id=54">Buy online now!</a></h3>
				<p class="links">Preview pages: <a href="01" class="preview-01">1</a> <a href="02" class="preview-02">2</a> <a href="03" class="preview-03">3</a></p>
				<img src="media/images/preview-01.jpg" alt="Page 1" class="preview"/>
				<div id="content-bottom"></div>
			</div>
			<p id="footer">Copyright &copy; 2009-<?=date('Y')?> <a href="http://scottzirkel.com">Scott Zirkel</a>. All rights reserved.</p>
		</div>
		<!-- <div id="fightcat"><a href="http://www.facebook.com/pages/He-Guy-and-the-Guys-of-the-Universe/141753855856735?ref=ts"><img src="media/images/facebook.gif" alt="Find us on Facebook!"/></a></div> -->
		<script type="text/javascript">
		$(document).ready(function(){
			$('.links a').click(function(a){
				a.preventDefault();
				var preview = a.currentTarget.className;
				$('.preview').attr('src','media/images/'+preview+'.jpg');
			});
			
		});
		</script>
		<script type="text/javascript">
			//original
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-11001714-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		<script type="text/javascript">
			//new
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-144747-7']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</body>
</html>

