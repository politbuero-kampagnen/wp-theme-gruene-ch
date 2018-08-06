<?php
/**
 * Template Name: Fullpage Hero Image
 *
 * This template displays a Full Page, i.e. 
 * - it displays no sidebar
 * - it does not display a title 
 * - and an eventual featured image is used as Full Sized Image background of the page
 *   (with CSS "background-size: cover;" - so that it always fills the background:
 *   That's called a Hero-Image.
 *
 * @package Gruene Theme
 */

get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <!-- .page-header omitted -->
		
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'template-parts/content', 'fullpagehero' ); ?>
			
			<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		
		<?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->

<!-- get_sidebar(); omitted -->
<?php get_footer(); ?>
