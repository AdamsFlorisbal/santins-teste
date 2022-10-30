<?php
function origamid_scripts()
{
  wp_register_script('script', get_template_directory_uri() . '/assets/js/modal.js', [], false, true);
  wp_register_script('script', get_template_directory_uri() . '/assets/js/menu_hamburguer.js', [], false, true);
  wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'origamid_scripts');
