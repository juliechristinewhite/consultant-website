<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_post_thumbnail( 'large','style=max-width:100%;height:275px;'); ?>

			<h2 class="entry-title">
		        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
		          <?php the_title(); ?>
		        </a>
		    </h2>

		    <div class="author-comments">
					<p>By: <a href=""><?php echo the_author_meta( 'display_name' ); ?></a></p>
					<p><?php comments_popup_link('Comment &raquo;', '<span class="numberOfComments">1</span>  Comment', '% Comments &raquo;'); ?></p>
			</div>

			<section class="entry-content">
				<?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
				<?php wp_link_pages( array(
		          'before' => '<div class="page-link"> Pages:',
		          'after' => '</div>'
		        )); ?>
			</section><!-- .entry-content -->

			<div class="social-share">
    			<p>Share: </p>
    			<ul>
    				<li><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    				<li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    				<li><a href="https://google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    			</ul>
    		</div>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
