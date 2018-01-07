<?php get_header(); ?>

<div class="container">
  <div class="row">
    
    <div class="col-md-10 offset-md-1 col-12">
      <div id="content" role="main">
        <?php get_template_part('loops/content', 'single-portfolio'); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>