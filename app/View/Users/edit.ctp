<?php
	//var_dump($this->request->data);
	
	$user = $this->request->data['User'];
	$photo_user = $this->request->data['Photo'];
	
	
	if (!empty($photo_user) && sizeof($photo_user) > 0) {
		
		$photo_user = $photo_user[0];
		
	}
	
?>

<!-- MATERIA ABERTA -->
<div class="row marginTopB marginBottomB">

	<div class="col-md-12 col-sm-12 col-xs-12 InternaAlturaBlog">                    
		<p class="TitulosInternas fonteSiteSouvLight">SUA CONTA</p>
		<hr class="hrTitulos" />
	</div>
	
	<div class="col-md-12 col-sm-12 col-xs-12 MateriasTituloListagem">
    	<h4 class="textColorB"><?php echo $this->Session->flash() ?></h4>
    	<br><br>
    </div>

	<div class="col-md-3 col-sm-3 col-xs-12 printColI marginBottomB">
		<p class="MateriasOutrasTituloCol fonteSiteSouvMedium textColorC">SUA FOTO</p>
		<hr />
		<p class="MateriasOutras">
			<?php 
				if (!empty($photo_user)) {
					
					$url = $this->Link->makeLinkImgDir('original', $photo_user['imagem'], 'fotos');
			?>
				<img src="<?php echo $this->Html->url($url) ?>" class="FotoUserSM" />
			<?php
				}
			?>
			
			
			
			<form role="form">
				<div class="form-group">
					<button type="submit" class="btn btn-default btn-xs">Remover</button>
				</div>
			</form>
			
			<?php
				if(!empty($photo_user)) {
					echo $this->Form->postLink(__('Remover'), array('controller' => 'photos', 'action' => 'delete_guest', $photo_user['id']), null, __('Você tem certeza que deseja apagar # %s?', $photo_user['id'])); 
				} 
			?>

			<?php
				$link = array('controller' => 'photos', 'action' => 'add_guest');
			?>
			<form action="<?php echo $this->Html->url($link); ?>" id="userPhoto" method="post" enctype="multipart/form-data" accept-charset="utf-8">
				<input type="hidden" name="data[Photo][user_id]" value="<?php echo AuthComponent::user('id'); ?>">
				<div class="form-group">
					<label for="exampleInputFile">Alterar foto do perfil</label>
					<input type="file" id="exampleInputFile" name="data[Photo][imagem]">
  				</div>
				<button type="submit" class="btn btn-tbqueroirB btn-xs">Enviar imagem</button>
			</form>
		</p> 
	</div>

	<div class="col-md-9 col-sm-9 col-xs-12 MateriasTituloListagem">
		<p class="MateriasOutrasTituloCol fonteSiteSouvMedium textColorC">SEUS DADOS</p>
		<hr />
		
		<?php echo $this->Form->create('User', array('controller' => 'users', 'action' => 'edit',
													'class' => 'form-horizontal', 
													 'role' => 'form',
													 'inputDefaults' => array(
													        'label' => false,
													    ))); ?>
													    

			<div class="form-group">
				<label for="inputNome" class="col-md-3 col-sm-3 col-xs-12 control-label">Nome *</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('name', array ('class' => 'form-control') );
					?>
				</div>
			</div> 

			<div class="form-group">
				<label for="inputSobrenome" class="col-md-3 col-sm-3 col-xs-12 control-label">Sobrenome *</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('surname', array ('class' => 'form-control' , 'id' => 'inputSobrenome') );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="inputCidade" class="col-md-3 col-sm-3 col-xs-12 control-label">Cidade</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('cidade', array ('class' => 'form-control' , 'id' => 'inputCidade') );
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="inputEstado" class="col-md-3 col-sm-3 col-xs-12 control-label">Estado</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('estado', array ('class' => 'form-control' , 'id' => 'inputEstado') );
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="inputBairro" class="col-md-3 col-sm-3 col-xs-12 control-label">Bairro</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('bairro', array ('class' => 'form-control' , 'id' => 'inputBairro') );
					?>
				</div>
			</div>                                  

			<div class="form-group">
				<label for="inputCPF" class="col-md-3 col-sm-3 col-xs-12 control-label">CPF</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('cpf', array ('class' => 'form-control' , 'id' => 'inputCPF') );
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-md-3 col-sm-3 col-xs-12 control-label">E-mail *</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('username', array ('class' => 'form-control' , 'id' => 'inputEmail') );
					?>
				</div>
			</div>                                  
  
			<div class="form-group">
				<label for="inputSenha" class="col-md-3 col-sm-3 col-xs-12 control-label">Senha *</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('password', array ('class' => 'form-control' , 'id' => 'inputSenha') );
					?>
 				</div>
			</div>
  
			<div class="form-group">
				<label for="inputConfirmaSenha" class="col-md-3 col-sm-3 col-xs-12 control-label">Confirmar Senha *</label>
				<div class="col-md-7 col-sm-8 col-xs-12">
					<?php 
						echo $this->Form->input('password_confirm', array ('class' => 'form-control' , 'id' => 'inputConfirmaSenha', 'type' => 'password') );
					?>
				</div>
			</div>
  
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10 col-xs-offset-3 col-xs-9">
					<button type="submit" class="btn btn-tbqueroirB">Cadastrar</button>
				</div>
			</div>
		<?php echo $this->Form->end(); ?>


</div>









</div>
  <!-- MATERIA ABERTA -->
