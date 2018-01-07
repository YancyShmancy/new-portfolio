<?php if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
<div class="container work">
    <div class="row">
        
            <?php 
            $args = array(
                "post_type" => "portfolio",
                "posts_per_page" => 99999,
            );
            $query = new WP_Query($args);
            
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="col-12 col-lg-6 portfolio-item">
                    <div class="item_bg" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center; background-size: cover;"></div>
                    <div class="inner">
                        <div class="item_text col-md-8 offset-md-2">
                            <h1 align="center" class="item_title"><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <?php if (get_field('student_work')) : ?>
                        <span class="student-title">STUDENT WORK</span>
                    <?php endif; ?>
                </a>
            <?php endwhile; endif; ?>
        
    </div>
</div>
<?php else : ?>
<?php get_template_part('header'); ?>
<div class="container work">
    <div class="row">
        
        <?php 
        $args = array(
            "post_type" => "portfolio",
            "posts_per_page" => 99999,
        );
        $query = new WP_Query($args);
        
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>
            <a href="<?php the_permalink(); ?>" class="col-12 col-lg-6 portfolio-item" style="padding-left: 0;">
                <div class="item_bg" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center; background-size: cover;"></div>
                <div class="inner">
                    <div class="item_text col-md-8 offset-md-2">
                        <h1 align="center" class="item_title"><?php the_title(); ?></h1>
                    </div>
                </div>
                <?php if (get_field('student_work')) : ?>
                    <span class="student-title">STUDENT WORK</span>
                <?php endif; ?>
            </a>
        <?php endwhile; endif; ?>
        
    </div>
</div>
<?php get_template_part('footer'); ?>
<?php endif; ?>

