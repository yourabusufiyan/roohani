<?php
/**
 * Template for displaying search forms in Roohani Theme
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>

<form method="get" class="searchform field" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" id="searchterm" name="s" id="s" placeholder="<?php esc_attr_x( 'what do you want ?', 'Search input placehodlder', 'roohani' ); ?>" />
    <button type="submit" id="search searchsubmit" class="button" value="<?php esc_attr_x( 'Search',' search button ', 'roohani' ); ?>" >
      <i class='fas fa-search'></i>
    </button>
</form>
