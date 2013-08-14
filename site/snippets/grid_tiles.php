
<!--<div class="options">
      <ul id="filters">
        <li><a href="#" data-filter="*">show all</a></li>
        <li><a href="#" data-filter=".nature">nature</a></li>
        <li><a href="#" data-filter=".new">new</a></li>
        <li><a href="#" data-filter=":not(.nature)">not nature</a></li>
        <li><a href="#" data-filter=".nature:not(.new)">nature but not new</a></li>
      </ul>
</div>-->

      <div id="tiles">
        <!--
          These are our grid items. Notice how each one has classes assigned that
          are used for filtering. The classes match the "data-filter" properties above.
          -->
          	    
	    <?php 

		// find the open/active page on the first level
		$open  = $pages->findByUID('experiences');
		$items = ($open) ? $open->children()->visible() : false; 
		?>
		<?php if($items && $items->count()): ?>
		    <?php foreach($items AS $item): ?>
		    <div class="item nature self">
			    <a href="<?php echo $item->url() ?>"><img  src="<?php echo $item->images()->find('grid_image.png')->url() ?>" alt="<?php echo $item->images()->first()->title() ?>" href="<?php echo $item->url() ?>"/></a>
			    <p><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></p>
		    </div>
			
		    <?php endforeach ?>
		<?php endif ?>
		
			<div class="item ideas">
				<a href="#" class="big-link" data-reveal-id="vorschlag"><img  src="../../assets/images/vorschlag.png" alt="Machen Sie einen eigenen Vorschlag" href="#vorschlag"/></a>
			    <p><a href="#"  class="big-link" data-reveal-id="vorschlag">Eigenes Erlebnis vorschlagen</a></p>
			</div>
			
      </div>

  
