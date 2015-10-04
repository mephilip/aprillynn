<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>


<?php get_header('blog'); ?>

<section id="main-body">
	<div id="blog_page">
	  <div class="row">
	    <div class="small-18 small-centered medium-uncentered medium-13 columns negative">
	      <div class="home-content">
	        <?php if(have_posts()): ?>
	                	<?php while(have_posts()): the_post(); ?>
	                    <div class="welcome-note">
	                	   <h3><?php the_title(); ?></h3>
	                        <div class="entry-meta"> <span>by
	          <?php the_author(); ?></span>
	          <span> on
	          <?php the_time('jS F Y') ?>
	          </span><span> <a href="<?php the_permalink(); ?>#comments">Leave a comment </a></span><span> under
	          <?php the_category(', ') ?></span>
	        </div>
	        <?php 
	                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	                        the_post_thumbnail();
	                    } 
	                    ?>
							<?php the_content(); ?>

	                     </div>
	                     <hr />
	                     <div class="row">
		                     <table>
			                     <tr>
				                     <td>
	                     
	                     <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
				                     </td>
	                     
				                     <td>
	                     <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button"></div>
				                     </td>
				                     <td>
	                     
	                     <a class="twitter-share-button"
  href="<?php the_permalink(); ?>/tweet?text=Hello%20world"
  data-count="none">
Tweet</a>
				                     </td>
	                   
			                     </tr>
		                     </table>
	                     </div>
	                     
	                     <hr />
	                     
	                     <div class="the-comments">
	                   
		                     <?php echo do_shortcode('[fbcomments][fbcomments url="" width="100%" count="off" num="5" ]'); ?>
		                     
	                     </div>
	                    
	                	<?php endwhile; ?>
	                <?php endif; ?>
	      </div>
	    </div>
	    <div class="small-18 small-centered medium-uncentered medium-5 columns">
	      <section id="left-nav">
	      	<div class="left-nav-wrap hide-for-small-only">
	      	<div class="helo sidebar_col_n">
	      	<?php dynamic_sidebar('bbbhhhbbb'); ?>
	        </div>
	        </div>
	      </section>
	    </div>
	  </div>
	</div>
</section>
<hr />
<?php get_footer(); ?>
