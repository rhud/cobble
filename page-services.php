<?php
/**
 * Template Name: Services
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<section class="content">
<div class="row">
<?php 
	$args = array( 'post_type' => 'service', 'order' => 'ASC' );
	$loop = new WP_Query( $args );
	$count = 0;
	while ( $loop->have_posts() ) : $loop->the_post();
		if($count == 3) {
		?>
  		</div>
		<div class="row">
			<?php
	  	}
	 	?>
	 	<div class="col-sm-4 service">
		<h2 class="title"><?=the_title(); ?></h2>
		<hr class="mini" />
		<div class="thumb"><?=get_the_post_thumbnail( $the_post, 'large' );  ?></div>
		<?=the_content(); ?>
		<p class="enquire"><a href="/contact">Enquire Now &#8594;</a></p>
		</div>
		<?php
	$count++;
	endwhile;
	?>
</section>