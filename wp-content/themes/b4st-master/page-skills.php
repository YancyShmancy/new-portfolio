<?php if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
<div class="container skills">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <h1>My Skills</h1>
            <h3>&#8220;I have a very particular set of skills. Skills acquired over a long[sic] career. Skills that make me a nightmare for errors and bugs...&#8221;</h3>
            <p></p>
        </div>
    </div>
</div>
<?php else: ?>
<?php get_template_part('header'); ?>
<div class="container skills">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <h1>My Skills</h1>
            <h3>&#8220;I have a very particular set of skills. Skills acquired over a long[sic] career. Skills that make me a nightmare for errors and bugs...&#8221;</h3>
            <p></p>
        </div>
    </div>
</div>
<?php get_template_part('footer'); ?>
<?php endif; ?>
