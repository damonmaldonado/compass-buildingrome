<?php
/**
 * A template part for displaying a chat entry within an archive.
 *
 * @package     CompassBuildingRome
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<article <?php hybrid_attr( 'post' ); ?>>

	<?php tha_entry_top(); ?>

	<header class="entry-header">

		<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

		<p class="entry-meta">
			<?php hybrid_post_format_link(); ?>
			<?php flagship_entry_author(); ?>
			<?php flagship_entry_published(); ?>
			<?php flagship_entry_comments_link(); ?>
			<?php edit_post_link(); ?>
		</p><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div <?php hybrid_attr( 'entry-summary' ); ?>>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php tha_entry_bottom(); ?>

</article><!-- .entry -->
