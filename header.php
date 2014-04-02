
<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title(''); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
		<!-- Import stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/1140/ie.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/1140/styles.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/1140/1140.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/print.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/screen.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/apple-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/apple-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/apple-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/apple-icon-144x144.png" />

		<?php wp_head(); ?>
		
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-32544526-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="twocol"></div>
				<div class="eightcol">
					<div class="header">
						<img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" />
						<div class="nav">
							<a href="/">Home</a>
							<a href="/archive/">Archive</a>
							<a href="/about/">About</a>
							<a href="/gallery/">Gallery</a>
						</div>
					</div>
					<div class="smallheader">
						<div class="nav-small">
							<a href="/">Home</a>
							<a href="/archive/">Archive</a>
							<a href="/about/">About</a>
							<a href="/gallery/">Gallery</a>
						</div>
					</div>
				</div>
				<div class="twocol"></div>
			</div>
		</div>