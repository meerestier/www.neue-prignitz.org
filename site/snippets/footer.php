
	<div class="band">
		<div class="container container-twelve">
			<div class="footer four columns">
				<!-- Microformat -->
				<div class="vcard">
				<span class="fn org">www.neue-prignitz.org</span><br>
				<span class="adr"><?php echo kirbytext($site->client_address()) ?></span>
				</div> <!-- end div vcard -->
				
				<!-- end div column -->
 			</div>

			<div class="footer four columns">


				<!-- Footer
				================================================== -->
				  <ul class="nav_footer">
				    
					    <?php foreach($pages->findByUID('experiences', 'research-services') AS $p): ?>
					    <li <?php echo ($p->isOpen()) ? ' class="selected"' : '' ?>>
					      <?php echo html($p->title()) ?>
					
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
				  </ul>

			</div><!-- end div column -->
			
			<div class="footer four columns">
			
				<ul class="nav_footer">
							    <?php foreach($pages->findByUID('about', 'contact', 'imprint') AS $p): ?>
							    <li <?php echo ($p->isOpen()) ? ' class="selected"' : '' ?>>
							      <a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
							
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
								<li>
				 				<a href="#" class="big-link" data-reveal-id="newsletter">
					 				Newsletter
								</a>
								</li>	
							    
							    <!-- Language Switch -->
<!-- 								<li class="language_select"><a href="#" title="Language Switcher">Language</a>
									<ul>
									  <?php foreach(c::get('lang.available') as $lang): ?>
									  <li<?php if($lang == c::get('lang.current')) echo ' class="subselected"' ?>>
									    <a href="<?php echo $page->url($lang) ?>"><?php echo $lang ?></a>
									  </li>
									  <?php endforeach ?>
									</ul>
								</li>
				</ul>
 -->
			
			</div><!-- end div column -->
		</div><!-- container -->
	</div><!-- band -->

