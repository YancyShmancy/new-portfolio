<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h1 class="text-white"><?php the_title()?></h1>
            
            <p class="text-muted" style="margin-bottom: 30px;">
                <?php the_category(', ') ?>
            </p>
        </header>
        <section>
            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" style="margin-bottom: 30px;">
            <h3>My Role</h3>
            <p><?php the_field('project_role'); ?></p>
            <h3>About</h3>
            <p><?php the_field('project_description'); ?></p>
            <?php if (get_field('project_awards')) : ?>
                <h3>Awards/Nominations</h3>
                <p><?php the_field('project_awards'); ?></p>
            <?php endif; ?>
            <?php if (get_field('resources')) : ?>
                <h3>Project Resources</h3>
                <?php the_field('resources'); ?>
            <?php endif; ?>
            <?php wp_link_pages(); ?>
        </section>
    </article>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
<?php endif; ?>