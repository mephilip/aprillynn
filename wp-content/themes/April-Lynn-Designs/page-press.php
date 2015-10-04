<?php 
/*
Template Name: Press
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
<div class="">
	<div id="ajax-wrapper">
		<div id="ajax-view" class="row"></div>
	</div>
</div>
<?php
	
$query = new WP_Query( array( 'post_type' => 'n_press', 'paged' => $paged) );

$count = wp_count_posts('n_press');
$published = $count->publish;

$counter = 0;

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); 
		?>
		
						<?php 
							if($counter==0) {
								$customPostTaxonomies = get_object_taxonomies('n_press');
								?>
								<div class="row">
									<div class="cat-wrap ribbon">
										<ul>
											<li class="ribbon"><div class="filter" data-filter="all">All</div></li>
									<?php
									$categories = get_categories('hide_empty=1');
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
							<div>
								<ul id="gallery-view" class="small-block-grid-4">
						<?php } ?>

									<!-- get the featured image url -->
									<?php
										$post_thumbnail_id = get_post_thumbnail_id();
										$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
									?>
									
										<li id="<?php the_permalink(); ?>" class="portfolio-item text-center mix <?php foreach((get_the_category()) as $category) {
				    echo  $category->slug . ' ';
				} ?>" data-myorder="<?php echo $counter+1 ?>" data-cat="<?php foreach((get_the_category()) as $category) {
				    echo  $category->slug . ' ';
				} ?>" data-equalizer-watch>
											
											<h5>	<?php the_title(); ?> </h5>
											
											<div id="portfolio-img" class="circle">
											
												<img src="<?php echo $post_thumbnail_url; ?>" />
											
											</div>
											
											<div id="portfolio-description" class="portfolio-description"><p><?php the_field('description'); ?></p></div>
										
										</li>
						
	
						
				<?php 
					
					$close +=1;
					
					
					
					$counter += 1;
					

				?>	
						
					
		
			

<?php	} wp_reset_postdata();// end while
} // end if
?>
								</ul>
							</div>
</div>
		</div>
	</div>
</section>
<hr />

<?php get_footer(); ?>