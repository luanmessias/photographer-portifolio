<div class="aside open">
	<div class="aside-logo">
		<a href="<?php echo site_url(); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
		</a>
	</div>

	<?php if(is_page('fotos')): ?>
		<ul id="menu-header-menu" class="nav menu-page">
			<li id="menu-item-132" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-132">
				<a href="<?php echo site_url(); ?>"> Página inicial</a>
			</li>
		</ul>
	<?php else: ?>
		<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'nav'
			));
		?>
	<?php endif ?>


	<ul class="per-card">
		<li class="per-name">Jason Cardoso</li>
		<li class="per-mail">contato@jasoncardoso.com.br</li>
		<li class="per-phone">(11)2914-3290</li>
	</ul>

	<div class="social">
		<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
	</div>

	<div class="copyright">
		<span>Jason Cardoso 2017 ©</span> <br>
		<span>Todos os Direitos Reservados</span>
		<br><br>
		<span>Desenvolvido por Luan Messias</span>
	</div>

</div>