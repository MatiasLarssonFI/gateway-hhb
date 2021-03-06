<?php
/**
 * The template used for displaying page content in single.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php gateway_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gateway' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer clearfix">

		<span class="left">
			<?php 
				if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
					<a href="<?php comments_link(); ?>"><i class="fa fa-comment"></i></a>
			<?php } ?>
			<a href="<?php echo esc_url( get_permalink() ) ?>"><i class="fa fa-link"></i></a>
		</span>

		<span class="right"><?php gateway_entry_footer(); ?></span>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->