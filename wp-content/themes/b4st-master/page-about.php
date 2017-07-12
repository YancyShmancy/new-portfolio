<?php if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
<div class="container about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <h1>Hey!<br/>I'm Allison</h1>
                <h3>&#8220;It's not easy being this awesome&#8221;</h3>
                <p>I'm a web developer from Atlanta, Georgia. I'm a tech nerd, a comic book enthusiast, and and a serial TV series binge-watcher (pun intended).</p>
                <p>After a long career as an unpaid family internet expert, I decided it might be nice to start actually getting paid for my expertise. In 2016 I graduated from the <a href="https://creativecircus.edu">Creative Circus</a> two year web development program. Since then I have been working as a (paid) full stack developer for marketing agencies and dev firms.</p>
                <p>I'm fascinated by data, which translates into a passion for back end data architecture. I have a passion for learning, and always strive to elevate projects by incorporating new skills.</p>
                <h3>Interested?</h3>
                <a href="/contact" rel="contact" class="btn outline nav-btn">Contact Me</a>
                <a href="/skills" rel="skills" class="btn outline nav-btn">My Skills</a>
            </div>
        </div>
    </div>
</div>
<?php else : ?>
<?php get_template_part('header'); ?>
<div class="container about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <h1><span>Hey!</span><br/><span>I'm Allison</span></h1>
                <h3>&#8220;It's not easy being this awesome&#8221;</h3>
                <p>I'm a web developer from Atlanta, Georgia. I'm a tech nerd, a comic book enthusiast, and and a serial TV series binge-watcher (pun intended).</p>
                <p>After a long career as an unpaid family internet expert, I decided it might be nice to start actually getting paid for my expertise. In 2016 I graduated from the <a href="https://creativecircus.edu">Creative Circus</a> two year web development program. Since then I have been working as a (paid) full stack developer for marketing agencies and dev firms.</p>
                <p>I'm fascinated by data, which translates into a passion for back end data architecture. I have a passion for learning, and always strive to elevate projects by incorporating new skills.</p>
                
                <h3>Interested?</h3>
                <a href="/contact" rel="contact" class="btn outline nav-btn">Contact Me</a>
                <a href="/skills" rel="skills" class="btn outline nav-btn">My Skills</a>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('footer'); ?>
<?php endif; ?>