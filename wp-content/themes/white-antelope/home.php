<?php get_header(); ?>

		<section id="page">

			
			
			<div class="col-240">
				<div class="small-box">
					
				</div>
				<a href="<?php bloginfo('url'); ?>/blog">
					<div class="small-box menu-box">
						<span>
							<h2>Blog</h2>
							<p>Articles, tutorials, inspiration and more...</p>
						</span>
					</div>
				</a>
				<div class="small-box photo-box">
					<div class="image">
						<img src="<?php bloginfo('template_directory'); ?>/images/sheep.jpg" width="240" height="240" alt="Sheep">
					</div>
					<div class="content">
						<div class="inner">
							<h2>Name of Piece</h2>
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-240">
				<a href="<?php bloginfo('url'); ?>/events">
					<div class="small-box menu-box">
						<span>
							<h2>Upcoming Events</h2>
							<?php echo do_shortcode('[events_list limit="1"]
								<h3>#_EVENTNAME</h3>
								<p>#l, #F #j, #Y at #g:#i#a until #@_{l, F j, Y} in #_LOCATIONTOWN, #_LOCATIONSTATE</p>
							[/events_list]'); ?>
						</span>
					</div>
				</a>
				<div class="small-box video-box">
					<a href="<?php the_field('video_url', 'options'); ?>" rel="lightbox[video]" class="video-gallery">
						<img src="<?php the_field('background_image', 'options'); ?>" width="240" height="240" alt="Painting">
						<div class="video-box-bg">
							<div class="play-button">
								<img src="<?php bloginfo('template_directory'); ?>/images/play-button.gif" width="54" height="55" alt="Video">
							</div>
						</div>
					</div>
				</a>
				<div class="small-box photo-box">
					<div class="image">
						<img src="<?php bloginfo('template_directory'); ?>/images/cake.jpg" width="240" height="240" alt="Cake">
					</div>
					<div class="content">
						<div class="inner">
							<h2>Name of Piece</h2>
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-480">
				<div class="large-box photo-box">
					<div class="image">
						<img src="<?php bloginfo('template_directory'); ?>/images/antelope.jpg" width="480" height="480" alt="Antelope">
					</div>
					<div class="content">
						<div class="inner">
							<h2>Name of Piece</h2>
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
				<a href="<?php bloginfo('url'); ?>/gallery">
					<div class="small-box menu-box float-left">
						<span>
							<h2>Browse the Gallery</h2>
							<p>View our art and buy your favorite piece today.</p>
						</span>
					</div>
				</a>
				<div class="small-box photo-box float-left">
					<div class="image">
						<img src="<?php bloginfo('template_directory'); ?>/images/edie.jpg" width="240" height="240" alt="Edie">
					</div>
					<div class="content">
						<div class="inner">
							<h2>Edie Reno</h2>
							<p>Founder of White Antelope Studio</p>
						</div>
					</div>
				</div>
			</div>
		<div class="clear"></div>
		</section><!-- #page -->


<?php get_footer(); ?>
