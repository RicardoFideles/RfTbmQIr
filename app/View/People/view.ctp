<?php echo $this->element('facebook/sdk'); ?>

<!-- MATERIA ABERTA -->
<div class="row marginTopB marginBottomB">
	<div class="col-md-12 col-sm-12 col-xs-12 InternaAlturaBlog">                    
		<p class="TitulosInternas fonteSiteSouvLight">MINHA HISTÓRIA</p>
		<hr class="hrTitulos" />
	</div>

	<div class="col-md-9 printColH">
		<p class="MateriasTitulo">
			<?php echo $person['Person']['name']; ?>
		</p>
		
		<div class="row">
			<div class="col-md-6">
				<p class="MateriasData">
					<?php echo $this->Time->format('d.m.Y', $person['Person']['created'], null, 'America/Sao_Paulo'); ?>
				</p>
			</div>
			
			<div class="col-md-6">
				<div class="MateriasShare">
					<div id="share_twitter">
						<a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt">Tweet</a>
					</div>
					<div id="share_facebook">
						<?php
							$link = array('controller' => 'news', 'action' => 'view', 'slug' => $this->Link->makeLink($person['Person']['slug'], $person['Person']['id'])); 
						?>
						
						<div class="fb-share-button" data-href="<?php $this->Html->url($link); ?>" data-width="200" data-type="button_count"></div>
					</div>					
 					<img src="<?php echo $this->Html->url('/imagens/icon_Print.png'); ?>" />
				</div>
			</div>
		</div>
		
		<hr />
		
		<p class="MateriasSubtituloGR">
			<?php echo $person['Person']['subtitulo']; ?>
		</p>
		
		<p class="MateriasTexto">
			<div class="MateriasFoto">
				<div class="MateriasFotoClip">
					<img src="imagens/MateriaFoto1.jpg" class="img-responsive" />
				</div>
  				<div class="MateriasFotoLegenda">
  					<p class="MateriasLegendas">
  						legenda
					</p>
				</div>
			</div>
			<?php echo $person['Person']['texto']; ?>
		</p>
	</div>
	<?php echo $this->element('noticias/ultimas'); ?>
</div>
  <!-- MATERIA ABERTA -->