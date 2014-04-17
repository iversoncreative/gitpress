<?php
	get_header();
	if (have_posts()):
?>

<section class="wrapper-page" id="posts">
	<div class="container">
		<?php if( function_exists( 'the_breadcrumbs' ) ) { the_breadcrumbs(); } ?>
		<?php if ( is_front_page() ) { ?>
			<div class="page-header text-center"><h1><?php bloginfo('description'); ?></h1></div>
		<?php } else { ?>
			<div class="page-header"><h1><?php single_cat_title(); ?></h1></div>
		<?php } ?>
		<div class="row">
			<main class="col-sm-8" id="primary">
				<?php while (have_posts()) : the_post(); ?>
				<div class="wrapper-post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<p class="text-muted"><small><?php the_time('F j, Y'); ?> by <?php the_author(); ?></small></p>
					<?php if ( has_post_thumbnail() ) { ?><div class="thumbnail"><?php the_post_thumbnail('large-thumbnail'); ?></div><?php } ?>
					<div class="post-content"><?php the_content(); ?></div>
					<p class="text-muted"><small class="post-meta">Category: <?php the_category(', '); ?><?php the_tags(__(' | Tags: '), ', '); ?> | <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?><?php edit_post_link(__('Edit'), ' | '); ?></small></p>
					<hr />
				</div>
				<?php endwhile; ?>
				<?php if( function_exists( 'the_pagination' ) ) { the_pagination(); } ?>
			</main>
			<aside class="col-sm-4" id="secondary">
				<?php get_sidebar( 'Sidebar' ); ?>
			</aside>
		</div>
	</div>
</section>

<?php else: ?>

<section class="wrapper-page" id="posts">
	<div class="container">
		<p>Sorry, no posts matched your criteria.</p>
	</div>
</section>

<?php
	endif;
	get_footer();
?>