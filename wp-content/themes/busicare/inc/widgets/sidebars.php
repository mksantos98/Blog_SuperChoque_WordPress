<?php

add_action('widgets_init', 'busicare_widgets_init');

function busicare_widgets_init() {

    /* sidebar */

    register_sidebar(array(
        'name' => esc_html__('Sidebar widget area', 'busicare'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Sidebar widget area', 'busicare'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 1', 'busicare'),
        'id' => 'footer-sidebar-1',
        'description' => esc_html__('Footer widget area 1', 'busicare'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 2', 'busicare'),
        'id' => 'footer-sidebar-2',
        'description' => esc_html__('Footer widget area 2', 'busicare'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 3', 'busicare'),
        'id' => 'footer-sidebar-3',
        'description' => esc_html__('Footer widget area 3', 'busicare'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 4', 'busicare'),
        'id' => 'footer-sidebar-4',
        'description' => esc_html__('Footer widget 4', 'busicare'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Footer Bar
    register_sidebar( array(
        'name' => esc_html__( 'Footer Bar 1', 'busicare' ),
        'id' => 'footer-bar-1',
        'description' => esc_html__( 'Footer Bar 1', 'busicare' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    register_sidebar(array(
        'name' => esc_html__('WooCommerce sidebar widget area', 'busicare'),
        'id' => 'woocommerce',
        'description' => esc_html__('WooCommerce sidebar widget area', 'busicare'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
