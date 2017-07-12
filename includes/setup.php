<?php

function ef_setup_theme(){
  register_nav_menu(
    'primary',
    __( 'Primary Menu', 'effects' )
  );
}

function fall_back_menu(){
    return;
}
