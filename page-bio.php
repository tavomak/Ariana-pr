<?php
/*
Template Name: Bio
*/
?>

<?php get_template_part('includes/header'); ?>
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

<?php get_template_part('includes/footer'); ?>
