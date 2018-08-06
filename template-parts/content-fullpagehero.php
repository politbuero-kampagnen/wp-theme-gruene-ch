<?php
/**
 * The template used for displaying page content in fullpagehero.php
 *
 * @package Gruene Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> 
    style="background: url(h'<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0]; ?>') center fixed;
    background-size: cover;">
    <header class="entry-header">
		
		<?php gruene_the_featured_image(); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gruene' ),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'gruene' ), '<span class="edit-link button">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
