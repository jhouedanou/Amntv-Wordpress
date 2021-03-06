<?php get_header(); ?>
<div id="indexwrapper" class="ym-wrapper">
	<div id="indexinner" class="ym-wbox">
		<div id="contenu" class="ym-grid linearize-level-1">
			<div id="left" class="ym-g66 ym-gl">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
								<h1 class="entry-title"><?php the_title(); ?></h1>
								<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
							<div class="entry-content">
								<?php the_content(); ?>
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
								<?php the_tags( 'Tags: ', ', ', ''); ?>
							</div>
							<?php edit_post_link('Edit this entry','','.'); ?>
						</article>
					<?php comments_template(); ?>
					<?php endwhile; endif; ?>
			</div>
			<div id="sid" class="ym-g33 ym-gr">
				<?php get_sidebar(); ?>
			</div><!--g33-->
		</div><!--contenu-->
	</div><!--indexinner-->
</div><!--indewrapper-->
<?php get_footer(); ?>
