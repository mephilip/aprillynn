<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php if(have_posts()): ?>
                	<?php while(have_posts()): the_post(); ?>
                    <div class="welcome-note">
                	   <h3><?php the_title(); ?></h3>
                        <div class="entry-meta"> by
          <?php the_author(); ?>
          , on
          <?php the_time('jS F Y') ?>
          , <a href="<?php the_permalink(); ?>#comments">Leave a comment </a>, under
          <?php the_category(', ') ?>
        </div>
        <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail();
                    } 
                    ?>
						<?php the_content(); ?>
                        <?php edit_post_link( __( 'Edit', 'ym' ), '<span class="edit-link">', '</span>' ); ?>
                     </div>
                      <?php comments_template( '', true ); ?>
                	<?php endwhile; ?>
                <?php endif; ?>

<?php get_footer(); ?>
