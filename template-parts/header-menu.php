<?php
# Navigation menu
?>
<nav class="codrops-demos">
  <?php
  if (has_nav_menu('primary')){

    $options = array(
      'items_wrap'=> '%3$s',
      'walker' => new Nav_Effects_Walker(),
      'container'=>false,
      'menu_class' => '',
      'theme_location'=>'primary',
      'fallback_cb'=>false
    );

    wp_nav_menu( $options );

  } ?>
</nav>
