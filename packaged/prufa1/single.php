<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part('template-parts/page-menu-black'); ?>
<?php get_template_part('template-parts/page-title-logo'); ?>
<?php get_template_part('template-parts/page-ticker-vertical'); ?>



<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">

	</article>


<?php endwhile;?>

<?php get_footer();
