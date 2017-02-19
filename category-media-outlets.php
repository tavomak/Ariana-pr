<?php get_template_part('includes/header'); ?>
<div id="preloader">...</div><!-- loading -->
<section class="container-fluid promo">
   <div class="promo-content">
       <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide7.jpg" alt="Media Outlets" class="img-responsive">
       <!--<div class="caption text-center">
           <h1>Take risks. Travel the world</h1>
       </div>-->
   </div>
</section>

<section class="recent container-fluid">
        <div class="container">
            <h4>This empowered young woman uses her voice and every possible media to and provide quality information and entertainment. She has been a TV and Radio host collaborator in different TV Channels such as <b>CNN,  Telemundo, Mega TV, NBC, Estrella TV</b> and others.  Her motivation to influence while entertaining others doesn’t stop here! </h4>
            <br>
            <br>
            <br>
        </div>

        <?php
        $destacados = new WP_Query(array(
            'category_name'=>'destacado',
            'showposts'=>4
        ));
        ?>
        <?php if ( $destacados->have_posts() ) : ?>
        <h1>Top Media</h1>
        <?php while ( $destacados->have_posts() ) : $destacados->the_post(); ?>

        <div class="col-sm-6 col-md-4 col-lg-3 article post">
            <div class="hovereffect">
               <img src="<?php the_post_thumbnail_url('medium_large'); ?>" class="">
                <a href="<?php the_permalink();?>" class="link">
                    <div class="overlay">
                        <h2><?php echo the_title();?></h2>
                        <a class="info" href="<?php the_permalink();?>">Go There!</a>
                    </div>
                </a>
            </div>
        </div>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

</section><!-- Recientes -->

<section class="container-fluid archive" id="content">
    <div class="row">
        <?php if ( have_posts() ) : ?>
        <h1 class="text-center">Media Outlets</h1>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-6 col-md-4 col-lg-3 article post">
            <div class="hovereffect">
               <img src="<?php the_post_thumbnail_url(); ?>" class="img">
                <a href="<?php the_permalink();?>" class="link">
                    <div class="overlay">
                        <h2><?php echo the_title();?></h2>
                        <a class="info" href="<?php the_permalink();?>">Go There!</a>
                    </div>
                </a>
            </div>
            <a href="<?php the_permalink();?>" class="link"><h4><strong><?php echo the_title();?></strong></h4></a>
            <p><?php echo the_excerpt(25);?></p>
        </div>
        <?php endwhile; ?>
    </div><!-- /.row -->
</section><!-- /.container -->
    <div class="wrapper-pag"  id="#nav-below">
    <?php if ( function_exists('a_pr_pagination') ) { a_pr_pagination(); } else if ( is_paged() ) { ?>
        <ul class="pagination">
            <li class="older" id="nav-below-first"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'a-pr')) ?></li>
            <li class="newer"><?php previous_posts_link(__('Next', 'a-pr') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
        </ul>
    <?php } ?>
    <?php else: ?>
        <h1 class="text-center">soon we'll be found</h1>
    <?php endif; ?>
    </div>

<?php get_template_part('includes/footer'); ?>
