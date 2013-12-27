<?php echo $this->element('editor/index'); ?>

<div class="content">
	<ul class="buttonlist">
		<li>
			<li><a href="<?php
				$link = array('controller' => 'news', 'action' => 'index');
				echo $this->Html->url($link); ?>" class="btn btn_book"><span>Listar</span></a></li>
		</li>
	</ul>
	 <div class="contenttitle">
    	<h2 class="form"><span>Matérias</span></h2>
    </div>
    
     <br />
    <?php echo $this->Form->create('News', array('id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
	    <p class="primeiro">
	    	<label>Título</label>
	        <span class="field"><?php echo $this->Form->input('name'); ?></span>
	    </p>
	    <p>
	    	<label>Subtítulo</label>
	    	<div class="container_count">
	        	<span class="field float"><?php echo $this->Form->input('subtitulo', array('class' => 'subtitulo float')); ?></span>
	        	<span class="contador field"></span>
	    	</div>
	    </p>
	    
	    <p>
	    	<label>Em Foco</label>
	        <span class="field">
	        	<?php 
	        		echo $this->Form->input('emfoco', array('options' => array('sim' => 'Sim','nao' => 'Não'))); 
				?>
			</span>
	    </p>
	    
	    <p>
	    	<label>Texto</label>
	        <span class="field"><?php echo $this->Form->input('texto', array('rows'=>'5', 'cols'=>'15','class'=>'ckeditor2', 'id'=> 'editor2')); ?></span>
	    </p>
	    <p class="stdformbutton">
            <button class="submit radius2">Enviar</button>
        </p>
    <?php echo $this->Form->end();?>
</div>

<script type="text/javascript">
	
	jQuery(function (){ 
		jQuery(".subtitulo").keyup(function(){
			var limite = 10;
			var tamanho = jQuery(this).val().length;
			
			if(tamanho > limite)
				tamanho -= 1;
				var contador = limite - tamanho;
				
				jQuery(".contador").text(contador + 'caracteres restantes');
				
			if (limite >= tamanho) {
				var txt = jQuery(this).val().substring(0, limite);
				jQuery(this).val(txt)
			} else if(tamanho > limite )
				jQuery(".contador").css("color","#FF0000");
		});
	});
	
	
</script>

