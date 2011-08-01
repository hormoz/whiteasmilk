<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="پیوند ثابت برای <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS، Y') ?> <!-- by <?php the_author() ?> --></small>
				
				<div class="entry">
					<?php the_content('ادامه مطلب را بخوانید &raquo;'); ?>
				</div>
		
				<p class="postmetadata">فرستاده شده با موضوع <?php the_category('، ') ?> <strong>|</strong> <!--<?php edit_post_link('ویرایش','','<strong>|</strong>'); ?>-->  <?php comments_popup_link('بدون نظر &#187;', 'یک نظر &#187;', '% نظر &#187;'); ?></p> 

                <!--
				<?php trackback_rdf(); ?>
				-->
			</div>
	
		<?php endwhile; ?>
		
	<?php else : ?>

		<h2 class="center">پیدا نشد</h2>
		<p class="center"><?php _e("متاسفیم! چیزی را که دنبالش بودید پیدا نکردم. می توانید از جستجو کمک بگیرید."); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>