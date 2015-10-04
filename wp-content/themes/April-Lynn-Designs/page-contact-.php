<?php 
/*
Template Name: Contact Page
*/
get_header(); ?>

<section id="main-body">
	<div class="row">

<?php get_sidebar(); ?>
		
		<div class="small-18 small-centered medium-uncentered medium-13 columns negative">	
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
		
		
					<div class="home-banner contact">
						<!--<img src="<?php bloginfo('template_url'); ?>/images/banner.png" />-->
					<div class="row">
						<div class="small-18 medium-8 columns left-contact">
							<div class="gold small-18">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="text-center small-18">
								<br />
								<br />
								<p><strong>Phone:</strong> 267.888.6095</p>
								<p><strong>Email:</strong> april@aprillynndesigns.com</p>
								<p><span>Hours by appointment only</span><br />
									106 Soth Bellevue Avenue<br />
									Suite 204<br />
									Langhorne, PA 19047
								</p>
							</div>
						</div>
						<div class="small-18 medium-10 columns right-contact">
							<div class="form-wrap text-center">
								<p><?php the_content(); ?></p>
								<form id="contact" novalidate="novalidate">
									<h4>please tell me your name</h4>
									<input type="text" name="name" id="name" placeholder="Name:"/>
									<h4>how can we contact you?</h4>
									<input type="email" name="email" id="email" placeholder="Email:" />
									<h4>when is your event?</h4>
									<input type="text" name="date" class="date" id="datepicker" placeholder="Please select a date:" />
									<h4>what type of event are you having</h4>
									<input type="radio" name="radio" value="Baby" class="radio"><label for="baby">Baby</label>
								    <input type="radio" name="radio" value="Wedding" class="radio"><label for="wedding">Wedding</label>
								    <input type="radio" name="radio" value="Social" class="radio"><label for="social">Social</label>
								    <input type="radio" name="radio" value="Other" class="radio"><label for="other">Other</label>
								    <h4>please tell me about your event</h4>
								    <textarea cols="5" name="message" id="message" rows="5" placeholder="Please put your details here"></textarea>
								    <input src="<?php bloginfo('template_url'); ?>/images/submit.png" type="image" name="submit" />
								    <div id="contact_ajax_response"></div>
								</form>
							</div>
						</div>
					</div>
			

<?php	} // end while
} // end if
?>
		</div>
	</div>
</section>

<hr />

<?php get_footer(); ?>