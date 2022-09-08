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

//$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper" style="height:1000px; border:1px solid black">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<?php if( have_rows('content') ):?>
			
			<?php while( have_rows('content') ): the_row();?>

				<?php if (get_row_layout() == 'column_section'):
					
					$columns = get_sub_field('columns');

				?>	
					<?php foreach($columns as $column):?>
						
						<p style="color:#003E67; font-family:Arial; font-size: 65px; line-height:62px; letter-spacing:-3%; font-style:bold; margin-left:30px;">
							<?php echo $columns['title'];?>
						</p>
					<?php endforeach;?>


				<?php endif;?>

			<?php endwhile;?>

		<?php endif;?>

		<!-- <div class="row">
		<div class="col-6">
			
						<div class="row">
							<img src="url('http://localhost/wordpress/wp-content/uploads/2022/09/logo.png'); width:46px; height:177">
						</div>
						<div class="row">
							<p style="color:#003E67; font-family:Arial; font-size: 65px; line-height:62px; letter-spacing:-3%; font-style:bold; margin-left:30px;">
							php
							$title = get_field('header_title');
							echo $title;?>
							</p>
						</div>
						<div class="row">
							<p style="color:#00A4D6; font-family:Arial; font-size: 65px; line-height:62px; letter-spacing:-3%; font-style:Mixed; margin-left:30px;">
							<-- php
							$title2 = get_field('header_description2');
							echo $title2;?> -->
							<!-- </p> -->
						<!-- </div>
						<div class="row">
							<p style="color:#003E67; font-family:Arial; font-size: 18px; line-height:20px; letter-spacing:0px; font-style:Mixed; margin-left:30px;">
							<-- php
							$description = get_field('header_description');
							echo $description;?> -->
							<!-- </p> -->
						<!-- </div>
						<div class="row">
							<-- php
							$button = get_field('button1');
							echo $button;--> 
						<!-- </div>
					</div>
				
					<div class="col-6" style="background-image:url('http://localhost/wordpress/wp-content/uploads/2022/09/image.png'); background-position: center;background-repeat: no-repeat;background-size: cover; height:800px;width:1000;">
						
						<div class="row">
						</div>
					</div> --> 
			<!-- <php -->
							<!-- $image = get_field('image'); -->
							<!-- echo $image;> -->
			<!-- Do the left sidebar check -->
			<!-- <php get_template_part( 'global-templates/left-sidebar-check' ); ?> -->

			<!-- <main class="site-main" id="main"> -->

				<?php
				//while ( have_posts() ) {
					//the_post();
					//get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					//if ( comments_open() || get_comments_number() ) {
						comments_template();
					//}
				//}
				
				?>

					
			<!-- </main>#main -->

			<!-- Do the right sidebar check -->
			<!-- <php get_template_part( 'global-templates/right-sidebar-check' ); ?> -->

		<!-- </div>.row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
