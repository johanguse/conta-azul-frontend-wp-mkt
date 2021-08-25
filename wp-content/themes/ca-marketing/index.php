<?php
/**
 * Index file for the theme
 *
 * @package WordPress
 */

?>

<?php get_header(); ?>

<?php
if ( have_posts() ) {
	?>
	<section class="container py-8">
	<?php
	while ( have_posts() ) {
		the_post();
		?>
		<!-- page content -->
		<div>
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
			</div>
		</div>
		<!-- end page content -->
		<?php
	}
	?>
	</section>
	<?php
} else {
	?>
	<!-- page content -->
	<div class="container py-8">There is nothing to display here yet!</div>
	<!-- end page content -->
<?php } ?>

<?php
get_footer();
