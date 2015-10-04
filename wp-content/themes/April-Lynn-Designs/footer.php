<footer>
			<div class="row social-media">
				<div class="small-12 medium-6 small-centered columns">
					<ul class="small-block-grid-6">
						<li><a href="http://facebook.com/aprillynndesigns" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook" /></a></li>
						<li><a href="http://twitter.com/aprillynndesign" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="twitter" /></a></li>
						<li><a href="http://pinterest.com/aprillynndesign" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/pinterest.png" alt="pinterest" /></a></li>
						<li><a href="http://instagram.com/aprillynndesign" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/instagram.png" alt="instagram" /></a></li>
						<li><a href="http://feeds.feedburner.com/aprillynndesigns"  target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/rss.png" alt="rss" /></a></li>
 						<li><a href="https://plus.google.com/+AprilLynnDesignsLanghorne" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/gplus.png" alt="gplus" /></a></li>
					</ul>
				</div>
			</div>
			<div class="footer-wrap text-center">
				<p>APRIL LYNN DESIGNS (FORMERLY ALH DESIGNS) | CUSTOM WEDDING INVITATIONS AND EVENT STATIONERY | 267-888-6095 <br /> 106 SOUTH BELLEVUE AVENUE | SUITE 204 | LANGHORNE, PENNSYLVANIA 19047 | HOURS BY APPOINTMENT ONLY <br /> 2010-2015 APRIL LYNN DESIGNS - ALL RIGHTS RESERVED
				<br />
				SITE BY <a href="http://www.laludesigns.com/" target="_blank">LALU DESIGNS</a> & <a href="http://philiparudy.com/" target="_blank">PHILIP A. RUDY</a></p>
			</div>
		</footer>
	</div>
  <!--<a href="#" class="button" data-reveal-id="myNormal">click</a>
  <div class="reveal-modal" id="myNormal">
      Modal
      <a class="close-reveal-modal">x</a>
  </div>-->
   <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
   <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/foundation.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/foundation.offcanvas.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/foundation.reveal.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.equalizer.js"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
   <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
   
   <script>
     $(document).foundation({
		  offcanvas : {
		    // Sets method in which offcanvas opens.
		    // [ move | overlap_single | overlap ]
		    open_method: 'overlap', 
		    // Should the menu close when a menu link is clicked?
		    // [ true | false ]
		    close_on_click : false
		  }
	});
	
	$(function() {
	    $( "#datepicker" ).datepicker();
	  });
   </script>
		</div>
	</div>
	<a class="exit-off-canvas">
<?php wp_footer(); ?>
</body>
</html>