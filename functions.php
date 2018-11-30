<?php
/**
 * Include the BoldGrid Theme Framework
 *
 * @package Prime
 */

locate_template( '/inc/boldgrid-theme-framework-config/config.php', true, true );

require_once get_template_directory() . '/inc/class-boldgrid-crio-welcome.php';
$welcome = new BoldGrid_Crio_Welcome();
$welcome->add_hooks();

require_once get_template_directory() . '/inc/boldgrid-theme-framework/boldgrid-theme-framework.php';