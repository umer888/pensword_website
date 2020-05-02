<?php
/**
 * Template for displaying search forms
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) )  ?>">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'g5plus-auteur' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
	<button type="submit" class="search-submit"><i class="fal fa-search"></i></button>
</form>
