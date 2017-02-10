<?php get_template_part('includes/header'); ?>
<div id="preloader">...</div><!-- loading -->
<div class="wrapp">
    <section class="static_carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!--<ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>-->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide1.jpg" alt="WELCOME TO MY BLOG">
                    <div class="carousel-caption invisible"><h1>WELCOME TO MY BLOG</h1></div>
                </div>
                <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide2.jpg" alt="DELICIOUS FOOD">
                    <div class="carousel-caption invisible"><h1>DELICIOUS FOOD</h1></div>
                </div>
                <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide3.jpg" alt="TOP EVENTS">
                    <div class="carousel-caption invisible"><h1>TOP EVENTS</h1></div>
                </div>
                <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide4.jpg" alt="TRAVEL TIPS">
                    <div class="carousel-caption invisible"><h1>TRAVEL TIPS</h1></div>
                </div>
                <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide5.jpg" alt="FASHION STYLING">
                    <div class="carousel-caption invisible"><h1>FASHION STYLING</h1></div>
                </div>
                <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide6.jpg" alt="STAY MOTIVATED">
                    <div class="carousel-caption invisible"><h1>STAY MOTIVATED</h1></div>
                </div>
                <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide7.jpg" alt="Media Outlets">
                    <div class="carousel-caption invisible"><h1>STAY MOTIVATED</h1></div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
    </section><!-- Carousel estatico -->
    <?php get_template_part('includes/slideshow'); ?>

      <section class="recent container-fluid">
       <div class="container sec-loop">
           <h1>MEDIA OUTLETS</h1>
        <?php
        $recents = new WP_Query(array(
            'category_name'=>'Media Outlets',
            'showposts'=>4
        ));
        ?>
        <?php if ( $recents->have_posts() ) : while ( $recents->have_posts() ) : $recents->the_post(); ?>

            <div class="col-sm-6 col-md-4 last">
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
           <p class="text-center">soon we'll be found</p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
       </div>
    </section><!-- Recientes -->

    <section class="container categories">
       <h1 class="text-center">SECTIONS</h1>
        <ul class="row">
            <?php
            $args = array(
                'hide_empty' => FALSE,
                'title_li' => '',
                'show_count' => 0,
                'pad_counts' => 0,
                'include' => '3,4,5,6,7,',
                'orderby' => 'name'
            );
            wp_list_categories($args);
            ?>
            <li><a href="https://www.instagram.com/arianapr/" target="_blank">instagram</a></li>
        </ul>
    </section><!-- Categorias-->

    <section class="recent container-fluid">
       <div class="container sec-loop">
           <h1>RECENT BLOG POST</h1>
        <?php
        $recents = new WP_Query(array('showposts'=>4,'cat'=>"3,4,5,6,7"));
        ?>
        <?php if ( $recents->have_posts() ) : while ( $recents->have_posts() ) : $recents->the_post(); ?>

            <div class="col-sm-6 col-md-4 last">
                <div class="hovereffect">
                   <img src="<?php the_post_thumbnail_url('medium_large'); ?>" class="img-r">
                    <a href="<?php the_permalink();?>" class="link">
                        <div class="overlay">
                            <h2><?php echo the_title();?></h2>
                            <a class="info" href="<?php the_permalink();?>">Go There!</a>
                        </div>
                    </a>
                </div>
            </div>
        <?php endwhile; else: ?>
           <p class="text-center">soon we'll be found</p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
       </div>
    </section>

    <section class="container-fluid social">
        <div class="socio">
            <h2>Follow me</h2>
            <ul class="container">
                <li class="fl social-icon">
                   <a href="https://www.instagram.com/arianapr/" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/asset/img/ins-logo.png" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/ins-logo-hover.png'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/ins-logo.png '" alt="https://www.instagram.com/arianapr/" class="icon">
                        <!--<p>instagram</p>-->
                    </a>
                </li>
                <li class="fl social-icon">
                    <a href="https://www.facebook.com/ariana.p.33/" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/asset/img/fac-logo.png" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/fac-logo-hover.png'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/fac-logo.png '" alt="https://www.facebook.com/ariana.p.33/" class="icon">
                        <!--<p>facebook</p>-->
                    </a>
                </li>
                <li class="fl social-icon">
                    <a href="https://twitter.com/arianaprmedia" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/asset/img/twi-logo.png" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/twi-logo-hover.png'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/twi-logo.png '" alt="https://twitter.com/arianaprmedia" class="icon">
                        <!--<p>twitter</p>-->
                    </a>
                </li>
            </ul>
            <h3>subcribe (Member VIP)</h3>
            <div class="input-group">
                <!--<input type="text" class="form-control" placeholder="">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>-->
                <?php
                $args = array(
                'prepend' => '',
                'showname' => true,
                'nametxt' => '',
                'nameholder' => 'Name',
                'emailtxt' => '',
                'emailholder' => 'Email',
                'showsubmit' => true,
                'submittxt' => 'Go!',
                'jsthanks' => false,
                'thankyou' => 'Thank you for subscribing to our mailing list'
                );
                echo smlsubform($args);
                ?>
            </div>
            <!-- /input-group -->
        </div>
    </section><!-- Social -->
</div>
<?php get_template_part('includes/footer'); ?>
