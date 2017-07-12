<?php if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>
<section id="home-heading" class="d-flex">
	<div class="container home-page align-self-center">
		<div class="row">
			<div class="col-12 col-md-6 home-content">
				<h1><span>A</span><span>l</span><span>l</span><span>i</span><span>s</span><span>o</span><span>n</span> <span>Y</span><span>a</span><span>n</span><span>c</span><span>y</span></h1>
				<h5 class="grey-header text-uppercase">Full Stack Developer</h5>
				<a href="/contact" rel="contact" class="btn outline nav-btn">Contact Me</a>
			</div>
		</div>
	</div>
</section>
<?php else : ?>
<?php get_template_part('./header'); ?>
<section id="home-heading" class="d-flex">
	<div class="container home-page align-self-center">
		<div class="row">
			<div class="col-12 col-md-6 home-content">
				<h1><span>A</span><span>l</span><span>l</span><span>i</span><span>s</span><span>o</span><span>n</span> <span>Y</span><span>a</span><span>n</span><span>c</span><span>y</span></h1>
				<h5 class="grey-header text-uppercase">Full Stack Developer</h5>
				<a href="/contact" rel="contact" class="btn outline nav-btn">Contact Me</a>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('./footer'); ?>
<?php endif; ?>