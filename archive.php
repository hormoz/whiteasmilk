<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="pagetitle">بایگانی برای دسته بندی '<?php echo single_cat_title(); ?>'</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">بایگانی روز <?php the_time('F jS، Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">بایگانی ماه <?php the_time('F، Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">بایگانی سال <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">نتایج جستجو</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">بایگانی نویسنده</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">بایگانی وبلاگ</h2>

		<?php } ?>


		<!--<div class="navigation">-->
			<!--<div class="alignleft"><?php posts_nav_link('','','&laquo; مطالب قبلی') ?></div>-->
			<!--<div class="alignright"><?php posts_nav_link('','مطالب بعدی &raquo;','') ?></div>-->
		<!--</div>-->

		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="پیوند ثابت برای <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l، F jS، Y') ?></small>
				
				<div class="entry">
					<?php the_content('ادامه مطلب را بخوانید &raquo;'); ?>
				</div>
		
				<p class="postmetadata">فرستاده شده با موضوع <?php the_category('، ') ?> <strong>|</strong> <?php edit_post_link('ویرایش','','<strong>|</strong>'); ?>  <?php comments_popup_link('بدون نظر &#187;', 'یک نظر &#187;', '% نظر &#187;'); ?></p> 
				
				<!--
				<?php trackback_rdf(); ?>
				-->
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; مطلب قبلی') ?></div>
			<div class="alignright"><?php posts_nav_link('','مطلب بعدی &raquo;','') ?></div>
		</div>
	
	<?php else : ?>

		<h2 class="center">پیدا نشد</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
		
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>