<?php
	include "header.php";
	
	include "functions.php";
?>
		
		<?php makemenu('house'); ?>
		</div>
	</div>
	<!-- These close the header div from the header.php file-->
	
	<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider({
			effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
			slices: 15, // For slice animations
			boxCols: 8, // For box animations
			boxRows: 4, // For box animations
			animSpeed: 500, // Slide transition speed
			pauseTime: 10000, // How long each slide will show
			startSlide: 0, // Set starting Slide (0 index)
			directionNav: true, // Next & Prev navigation
			controlNav: true, // 1,2,3... navigation
			controlNavThumbs: true, // Use thumbnails for Control Nav
			pauseOnHover: true, // Stop animation while hovering
			manualAdvance: false, // Force manual transitions
			prevText: 'Prev', // Prev directionNav text
			nextText: 'Next', // Next directionNav text
			randomStart: false, // Start on a random slide
			beforeChange: function(){}, // Triggers before a slide transition
			afterChange: function(){}, // Triggers after a slide transition
			slideshowEnd: function(){}, // Triggers after all slides have been shown
			lastSlide: function(){}, // Triggers when last slide is shown
			afterLoad: function(){} // Triggers when slider has loaded
		});
	});
	/*$(window).load(function() {
		$('#slider').nivoSlider({ effect:'fade',pauseTime: 6000,pauseOnHover:false });
	});*/
	</script>
	
	<div id="content_full" class="full">
		<div id="content" class="border_both">
			<div style="clear: both;"></div>
			<div class="slider-wrapper" style="width:960px;">
				<div id="slider" class="nivoSlider">
					<!--<img src="img/slides/slide1.jpg" alt="" width=954 height=246/>
					<a href="http://dev7studios.com"><img src="img/slides/slide2.jpg" alt="" title="#htmlcaption" width=954 height=246 /></a>-->
					<!--<img src="img/slides/slide2.jpg" alt="" title="#htmlcaption" width=954 height=246 />
					<img src="img/slides/slide3.jpg" alt="" width=954 height=246 title="This is an example of a caption" />
					<img src="img/slides/slide4.jpg" alt="" width=954 height=246 />-->
					<img src="img/slides/slide5.jpg" alt="" width=954 height=300 title="Solar Decathlon US 2011" />
					<img src="img/slides/slide7.jpg" alt="" width=954 height=300 title="Solar Village Under Cfonstruction (SD US 2011)" />
					<img src="img/slides/slide6.jpg" alt="" width=954 height=300 title="Solar Decathlon Europe 2012" />
				</div>
			</div>
			<!--<div id="htmlcaption" class="nivo-html-caption">
				<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
			</div>-->
			<div id="heading1">
			<h2 style="border-bottom: 1px solid #b8d2c4;">House Concept</h2>
			<!-- Lists all the actions from the actions table-->
			<p class='para'>
				Team SHUNYA is a multidisciplinary team that combines students from various study backgrounds, such as architecture, sustainability engineering, computer science, strategic management.
				<br /><br />
				In keeping with the goals of the competition, Team SHUNYA is designing an affordable house for dense urban environment that would cater to the growing Indian middle class. This is a one-of-its kind attempt to adapt traditional Indian cultural and socio-economic sensibilities with modern technology to give a sustainable house that would meet and far exceed expectations of the quintessential Indian homeowner. Our goal is to facilitate a transition of the image of green homes from being exclusive and expensive showcases to pragmatic and economically viable products. 
				<!--<br /><br />
				Praesent feugiat, metus quis lobortis eleifend, velit sapien vestibulum odio, a imperdiet sapien leo et mi. Sed eleifend gravida pharetra. Mauris eu libero sed tellus hendrerit euismod vitae in nisi. In turpis lacus, dapibus et elementum eget, tincidunt nec nisi. Cras lorem dolor, facilisis ut sodales non, aliquam vitae justo. Vestibulum eros quam, malesuada id tempor in, lobortis quis erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis nibh erat, consectetur vel aliquet ac, venenatis non massa. 
				-->
			</p>
			</div>
			
			<div id="rel_links">
				<h2 style="border-bottom: 1px solid #b8d2c4;">Related Links</h2><br>
				<ul><li><a href="http://www.solardecathlon2014.fr/en" target='_blank' class="rel-links green"><img  alt="" src="img/link.png" style="vertical-align:middle;"/>Visit Solar Decathlon Official Page</a> </li><br>
				<li><a href="team.php" class="rel-links green"><img  alt="" src="img/link.png" style="vertical-align:middle"/>Team Composition</a></li><br>
				<li><a href="http://homepages.iitb.ac.in/~achyuthan1991/shunya/downloads/sde_presentation.pdf" class="rel-links green"><img  alt=""  src="img/pdf.png" style="vertical-align:middle"/>Sponsorship Brochure </a></li><br>
				</ul>
				<!--
				<ul class="socialicons">
					<li>
						<a class="facebook" href="link to social profile here"></a>
					</li>
					<li>
						<a class="twitter" href="link to social profile here"></a>
					</li>
					<li>
						<a class="linkedin" href="link to social profile here"></a>
					</li>
					<li>
						<a href=""><img src="img/euro.jpg"/></a>
					</li>
				</ul>
				-->
			</div>
			<div style='clear:both;'></div>
		</div>
	</div>
<?php include "footer.php";
