<?php get_header(); ?>


<div class="wrapp open">
	<a class="bt-aside">
		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
	</a>
	<?php include "include/aside.php" ?>
	
		<?php if(is_page('fotos')): ?>
			<?php include "include/fotos.php" ?>
		<?php endif ?>
	
</div>


<?php get_footer(); ?>