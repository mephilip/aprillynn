<?php 
/*
Template Name: Invitation Studio
*/
get_header(); ?>

<!-- Please call pinit.js only once per page -->


<section id="main-body" class="gallery">
	<div class="row">


		
		<div class="portfolios">	
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
<div class="">
	<div id="ajax-wrapper">
		<div id="ajax-view" class=""></div>
	</div>
</div>
<br />

<?php
	


	
$query = new WP_Query( array( 'post_type' => 'portfolio', 'cat' => 671, 'paged' => get_query_var('paged'), 'posts_per_page' => 33, 'orderby' => 'menu_order', 'post_status' => 'published') );


$count = wp_count_posts('portfolio');
$published = $count->publish;

$counter = 0;

if ( $query->have_posts() ) : ?>



<?php while ( $query->have_posts() ) : $query->the_post();  ?>
		
						<?php 
							if($counter==0) {
								$customPostTaxonomies = get_object_taxonomies('portfolio');
								?>
								<div class="row">
									<div class="cat-wrap ribbon">
										<ul>
											<li class="ribbon"><div class="filter" data-filter="all">All</div></li>
									<?php
									$categories = get_categories( array('child_of' => 671));
									  foreach ($categories as $cat) {
									  echo '<li class="ribbon"><div class="filter" data-filter=".'.$cat->slug.'">'.$cat->cat_name.'</div></li>';
									}
									?>
										</ul>

									</div>
								</div>
								<?php
							}
						?>
						<?php if($counter==0) { ?>
							<div class="row">
								<div class="row" id="gallery-view">
						<?php } ?>

									<!-- get the featured image url -->
									<?php
										$post_thumbnail_id = get_post_thumbnail_id();
										$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
									?>
									
										<div id="<?php the_permalink(); ?>" style="height: 380px; padding: 0 1rem; vertical-align: top;" class="anitem large-6 columns portfolio-item text-center mix <?php foreach((get_the_category()) as $category) {
				    echo  $category->slug . ' ';
				} ?>" data-myorder="<?php echo $counter+1 ?>" data-cat="<?php foreach((get_the_category(array('child_of' => 671))) as $category) {
				    echo  $category->slug . ' ';
				} ?>" data-equalizer-watch>
											
											<h5>	<?php the_title(); ?> </h5>
											
											<div style="display: block; vertical-align: top;" id="portfolio-img" class="circle">
											
												<img src="<?php echo $post_thumbnail_url; ?>" />
											
											</div>
											
											<div style="max-width: 200px; display: inline-block; vertical-align: top; height: 110px;" id="portfolio-description" class="portfolio-description"><p><?php the_field('description'); ?></p></div>
										
										</div>
						
	
						
				<?php 
					
					$close +=1;
					
					
					
					$counter += 1;
					

				?>	
						
					
		
			

<?php	endwhile; // end while?>



								</div>
							</div>
</div>
		</div>
	</div>
	
<div class="row">
	<div class="columns small-9 centered">
		<?php
			
	$big = 999999999;
	$pagin = array (
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $query->max_num_pages
	);
	echo paginate_links($pagin); ?>
	</div>
</div>
</section>
<hr />

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<script>
	$(document).ready(function() {

			// Instantiate MixItUp:
		
			$('#gallery-view').mixItUp();
		

	});
</script>

<?php get_footer(); ?>