<?php
/**
 * Created by PhpStorm.
 *
 * Creator: bicho44
 * Date: 06
 */

get_header();

/*  Hooking here  */
//do_action('imgd_post_header');
?>
<?php
if ( have_posts() ) :

	?>
	<div class="contenido">
	<header>
		<h1 class="page-title "><?php single_post_title(); ?></h1>
	</header>
	<?php


	/* Start the Loop */
	while ( have_posts() ) : the_post();

		the_content();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		//get_template_part( 'template-parts/content', get_post_format() );

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
	</div>
<?php
get_footer();