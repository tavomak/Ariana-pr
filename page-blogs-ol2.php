<?php
/*
Template Name: Blogs Ordenados
*/
?>

<<?php get_template_part('includes/header'); ?>

<div class="container-fluid promo">
    <div class="promo-content">
        <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide1.jpg" alt="" class="img-responsive">
    </div>
</div>

       <?php //Generar paginacion
        if ( get_query_var('paged') ) {
            $paged = get_query_var('paged');
        } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'paged' => $paged,
            'post_status' => 'publish',
            'category__not_in' => array( 9,11 ),
            'orderby' => 'date',
            'ignore_sticky_posts' => true
        );

        $custom_query = new WP_Query( $args ); ?>

<section class="container-fluid">
    <div class="row all-post">

        <div class="col-sm-8 col-md-10">
            <ul class="row yi-content-selector">
                <?php if ( $custom_query->have_posts() ) : ?>
                <?php while( $custom_query->have_posts() ) : $custom_query->the_post();  ?>

                <li class="col-sm-6 col-md-4 col-lg-3 article yi-item-selector">
<!--                   <div <?php //post_class(); ?>></div>-->
                    <div class="hovereffect">
                        <?php
                        $categories = get_the_category();
                        $slugs = wp_list_pluck( $categories, 'slug' );
                        if ( ! empty( $categories ) ) {
                            //echo '<b class="postre-title" >'.  $categories[0]->name . '</b>';
                            echo '<b class="postre-title '. join( ' ', $slugs ) .'" >'.  $categories[0]->name . '</b>';
                            //echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name );
                        }
                        ?>
                       <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img">
                        <a href="<?php the_permalink();?>" class="link">
                            <div class="overlay">
                                <h2><?php echo the_title();?></h2>
                                <a class="info" href="<?php the_permalink();?>">Go There!</a>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="<?php the_permalink();?>" class="link"><h5><strong><?php echo the_title();?></strong></h5></a>
                        <?php echo the_excerpt(25);?>
                    </div>
                </li>

                <?php endwhile;?>
            </ul>

        </div>


        <div class="hidden-xs col-sm-4 col-md-2" id="sidebar-article" role="navigation">
            <aside class="sidebar-article-widget-area">
                <?php dynamic_sidebar('article-widget-area'); ?>
            </aside>
        </div>

    </div><!-- /.row -->
    <div class="wrapper-pag"  id="#nav-below">
            <?php //Llamada a funcion de paginación
            if ( function_exists('ar_pr_pagination') ) {
              ar_pr_pagination( $custom_query );
            } ?>
            <?php else: ?>
                  <h2>No encontramos lo que buscas</h2>
            <?php endif; ?>
    </div>
</section><!-- /.container -->
<?php get_template_part('includes/footer'); ?>
