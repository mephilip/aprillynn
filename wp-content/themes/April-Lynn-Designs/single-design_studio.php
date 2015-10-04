<?php 
/*
Template Name: Design Studio
*/
get_header(); ?>
<br />
<div class=" portfolio-single">
	<div id="portfolio-single-page">
		<div class="small-18">
	
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>		<div id="portfolio-single">
		<div class="small-18">
			<div class="small-18 medium-10 columns left-content">
				<div id="portfolio-view">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
			<div class="small-18 medium-8 columns right-content">
				<div class="slider-wrap" style=" ">
					<div class="grid-wrap" style="">
						<div class='slick-slider' id="slicker" style="width: 400px;">
							
							
							<?php if(get_field('photo') !=null){ ?>
								<div id="photo" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_1') !=null){ ?>
								<div id="photo_1" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_1'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_2') !=null){ ?>
								<div id="photo_2" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_2'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_3') !=null){ ?>
								<div id="photo_3" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_3'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_4') !=null){ ?>
								<div id="photo_4" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_4'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_5') !=null){ ?>
								<div id="photo_5" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_5'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_6') !=null){ ?>
								<div id="photo_6" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_6'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_7') !=null){ ?>
								<div id="photo_7" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_7'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_8') !=null){ ?>
								<div id="photo_8" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_8'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_9') !=null){ ?>
								<div id="photo_9" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_9'); ?>" /></div>
							<?php } ?>
							<?php if(get_field('photo_10') !=null){ ?>
								<div id="photo_10" onclick="loadPortfolioImg(this);"><img src="<?php the_field('photo_10'); ?>" /></div>
							<?php } ?>
							
						</div>
					</div>
						<div class="small-18 columns title">
							<h1><?php the_title(); ?></h1>
							<p id="portfolio-desc"><?php the_field('description'); ?> <div class="ribbon"><?php the_category(); ?><div class="new-tab"><a target="_blank" href="<?php the_permalink(); ?>">Open in new tab</a></p>
						</div>
				</div>
			</div>
			<br />
		</div>
		</div>
</div>
		
		<?php	} wp_reset_postdata();// end while
} // end if
?>




	</div>
</div>
<hr />
<script>
$(document).ready(function(){
	  $('.slick-slider').slick({
		lazyLoad: 'ondemand',
		centerMode: true,
		centerPadding: '60px',
		variableWidth: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		]
	  });
	});
   </script>

<?php get_footer(); ?>