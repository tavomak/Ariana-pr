<?php get_template_part('includes/header'); ?>
<div id="preloader">...</div><!-- loading -->
<hr>
<?php if ( in_category( 'attract' ) ) : ?>
        <div class="attact articulo-title">
            <div class="caption">
               <h1>Attract what you want</h1>
            </div>
       </div>
<?php elseif ( in_category( 'work-out' ) ) : ?>
        <div class="eat articulo-title">
            <div class="caption">
               <h1>Eat but work out</h1>
            </div>
       </div>
<?php elseif ( in_category( 'fomo-events' ) ) : ?>
        <div class="fomo articulo-title">
            <div class="caption">
               <h1>Fomo-events</h1>
            </div>
       </div>
<?php elseif ( in_category( 'style' ) ) : ?>
        <div class="style articulo-title">
            <div class="caption">
               <h1>Style with attitude</h1>
            </div>
       </div>
<?php elseif ( in_category( 'travel-the-word' ) ) : ?>
        <div class="travel articulo-title">
            <div class="caption">
               <h1>Take risks. Travel the world</h1>
            </div>
       </div>
<?php else:?>
    <?php the_category(' / ') ?>
<?php endif;?>
<hr>
<div class="container articulo">
  <div class="row">

    <div class="col-xs-12 col-sm-9">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>

    <div class="hidden-xs col-sm-3" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
