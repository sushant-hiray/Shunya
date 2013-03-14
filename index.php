<?php
	include "header.php";
	
	include "functions.php";
?>
		
		<?php makemenu('home'); ?>
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
			pauseTime: 4000, // How long each slide will show
			startSlide: 0, // Set starting Slide (0 index)
			directionNav: true, // Next and Prev navigation
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
	<script type="text/javascript">
        $(document).ready(function () {
            $('#slider').show();
        });
    </script>
	<div id="content_full" class="full">
		<div id="content" class="border_both">
			<div style="clear: both;"></div>
			<div class="slider-wrapper" style="width:960px;">
			<noscript>
				<img src="img/slides/slide5.jpg" alt="" width="954px" height="300px"/>
			</noscript>
				<div id="slider" class="nivoSlider">
					
					<img src="img/slides/slide5.jpg" alt="" width="954px" height="300px" title="#caption1" />
					<img src="img/slides/slide7.jpg" alt="" width="954px" height="300px" title="#caption2" />
					<img src="img/slides/slide6.jpg" alt="" width="954px" height="300px" title="#caption3" />
				</div>
			</div>
			<div id="caption1" class="nivo-html-caption">
				<p>Solar Decathlon US 2011 <span class="small">&nbsp;&copy; <a href="https://planetforwardgw.wordpress.com/page/11/" style="color: #fff">George Washington University Blog</a></span></p>
			</div>
			<div id="caption2" class="nivo-html-caption">
				<p>Solar Village Under Construction (SD US 2011) <span class="small">&nbsp;&copy; Albert Vecerka</span></p>
			</div>
			<div id="caption3" class="nivo-html-caption">
				<p>Solar Decathlon Europe 2012 <span class="small">&nbsp;&copy; <a href="http://www.sdeurope.org/?p=7883" style="color: #fff">Europe Website</a></span></p>
			</div>
			<div id="heading1">
			<h2 style="border-bottom: 1px solid #b8d2c4;">Home</h2>
			<!-- Lists all the actions from the actions table-->
			<p class='para'>
				The Solar Decathlon is an international competition that invites 20 collegiate teams to design, build, and operate solar-powered houses that are cost-effective, energy-efficient, and attractive. The winner of the competition is the team that best blends affordability, consumer appeal, and design excellence with optimal energy production and maximum efficiency. 
				<br /><br />
				Team SHUNYA is a collaboration between the Indian Institute of Technology, Bombay (IIT Bombay) and Rachana Sansad Academy of Architecture.It is the first Indian team to get selected in the Solar Decathlon Europe 2014 which will be held in Versailles, France during the months of June-July 2014.
				<!--<br /><br />
				Praesent feugiat, metus quis lobortis eleifend, velit sapien vestibulum odio, a imperdiet sapien leo et mi. Sed eleifend gravida pharetra. Mauris eu libero sed tellus hendrerit euismod vitae in nisi. In turpis lacus, dapibus et elementum eget, tincidunt nec nisi. Cras lorem dolor, facilisis ut sodales non, aliquam vitae justo. Vestibulum eros quam, malesuada id tempor in, lobortis quis erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis nibh erat, consectetur vel aliquet ac, venenatis non massa. 
				-->
			</p>
			</div>
			
			<div id="rel_links">
				<h2 style="border-bottom: 1px solid #b8d2c4;">Related Links</h2><br/>
				<ul>
				<li><a href="http://www.solardecathlon2014.fr/en" target='_blank' class="rel-links green"><img  alt="" src="img/link.png" style="vertical-align:middle;" class="png"/>Visit Solar Decathlon Official Page</a> <br/></li>
				<li><a href="house.php" class="rel-links green"><img  alt="" src="img/link.png" style="vertical-align:middle" class="png"/>View House Concept</a><br/></li>
				<li><a href="http://homepages.iitb.ac.in/~achyuthan1991/shunya/downloads/sde_presentation.pdf" class="rel-links green"><img  alt="" src="img/pdf.png" style="vertical-align:middle" class="png"/>Sponsorship Brochure </a><br/></li>
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
