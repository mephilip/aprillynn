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
						<!--<img src="<?php bloginfo('template_url'); ?>/images/banner.png" />-->
						
						<div class="gold">
							<?php the_post_thumbnail(); ?>							
						</div>
					</div>
					
					<div class="the-content">
						<?php the_content(); ?>
						
						<hr />
						
						<h3 class="ribbon"><span>recent blog posts</span></h3>
						<div class="blog-post-wrapper">
							
							<?php $args = array(
							    'numberposts' => 2,
							    'offset' => 0,
							    'category' => 0,
							    'orderby' => 'post_date',
							    'order' => 'DESC',
							    'post_type' => 'post',
							    'suppress_filters' => true );
							
							    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
							?>
								<div class="row">		
										<?php foreach($recent_posts as $recent) {
													$thumb = get_the_post_thumbnail($recent["ID"]);
													$recent_blog = '<div class="small-18 medium-8 blog-columns">';
													 $recent_blog .= '<div class="gold">';
													  $recent_blog .= '<div class="meta-container">';
													   $recent_blog .= '<div class="meta-wrapper">';
													    $recent_blog .= '<div class="blog-meta">';
													     $recent_blog .= '<h4 class="primary blog-title isabella">'.$recent['post_title'].'</h4>';
													     $recent_blog .= '<p>'.$recent['post_excerpt'].'</p>';
													     $recent_blog .= '<a class="h4 ribbon read-more" href="'. get_permalink($recent["ID"]) .'"><span class="left-ribbon"></span>Read More<span class="right-ribbon"></span></a>';
													    $recent_blog .= '</div>';
													   $recent_blog .= '</div>';
													   if(empty($thumb)) {
														   $recent_blog .= '<img src=' . get_template_directory_uri() . '/images/banner.png />';
													   } else {
														   $recent_blog .=  get_the_post_thumbnail($recent["ID"]);
													   } 
													  $recent_blog .= '</div>';
													 $recent_blog .= '</div>';
													$recent_blog .= '</div>';
													
													echo $recent_blog;
													
																						
												}
										?>
								</div>
		
			

<?php	} // end while
} // end if
?>
		</div>
	</div>
</section>

<hr />

<?php get_footer(); ?>