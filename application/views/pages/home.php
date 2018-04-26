<div class="home-content">

    <section class="section-banner data-img" data-bg="<?php echo base_url('build/images/banner-bg-9.jpeg'); ?>" >

    	<div class="overlay">

	    	<div class="container">

	    		<div class="tagline-wrap">
	    		
		    		<h1>Welcome to LockBuoy!</h1>

		    		<h2><?php echo the_config('tag_line'); ?></h2>

		    	</div>
		    	<br/><br/>
		    	<div class="row">

		    		<div class="col-md-8 col-md-offset-2">

						<div class="form-wrap">
			    			<form class="search-directory" method="GET" action="<?php echo base_url('search'); ?>" data-validate="<?php echo base_url('search/validate?location='); ?>">

								<div class="row">

									<div class="col-sm-9">

										<div class="form-group">
											
											<input type="text" class="form-control input-lg keyword" name="location" placeholder="Type your City or Zip Code ..." onKeyUp="strip_char()" id="keyword" data-suggest="<?php echo base_url('search/suggest'); ?>" required />

										</div>

									</div>

									<div class="col-sm-3">

										<div class="form-group">
											
											<button type="submit" class="btn btn-red btn-lg btn-search btn-block" type="button" title="Search for Locksmith NOW!"><span class="hidden-xs">Search</span><span class="visible-xs"><span class="fa fa-search"></span></span></button>

										</div>

									</div>

								</div>

							</form>

						</div>

		    		</div>

		    	</div>

	    	</div>

	    </div>

    </section>

    <?php if(key_services() != 0) { ?>
	<section class="section-offers">

		<div class="container">
			
			<div class="section-title">
				<h2>Service Offers</h2>
				<span class="line center-block"></span>
		    </div>

		    <div class="offer-wrap">
		    	
		    	<div class="slick-responsive slider-container">
					
					<?php
						$x = 0;
						foreach(key_services() as $key) {
							$x++;
							$data_thumb = base_url('build/images/random/'.$x.'.jpg');
					?>

		    		<div class="item">

		    			<div class="item-block data-img" data-bg="<?php echo $data_thumb; ?>">
		    				
		    				<div class="overlay">
		    					
		    					<div class="content">
		    						
		    						<h3><?php echo $key->title; ?></h3>

		    						<br/>

		    						<a href="<?php echo base_url($key->slug); ?>" class="btn btn-cta">Read More</a>

		    					</div>	

		    				</div>

		    			</div>

		    		</div>

		    		<?php } ?>

				</div>

		    </div>

		</div>

	</section>
	<?php } ?>

    <section class="section-featured">

    	<div class="container">
    		
    		<h2 class="section-title txt-center">Remarkable Services</h2>


    		<div class="featured-wrap">

    			<?php if($api != 0) { ?>
	    		<div class="row">

	    			<?php
	    			$limit = 0;
	    			foreach($api as $biz) {
	    				$limit++;
	    				$address1 = (isset($biz['location']['address'])) ? $biz['location']['address'] : 'No data Given';
		    			$address2 = $biz['location']['city'].' '.$biz['location']['zipcode'].', '.$biz['location']['state'];
		    			$thumb = (!empty($biz['photos']['primary'])) ? $biz['photos']['primary'] : base_url('build/images/biz-placeholder.png');
	    			?>

	    			<div class="col-md-3">

	    				<div class="feat-item">

	    					<div class="feat-image">
	    						<span>Featured</span>
	    						<img src="<?php echo $thumb; ?>" class="img-responsive" alt="<?php echo $biz['name']; ?>" title="<?php echo $biz['name']; ?>" />

	    					</div>
	    					
	    					<div class="feat-details">

	    						<p class="title"><?php echo truncate($biz['name'], 25); ?></p>

	    						<ul class="fa-ul">
	    							<li><i class="fa fa-li fa-map-marker"></i> <?php echo $address1; ?></li>
	    							<li><i class="fa fa-li fa-location-arrow"></i> <?php echo $address2; ?></li>
	    						</ul>

	    					</div>

	    				</div>

	    			</div>

	    			<?php if($limit >= 8) { break; } } ?>

	    		</div>

	    		<?php } ?>

	    	</div>

    	</div>

    </section>

    <section class="section-topcity data-img" id="top_cities" data-bg="<?php echo base_url('build/images/banner-bg-8.jpg'); ?>">

    	<div class="overlay">
    	
	    	<div class="container">
	    		
	    		<h2 class="section-title txt-center">Top Cities</h2>

	    		<?php if(!empty(major_area())) { ?>
	    		<div class="citylist-wrap">

	    			<ul>
	    			<?php foreach(major_area() as $popcity) { ?>
				    	<li><a href="<?php echo base_url('city/'.$popcity->slug); ?>"><i class="fa fa-map-marker"></i> <?php echo $popcity->name; ?></a></li>
	    			<?php } ?>

				    </ul>

	    		</div>
	    		<?php } ?>

	    	</div>

	    </div>

    </section>

    <?php
    $home_blogs = recent_blog(3);
    if(!empty($home_blogs)) {
    ?>
    <section class="section-blogs">

    	<div class="container">
    		
    		<h2 class="section-title txt-center">Blog</h2>


		    <div class="blog-wrap">

				<div class="row">

					<?php
						foreach($home_blogs as $hblog) {
							$thumb = ($hblog->featured_image != NULL) ? base_url($hblog->featured_image) : base_url('build/images/biz-placeholder.png') ;
					?>

					<div class="col-md-4">

						<div class="blog-item">

							<div class="blog-header">
								<h3 class="blog-title"><?php echo truncate($hblog->title, 25); ?></h3>
							</div>

							<div class="blog-thumb">
								<img src="<?php echo $thumb; ?>" class="img-responsive" alt="<?php echo $hblog->title; ?>" title="<?php echo $hblog->title; ?>" />
							</div>

							<div class="blog-content">

								<span class="blog-date">Posted on <?php echo date_proper($hblog->created_at); ?></span>

								<p class="blog-excerpt">
									<?php echo truncate($hblog->excerpt, 120); ?> 
								</p>

								<br/>

								<a href="<?php echo base_url($hblog->slug); ?>" class="btn btn-danger">Read more</a>

							</div>

						</div>

					</div>

					<?php } ?>

				</div>

			</div>

			

    	</div>

    </section>

    <?php } ?>

</div>