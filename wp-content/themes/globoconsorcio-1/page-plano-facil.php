<?php /*Template Name: plano facil */ ?>
<?php get_header(); ?>

<article class="page-plano-facil">
	<!--animated fadeIn-->
	<div class="bloco-banner ">
      <div class="container">
        <div class="bloco__title-banner">
          <div class="line line-1">
              <div class="currentTitle">
                <h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
              </div>
              <!--animated fadeIn-->
              <div class="bloco-banner__texto description">
                <?php //echo the_excerpt(); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipisicing ipsum dolor sit amet. 
              </div>
            </div>
            <div class="line line-2">
              <?php get_template_part('template-parts/breadcrumb'); ?>
            </div>
        </div>
      </div>  
    </div>

	<div class="col-md-12">
		<div class="container">
			<div class="bloco-header">
				<h4 class="bloco-header__toptitle">Conheça o</h4>
				<h2 class="bloco-header__title">Plano Fácil</h2>

					<p class="bloco-header__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius, ipsum blanditiis ratione possimus qui!</p>
			</div>
		</div>
	</div>
	<div class="area-info">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/carros.png" alt="">

			<div class="colls colls-2 table style-1">
				<div class="coll attributes">
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td class="tLabel">PRAZO</td>
							<td class="value">VALUE</td>
						</tr>
						<tr>
							<td class="tLabel">PARCELAS</td>
							<td class="value">VALUE</td>
						</tr>
						<tr>
							<td class="tLabel">PARTICIPANTES</td>
							<td class="value">VALUE</td>
						</tr>
						<tr>
							<td class="tLabel">TAXA DE ADESÃO</td>
							<td class="value">VALUE</td>
						</tr>
						<tr>
							<td class="tLabel">TAXA DE ADMINISTRAÇÃO</td>
							<td class="value">VALUE</td>
						</tr>
						<tr>
							<td class="tLabel">SEGURO DE VIDA</td>
							<td class="value">VALUE</td>
						</tr>
					</table>
				</div>
				<div class="coll description">

					<p>* para grupo com taxa de administração contratada de 16% e 20%, respectivamente.<br/>
** para grupos especiais com taxa de administração contratada de 14%.</p>
					<br/>
					<p>* para grupo com taxa de administração contratada de 16% e 20%, respectivamente.<br/>
** para grupos especiais com taxa de administração contratada de 14%.</p>
					<br/>
					<p>Benefício e vantagem da Parcela Integral:
						• Benefício: Direito a 100% do valor do crédito.
						• Vantagem: Compra planejada, sem juros e sem entrada</p>

				</div>
			</div>
			
			<div class="area-info__listas">
				<ul class="area-info__planos">
					<li class="area-info__planos-item">Prazo</li>
					<li class="area-info__planos-item">Parcelas</li>
					<li class="area-info__planos-item">Participantes</li>
					<li class="area-info__planos-item">Taxa de Adesão</li>
					<li class="area-info__planos-item">Taxa de Administração</li>
					<li class="area-info__planos-item">Seguro de Vida</li>
				</ul>
				<ul class="area-info__prazos">
					<li class="area-info__prazos-item">Prazo</li>
					<li class="area-info__prazos-item">Prazo</li>
					<li class="area-info__prazos-item">Prazo</li>
					<li class="area-info__prazos-item">Prazo</li>
					<li class="area-info__prazos-item">Prazo</li>
					<li class="area-info__prazos-item">Prazo</li>
				</ul>
				<div class=" area-info__info--interna">
					<p>* para grupo com taxa de administração contratada de 16% e 20%, respectivamente.<br/>
** para grupos especiais com taxa de administração contratada de 14%.</p>
					<br/>
					<p>* para grupo com taxa de administração contratada de 16% e 20%, respectivamente.<br/>
** para grupos especiais com taxa de administração contratada de 14%.</p>
					<br/>
					<p>Benefício e vantagem da Parcela Integral:
						• Benefício: Direito a 100% do valor do crédito.
						• Vantagem: Compra planejada, sem juros e sem entrada</p>
				</div>	
			</div>
		</div>
	</div>
	<div class="container">
		<div class="area-info__simulacao">
			<div class="bloco__simulacao">
				<div class="bloco-header bloco-header--simulacao">
					<h2 class="bloco-header__title bloco-header__title--simulacao">Solicite a <strong>simulação</strong> do seu<br/><strong>desconto</strong>, agora! </h2>
				</div>
				<div>
					<?php echo do_shortcode('[contact-form-7 id="180" title="Pedido de simulação_copy"] ');?>
				</div>
			</div>
		</div>
	</div>
	<div class="outros-planos">
		<h2 class="outros-planos__title">Conheça outros <strong>Planos</strong></h2>

		  <!--nossos planos-->

		  <section class="nossos-planos effect" id="planos">

		    <div class="container"> 

		    



		      <ul class="bloco-planos">

		        <?php 

		          $args = array( 'post_type' => 'plano', 'posts_per_page' => 8, 'orderby' => 'menu_order', 'order' => 'ASC' );

		          $loop = new WP_Query( $args );



		          while ( $loop->have_posts() ) : $loop->the_post();

		            

		            $slug = basename(get_permalink());

		            $classItem = $slug;



		        ?>
		        <!--wow slideInUp-->
		        <li class="">
		        	<!--hvr-grow-->
		          <div class="">
		            <span class="info">
		            <?php 

		                imagem_destacada('full', '', get_the_title(), '')
		                //wow pulse
		             ?>

		            <h5><?php echo get_the_title(); ?></h5>

		            <span><?php campo_customizado('wpcf-prazo'); ?></span>
		            </span>
		            <div class="resumo">

		            <?php  if (has_excerpt() ) { the_excerpt(); } ?>  

		            </div>

		             <?php trackButton('link', 'productView_'. get_the_ID(), 'Clicado', get_the_title(), get_post_permalink(), get_the_title(), 'productView_'. get_the_ID(), 'btn btn__nossoplano ', 'Simule aqui'); 
		             //wow zoomIn hvr-hollow
		             ?>

		          </div>

		        </li>

		        <?php endwhile; ?>

		      </ul>

		    </div>

		  </section>
	</div>


</article>







<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>