<div class="content">
	<ul class="buttonlist">
		<li>
			<li>
				<a href="<?php 
								$link = array('controller' => 'comments', 'action' => 'index');
								echo $this->Html->url($link); ?>" class="btn btn_book">
						<span>Voltar a lista</span>
				</a>
			</li>
			<li>
				<?php echo $this->Form->postLink(__('Aprovar'), array('action' => 'aprove', $comment['Comment']['id']), array('class' => 'btn btn_book'), __('Você tem certeza que deseja aprovar # %s?', $comment['Comment']['id'])); ?>
			</li>
			<li>
				<?php echo $this->Form->postLink(__('Rejeitar'), array('action' => 'delete', $comment['Comment']['id']), array('class' => 'btn btn_book'), __('Você tem certeza que deseja rejeitar # %s?', $comment['Comment']['id'])); ?>
			</li>
		</li>
	</ul>
	 <div class="contenttitle">
    	<h2 class="form"><span>Comentário : <?php echo $comment['Comment']['id'] ?></span></h2>
    </div>
    
     <br />
    <?php echo $this->Form->create('News', array('type' => 'file','id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
    	<?php echo $this->Form->input('empresa', array('type' => 'hidden', 'value' => 'eterny')); ?>
	    <p class="primeiro">
	    	<label>Autor</label>
	        <span class="field"><?php echo $comment['User']['name'] ?></span>
	    </p>
	    <p>
	    	<label>Matéria Comentada</label>
	        <span class="field"><?php echo $comment['News']['name'] ?></span>
	    </p>
	    <p>
	    	<label>Entrevista Comentada</label>
	        <span class="field"><?php echo $comment['Interview']['name'] ?></span>
	    </p>
	    <p>
	    	<label>Minha História Comentada</label>
	        <span class="field"><?php echo $comment['Person']['name'] ?></span>
	    </p>
	    <p>
	    	<label>Estabelecimento Comentado</label>
	        <span class="field"><?php echo $comment['Establishment']['name'] ?></span>
	    </p>
	    <p>
	    	<label>Status do comentário</label>
	        <span class="field"><?php echo $comment['Comment']['status'] ?></span>
	    </p>
	    
    <?php echo $this->Form->end();?>
</div>
    

<div class="content">
	<?php echo$comment['Comment']['texto'] ?></span>
</div>

<br clear="all" /><br />

