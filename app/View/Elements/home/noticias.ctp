<?php
	$lista = $this->requestAction(array('controller' => 'news', 'action' => 'ultimasCapa'));
	$lista_1 = $this->requestAction(array('controller' => 'people', 'action' => 'ultimasCapa'));
	$lista_2 = $this->requestAction(array('controller' => 'interviews', 'action' => 'ultimasCapa'));
	
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
					<div class="HomeMatImageCrop">
						<a href="<?php echo $this->Html->url($link); ?>">
							<img src="<?php echo $this->Html->url($url) ?>" class="img-responsive fotoSize marginBottomIMG">
						</a>
					</div>                  
				<?php
					}
				?>
				<p>
					<a href="<?php echo $this->Html->url($link); ?>" class="LinkMaterias2 fonteSiteSouvLight">
						<?php echo $news['News']['name']; ?>
					</a>
				</p>
				<?php
					$subtitulo = $news['News']['subtitulo'];
					echo $this->String->truncate($subtitulo, 150, $limite='...') ;
				?>
			</div>
			
		<?php endforeach; ?>
		
		<?php foreach($lista_1 as $key => $person): ?>
			
			<div class="col-md-4 col-sm-4 col-xs-12 HomeAltMinB">
				<?php 
	
					$link = array('controller' => 'people', 'action' => 'view', 'slug' => $this->Link->makeLink($person['Person']['slug'], $person['Person']['id'])); 
					
					if (sizeof($person['Photo']) > 0) {
						$fotoPrincipal = $person['Photo'][0];
					
						$url = $this->Link->makeLinkImgDir('original', $fotoPrincipal['imagem'], 'fotos');
				?>   
					<div class="HomeMatImageCrop">
						<a href="<?php echo $this->Html->url($link); ?>">
							<img src="<?php echo $this->Html->url($url) ?>" class="img-responsive fotoSize marginBottomIMG">
						</a>
					</div>                 
				<?php
					}
				?>
				<p>
					<a href="<?php echo $this->Html->url($link); ?>" class="LinkMaterias2 fonteSiteSouvLight">
						<?php echo $person['Person']['name']; ?>
					</a>
				</p>
				<?php
					$subtitulo = $person['Person']['subtitulo'];
					echo $this->String->truncate($subtitulo, 150, $limite='...') ;
				?>
			</div>
			
		<?php endforeach; ?>
		
		<?php foreach($lista_2 as $key => $interview): ?>
			
			<div class="col-md-4 col-sm-4 col-xs-12 HomeAltMinB">
				<?php 
	
					$link = array('controller' => 'interviews', 'action' => 'view', 'slug' => $this->Link->makeLink($interview['Interview']['slug'], $interview['Interview']['id'])); 
					
					if (sizeof($interview['Photo']) > 0) {
						$fotoPrincipal = $interview['Photo'][0];
					
						$url = $this->Link->makeLinkImgDir('original', $fotoPrincipal['imagem'], 'fotos');
				?>  
					<div class="HomeMatImageCrop">
						<a href="<?php echo $this->Html->url($link); ?>">
							<img src="<?php echo $this->Html->url($url) ?>" class="img-responsive fotoSize marginBottomIMG">
						</a>
					</div>                 
				<?php
					}
				?>
				<p>
					<a href="<?php echo $this->Html->url($link); ?>" class="LinkMaterias2 fonteSiteSouvLight">
						<?php echo $interview['Interview']['name']; ?>
					</a>
				</p>
				<?php
					$subtitulo = $interview['Interview']['subtitulo'];
					echo $this->String->truncate($subtitulo, 150, $limite='...') ;
				?>
			</div>
			
		<?php endforeach; ?>

	</div>
<!-- MATERIAS -->