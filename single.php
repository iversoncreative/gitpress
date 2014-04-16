<?php
	get_header();
	if (have_posts()) : while (have_posts()) : the_post();
?>

<section class="wrapper-page" id="post-<?php the_ID(); ?>">
	<div class="container">
		<?php if( function_exists( 'the_breadcrumbs' ) ) { the_breadcrumbs(); } ?>
		<div class="page-header"><h1><?php the_category(' '); ?></h1></div>
		<div class="row">
			<main class="col-sm-8" id="primary">
				<h2 class="h1"><?php the_title(); ?></h2>
				<?php if ( has_post_thumbnail() ) { ?><div class="thumbnail"><?php the_post_thumbnail('full-size'); ?></div><?php } ?>
				<p class="text-muted"><small><?php the_time('F j, Y'); ?> by <?php the_author(); ?></small></p>
				<div class="page-content"><?php the_content(); ?></div>
				<p class="text-muted"><small class="post-meta">Category: <?php the_category(', '); ?><?php the_tags(__(' | Tags: '), ', '); ?> | <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?><?php edit_post_link(__('Edit'), ' | '); ?></small></p>
				<?php comments_template(); ?>
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