<?php   
	$this->set(array(
        'body_class' => 'bkgBody',
    ));

	$sobre = $this->requestAction(array('controller' => 'Paginas', 'action' => 'sobre'));
	
	
	$sobre = $sobre[0];
	
?>
<!-- MATERIA ABERTA -->
<div class="row marginTopB marginBottomB">
	<div class="col-md-12 col-sm-12 col-xs-12 InternaAlturaBlog">                    
		<p class="TitulosInternas fonteSiteSouvLight">SOBRE</p>
		<hr class="hrTitulos" />
	</div>
	
	<div class="col-md-9 printColH">
		<?php 
			foreach($sobre as $key => $sobre):
				echo $this->RenderBody->consertaLinks($sobre['texto']);
			endforeach; 
		?>
	</div>
	<div class="col-md-3 printColI">
		<p class="MateriasOutrasTituloCol fonteSiteSouvMedium textColorC">Recentes</p>
	
		<hr />
	
		<p class="MateriasOutras">
			<a href="#" class="LinkListaMaterias">Semana Guga Kuerten chega ao fim com participação de muitas crianças e jovens</a>
			<br />
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut srisus.
		</p>
		
		<p class="text-right"><a href="" class="LinkOutrasMateriasVerTodas">ver todas</a></p>

	</div>
	
</div>
	

