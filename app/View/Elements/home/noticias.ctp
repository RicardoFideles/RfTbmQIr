<?php
	$lista = $this->requestAction(array('controller' => 'news', 'action' => 'ultimasCapa'));
	
	if(sizeof($lista) > 1) unset($lista[0]); 
?>

<!-- MATERIAS -->
	<div class="row marginTopB marginBottomB">
		
		<?php foreach($lista as $key => $news): ?>
			
			<div class="col-md-4 col-sm-4 col-xs-12 HomeAltMinB">
				<?php 
	
					$link = array('controller' => 'news', 'action' => 'view', 'slug' => $this->Link->makeLink($news['News']['slug'], $news['News']['id'])); 
					
					if (sizeof($news['Photo']) > 0) {
						$fotoPrincipal = $news['Photo'][0];
					
						$url = $this->Link->makeLinkImgDir('original', $fotoPrincipal['imagem'], 'fotos');
				?>                    
					<img src="<?php echo $this->Html->url($url) ?>" class="img-responsive fotoSize marginBottomIMG">
				<?php
					}
				?>
				<p>
					<a href="<?php echo $this->Html->url($link); ?>" class="LinkMaterias2 fonteSiteSouvLight">
						<?php echo $news['News']['name']; ?>
					</a>
				</p>
				<?php echo $news['News']['subtitulo']; ?>
			</div>
			
		<?php endforeach; ?>

	</div>
<!-- MATERIAS -->