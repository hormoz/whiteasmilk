<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<h2>بایگانی بر اساس ماه:</h2>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h2>بایگانی براساس موضوع:</h2>
  <ul>
     <?php wp_list_cats(); ?>
  </ul>

</div>	

<?php get_footer(); ?>
