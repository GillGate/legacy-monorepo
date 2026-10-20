<?php get_header(); ?>
<section class="intro">
	<?php get_template_part('include/header'); ?>
	<div class="intro__content notFound">
		<div class="container intro__wrapper">
			<h1 class="intro__title notFound__title">
				404 <br>
				Page not found
			</h1>
			<div class="intro__footer notFound__footer">
				<p class="intro__footerText">
					It seems like the page you're looking for has been deleted or edited. We apologize for the inconvenience. <br>
					Please give it a try later, as we're constantly updating and improving our website.
				</p>
				<a href="/contact/" class="label label--hoverFilled intro__discuss">Discuss the project</a>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>