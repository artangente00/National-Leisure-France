<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper" style="height:1000px; border:1px solid black">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<!-- <php get_template_part( 'global-templates/left-sidebar-check' ); ?> -->

			<main class="site-main" id="main">

				<?php
				//while ( have_posts() ) {
					//the_post();
					//get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					//if ( comments_open() || get_comments_number() ) {
						comments_template();
					//}
				//}
				$logo = get_field('header_logo');
				echo $logo;
				?>

				<div class="row">
				<h1>
				<?php
				$title = get_field('header_title');
				echo $title;?>
				</h1>
				</div>

				<div class="row">

				<?php
				$description = get_field('header_description');
				echo $description;?>
				
				</div>
				
				<div class="row">

				<?php
				$button = get_field('button1');
				echo $button;?>
				
				</div>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<!-- <php get_template_part( 'global-templates/right-sidebar-check' ); ?> -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
