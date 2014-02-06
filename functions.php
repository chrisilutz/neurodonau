<?php/**
*functions.php child theme
**/
?>
<?php
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'leistungen',
'id' => 'sidebar-leistungen',
'description' => 'Widgets der Sidebar Leistungen',
'before_widget' => '<div class="sidebar-inner">
			<div class="widget-area">
				<aside id="meta-2" class="widget widget_meta">',
'after_widget' => '</aside>			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->',
'before_title' => '<div class="sidebartitle"><h1>',
'after_title' => '</h1></div>'
));}
?>
<?php
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'kontakt',
'id' => 'sidebar-kontakt',
'description' => 'Widgets der Sidebar Kontakt',
'before_widget' => '
		<div class="sidebar-inner">
			<div class="widget-area">
				<aside id="meta-2" class="widget widget_meta">',
'after_widget' => '</aside>			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	',
'before_title' => '<div class="sidebartitle"><h1>',
'after_title' => '</h1></div>'
));}
?>
<?php
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Sidebar',
'id' => 'sidebar-standard',
'description' => 'Widgets der Sidebar Standard',
'before_widget' => '<div class="sidebar-inner">
			<div class="widget-area">
				<aside id="meta-2" class="widget widget_meta">',
'after_widget' => '</aside>			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	',
'before_title' => '<div class="sidebartitle"><h1>',
'after_title' => '</h1></div>'
));}
?>
<?php
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'foto',
'id' => 'sidebar-foto',
'description' => 'Widgets der Sidebar Foto',
'before_widget' => '<div class="sidebar-inner">
			<div class="widget-area">
				<aside id="meta-2" class="widget widget_meta">',
'after_widget' => '</aside>			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	',
'before_title' => '<div class="sidebartitle"><h1>',
'after_title' => '</h1></div>'
));}
?>
<?php
if (function_exists('register_sidebar')) {
register_sidebar( array(
		'name'          => 'Footer-Menu',
		'id'            => 'sidebar-footer-menu',
		'description'   => __( 'Appears on posts and pages in the footer.', 'twentythirteen' ),
		'before_widget' => '<div class="footer-nav">',
		'after_widget'  => '<div class="copy">&copy; Dr. med. Dirk Brandst&auml;dter</div></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );};
?>
<?php
add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );
function add_menu_parent_class( $items ) {
	
	$parents = array();
	foreach ( $items as $item ) {
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}
	
	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			$item->classes[] = 'menu-parent-item'; 
		}
	}
	
	return $items;    
};
?>
