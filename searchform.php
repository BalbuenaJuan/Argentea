

<form method="post">
	<input placeholder="Ej: JavaScript" type="text" name="s" id="search" class="input--search" value="<?php the_search_query(); ?>" />
	<input type="image" class="image--input" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/search.png" />
</form>
