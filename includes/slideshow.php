<?php
$wp_query = new WP_Query(array('post_type' => array( 'frases' ),'posts_per_page'=>25));
//query_posts($query_string .'&cat=-7,-8,-185,-186');//Local 185,186
$query_count = $wp_query->post_count;
//wp_list_categories();
?>
<section class="container frases-slide">

    <div id="carousel-2" data-ride="carousel" class="carousel slide">

        <div class="carousel-inner">
            <?php
            $i = 0;
            $make_active = false;
            $colors = array('#e9e8bd', '#bcd2e9', '#c6e8b9', '#ddc8ed');

            while($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="item <?= ( $make_active = ( $i || $make_active ) ) ? '' : 'active';?>">
                    <div class="text-center">
                        <h2>
                            <?php echo the_content();?>
                        </h2>
                    </div>
                </div>

            <?php $i = (++$i > count($colors) - 1 ) ? 0 : $i; ?><!-- MUY IMPORTANTE-->

            <?php endwhile; ?>

        </div><!-- carousel-inner-->

        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
            <?php for ( $i = 0; $i < $query_count; $i++ ) : ?>
                <li data-target="#carousel-2" data-slide-to="<?= $i ?>" <?=($i == 0 ) ? 'class="active"' : '';?> ></li>
            <?php endfor; ?>
        </ol>-->

        <a class="left carousel-control" href="#carousel-2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

    </div>

</section>
