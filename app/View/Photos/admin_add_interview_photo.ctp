<div class="content">
	 <div class="contenttitle">
    	<h2 class="form"><span>Nova Foto</span></h2>
    </div>
    
     <br />
    <?php echo $this->Form->create('Photo', array('type' => 'file','id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
	    <p class="primeiro">
	    	<label>Imagem</label>
	        <span class="field"><?php echo $this->Form->input('name' , array('type' => 'file')); ?></span>
	    </p>
	    <p>
	    	<label>Link</label>
	        <span class="field"><?php echo $this->Form->input('link'); ?></span>
	    </p>
	    <p>
	    	<label>Notícia</label>
	        <span class="field"><?php echo $this->Form->input('news_id'); ?></span>
	    </p>
	    <p class="stdformbutton">
            <button class="submit radius2">Enviar</button>
        </p>
    <?php echo $this->Form->end();?>

</div>