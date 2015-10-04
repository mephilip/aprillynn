<?php 
/*
Template Name: Static Categories
*/
get_header(); ?>


<section id="main-body" class="gallery">
	<div class="row">


		
		<div class="small-18 small-centered medium-uncentered medium-18 columns portfolios">	
			<div class="the-content">
<?php 
//Required for pagination	
if ( get_query_var('paged') ) $paged = get_query_var('paged'); 

/* $query = new WP_Query( array( 'post_type' => 'portfolio', 'paged' => $paged, 'posts_per_page' => 12) );

$count = wp_count_posts('portfolio');
$published = $count->publish;


$counter = 0;

?>
<div style="row">
	<div class="slider-wrap" style=" ">
		<div class="grid-wrap" style="">
	<div class='slick-slider'>
<?php
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); 
		?>
				<?php
							$post_thumbnail_id = get_post_thumbnail_id();
							$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				?>
				<?php
					
					echo "<div>";
					echo "<img src='$post_thumbnail_url' />";
					echo "</div>";
				?>
						
<?php	} wp_reset_postdata();// end while
} // end if
?>
	</div>
	</div>
	</div>
</div>
*/
?>
<?php

$page_object = get_queried_object();
$page_id     = get_queried_object_id();

$cat_meta = get_field('include_categories');
$cat_meta = implode(',', $cat_meta);

$loop_args = array (
	'post_type' => array( 'page', 'portfolio'),
	'paged' => $paged,
	'posts_per_page' => 155,
	'cat' => $cat_meta
);

$query = new WP_Query( $loop_args );



$count = wp_count_posts('portfolio');
$published = $count->publish;

$counter = 0;

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); 
		?>
	
						<?php if($counter==0) { ?>
						<div class="h1_title">
							<h1><?php echo get_the_title($page_id); ?></h1>
						</div>
							<div>
								<div id="gallery-view">
						<?php } ?>
									<?php 
										$type = get_post_type();
										if($type == "portfolio") {
									 

										$post_thumbnail_id = get_post_thumbnail_id();
										$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
										$id = get_the_ID();
									?>
									
										<div id="<?php the_permalink(); ?>" class="large-6 columns anitem portfolio-item text-center mix <?php foreach((get_the_category()) as $category) {
				    echo  $category->slug . ' ';
				} ?>" data-myorder="<?php echo $counter+1 ?>" data-cat="<?php foreach((get_the_category()) as $category) {
				    echo  $category->slug . ' ';
				} ?>" data-equalizer-watch>
											
											<h5>	<?php if(get_the_category() == 'press') { ?><a href="<?php the_field('alt_link'); ?>"><?php the_title(); ?></a>
											<?php } else {?><?php the_title(); ?><?php } ?></h5>
											
											<div id="portfolio-img" class="circle">
											
												<img src="<?php echo $post_thumbnail_url; ?>" />
											
											</div>
											
											<div id="portfolio-description" class="portfolio-description"><p><?php the_field('description'); ?></p></div>
										
										</div>	
										
										<?php } ?>					
				<?php 
					
					$close +=1;
					
					
					
					$counter += 1;
					

				?>	
						
					
		
			

<?php	} wp_reset_postdata();// end while
} // end if
?>
								</div>
							</div>
</div>
		</div>
	</div>
</section>
<hr />

<script>
	$(function(){

	// Instantiate MixItUp:

	$('#gallery-view').mixItUp({
		load: {
			filter: '.wedding-invitations',
			sort: 'default:asc'
		}
	});

});
</script>

<?php get_footer(); ?>