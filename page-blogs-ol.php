<?php
/*
Template Name: Blogs Ordenados
*/
?>

<?php get_template_part('includes/header'); ?>

<div class="container-fluid promo">
    <div class="promo-content">
        <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide1.jpg" alt="" class="img-responsive">
    </div>
</div>

<section class="container-fluid">
   <div class="row all-post">
        <div class="col-sm-8 col-md-10">
            <ul class="row yi-content-selector">
            
            <?php
            if ( get_query_var('paged') ) {
                    $paged = get_query_var('paged');
                } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
                    $paged = get_query_var('page');
                } else {
                    $paged = 1;
                }
            // get all the categories from the database
            $cats = get_categories("exclude=array( 9,11 )");
            // loop through the categries
            foreach ($cats as $cat) {
                // setup the cateogory ID
                $cat_id= $cat->term_id;
                // Make a header for the cateogry
                // create a custom wordpress query
                $custom_query = new WP_Query(array(
                    'cat' => $cat_id,
                    'showposts' => 10,
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'orderby' => 'name',
                    'ignore_sticky_posts' => true
                ));
                // start the wordpress loop!
            ?>

            <?php if ( $custom_query->have_posts() ) : ?>
            <?php echo "<h2>".$cat->name."</h2>"; ?>
            <?php while( $custom_query->have_posts() ) : $custom_query->the_post();  ?>

                <li class="">
                    <?php // create our link now that the post is setup ?>
                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    <?php echo '<hr/>'; ?>
                </li>

            <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
            <?php } // done the foreach statement ?>
            
            </ul>
</section>

<div class="wrapper-pag"  id="#nav-below">
    <?php //Llamada a funcion de paginación
    if ( function_exists('ar_pr_pagination') ) {
      ar_pr_pagination( $custom_query );
    } ?>
</div>


<?php get_template_part('includes/footer'); ?>
