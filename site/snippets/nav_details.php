<!-- Seitennavigation auf Detailseite templates/default/
	================================================== -->

	<div id="nav_details" class="band">
			
			<div class="badge"><a href="/"><img src="../../assets/images/logotype_org.png" alt="Neue-Prignitz logotype" ></a></div>
			
			<ul class="paginate">			
			<? if($page->hasNextVisible()): ?>
				<li><a href="<?= $page->nextVisible()->url() ?>" class="next">Next</a></li>
			<? endif ?>

			<? if($page->hasPrevVisible()): ?>
				<li><a href="<?= $page->prevVisible()->url() ?>" class="previous">Previous</a></li>				
			<? endif ?>
			
			<!-- Hier kommt mal die Merkliste				
				<li><a href="#" class="star">Merkliste</a></li>-->
			</ul>
			
	</div><!-- band -->
