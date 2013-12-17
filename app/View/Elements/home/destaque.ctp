<?php
	$destaque = $this->requestAction(array('controller' => 'news', 'action' => 'destaqueCapa'));
?>

<!-- MATERIA -->
<div class="col-md-6 col-sm-8 col-xs-12 HomeAltMinA">
	<?php 
	
		$link = array('controller' => 'news', 'action' => 'view', 'slug' => $this->Link->makeLink($destaque['News']['slug'], $destaque['News']['id'])); 
		
		if (sizeof($destaque['Photo']) > 0) {
			$fotoPrincipal = $destaque['Photo'][0];
		
			$url = $this->Link->makeLinkImgDir('original', $fotoPrincipal['imagem'], 'fotos');
	?>
		<img src="<?php echo $this->Html->url($url) ?>" class="img-responsive fotoSize marginBottomIMG">
		
	<?php
		}
	?>
	<p>
		<a href="<?php echo $this->Html->url($link); ?>" class="LinkMaterias1 fonteSiteSouvLight">
			<?php echo $destaque['News']['name'] ?>
		</a>
	</p>
	<p>
		<?php 
			$subtitulo = $destaque['News']['subtitulo'];
			echo $this->String->truncate($subtitulo, 120, $limite='...') ;
		?>
	</p> 
</div>
