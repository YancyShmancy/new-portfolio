<?php if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
<div class="container contact">
    <div class="row">
        <div class="col-12">
            <h1>Contact Me</h1>
        </div>
        <div class="col-12 col-lg-6">
            <p>Contact form under construction! Until then, contact me through E-mail or on LinkedIn!</p>
        </div>
        <div class="col-12 col-lg-6">
            <p><a class="purple" href="mailto:yancyshmancy@gmail.com"><i class="icon icon-envelop"></i> yancyshmancy@gmail.com</a></p>
            <p><a class="purple" href="mailto:yancyshmancy@gmail.com"><i class="icon icon-linkedin"></i>  https://linkedin.com/in/allison-yancy</a></p>
        </div>
    </div>
</div>
<?php else: ?>
<?php get_template_part('header'); ?>
<div class="container contact">
    <div class="row">
        <div class="col-12">
            <h1>Contact Me</h1>
        </div>
        <div class="col-12 col-lg-6">
            <p>Contact form under construction! Until then, contact me through E-mail or on LinkedIn!</p>
        </div>
        <div class="col-12 col-lg-6">
            <p><a class="purple" href="mailto:yancyshmancy@gmail.com"><i class="icon icon-envelop"></i> yancyshmancy@gmail.com</a></p>
            <p><a class="purple" href="mailto:yancyshmancy@gmail.com"><i class="icon icon-linkedin"></i>  https://linkedin.com/in/allison-yancy</a></p>
        
        </div>
    </div>
</div>
<?php get_template_part('footer'); ?>
<?php endif; ?>