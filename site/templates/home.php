<?php snippet('header') ?>

<body class="homepage" onload="">
<?php snippet('menu') ?>

<!-- !Primary Page Layout 
	================================================== -->
			

	<div class="container container-twelve" >
	
		<div class="twelve columns">

			<?php snippet('grid_tiles') ?>
		
		</div><!-- end div column -->
		
		<div class="four columns">
		</div><!-- end div column -->
		
		<div class="four columns">

			
		</div><!-- end div column -->


	</div><!-- container -->


	<!-- Page Parts
	================================================== -->

	<?php snippet('footer')?>
	<?php snippet('elements') ?>
	<?php snippet('scripts') ?>
	
	<script>

		$(document).ready(function() {

			// Reveal info on document ready
			//$('#info').reveal();
			
			// Isotope
			// cache container
			var $container = $('#tiles');
			
			$container.isotope({
						// options
			itemSelector : '.item',
			layoutMode : 'masonry'
			});
			
			// filter items when filter link is clicked
			$('#filters a').click(function(){
			  var selector = $(this).attr('data-filter');
			  $container.isotope({ filter: selector });
			  return false;
			});
			
		});
		
	</script>

<!-- End Document
================================================== -->
</body>
</html>