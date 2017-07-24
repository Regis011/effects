<?php
/**
 * Search Form Template
 *
 */
 $unique_id = esc_attr(uniqid('search-form-'));
?>

<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'effects'); ?></label>
  <div class="input-group">
    <input type="search" id="<?php echo $unique_id; ?>" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'effects'); ?> <?php bloginfo('name'); ?>" required>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><?php _e('Search', 'effects'); ?></button>
    </span>
  </div>
</form>
