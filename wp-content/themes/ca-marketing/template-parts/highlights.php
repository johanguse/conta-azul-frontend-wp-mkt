<?php
/**
 * Home page hero banner
 *
 * @package WordPress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


$args = array(
	'posts_per_page' => -1,
	'post_type'		=> 'ca_highlight',
	'sort_column' => 'menu_order name',
	'orderby'        => 'menu_order name',
	'order'          => 'ASC',
	'post_parent' => 0
);

$the_query = new WP_Query( $args );
if( $the_query->have_posts() ):
?>
<section>
	<div class="container main-title text-center py-5 mt-5">
		<h2 class="title-section-blue">
			Sua empresa precisa de controle financeiro?
			<br />
			Centralize tudo em um único sistema
		</h2>
	</div>
	<div class="container py-5 my-5">
		<div class="row">
		<?php
		while( $the_query->have_posts() ) : $the_query->the_post();
		$icon_url = get_field('highlight_icon');
		?>
			<div class="col-md-4 mb-5">
				<div class="highlight-card text-center">
					<div class="highlight-card__icon mb-2">
						<img class="highlight-card__icon_svg" src="<?php echo esc_url( $icon_url ); ?>" />
					</div>
					<div class="highlight-card__title title-card-blue mb-3">
						<?php echo the_field('highlight_title'); ?>
					</div>
					<div class="highlight-card__text text-blue-dark t-18">
						<?php echo the_field('highlight_desc'); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php endif; ?>
