<?php 
	$sobre = $this->requestAction(array('controller' => 'Paginas', 'action' => 'sobre'));
	
	var_dump($sobre);
	exit;
	
	$sobre = $sobre[0];
	
?>


<?php 
	foreach($sobre as $key => $sobre):
		echo $this->RenderBody->consertaLinks($sobre['Pagina']['texto']);
	endforeach; 
?>