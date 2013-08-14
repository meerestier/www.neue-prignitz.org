<!-- Primary Page Layout
	================================================== -->

	<div class="band content_nav">
		<div class="container container-twelve ">
			
			<div class="desktop_nav">
				<div class="four columns">
				
					<div class="menu five columns">
						<ul>
						
							<!-- Main Navigation (left)
							================================================== -->
						    
<!--
							    <?php foreach($pages->findByUID('experiences', 'member-benefits') AS $p): ?>
							    <li <?php echo ($p->isOpen()) ? ' class="selected"' : '' ?>>
							      <a href="#"><?php echo html($p->title()) ?></a>
							
							      <?php if($p->hasChildren()): ?>
							      <ul>
							        <?php foreach($p->children()->visible() AS $child): ?>
							        <li <?php echo ($child->isActive()) ? ' class="subselected"' : '' ?>>
							          <a href="<?php echo $child->url() ?>"><?php echo $child->title() ?></a>
							        </li>
							        <?php endforeach ?>            
							      </ul>
							      <?php endif ?>
							
							    </li>
							    <?php endforeach ?>
-->
						    

						</ul>
					</div><!-- end menu -->
					
				</div><!-- end five columns -->
				
				<div class="four columns" id="logospace_small">
					<a href="/"><img src="../../assets/images/logo_homepage.png" alt="Neue-Prignitz logotype" ></a>
				</div>
										
				<div class="four columns">
					
					<?php snippet('nav_meta') ?>
									
				</div><!-- end column -->
				
			</div> <!-- end desktop_nav -->

	<!-- Mobile Navigation (layout.css)
	================================================== -->
			<div class="mobile_nav menu twelve columns">
					<a href="/"><img src="../../assets/images/logotype_small.png" alt="Neue-Prignitz logotype" ></a>
					
					<ul>
						<li><a href="#" class="menu-button">Navigation</a>
					<ul>
								    <?php foreach($pages->findByUID('about', 'contact', 'imprint') AS $p): ?>
								    <li <?php echo ($p->isOpen()) ? ' class="selected"' : '' ?>>
								      <a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
								
								      <?php if($p->hasChildren()): ?>
								      <ul class="mobile-sub">
								        <?php foreach($p->children()->visible() AS $child): ?>
								        <li <?php echo ($child->isActive()) ? ' class="subselected"' : '' ?>>
								          <a href="<?php echo $child->url() ?>"><?php echo $child->title() ?></a>
								        </li>
								        <?php endforeach ?>            
								      </ul>
								      <?php endif ?>
								    </li>
								    <?php endforeach ?>
									<li>
					 				<a href="#" class="big-link" data-reveal-id="newsletter">
						 				Newsletter
									</a>
									</li>	
								    
					</ul>
					</li>				
			</div><!-- end mobile_nav -->


		</div><!-- container -->
	</div><!-- band -->
