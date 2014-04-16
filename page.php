<?php
	get_header();
	if (have_posts()) : while (have_posts()) : the_post();
?>

<section class="wrapper-page" id="post-<?php the_ID(); ?>">
	<div class="container">
		<?php if( function_exists( 'the_breadcrumbs' ) ) { the_breadcrumbs(); } ?>
		<div class="page-header"><h1><?php the_title(); ?></h1></div>
		<div class="row">
			<main class="col-sm-8" id="primary">
				<div class="page-content"><?php the_content(); ?></div>
			</main>
			<aside class="col-sm-4" id="secondary">
				<?php get_sidebar( 'Sidebar' ); ?>
			</aside>
		</div>
	</div>
</section>

<?php
	endwhile;
	else:
?>

	<section class="page-content">
		<div class="page-header"><h1>404 Error : Page Not Found</h1></div>
	</section>

<?php
	endif;
	get_footer();
?>