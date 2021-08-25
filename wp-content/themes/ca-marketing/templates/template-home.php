<?php
/* Template Name: Landing Page */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
  exit;
}

get_header();

?>
<?php get_template_part('template-parts/hero-banner'); ?>
<?php get_template_part('template-parts/highlights'); ?>

<?php
get_footer();
