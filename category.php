<?php get_template_part('includes/header'); ?>
<div id="preloader">...</div><!-- loading -->
<section class="container-fluid promo">
    <?php if ( in_category( 'attract' ) ) : ?>
       <div class="promo-content">
            <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide6.jpg" alt="" class="img-responsive">
            <div class="caption text-center">
               <h1>Attract what you want</h1>
            </div>
       </div>
    <?php elseif ( in_category( 'work-out' ) ) : ?>
        <div class="promo-content">
            <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide2.jpg" alt="" class="img-responsive">
            <div class="caption text-center">
                <h1>Eat but work out</h1>
            </div>
        </div>
    <?php elseif ( in_category( 'fomo-events' ) ) : ?>
       <div class="promo-content">
            <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide3.jpg" alt="" class="img-responsive">
            <div class="caption text-center">
               <h1>Fomo-events</h1>
           </div>
       </div>
    <?php elseif ( in_category( 'style' ) ) : ?>
       <div class="promo-content">
           <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide5.jpg" alt="" class="img-responsive">
           <div class="caption text-center">
               <h1>Style with attitude</h1>
           </div>
       </div>
    <?php elseif ( in_category( 'travel-the-word' ) ) : ?>
       <div class="promo-content">
           <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide4.jpg" alt="" class="img-responsive">
           <div class="caption text-center">
               <h1>Take risks. Travel the world</h1>
           </div>
       </div>
    <?php endif; ?>
</section>
<section class="container-fluid archive">
    <div class="row">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-4 article">
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
            <div class="wrapper-pag">
        <?php if ( function_exists('a_pr_pagination') ) { a_pr_pagination(); } else if ( is_paged() ) { ?>
                <ul class="pagination">
                    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'a-pr')) ?></li>
                    <li class="newer"><?php previous_posts_link(__('Next', 'a-pr') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
                </ul>
            </div>
        <?php } ?>
        <?php else: ?>
        <h1 class="text-center">soon we'll be found</h1>
        <?php endif; ?>
<?php get_template_part('includes/footer'); ?>
