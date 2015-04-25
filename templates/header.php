<?php use Roots\Sage\Nav; ?>

<div class="pure-container" data-effect="pure-effect-slideAlong"> 

<input type="checkbox" id="pure-toggle-left" class="pure-toggle" data-toggle="left"> 
<label class="pure-toggle-label" for="pure-toggle-left" data-toggle-label="left"> 
	<span class="pure-toggle-icon"></span> 
</label>

<div class="pure-drawer" data-position="left">
	<nav role="navigation">
	  <div class="container">
	    <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
	      endif;
	      ?>
	  </div>
	</nav>
</div>

<div class="pure-pusher-container"> <div class="pure-pusher">

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"></a>
    </div>
    
    <div class="call"><?php echo do_shortcode('[snippet slug="call" /]'); ?></div>
  </div>
</header>