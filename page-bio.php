<?php
/*
Template Name: Bio
*/
?>

<?php get_template_part('includes/header'); ?>
<div id="preloader">...</div><!-- loading -->
<div class="container-fluid promo-bio">
    <div class="promo-bio-content">
        <img src="<?php bloginfo('template_directory'); ?>/asset/img/wandre.jpg" alt="" class="img-responsive">
        <!--<div class="caption text-center">
           <h1>Attract what you want</h1>
        </div>-->
    </div>
</div>
<div class="bio-content">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="container-fluid gradient-red">
       <div class="container">
           <h1><?php echo the_title();?></h1>
       </div>
    </div>
    <div class="container">
       <p><?php the_content()?></p>
    </div>
</div>


<?php endwhile; else: ?>

<p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
<?php endif; ?>

<!--<div class="bio-gallery container">
    <div class="grid">
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/001.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/002.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/003.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/004.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/005.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/006.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/007.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/008.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/009.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/010.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/011.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/012.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/013.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/014.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/015.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/016.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/017.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/018.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/019.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/020.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/021.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/022.jpg" alt="" class="img-responsive"></div>
        <div class="grid-item"><img src="<?php bloginfo('template_directory'); ?>/asset/img/023.jpg" alt="" class="img-responsive"></div>
    </div>
</div>-->

<?php get_template_part('includes/footer'); ?>
