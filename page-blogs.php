<?php
/*
Template Name: Blogs
*/
?>

<?php get_template_part('includes/header'); ?>

<div class="container-fluid promo">
    <div class="promo-content">
        <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide1.jpg" alt="" class="img-responsive">
    </div>
</div>



       <?php
        if ( get_query_var('paged') ) {
            $paged = get_query_var('paged');
        } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 8,
            'paged' => $paged,
            'post_status' => 'publish',
            'category__not_in' => array( 9,11 ),
            'ignore_sticky_posts' => true
        );

        $custom_query = new WP_Query( $args ); ?>

<section class="container-fluid">
    <div class="row all-post">

        <?php if ( $custom_query->have_posts() ) : ?>
        <?php while( $custom_query->have_posts() ) : $custom_query->the_post();  ?>

        <div class="col-sm-6 col-md-4 col-lg-3 article post postre">
            <div <?php post_class('hovereffect'); ?> >
                <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<p class="text-center postre-title" >'.  $categories[0]->name . '</p>';
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
                <p><?php echo the_excerpt(25);?></p>
            </div>
        </div>

        <?php endwhile;?>

    </div><!-- /.row -->
</section><!-- /.container -->

<div class="wrapper-pag"  id="#nav-below">
        <?php //Llamada a funcion de paginación
        if ( function_exists('ar_pr_pagination') ) {
          ar_pr_pagination( $custom_query );
        } ?>
        <?php else: ?>
              <h2>No encontramos lo que buscas</h2>
        <?php endif; ?>
</div>



<?php get_template_part('includes/footer'); ?>
