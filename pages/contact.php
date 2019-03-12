<?php
/* Template name: contact */
?>
<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
  <div class="main page">
    <?php get_template_part('components/item','toggle-sidebar'); ?>
  	<div class="container">
  		<div class="row pt-md-5 p-0">
  			<div class="col-sm-12 text-center pt-5">
  				<h2 class="title"><?php echo get_the_title(); ?></h2>
  				<?php the_post(); ?>
  				<?php the_content(); ?>
  				<?php edit_post_link("Editar"); ?>
  			</div>
  		</div>
  	</div>
  </div>
<?php get_footer(); ?>
