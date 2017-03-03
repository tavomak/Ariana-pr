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

<section class="container">
    <?php
    $at = new WP_Query(array(
        'category_name'=>'attract',
        'showposts'=>5
    ));
    ?>
    <?php if ( $at->have_posts() ) : ?>
    <h1 class="text-center">Attract what you want</h1>
    <br><br>
    <ul class="row all-cat-ol ">
    <?php while ( $at->have_posts() ) : $at->the_post(); ?>

        <li class="col-sm-6 col-md-4">
            <a href="<?php the_permalink();?>" class="hovereffect">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-r">
                <div class="overlay">
                    <div class="info">
                        <p><?php echo the_title();?></p>
                    </div>
                </div>
            </a>
        </li>
    <?php endwhile; else: ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    </ul>
    <br><br>
</section>
<section class="container">
    <?php
    $ft = new WP_Query(array(
        'category_name'=>'work-out',
        'showposts'=>5
    ));
    ?>
    <?php if ( $ft->have_posts() ) : ?>
    <h1 class="text-center">Food, sport and beauty</h1>
    <br><br>
    <ul class="row all-cat-ol ">
    <?php while ( $ft->have_posts() ) : $ft->the_post(); ?>

        <li class="col-sm-6 col-md-4">
            <a href="<?php the_permalink();?>" class="hovereffect">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-r">
                <div class="overlay">
                    <div class="info">
                        <p><?php echo the_title();?></p>
                    </div>
                </div>
            </a>
        </li>

    <?php endwhile; else: ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    </ul>
    <br><br>
</section>
<section class="container">
        <?php
        $wo = new WP_Query(array(
            'category_name'=>'style',
            'showposts'=>5
        ));
        ?>
        <?php if ( $wo->have_posts() ) : ?>
        <h1 class="text-center">Style with attiyude</h1>
        <br><br>
        <ul class="row all-cat-ol ">
        <?php while ( $wo->have_posts() ) : $wo->the_post(); ?>

        <li class="col-sm-6 col-md-4">
            <a href="<?php the_permalink();?>" class="hovereffect">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-r">
                <div class="overlay">
                    <div class="info">
                        <p><?php echo the_title();?></p>
                    </div>
                </div>
            </a>
        </li>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </ul>
    <br><br>
</section>
<section class="container">
    <?php
    $fe = new WP_Query(array(
        'category_name'=>'fomo-events',
        'showposts'=>5
    ));
    ?>
    <?php if ( $fe->have_posts() ) : ?>
    <h1 class="text-center">fomo-events</h1>
    <br><br>
    <ul class="row all-cat-ol ">
        <?php while ( $fe->have_posts() ) : $fe->the_post(); ?>

        <li class="col-sm-6 col-md-4">
            <a href="<?php the_permalink();?>" class="hovereffect">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-r">
                <div class="overlay">
                    <div class="info">
                        <p><?php echo the_title();?></p>
                    </div>
                </div>
            </a>
        </li>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </ul>
    <br><br>
</section>
<section class="container">
    <?php
    $st = new WP_Query(array(
        'category_name'=>'travel-the-word',
        'showposts'=>5
    ));
    ?>
    <?php if ( $st->have_posts() ) : ?>
    <h1 class="text-center">take a riskd. travel the world</h1>
    <br><br>
    <ul class="row all-cat-ol ">
        <?php while ( $st->have_posts() ) : $st->the_post(); ?>

        <li class="col-sm-6 col-md-4">
            <a href="<?php the_permalink();?>" class="hovereffect">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-r">
                <div class="overlay">
                    <div class="info">
                        <p><?php echo the_title();?></p>
                    </div>
                </div>
            </a>
        </li>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </ul>
    <br><br>
</section>
<?php get_template_part('includes/footer'); ?>
