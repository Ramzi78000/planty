<?php
/**
 * activation thème
 */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function add_admin_link($items, $args)
{
    if (is_user_logged_in()) {
        $items =
            '<li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61">
        <a href="' . get_home_url() . '/31-2/" class="menu-link">Nous rencontrer</a>
    </li>
    <li class="nav-item menu-item menu-item-type-post_type menu-item-object-page ">
        <a class="nav-link" href=" ' . get_admin_url() . '">Admin</a>
    </li>
    <li id="menu-item-183" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-183">
            <a href="' . get_home_url() . '/commander/" class="menu-link">Commander</a>
    </li>';
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);