<?php get_template_part('includes/header'); ?>

<section class="container-fluid promo"><!--Banner Con imagen principal-->
   <div class="promo-content">
       <img src="<?php bloginfo('template_directory'); ?>/asset/img/slide7.jpg" alt="Media Outlets" class="img-responsive">
   </div>
</section><!-- /Banner Con imagen principal-->

<section class="top-media-outlet-section container-fluid"><!--Contenido Introductorio de la seccion Media Outlest-->
        <div class="container top-media-outlet-container">
            <div class="row top-media-outlet-info">
               <div class="col-sm-12 top-media-outlet-txt">
                   <br>
                    <h4><strong class="ar-title">Ariana</strong> is an empowered young woman that uses her voice and every possible media to provide quality information and entertainment. She has been a TV and Radio host collaborator in different TV Channels such as <strong>CNN,  Telemundo, Mega TV, NBC, Estrella TV</strong> and others. She is also a fashion stylist to top celebrities, a renown designer, and creative TV producer. Her motivation to influence while entertaining others is limitless.</h4>
               </div>
               <div class="col-sm-12"></div>
               <ul class="col-sm-12 list-inline text-center">
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/venue.jpg" alt="Venue Magazine"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/hola.jpg" alt="Revista Hola"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/cnn.jpg" alt="CNN"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/nbc.jpg" alt="NBC"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/cisneros.jpg" alt="Cisneros media"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/nacional.jpg" alt="El nacional"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/americas.jpg" alt="Diario de las Americas"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/mega.jpg" alt="mega tv"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/telemundo.jpg" alt="Telemundo"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/rcn.jpg" alt="Rcn"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/estrella.jpg" alt="Estrella tv"></li>
                    <li class="col-xs-3 text-center"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/asset/img/univ.jpg" alt="Univisión"></li>
                </ul>
            </div>
        </div>

        <?php //Loop para mostrar articulos destacados bajo la subcategoria Destacado
        $destacados = new WP_Query(array(
            'category_name'=>'destacado',
            'showposts'=>4
        ));
        ?>
        <?php if ( $destacados->have_posts() ) : ?>
        <h1 class="text-center">Top Media</h1>
        <?php while ( $destacados->have_posts() ) : $destacados->the_post(); ?>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="hovereffect">
               <img src="<?php the_post_thumbnail_url('medium'); ?>" class="">
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
</section><!--/Contenido Introductorio de la seccion Media Outlest-->

<section class="container-fluid archive" id="content"><!-- Contenedor de los articulos -->
    <div class="row yi-content-selector">
        <?php if ( have_posts() ) : ?>
        <h1 class="text-center">Media Outlets</h1>
        <br><br>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-6 col-md-4 col-lg-3 article yi-item-selector">
            <div class="hovereffect">
               <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img">
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
</section><!-- /.container Contenedor de los articulos -->

<div class="wrapper-pag"  id="#nav-below"><!-- Paginacion -->
    <?php if ( function_exists('ar_pr_pagination') ) { ar_pr_pagination(); } else if ( is_paged() ) { ?>
        <ul class="pagination">
            <li class="older" id="nav-below-first"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'a-pr')) ?></li>
            <li class="newer"><?php previous_posts_link(__('Next', 'a-pr') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
        </ul>
    <?php } ?>
    <?php else: ?>
        <h1 class="text-center">soon we'll be found</h1>
    <?php endif; ?>
</div><!-- /paginacion-->

<?php get_template_part('includes/footer'); ?>
