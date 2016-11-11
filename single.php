<?php get_template_part('includes/header'); ?>
<div id="preloader">...</div><!-- loading -->
<hr>
<div class="articulo-title">
   <div class="caption">
        <h1>
            <?php the_category(' / ') ?>
        </h1>
   </div>
</div>
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
