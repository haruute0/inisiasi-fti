<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inisiasi_FTI_UAJY_2019
 */

?>
<div class="tile is-parent">
<article class="entry-preview tile is-child box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta subtitle">
				<?php
				inisiasi_fti_posted_on();
				//inisiasi_fti_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php //inisiasi_fti_post_thumbnail(); ?>
	<div class="entry-content">
    <?php
			the_excerpt();
		?>
		<a href="<?php the_permalink(); ?>" class="read-more">Baca Selengkapnya &raquo;</a>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'inisiasi-dan-makrab-fti-2016' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //inisiasi_fti_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>	