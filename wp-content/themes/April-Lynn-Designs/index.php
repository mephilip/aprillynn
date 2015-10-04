<?php get_header('blog'); ?>

<section id="main-body">
	<div id="blog_page">
	  <div class="row">
	    <div class="small-18 small-centered medium-uncentered medium-13 columns negative">
	      <div class="home-content blogpagels">
	        <?php if(have_posts()): ?>
	        <?php while(have_posts()): the_post(); ?>
	        <div class="blog_entry">
		        <h3><a href="<?php the_permalink(); ?>">
		          <?php the_title(); ?>
		          </a></h3>
		        <div class="entry-meta"> <span> by <?php the_author(); ?> </span><span> on <?php the_time('jS F Y') ?> </span><span><a href="<?php the_permalink(); ?>#comments">Leave a comment </a> </span> <span> under 
<?php $category = get_the_category(); echo '<a class="category" href="'.get_category_link($category->term_id ).'">'.$category[0]->cat_name.'</a>'; ?></span>
		        </div>
		        <?php 
		                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		                        the_post_thumbnail();
		                    } 
		                    ?>
		        <?php the_excerpt(); ?>
		        <div class="border_blog"></div>
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
