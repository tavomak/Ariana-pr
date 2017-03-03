<?php

function a_pr_widgets_init() {

  	/*
    Sidebar regular (un widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'a-pr' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'Sidebar widget Articulos', 'a-pr' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

  	/*
    Sidebar solo para la pagina de todos los blogs (three widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar All Post', 'a-pr' ),
        'id' => 'article-widget-area',
        'description' => __( 'Sidebar widget All post', 'a-pr' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

}
add_action( 'widgets_init', 'a_pr_widgets_init' );
