<?php if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
<div class="container contact">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2"></div>
    </div>
</div>
<?php else: ?>
<?php get_template_part('header'); ?>
<div class="container contact">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2"></div>
    </div>
</div>
<?php get_template_part('footer'); ?>
<?php endif; ?>