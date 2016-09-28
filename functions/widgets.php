<?php

function a_pr_widgets_init() {

  	/*
    Sidebar (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'a-pr' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'a-pr' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

  	/*
    Footer (three widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Footer', 'a-pr' ),
        'id' => 'footer-widget-area',
        'description' => __( 'The footer widget area', 'a-pr' ),
        'before_widget' => '<div class="%1$s %2$s col-sm-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

}
add_action( 'widgets_init', 'a_pr_widgets_init' );
