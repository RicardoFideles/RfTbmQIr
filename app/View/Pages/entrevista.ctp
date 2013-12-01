<?php 
	$sobre = $this->requestAction(array('controller' => 'Paginas', 'action' => 'sobre'));
	
	
	$sobre = $sobre[0];
	
?>


<?php 
	foreach($sobre as $key => $sobre):
		echo $this->RenderBody->consertaLinks($sobre['texto']);
	endforeach; 
?>