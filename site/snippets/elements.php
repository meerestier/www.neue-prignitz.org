	<!-- Vorschlag Modal
	================================================== -->

		<div id="vorschlag" class="reveal-modal medium clean">
			
			<!-- BEGIN Podio web form -->
			<script src="http://podio.com/webforms/1063011/49304.js"></script>
			<script type="text/javascript">
			  _podioWebForm.render("49304")
			</script>
			  <div class="podio-webform-container"></div>
			<!-- END Podio web form -->
		
		</div>

	<!-- Newsletter Modal
	================================================== -->

		<div id="newsletter" class="reveal-modal medium">
			<h3>Newsletter Anmeldung</h3>
			<p>Hier kannst Du dich für unseren Newsletter anmelden, der Dich regelmäßig mit Infos rund um Erlebnisse auf dem Land versorgt... Wir versenden nicht mehr 1 Mail pro Monat. </p>
				<form action="http://campaigns.systemic.de/t/r/s/yukjtui/" method="post" id="subForm">
				<div>
				<label for="name">Name:</label><br /><input type="text" name="cm-name" id="name" /><br />
				<label for="yukjtui-yukjtui">Email:</label><br /><input type="text" name="cm-yukjtui-yukjtui" id="yukjtui-yukjtui" /><br />
				<label for="Language">Language:</label><br /><select name="cm-fo-eqtid">
				<option value="3150381">Deutsch</option>
				<option value="3150382">English</option>
				</select><br />
				
				<input type="submit" value="Subscribe" />
				</div>
				</form>		
			</div>

	<!-- Info Modal
	================================================== -->


		<div id="info" class="reveal-modal clean">

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
				
			<?php endif ?>			
			</div><!-- slidewrap2 -->

		</div>

	<!-- Settings Modal
	================================================== -->
		<div id="settings" class="reveal-modal large">
		
			<ul class="nav_footer">
				    
				    <!-- Language Switch -->
					<li class="language_select"><a href="#" title="Language Switcher">Language</a>
						<ul>
						  <?php foreach(c::get('lang.available') as $lang): ?>
						  <li<?php if($lang == c::get('lang.current')) echo ' class="subselected"' ?>>
						    <a href="<?php echo $page->url($lang) ?>"><?php echo $lang ?></a>
						  </li>
						  <?php endforeach ?>
						</ul>
					</li>
						
			</ul>

		</div>
