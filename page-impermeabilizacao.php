<?php
get_header(); ?>

<div id="content">
	<section id="sobre-home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Tapeçaria e reforma de estofados no Tatuapé</h1>
					<h2>A Nobre Arte Design é uma tapeçaria de alta qualidade localizada no Tatuapé.</h2>
				</div>
			</div> <br>
			<div class="row">
				<div class="col-md-6 text-left">
					<p>
						A Nobre Arte é uma tapeçaria que está localizada no bairro do Tatuapé, e é uma 
						empresa especializada em serviços de tapeçaria e reforma de estofados em geral.						
					</p>
					<p>
						Nossa tapeçaria tem como visão de futuro ser referência em qualidade e 
						atendimento no mercado de estofados, tapeçaria e artigos para decoração e 
						design de interiores. 						
					</p>
					<p>
						A tapeçaria Nobre Arte Design realiza uma prévia verificação do serviço de 
						tapeçaria e reforma de estofado a ser realizado, pode ser pessoalmente ou via 
						internet.						
					</p>
				</div>
				<div class="col-md-6 text-left">
					<p>
						Realizamos sem compromisso um orçamento detalhado dos serviços e produtos 
						que serão utilizados na reforma do estofado e fornecemos todo o suporte de 
						retirada e entrega na casa do cliente.						
					</p>
					<p>
						A Nobre Arte Design conta com uma equipe especializada em desmontagem e 
						montagem de estofados.						
					</p>
					<p>
						Trabalhamos com os principais fornecedores do mercado de tapeçaria e 
						executamos todas as reformas de estofados com produtos de procedência, 
						qualidade e garantias.								
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="fotos-sobre" class="serv-marg">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h2 class="amarelo">Tapeçaria e Reforma de Estofados no Tatuapé</h2>
					<p class="">A Nobre Arte Desig é uma tapeçaria com vasta experiência em reforma de estofados em geral, com atendimento diferenciado e garantia em todos os serviços prestados. <br>
					A Tapeçaria Nobre Arte Design é uma empresa especializada em reforma de todos os tipos de sofá, estofados em geral, puffs, cadeiras de sala de jantar, poltronas e também fabricamos cabeçeiras personalizadas de acordo com a sua necessidade. 
					</p>
					<ul>
						<li>Reforma de estofados em geral</li>
						<li>Tapeçaria localizada no Tatuapé</li>
						<li>Atendimento diferenciado</li>
						<li>Impermeabilização de estofados</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>" class="btn-amarelo">CONFIRA</a>
				</div>
				<div class="col-md-5 text-left">
					<h4>Fotos</h4>
					
					<div class="row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto1.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto2.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto3.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto4.jpg"; ?>"/>
						</div>
					</div>
			
				</div>
			</div>	
		</div>	
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>
<?php get_footer(); ?>