<?php snippet('header') ?>


<body class="content">

<noscript>
    <div id="noscript">Please activate JavaScript in your browser!</div>
</noscript>


<?php snippet('nav_details') ?>

	<!-- Content Layout
	================================================== -->
	
		<!-- Background Image -->
				<div class="background-area ">
		
					<ul>
					  <li>
<!--						 <img src="/assets/images/dummy_bg.jpg" alt="Dummy" />-->
					  </li>
					</ul>
	
				</div><!-- end div column -->
	
	
	<div class="band contentarea">
		<div class="container container-twelve">
		
					<div class="twelve columns">
			
				<h2><?php echo html($page->title()) ?></h2>
			
			</div><!-- end div column -->

		<div class="twelve columns line">
		</div><!-- end div column -->
	
			
			
			<!-- Wenn banner.jpg-->
			<?php if($page->images()->find('banner.jpg')): ?>
			
			<div class="banner twelve columns">

				 <img class="banner" src="<?php echo $page->images()->find('banner.jpg')->url() ?>" alt="<?php echo $page->images()->find('banner.jpg')->title() ?>" />
			
			</div><!-- end div column -->


				<div class="textblock six columns">
					<?php echo markdown($page->textblock_1()) ?>
				</div><!-- end div column -->

			
			<?php else: ?>
				<div class="textblock six columns">
					<?php echo markdown($page->textblock_1()) ?>
				</div><!-- end div column -->
			
				<!-- Slider nur wenn Bilder im Ordner -->
				<?php if($page->hasImages()): ?> 
	
				<div id="photo_stack" class="six columns <?php echo html($page->columns()) ?>">
					
							  <?php foreach($page->images()->without('banner.png')->without('grid_image.png') as $image): ?>
								 <img id="photo<?php echo $image->size() ?>" src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>"  width="80%"/>
							  <?php endforeach ?>
				<div class="clear">&nbsp;</div>
				</div><!-- end div column -->
					
				<?php endif ?><!-- end Slider -->
				
			<?php endif ?><!-- end  Columns-->

<!--			<div class="textblock six columns">
			
				<?php echo markdown($page->textblock_2()) ?>

			</div>-->

			<div class="events textblock six columns">
				<?php if($page->hasChildren()): ?> 
				
				<h3>Ereignisse im Jahresverlauf</h3>
				<ul class="events">
				    
				    
				    <?php 

					// Im Unterverzeichnis nach Events suchen
					$open  = $page->children();
					$items = ($open) ? $page->children()->findByUID('events')->children()->visible() : false; 
					
					?>
					
					<?php if($items && $items->count()): ?>
					    <?php foreach($items AS $item): ?>
					    <li><a href="<?php echo $item->url() ?>"><span class="bullet"></span><?php echo html($item->title()) ?></a><span class="timeframe"><?php echo html($item->timeframe()) ?></span>
					    	<ul class="options">
					    		
					    		<?php echo $item->note() ?>
					    		
<!--						    	<li>
						    	<div class="wrapper"><ul class="button-group"><li><a class="uibutton" href="#">SMS</a></li><a class="uibutton" href="#">Email</a></li></ul></div>
						    	<p>Erinnern Sie mich, wenn dieses Ereignis ansteht...</p>
						    	
						    	</li>					    	-->
					    	</ul>

					    </li>
					    <?php endforeach ?>            
					<?php endif ?>
				</ul>	
				<?php endif ?> <!-- end If -->
			</div><!-- end div column -->


			<div class="interact textblock six columns">
				<?php if($page->hasChildren()): ?> 
				<h3>Kontakt </h3>
				<ul class="events persons">
				    <?php 

					// Im Unterverzeichnis nach Personen suchen
					$open  = $page->children();
					$items = ($open) ? $page->children()->findByUID('persons')->children()->visible() : false; 
					
					?>
					
					<?php if($items && $items->count()): ?>
					    <?php foreach($items AS $item): ?>
					    <li><span class="bullet"></span><?php echo html($item->title()) ?>
					    <ul class="options">
					    	<li>
					    	<?php foreach($item->images() as $image): ?>
					    		 <img id="photo<?php echo $image->size() ?>" src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
					    	<?php endforeach ?>
					    	
					    	<p><?php echo markdown($item->vita()) ?></p>
					    	</li>					    	
					    </ul>
					    
					    </li>
					    <?php endforeach ?>            
					<?php endif ?>

					<li>
					<?php echo markdown($page->address()) ?>
					</li>
				</ul>	
				<?php endif ?>
			</div><!-- end div column -->

<!--        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'systemic'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>-->

			
		</div><!-- container -->
		
	</div><!-- band -->


<?php snippet('footer') ?>
<?php snippet('scripts') ?>
<?php snippet('elements') ?>

<!-- End Document
================================================== -->
</body>
</html>