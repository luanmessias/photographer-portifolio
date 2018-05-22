<?php 
//Habilitando imagens destacadas
add_theme_support('post-thumbnails');
add_image_size( 'thumb-custom', 500, 350, array( 'center', 'top' ) );

//Activate Nav Menu Options
function sunset_register_nav_menu() {
	register_nav_menu( 'primary', 'Menu Topo' );
}
add_action( 'after_setup_theme', 'sunset_register_nav_menu' );

//Desabilita a barra de feramentas do wordpress
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  show_admin_bar(false);
}

?>