<!DOCTYPE html>

<html lang="en">

    <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, width=device-width">

        <title><?php echo $title; ?></title>

        <meta name="title" content="<?php echo $meta_title; ?>">
        <meta name="keywords" content="<?php echo $meta_keyword; ?>">
        <meta name="description" content="<?php echo $meta_description; ?>">
        <meta name="robots" content="index, follow" />

        <link href="<?php echo base_url('build/css/styles.css?v=1'); ?>" rel="stylesheet">

        <!-- eugenenenewton@gmail.com eugenemenewton -->
        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php echo the_config('ga_id'); ?>', 'auto');
			ga('send', 'pageview');

		</script>

		<script src='https://www.google.com/recaptcha/api.js'></script>

    </head>


    <body>

    	<header>

    		<div class="navbar nav-top hidden-xs">
    			<div class="container">
    				<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="<?php echo the_config('facebook_link') ?>" target="_blank"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="<?php echo the_config('twitter_link') ?>" target="_blank"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="<?php echo the_config('googleplus_link') ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
						</li>
					</ul>
    				<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="tel:<?php echo the_config('phone_number') ?>" title="Get your business here!" class="text-white">Get your business here! Toll Free <?php echo the_config('phone_number') ?></a>
						</li>
					</ul>
    			</div>
    		</div>

    		<div class="mobile-header visible-xs">
				<div class="container">

					<a href="<?php echo base_url(); ?>" class="mobile-brand">
						BRAND
					</a>

					<p>Get your business here!</p>

					<a href="tel:<?php echo the_config('phone_number'); ?>" type="button" class="btn btn-danger btn-tollfree">Toll Free <?php echo the_config('phone_number'); ?></a>
				</div>
			</div>

    		<nav class="navbar navbar-default main-nav">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
							<li><a href="<?php echo base_url('states'); ?>">States</a></li>
							<?php if(current_url() == base_url()) { ?>
								<li><a href="#top_cities" class="top-cities">Top Cities</a></li>
							<?php } else { ?>
								<li><a href="<?php echo base_url('#top_cities'); ?>" class="top-cities">Top Cities</a></li>
							<?php } ?>
							<li><a href="<?php echo base_url('privacy-policy') ?>">Privacy Policy</a></li>
							<li><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>
							<li><a href="<?php echo base_url('add-business') ?>">Add Business</a></li>
						</ul>
					</div>
				</div>
			</nav>


		</header>

        <main>