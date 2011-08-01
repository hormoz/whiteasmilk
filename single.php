<?php get_header(); ?>

		<?php get_sidebar(); ?>

	<div id="content" class="narrowcolumn" style="margin:0px; ">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="پیوند ثابت برای <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<small><?php the_time('F jS، Y') ?> <!-- بوسیله <?php the_author() ?> --></small>
	
			<div class="entry">
				<?php the_content('<p class="serif">ادامه مطلب را بخوانید &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>صفحات:</strong> ', '</p>', 'number'); ?>
	
				<p class="postmetadata alt">
					<small>
						این مطلب
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?> 
						در تاریخ <?php the_time('l، F jS، Y') ?> در زمان <?php the_time() ?>
						با موضوع <?php the_category('، ') ?> فرستاده شده است.
						 
						<?php  edit_post_link('ویرایش مطالب.','',''); ?>
						
					</small>
				</p>
	
			</div>
		</div>
		
	<?php comments_template(); ?>
	
	<?php endwhile; else: ?>
	
		<p><?php _e('متاسفانه مطلب مورد نظر شما پیدا نشد.'); ?></p>
	
<?php endif; ?>

	</div>

<?php get_footer(); ?>