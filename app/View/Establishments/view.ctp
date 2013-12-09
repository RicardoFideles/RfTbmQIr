<?php
	//var_dump($category['Category']['name']);
	
	//var_dump($establishment);
?>
<?php echo $this->element('facebook/sdk'); ?>


<script type="text/javascript" src="<?php echo $this->Html->url('/js/lightbox-2.6.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/css/lightbox.css'); ?>" />



<!-- ESTABELECIMENTO -->
<div class="row marginTopB marginBottomB">
	<div class="col-md-12 col-sm-12 col-xs-12 InternaAlturaBlog">
		<div class="row">
			
			<?php 
				if (sizeof($category['Photo']) > 0) {
					$fotoPrincipal = $category['Photo'][0];
					
					$url = $this->Link->makeLinkImgDir('original', $fotoPrincipal['imagem'], 'fotos');
			?>
				<div class="col-md-1 printColDEstabelecIcon">
					<img src="<?php echo $this->Html->url($url) ?>" class="CategoriasIconSM" />
				</div>
			<?php
				}
			?>
			
			<div class="col-md-11 printColDEstabelecNome EstabelecimentoCategoriaFixPos">
				<p class="TitulosInternas fonteSiteSouvLight">
					<?php echo $category['Category']['name']; ?>
				</p>
			</div>
		</div>
		<hr class="hrTitulos" />
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 InternaAlturaBlog">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-7">
				<p class="TitulosInternas fonteSiteSouvLight textColorC text-left">
					<?php echo $establishment['Establishment']['name'] ?>
				</p>
			</div>
			<div class="col-md-3"></div>
		</div>
		<hr />
	</div>

	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2 col-sm-2 col-xs-12 marginBottomA printColA">
				<p class="fonteSiteSouvMedium textColorC EstabelecimentoSubTitulos">ACESSIBILIDADE</p>
				<div class="row marginBottomA">
					
					<div class="col-md-2">
						<img src="<?php echo $this->Html->url('/imagens/icon_DefVisual.png'); ?>" class="CategoriasIconXXS" />
					</div>
					<div class="col-md-9 col-md-offset-1 marginBottomA EstabelecimentoInfos">
						VISUAL<br />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
					</div>
	
					<div class="col-md-2">
						<img src="<?php echo $this->Html->url('/imagens/icon_DefAuditiva.png'); ?>" class="CategoriasIconXXS" />
					</div>
					<div class="col-md-9 col-md-offset-1 marginBottomA EstabelecimentoInfos">
						AUDITIVA<br />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
					</div>

					<div class="col-md-2">
						<img src="<?php echo $this->Html->url('/imagens/icon_DefMotora.png'); ?>" class="CategoriasIconXXS" />
					</div>
					<div class="col-md-9 col-md-offset-1 marginBottomA EstabelecimentoInfos">
						MOTORA<br />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
					</div>
	
					<div class="col-md-2">
						<img src="<?php echo $this->Html->url('/imagens/icon_DefIntelectual.png'); ?>" class="CategoriasIconXXS" />
					</div>
					<div class="col-md-9 col-md-offset-1 marginBottomA EstabelecimentoInfos">
						INTELECTUAL<br />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
						<img src="imagens/icon_TOP5Estrelas.png" />
					</div>
				</div>

				<p class="fonteSiteSouvMedium textColorC EstabelecimentoSubTitulos">
					INFORMAÇÕES
				</p>
				
				<p class="EstabelecimentoInfos">
					<?php echo $establishment['Establishment']['informacoes']; ?>
				</p>
				
				<p>Site:</p>
				<p>
					<?php 
						$site = $establishment['Establishment']['site'];
					?>
					<a href="<?php echo $this->Html->url($site); ?>" class="LinkEstabelecimentoSite">
						<?php echo $site ?>
					</a>
				</p>
			</div>

			<div class="col-md-7 col-sm-7 col-xs-12 marginBottomA printColB">
				
				<div class="EstabelecimentosShare">
					<div id="share_twitter">
						<a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt">Tweet</a>
					</div>
					<div id="share_facebook">
						<?php
							$link = array('controller' => 'news', 'action' => 'view', 'slug' => $this->Link->makeLink($establishment['Establishment']['slug'], $establishment['Establishment']['id'])); 
						?>
						
						<div class="fb-share-button" data-href="<?php $this->Html->url($link); ?>" data-width="200" data-type="button_count"></div>
					</div>					
 					<img src="<?php echo $this->Html->url('/imagens/icon_Print.png'); ?>" />
				</div>
			
				<?php echo $establishment['Establishment']['texto']; ?>
				
				<?php 
					 $fotos = $establishment['Photo'];
					if (sizeof($establishment['Photo']) > 0) {
						$fotoPrincipal = $establishment['Photo'][0];
						
						$url = $this->Link->makeLinkImgDir('original', $fotoPrincipal['imagem'], 'fotos');
				?>
					<img src="<?php echo $this->Html->url($url) ?>" class="img-responsive fotoSize marginBottomIMG" />
				<?php
					}
				?>

				<div class="row">
					<?php foreach ($fotos as $foto): ?>
						<div class="col-md-3 col-sm-3 col-xs-3 marginBottomA">
							<?php 
								$url = $this->Link->makeLinkImgDir('original', $foto['imagem'], 'fotos');
							?>
							<a class="example-image-link" href="<?php echo $this->Html->url($url) ?>" data-lightbox="example-set" title="Aqui entra a legenda1">
								<img src="<?php echo $this->Html->url($url) ?>" class="img-responsive fotoSize marginBottomIMG" alt="aqui entra o alt 1" />
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php echo $this->element('estabelecimentos/ultimas'); ?>
		</div>
	</div>

</div>
  <!-- ESTABELECIMENTO -->