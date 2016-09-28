<?php get_template_part('includes/header'); ?>
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
                        <div class="item active"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/7.jpg" alt="..."  style="width: 100%; height: auto;">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/8.jpg" alt="..."  style="width: 100%; height: auto;">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item"> <img src="<?php bloginfo('template_directory'); ?>/asset/img/9.jpg" alt="..."  style="width: 100%; height: auto;">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </section><!-- Carousel estatico -->
<?php get_template_part('includes/slideshow'); ?>
            <section class="recent container-fluit">
               <div class="container">
                   <h2>Recent Post</h2>
                    <?php
                        $wp_query = new WP_Query(array('showposts'=>3));
                        while($wp_query->have_posts()):
                        $wp_query->the_post(); ?>
                            <ul class="">
                                <li>
                                    <a href="<?php the_permalink();?>">
                                        <h4><?php echo the_title();?></h4>
                                    </a>
                                </li>
                                <li>
                                    <p><?php// echo get_the_excerpt();?></p>
                               </li>
                                <li class="thu-content">
                                   <a href="<?php the_permalink();?>">
                                       <?php the_post_thumbnail(); ?>
                                        <div class="clip-mask"></div>
                                   </a>
                                </li>
                           </ul>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
               </div>
            </section><!-- Recientes -->
            <section class="container categories">
                <ul>
                    <?php
                    $args = array(
                        'exclude'  => array( 1 ),
                        'hide_empty' => FALSE,
                        'title_li' => '',
                    );
                    wp_list_categories($args);
                    ?>
                    <li><a href="">instagram</a></li>
                </ul>
            </section><!-- Categorias-->


            <section class="container-fluid social">
                <div class="socio">
                    <h2>Follow me</h2>
                    <ul class="container">
                        <li class="fl social-icon">
                           <a href="https://www.instagram.com/marianameneses/">
                                <img src="<?php bloginfo('template_directory'); ?>/asset/img/ins-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/ins-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/ins-logo.jpg '" alt="https://www.instagram.com/marianameneses/" class="icon">
                                <!--<p>instagram</p>-->
                            </a>
                        </li>
                        <li class="fl social-icon">
                            <a href="https://www.facebook.com/mm.estilo/">
                                <img src="<?php bloginfo('template_directory'); ?>/asset/img/fac-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/fac-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/fac-logo.jpg '" alt="https://www.facebook.com/mm.estilo/" class="icon">
                                <!--<p>facebook</p>-->
                            </a>
                        </li>
                        <li class="fl social-icon">
                            <a href="https://twitter.com/mm_electra">
                                <img src="<?php bloginfo('template_directory'); ?>/asset/img/twi-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/twi-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/twi-logo.jpg '" alt="https://twitter.com/mm_electra" class="icon">
                                <!--<p>twitter</p>-->
                            </a>
                        </li>
                    </ul>
                    <h3>subcribe (Member VIP)</h3>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
            </section><!-- Social -->
</div>
<?php get_template_part('includes/footer'); ?>
