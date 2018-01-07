<?php if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
<div class="container skills">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1>My Skills</h1>
            <p>
                <?php the_field('page_content'); ?>
            </p>
        </div>
        <div class="col-lg-6">
            <h4 data-for="html">HTML5 <span class="pull-right">0%</span></h4>
            <progress id="html" data-end="100" value="0" max="100"></progress>
            <h4 data-for="css">CSS3 <span class="pull-right">0%</span></h4>
            <progress id="css" data-end="100" value="0" max="100"></progress>
            <h4 data-for="php">PHP <span class="pull-right">0%</span></h4>
            <progress id="php" data-end="80" value="0" max="100"></progress>
            <h4 data-for="js">Javascript <span class="pull-right">0%</span></h4>
            <progress id="js" data-end="85" value="0" max="100"></progress>
        </div>
    </div>
</div>
<div class="skills-container">
     <div class="container d-flex flex-row flex-wrap">
         <?php 
            if (have_rows('skills')) : while (have_rows('skills')) : the_row(); ?>
            <div class="col-md-2 col-4 d-flex align-items-center single-skill">
                <div class="inner">
                    <img src="<?php the_sub_field('skill_image'); ?>" alt="" class="img-fluid">
                </div>
            </div>
            <?php endwhile; endif; ?>
     </div>
</div>
<?php else: ?>
<?php get_template_part('header'); ?>
<div class="container skills">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1>My Skills</h1>
            <p>
                <?php the_field('page_content'); ?>
            </p>
        </div>
        <div class="col-lg-6">
            <h4 data-for="html">HTML5 <span class="pull-right">0%</span></h4>
            <progress id="html" data-end="100" value="0" max="100"></progress>
            <h4 data-for="css">CSS3 <span class="pull-right">0%</span></h4>
            <progress id="css" data-end="100" value="0" max="100"></progress>
            <h4 data-for="php">PHP <span class="pull-right">0%</span></h4>
            <progress id="php" data-end="80" value="0" max="100"></progress>
            <h4 data-for="js">Javascript <span class="pull-right">0%</span></h4>
            <progress id="js" data-end="85" value="0" max="100"></progress>
        </div>
    </div>
</div>
<div class="skills-container">
     <div class="container d-flex flex-row flex-wrap">
         <?php 
            if (have_rows('skills')) : while (have_rows('skills')) : the_row(); ?>
            <div class="col-md-2 col-4 d-flex align-items-center single-skill">
                <div class="inner">
                    <img src="<?php the_sub_field('skill_image'); ?>" alt="" class="img-fluid">
                </div>
            </div>
            <?php endwhile; endif; ?>
     </div>
</div>
<?php get_template_part('footer'); ?>
<?php endif; ?>
