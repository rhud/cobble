<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
  
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
		<div class="service col-sm-4 <?=$post->post_name; ?>">
			<a class="overlay" href="/services">
				<h2 class="title"><?=the_title(); ?></h2><br/>
				<div class="readmore">Read More</div>
			</a>
		</div>  
		<?php
	$count++;
	endwhile;
	?>
  	
    </div>
  </div>
  

