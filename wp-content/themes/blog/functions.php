<?php

function blog_register_menus()
{
	$locations = [
		'primary' => __('Primary Navigation'),
		'footer' => __('Footer Navigation'),
	];

	register_nav_menus($locations);
}

function blog_register_styles()
{
	wp_enqueue_style('bootstrap-style', 
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
	wp_enqueue_script('fontawesome', 
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
	wp_enqueue_style('base-styles', get_theme_file_uri().'/style.css');
}

function blog_register_scripts()
{
	wp_enqueue_script('bootstrap-bundle', 
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', 
		[], '5.0.2', false);
	wp_enqueue_script('fontawesome', 
		'https://kit.fontawesome.com/f6b4a65528.js');
}

add_action('init', 'blog_register_menus');
add_action('wp_enqueue_scripts', 'blog_register_styles');
add_action('wp_enqueue_scripts', 'blog_register_scripts');

add_action('init_head', 'init_head');

function add_link_attrs($attrs)
{
	$attrs['class'] = "nav-link";
	return $attrs;
}

add_filter( 'nav_menu_link_attributes', 'add_link_attrs');

function remove_admin_login_header()
{
	remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

// Additional

function build_tree(array &$elements, $parent_id = 0)
{
    $branch = [];
    foreach ($elements as &$element)
    {
        if ($element->menu_item_parent == $parent_id)
        {
            $children = build_tree($elements, $element->ID);
            if ($children)
                $element->wpse_children = $children;

            $branch[$element->ID] = $element;
            unset($element);
        }
    }
    return $branch;
}

function wpse_nav_menu_to_tree($menu_id)
{
    $items = wp_get_nav_menu_items($menu_id);
    return  $items ? build_tree($items, 0) : null;
}

function dd($content)
{
	echo '<pre>';
	var_dump($content);
	echo '</pre>';
}









function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );