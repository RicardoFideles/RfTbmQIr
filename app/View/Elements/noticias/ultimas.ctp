<?php
	$noticias = $this->requestAction(array('controller' => 'News', 'action' => 'ultimas'));
?>

<div class="col-md-3 printColI">
	<p class="MateriasOutrasTituloCol fonteSiteSouvMedium textColorC">Recentes</p>
	<hr />
	
	
	<?php foreach($noticias as $key => $noticia): ?>
		
		<?php

		$link = array('controller' => 'news', 'action' => 'view', 'slug' => $this->Link->makeLink($noticia['News']['slug'], $noticia['News']['id'])); 
		
		?>
		
		<p class="MateriasOutras">
			<a href="<?php echo $this->Html->url($link); ?>" class="LinkListaMaterias">
				<?php echo $noticia['News']['name']; ?>
			</a>
			<br />
			<?php echo $noticia['News']['subtitulo']; ?>
		</p> 
	
	<?php endforeach; ?>


	<p class="text-right"><a href="<?php echo $this->Html->url('/noticias'); ?>" class="LinkOutrasMateriasVerTodas">ver todas</a></p>

</div>