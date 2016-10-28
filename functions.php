<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
};

/*
 *Register Widget Area.
*/

function make_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main_sidebar',
    'before_widget' => '<div class="primary-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget_title">',
    'after_title' => '</h2>',
  ) );
}


add_action( 'init', 'register_my_menu', 'pagination_bar' );
add_action( 'widgets_init', 'make_widgets_init' );

?>
