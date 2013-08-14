	<!-- JS
	================================================== -->
	<script src="../../assets/javascripts/jquery-1.7.1.min.js"></script>
	<script src="../../assets/javascripts/tabs.js"></script>
	<script src="../../assets/javascripts/plugin.js"></script>


	<!-- JS /assets/features
	================================================== -->
	<!--<script type="text/javascript" src="../../assets/features/gridster.js/dist/jquery.gridster.js"></script>-->
	<script type="text/javascript" src="../../assets/javascripts/jquery.reveal.js"></script>
	<script type="text/javascript" src="../../assets/features/isotope/jquery.isotope.min.js"></script>
	


	<script>

		$(document).ready(function() {
	
			// Stack
			
				$imgs = $("#photo_stack img");
				$imgCount = $imgs.length;
				$curr_index = 0;
				$imgs.last().addClass('current');
				
				for(var i=1; i<=$imgs.length; i++) {
					$random_deg =  (Math.round((Math.random()*3)+1))
					$suff = '';
					if (i % 2 == 0) 
						$suff = 'neg';
					$imgs.eq(i-1).addClass('deg' + $random_deg + $suff);
				}
				
				$("#photo_stack")
				.delegate('img', 'click', function() {
					$this = $(this);
					if ($this.hasClass('current')) {
						$zi = $this.css('zIndex') - $imgCount;
						$this.addClass('animate');
						setTimeout(function() { $this.css('zIndex', $zi); }, 200);
						setTimeout(function() { $this.removeClass('animate'); }, 1000);
						$this.removeClass('current');
						if ($this.index() == 0) {
							$imgs.last().addClass('current');
						} else {
							$imgs.eq($this.index()-1).addClass('current');
						}
					}
				})
				.delegate('img', 'mouseenter', function() {
					if ($(this).hasClass('current')) {
						$(this).addClass('hover');
					}
				})
				.delegate('img', 'mouseleave', function() {
					$(this).removeClass('hover');
				});;


			// Buttons
			$(function(){
			  $(".uibutton").click(function(e){
			    e.preventDefault();
			    $(".uibutton").addClass("active").not(this).removeClass("active");
			  });
			});			
			
			
			
			// Carousel
			$('.slidewrap2').carousel({
				slider: '.slider',
				slide: '.slide',
				addNav: true,
				addPagination: true,
				speed: 300 // ms.
			});
			
			
			// Create the dropdown base
			$("<select />").appendTo("nav");
			
			// Create default option "Go to..."
			$("<option />", {
			   "selected": "selected",
			   "value"   : "",
			   "text"    : "Go to..."
			}).appendTo("nav select");
			
			// Populate dropdown with menu items
			$("nav a").each(function() {
			 var el = $(this);
			 $("<option />", {
			     "value"   : el.attr("href"),
			     "text"    : el.text()
			 }).appendTo("nav select");
			});

			
		});
	</script>
