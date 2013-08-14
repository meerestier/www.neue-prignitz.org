<?php snippet('header') ?>
<?php snippet('menu') ?>

<body class="homepage">

	<!-- Primary Page Layout
	================================================== -->


	<div class="container container-twelve" >
	
		<div id="filterspace">
			&nbsp;
		</div>
		
		<div class="four columns">
			<div class="box_white">
				<h3>Experiences</h3>
				<p>preclinics is a partner for the development of drugs (small molecules, peptides, biologica etc.), drug delivery formulations and medical devices.
				</p>
				<ul class="box_nav">					
				    <?php 

					// find the open/active page on the first level
					$open  = $pages->findByUID('experiences');
					$items = ($open) ? $open->children()->visible() : false; 
					
					?>
			
					<?php if($items && $items->count()): ?>
					    <?php foreach($items AS $item): ?>
					    <li><a href="<?php echo $item->url() ?>"><span class="bullet"></span><?php echo html($item->title()) ?></a></li>
					    <?php endforeach ?>            
					<?php endif ?>
					
				</ul>
			</div>	
		</div><!-- end div column -->
		
		<div class="four columns">
			<div class="box_white">
				<h3>Members</h3>
				<p>preclinics offers various services for biological research. Here is an overview:</p>
				<ul class="box_nav">
				    <?php 

					// find the open/active page on the first level
					$open  = $pages->findByUID('research-services');
					$items = ($open) ? $open->children()->visible() : false; 
					
					?>
					<?php if($items && $items->count()): ?>
					    <?php foreach($items AS $item): ?>
					    <li><a href="<?php echo $item->url() ?>"><span class="bullet"></span><?php echo html($item->title()) ?></a></li>
					    <?php endforeach ?>            
					<?php endif ?>
				</ul>
			</div>
		</div><!-- end div column -->
		
		<div class="four columns">
			
			<div class="box_green">
				
				<!-- Home Content -->
				<div class="box_intro">
					<h3><?php echo markdown($page->welcome_note()) ?></h3>
						<p><?php echo markdown($page->text()) ?></p>
				</div><!-- box_intro -->

			</div><!-- box_green -->
			
			<!-- Slider nur wenn Bilder im Ordner -->
			<?php if($page->hasImages()): ?> 
				
			<div class="box_slider slidewrap2" data-autorotate="3000">

				<ul class="slider">
				  <?php foreach($page->images() as $image): ?>
				  <li class="slide" style="background: url(<?php echo $image->url() ?>) no-repeat center bottom;">
				  <p><?php echo $image->name() ?></p>
				  </li>
				  <?php endforeach ?>
				</ul>
				
			</div><!-- slidewrap2 -->

			<?php endif ?>			
			
		</div><!-- end div column -->


	</div><!-- container -->


	<!-- Footer
	================================================== -->
	<?php snippet('footer')?>
	<?php snippet('scripts') ?>
	<?php snippet('elements') ?>

	<!-- JS
	================================================== -->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="../../assets/javascripts/tabs.js"></script>
	<script src="../../assets/javascripts/plugin.js"></script>
	<script>
		$(document).ready(function() {
			
			$('.slidewrap2').carousel({
				slider: '.slider',
				slide: '.slide',
				addNav: true,
				addPagination: true,
				speed: 300 // ms.
			});
			
		});
	</script>


<!-- End Document
================================================== -->
</body>
</html>