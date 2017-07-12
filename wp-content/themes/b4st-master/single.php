<?php get_header(); ?>

<div class="container">
  <div class="row">
    
    <div class=" col-md-8 offset-md-2 col-12">
      <div id="content" role="main">
        <?php get_template_part('loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
