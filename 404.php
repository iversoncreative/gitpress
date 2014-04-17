<?php
	get_header();
?>

<section class="wrapper-page" id="error-page">
	<div class="container">
		<?php if( function_exists( 'the_breadcrumbs' ) ) { the_breadcrumbs(); } ?>
		<div class="page-header text-center"><h1>404 Error : Page Not Found</h1></div>
		<main id="primary">
			<div class="page-content">
				<p class="lead text-center">Sorry, but the page you're looking for could not be found.</p>
			</div>
		</main>
	</div>
</section>

<?php
	get_footer();
?>