<?php 
/*
Template Name: Pros Page
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
							<div class="pro text-center">
								<h3>Beauty (hair & makeup)</h3>
								<a title="Jill Kozar's Up Your Do" href="http://upyourdo.com/" target="_blank">Jill Kozar’s Up Your Do</a><br>
								<a href="http://makemeglam.net/" target="_blank">Make Me Glam</a></p>
							</div>
							<div class="pro text-center">
								<h3>cakes/cupcakes/desserts</h3>
								<a title="La Belle Mariee Bridal Salon" href="http://www.labellemarieebridal.com/" target="_blank">La Belle Mariee Bridal Salon</a>
								<a title="Nicole Bridal &amp; Formal Shoppe" href="http://www.nicolebridal.com/" target="_blank"><br>
Nicole Bridal &amp; Formal Shoppe</a><br>
								<a title="Priscilla Costa" href="http://priscillacosta.com/" target="_blank">Priscilla Costa</a><br>
								<a title="Sposabella" href="http://www.sposabella-bridal.com/" target="_blank">Sposabella</a><br>
								<a title="VanCleve Wedding Pavilion" href="http://www.vanclevecollection.com/wedding_pavilion.htm" target="_blank">VanCleve Wedding Pavilion</a></p>
							</div>
							<div class="pro text-center">
								<h3>custom hand lettered chalk signage</h3>
								<a title="Kate Farley Design" href="http://www.katefarleydesign.com/" target="_blank">Kate Farley Design</a>
							</div>
							<div class="pro text-center">
								<h3>florists</h3>
								<a title="Aribella Events" href="http://aribellaevents.com/" target="_blank">Aribella Events</a><br>
								<a title="Carl Alan Floral Designs" href="http://www.carlalan.com/" target="_blank">Carl Alan Floral Designs<br>
								</a><a title="Flowers by David" href="http://flowersbydavid.com/" target="_blank">Flowers by David</a><br>
								<a title="Kate Farley Design" href="http://www.katefarleydesign.com/" target="_blank">Kate Farley Design</a><br>
								<a title="Floral and Event Design" href="http://www.papertini.com/" target="_blank">Papertini</a><br>
								<a title="Pennypack Flowers" href="http://www.pennypackweddings.com/" target="_blank">Pennypack Flowers</a><br>
								<a title="Robertson's Flowers" href="http://www.robertsonsflowers.com/" target="_blank">Robertson’s Flowers</a><br>
								<a title="Sebesta Design" href="http://www.sebestadesign.com/" target="_blank">Sebesta Design</a></p>
							</div>
							<div class="pro text-center">
								<h3>Photographers</h3>
								<a title="Ashley Bartoletti Photography" href="http://www.ashleybartoletti.com/" target="_blank">Ashley Bartoletti Photography</a><br>
								<a title="Ashley Gerrity Photography" href="http://www.ashleygerrityphotography.com/" target="_blank">Ashley Gerrity Photography</a><br>
								<a title="B.side Photography" href="http://www.photobside.com/" target="_blank">B.side Photography</a><br>
								<a title="Hansen Photo &amp; Video" href="http://www.hansenphotoandvideo.com/" target="_blank">Hansen Photography &amp; Video</a><br>
								<a title="Joe Dantone Photography" href="http://joedantone.com/" target="_blank">Joe Dantone Photography</a><br>
								<a title="Lovestruck by Nicole Marie" href="http://lovestruckbynicolemarie.com/" target="_blank">Lovestruck by Nicole Marie</a><br>
								<a title="Melania Marta Photography – Lancaster Wedding Photographer" href="http://www.melaniamphotography.com" target="_blank" rel="colleague">Melania Marta Photography</a><br>
								<a title="Michael's Photography" href="http://michaels-photography.net/" target="_blank">Michael’s Photography</a><br>
								<a title="Photography by Kelly" href="http://photobykelly.com/" target="_blank" rel="friend">Photography by Kelly</a><br>
								<a title="Sharyn Frenkel Photography" href="http://www.sharynfrenkelphotography.com/" target="_blank">Sharyn Frenkel Photography</a><br>
								<a href="http://www.swoonoveritstudio.com/" target="_blank">Swoon Over It Photography</a><br>
								<a title="Werth Photography" href="http://www.werthphotography.com/" target="_blank">Werth Photography</a><br>
								<a title="Wojtaszek Weddings" href="http://www.wojtaszekweddings.com/" target="_blank">Wojtaszek Weddings</a></p>
							</div>
							<div class="pro text-center">
								<h3>Videographers</h3>
								<a href="http://blossomproductions.com/" target="_blank">Blossom Productions</a><br>
								<a title="Cinemacake Filmmakers" href="http://www.cinemacake.com/" target="_blank">Cinemacake Filmmakers</a><br>
								<a title="Cinematic by David M" href="http://www.cinematicbydavidm.com/" target="_blank">Cinematic by David M</a><br>
								<a title="Hansen Photo &amp; Video" href="http://www.hansenphotoandvideo.com/" target="_blank">Hansen Photography &amp; Video</a><br>
								<a title="Willow Tree Films" href="http://willowtreefilms.net/" target="_blank">Willow Tree Films</a></p>
							</div>
							<div class="pro text-center">
								<h3>planners</h3>
								<a title="Aribella Events" href="http://aribellaevents.com/" target="_blank">Aribella Events</a><br>
								<a title="Creative Eventology" href="http://www.creativeeventology.com/" target="_blank">Creative Eventology</a><br>
								<a title="Wedding coordination and consulting – Serving Northeast PA and surrounding areas" href="http://dpnak.com/" target="_blank">Danielle Pasternak Events</a><br>
								<a title="Events by Renee" href="http://eventsbyrenee.net/" target="_blank">Events by Renee</a><br>
								<a title="Events by Katrina Gilbert" href="http://katrinagilbertevents.com/" target="_blank">Katrina Gilbert Weddings &amp; Events</a><br>
								<a title="Pastore Events – Perfectly Planned" href="http://www.pastoreevents.com/" target="_blank">Pastore Events</a></p>
							</div>
						</div>
						<div class="small-18 medium-10 columns right-contact">
							<div class="pro text-center">
								<h3>bridal shops</h3>
								<a title="La Belle Mariee Bridal Salon" href="http://www.labellemarieebridal.com/" target="_blank">La Belle Mariee Bridal Salon</a><a title="Nicole Bridal &amp; Formal Shoppe" href="http://www.nicolebridal.com/" target="_blank"><br>
Nicole Bridal &amp; Formal Shoppe</a><br>
								<a title="Priscilla Costa" href="http://priscillacosta.com/" target="_blank">Priscilla Costa</a><br>
								<a title="Sposabella" href="http://www.sposabella-bridal.com/" target="_blank">Sposabella</a><br>
								<a title="VanCleve Wedding Pavilion" href="http://www.vanclevecollection.com/wedding_pavilion.htm" target="_blank">VanCleve Wedding Pavilion</a></p>
							</div>
							<div class="pro text-center">
								<h3>catering</h3>
								<ul>
									<a title="Birchtree Catering" href="http://www.philadelphiacatering.net/" target="_blank">Birchtree Catering</a><br>
									<a title="Conroy Catering" href="http://www.conroycatering.com/" target="_blank">Conroy Catering</a><br>
									<a title="Diverse Catering and Event Design" href="http://www.diversecatering.com/" target="_blank">Diverse Catering &amp; Event Design</a><br>
									<a title="J. Scott Catering" href="http://www.jscottcatering.com/" target="_blank">J. Scott Catering</a><br>
									<a title="P &amp; P Caterers" href="http://www.pandpcaterers.com/" target="_blank">P &amp; P Caterers</a><br>
									<a title="Robert Ryan Catering" href="http://www.robertryancatering.com/" target="_blank">Robert Ryan Catering &amp; Design</a><br>
									<a title="Stephen STARR Events" href="http://www.starrevents.com/" target="_blank">Stephen STARR Events</a></p>
								</ul>
							</div>
							<div class="pro text-center">
								<h3>custom hand lettered chalk signage</h3>
								<a title="Kate Farley Design" href="http://www.katefarleydesign.com/" target="_blank">Kate Farley Design</a>
							</div>
							<div class="pro text-center">
								<h3>dj's</h3>
								<a title="ACE DJ Entertainment LLC" href="http://acedjentertainment.com/" target="_blank">ACE DJ Entertainment LLC</a><br>
								<a title="Silver Sound Entertainement" href="http://www.silversound.com/" target="_blank">Silver Sound Entertainment</a><br>
								<a title="Synergetic Sounds" href="http://synergeticsounds.com/" target="_blank">Synergetic Sounds</a></p>
							</div>
							<div class="pro text-center">
								<h3>Officiants</h3>
								<a title="Chaplain Michael J. Falco Wedding Officiant – Together Forever Weddings" href="http://www.thumbtack.com/pa/bristol/wedding-officiant/wedding-officiant" target="_blank">Chaplain Michael J. Falco Wedding Officiant</a><br>
								<a title="Marry Me Philadelphia" href="http://www.marrymephiladelphia.com/" target="_blank">Marry Me Philadelphia</a><br>
								<a title="Reverend Pamela L. Brehm" href="http://www.reverendpamela.com/" target="_blank">Reverend Pamela L. Brehm</a></p>
							</div>
							<div class="pro text-center">
								<h3>Transportation</h3>
								<a title="Celebrations Limousine Services" href="http://www.celebrationslimos.com/" target="_blank">Celebrations Limousine Services</a><a title="Secrets Limousine Service" href="http://www.secretslimo.com/" target="_blank"><br>
								</a><a title="Philly Limousine" href="http://www.phillylimousine.net/" target="_blank">Philly Limo Service</a><a title="Secrets Limousine Service" href="http://www.secretslimo.com/" target="_blank"><br>
								Secrets Limousine Service</a><br>
								<a title="Sterling Limousine and Transportation Services" href="http://www.sterlinglimoservice.com/" target="_blank">Sterling Limousine and Transportation Services</a></p>
							</div>
							<div class="pro text-center">
								<h3>Venues</h3>
								<a title="Appleford Estate" href="http://www.applefordestate.com" target="_blank">Appleford Estate</a><br>
								<a title="Arts Ballroom" href="http://www.artsballroom.com/" target="_blank">Arts Ballroom</a><br>
								<a title="Ash Mill Farm Bed and Breakfast" href="http://www.ashmillfarm.com/" target="_blank">Ash Mill Farm Bed and Breakfast</a><br>
								<a title="Ballroom at the Ben" href="http://finleycatering.com/ballroom-at-the-ben/" target="_blank">Ballroom at the Ben</a><br>
								<a title="Barn on Bridge" href="http://www.barnonbridge.com/" target="_blank">Barn on Bridge</a><br>
								<a title="Cairnwood Estate" href="http://www.cairnwood.org/" target="_blank">Cairnwood Estate</a><br>
								<a title="Cescaphe Event Group - Atrium at Curtis Center, Cescaphe, Down Town Club, Tendenza, Vie" href="http://www.cescaphe.com/" target="_blank">Cescaphe Event Group (Atrium at Curtis Center, Cescaphe, Down Town Club, Tendenza, Vie)</a><br>
								<a title="Cira Centre Atrium" href="http://garcesgroup.com/garces-catering/the-cira-centre-atrium-at-jg-domestic/" target="_blank">Cira Centre Atrium</a><br>
								<a title="Columbia Station" href="http://www.thecolumbiastation.com/" target="_blank">Columbia Station</a><br>
								<a title="Crystal Tea Room" href="http://finleycatering.com/crystal-tea-room/" target="_blank">Crystal Tea Room</a><br>
								<a title="Glen Foerd Estate" href="http://www.glenfoerd.org/" target="_blank">Glen Foerd Estate</a><br>
								<a title="Hollyhedge Estate" href="http://www.hollyhedge.com/" target="_blank">Hollyhedge Estate</a><br>
								<a title="Knowlton Mansion" href="http://dev.conroycatering.com/venues/knowlton-mansion/" target="_blank">Knowlton Mansion</a><br>
								<a title="La Massaria at Bella Vista" href="http://www.lamassaria.com/">La Massaria at Bella Vista</a><br>
								<a title="Lake House Inn" href="http://www.thelhi.com/" target="_blank">Lake House Inn</a><br>
								<a title="Lambertville Station" href="http://www.lambertvillestation.com/weddings" target="_blank">Lambertville Station</a><br>
								<a title="Laurita Winery" href="http://www.conroycatering.com/venues/laurita-winery/" target="_blank">Laurita Winery</a><br>
								<a title="Manor House at Commonwealth" href="http://www.commonwealthmanor.com/" target="_blank">Manor House at Commonwealth<br>
								</a><a title="The Manor House at Prophecy Creek Park" href="http://www.prophecycreekmanor.com/">Manor House at Prophecy Creek Park</a><a title="Normandy Farm" href="http://normandyfarm.com/"><br>
								</a><a title="Morris Arboretum of the University of Pennsylvania" href="http://www.business-services.upenn.edu/arboretum/rentals_weddings.shtml" target="_blank">Morris Arboretum</a><a title="Normandy Farm" href="http://normandyfarm.com/"><br>
								Normandy Farm</a><a title="Manor House at Commonwealth" href="http://www.commonwealthmanor.com/" target="_blank"><br>
								</a><a title="Open Aire Affairs" href="http://www.openaireaffairs.com/" target="_blank">Open Aire Affairs</a><br>
								<a title="Pen Ryn Estate" href="http://www.penrynestate.com/" target="_blank">Pen Ryn Estate</a><br>
								<a title="Rosebank Winery" href="http://www.rosebankwinery.com/party-facilities/" target="_blank">Rosebank Winery</a><br>
								<a title="Talamore Country Club" href="http://www.talamorepa.com/">Talamore Country Club</a><br>
								<a title="The Merion" href="http://themerion.com/" target="_blank">The Merion</a><br>
								<a title="Finley Catering Union Trust" href="http://finleycatering.com/union-trust/" target="_blank">Union Trust</a></p>
							</div>
						</div>
			

<?php	} // end while
} // end if
?>
		</div>
	</div>
</section>


<?php get_footer(); ?>