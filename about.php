<?include "media/includes/includes.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="author" content="Scott Zirkel">		
		<title>About Lore Investigations</title>
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
						<li><a href="index.php" class="preview">Preview</a></li>
					</ul>
				</div>
			</div>
			<div id="content" class="about">
				<div id="content-top"></div>
				<p>Lore Investigations follows the paranormal investigative team of Nathan and TJ. Their first case is The Creepy Barn, in which they go up against what is possibly a possessed teenaged girl. Of course, it's hard to tell a regular teenaged girl from one possessed by a ghost.</p>
				<p>Lore Investigations is written by Amanda Jones and <a href="http://scottzirkel.com">Scott Zirkel</a>, with art by <a href="http://www.matthebb.com/" target="_blank">Matt Hebb</a>. Jason Worthington is on inks and Juan Carlos Porras bringing up the colors.</p>
				<div id="contact">
					<?

					if(!empty($_POST))
					{
						$continue = true;
						function isValidEmail($email){
							return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
						}
						
						function send_email($from, $message)
						{
							mail('scott@scottzirkel.com','Eternain Mail!',$message,$from);
							return true;
						}
						
						function prep_for_form($data)
						{
							return str_replace(array("'", '"', '<', '>'), array("&#39;", "&quot;", '&lt;', '&gt;'), stripslashes($data));
						}
						//$data = prep_for_form($_POST);

						while($continue)
						{
							$input = new CI_Input();
							$data = $input->xss_clean($data);
							echo "<pre>";
							print_r($data);
							echo "</pre>";
							
							foreach($data as $key => $value)
							{
								$$key = trim($value);
							}
							
							if(empty($email) || empty($name) || empty($message))
							{
								echo "<div id=\"error\">Please fill out all the fields!</div>";
								break;
							}
							
							if(!isValidEmail($email))
							{
								echo "<div id=\"error\">Please enter a valid email address.</div>";
								break;
							}

							if(preg_match( "/[\r\n\t]/", $name) || preg_match( "/[\r\n\t]/", $email))
							{
								echo "<div id=\"error\">Illegal characters found! No spamming!</div>";
								break;
							}

							$from = "From: ".$name." <".$email.">";

							if(send_email($from,$message))
							{
								unset($name);
								unset($email);
								unset($message);
								echo "<div id=\"notice\">Thanks for contacting He-Guy. Prince Adam will deliver this message just after his nap.</div>";
							}

							$continue = false;
						}
					}

					?>
					<h3>Got questions?</h3>
					<form action="about.php" method="post" accept-charset="utf-8">
						<label for="name">Name</label><input type="text" name="name" value="<?=(isset($name))?$name:''?>" id="name" class="required"/>
						<label for="email">Email</label><input type="text" name="email" value="<?=(isset($email))?$email:''?>" id="email" class="email required">
						<label for="message">Message</label><textarea name="message" id="message" class="required" rows="8" cols="40"><?=(isset($message))?$message:''?></textarea>
						<p class="no-pad"><input type="submit" value="Send Message"/></p>
					</form>
				</div>
				<div id="content-bottom"></div>
			</div>
			<p id="footer">Copyright &copy; 2010 <a href="http://scottzirkel.com">Scott Zirkel</a>. All rights reserved.</p>
		</div>
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

