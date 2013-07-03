<div id="page">

  <div id="page-title-container">
	<div class="container">
	  <h1><?php the_title(); ?></h1>
	</div>
  </div>

  <div class="container">
	<div class="row">
	  <div class="span9">
	  	<p><?php get_template_part('templates/content', 'page'); ?></p>
	  </div>
	  <div class="span3 bar-on-the-side">
	  	<?php get_template_part('templates/page', 'sidebar'); ?>
	  </div>
	</div>
  </div>



</div>