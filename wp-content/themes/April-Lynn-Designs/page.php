<?php get_header(); ?>

<section id="main-body">
	<div class="row">

<?php get_sidebar(); ?>
		
		<div class="small-18 small-centered medium-uncentered medium-13 columns negative">	
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		
		
					<div class="home-banner">
						<?php the_post_thumbnail(); ?>
					</div>
					
					<div class="the-content">
						<?php the_content(); ?>
						
						
						
	
					</div>
		
			

<?php	} // end while
} // end if
?>
		</div>
	</div>
</section>

<hr />

<?php get_footer(); ?>