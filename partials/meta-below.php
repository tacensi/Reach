<?php 
// Hide meta if this is a sticky post
if (is_sticky() && ! is_singular() ) return; 

// Hide post meta if that setting is ticked
if ( reach_hide_post_meta() ) return; ?>

<div class="meta meta-below">
	<?php get_template_part( 'partials/meta', 'inside' ) ?>				
</div>