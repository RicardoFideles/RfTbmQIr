<?php   
	$this->set(array(
        'body_class' => 'bkgBody',
    ));
?>

<!-- CONTATO -->
<div class="row marginTopB marginBottomB">
	<div class="col-md-12 col-sm-12 col-xs-12 InternaAlturaBlog">                    
		<p class="TitulosInternas fonteSiteSouvLight">CONTATO</p>
		<hr class="hrTitulos" />
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 MateriasTituloListagem">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputNome" class="col-md-2 col-sm-2 col-xs-3 control-label">Nome</label>
				<div class="col-md-9 col-sm-9 col-xs-9">
					<input type="text" class="form-control">
				</div>
			</div> 
  
  			<div class="form-group">
  				<label for="inputEmail" class="col-md-2 col-sm-2 col-xs-3 control-label">Email</label>
  				<div class="col-md-9 col-sm-9 col-xs-9">
  					<input type="email" class="form-control" id="inputEmail">
				</div>
			</div>
  			
  			<div class="form-group">
  				<label for="inputAssunto" class="col-md-2 col-sm-2 col-xs-3 control-label">Assunto</label>
  				<div class="col-md-9 col-sm-9 col-xs-9">
  					<select class="form-control">
  						<option>Selecione o assunto</option>
  						<option>Dúvidas</option>
  						<option>Sugestões</option>
  						<option>Reclamações</option>
					</select>
				</div>
			</div>                                  

			<div class="form-group">
				<label for="inputMensagem" class="col-md-2 col-sm-2 col-xs-3 control-label">Mensagem</label>
				<div class="col-md-9 col-sm-9 col-xs-9">
					<textarea class="form-control" rows="3" id="inputMensagem"></textarea>
				</div>
			</div>
  			
  			<div class="form-group">
  				<div class="col-sm-offset-2 col-sm-10 col-xs-offset-3 col-xs-9">
  					<button type="submit" class="btn btn-tbqueroirE">Enviar</button>
				</div>
			</div>
		</form>                        
	</div>
</div>
  <!-- CONTATO -->