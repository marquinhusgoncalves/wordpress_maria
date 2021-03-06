<?php get_header(); ?>
<section id="home">
	<div class="container">
		<h1>Encomende para sua festa. Consulte nossos combos</h1>
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<div class="thumb">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/brigadeiros/">
						<img src="<?php bloginfo('stylesheet_directory');?>/img/icone-home-brigadeiro.png" alt="Ícone Brigadeiro">
						<div>
							<h3>Brigadeiros</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="thumb">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/cupcakes/">
						<img src="<?php bloginfo('stylesheet_directory');?>/img/icone-home-cupcake.png" alt="Ícone Cupcake">
						<div>
							<h3>Cupcakes</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="thumb">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/category/compotinhas/">
						<img src="<?php bloginfo('stylesheet_directory');?>/img/icone-home-compotinha.png" alt="Ícone Compotinha">
						<div>
							<h3>Compotinhas</h3>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>