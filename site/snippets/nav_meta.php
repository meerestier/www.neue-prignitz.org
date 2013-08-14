					<div class="menu meta">
						<ul>
							<!-- Meta Navigation (right)
							================================================== -->
						    

							    <li>
				 				<a href="#" class="big-link" data-reveal-id="info">
					 				Über diese Seite
								</a>
								</li>
<!-- 							   <?php foreach($pages->findByUID('about') AS $p): ?>
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
 -->
									<li>
					 				<a href="#" class="big-link" data-reveal-id="newsletter">
						 				Newsletter
									</a>
									</li>	

							    <!-- Language Switch -->
<!-- 								<li class="language_select"><a href="#" title="Language Switcher">Settings</a>
									<ul>
									  <?php foreach(c::get('lang.available') as $lang): ?>
									  <li<?php if($lang == c::get('lang.current')) echo ' class="subselected"' ?>>
									    <a href="<?php echo $page->url($lang) ?>"><?php echo $lang ?></a>
									  </li>
									  <?php endforeach ?>
									</ul>
								</li>
 -->						  </ul>
					</div><!-- end menu -->	
