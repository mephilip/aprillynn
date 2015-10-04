<section id="left-nav">
		<div class="small-18 small-centered medium-uncentered medium-5 columns">
			<div class="hide-for-small-only circle-wrap">
				<div class="circle">
				</div>
			</div>
			<div class="hide-for-small-only aboutapril">
				<p><br />Mak­ing pretty stationery is my passion.<br />
 I love what I do and I hope you do too. <br />
Have a look around and if you like what <br />
you see drop me a line.<br />
I’d love to hear from you! <br /><span style="color: #f1446f;font-family: isabella;font-size: 26px;">xo April</span></p>
			</div>
			<hr />
			<div class="left-nav-wrap hide-for-small-only">
				<div class="secondary-nav">
					<h4 class="h4 ribbon"><span class="left-ribbon"></span>stationery<span class="right-ribbon"></span></h4>
					<?php wp_nav_menu( array('menu' => 'Stationery' ) ); ?> 
				</div>
				<div class="secondary-nav">
					<h4 class="h4 ribbon"><span class="left-ribbon"></span>design<span class="right-ribbon"></span></h4>
					<?php wp_nav_menu( array('menu' => 'Design') ); ?> 				
				</div>
				<div class="secondary-nav">
					<?php dynamic_sidebar('information'); ?>
				</div>
			</div>
		</div>
</section>