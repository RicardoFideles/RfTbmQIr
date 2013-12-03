<!-- BLOGS LINKS -->
<div class="row marginTopB marginBottomB">

	<div class="col-md-12 col-sm-12 col-xs-12 InternaAlturaBlog">                    
		<p class="TitulosInternas fonteSiteSouvLight">BLOGS</p>
		<hr class="hrTitulos" />
	</div>

	<?php foreach($blogs as $key => $blog): ?>
		
		<div class="col-md-4 col-sm-4 col-xs-12 InternaAlturaBlog">                    
			<p class="fonteSiteSouvLight"><?php echo $blog['Blog']['name']; ?></p>
			
			<?php $link = $blog['Blog']['link']; ?>
			
			<a href="<?php echo $this->Html->url($link); ?>" class="LinkInternas">
				<?php echo $link; ?>
			</a>
		</div>
		
	<?php endforeach; ?>

</div>
<ul class="pagination">
    <?php
        echo $this->Paginator->prev('< ', array('tag' => 'li' , 'class'=> 'previous'), null, array('class' => 'disable', 'tag' => 'li'));
        echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li'));
        $this->Paginator->current(null, null, array('class' => 'current'));
        echo $this->Paginator->next(' >', array('tag' => 'li', 'class'=> 'next'), null, array('class' => 'disable','tag' => 'li'));
    ?>
</ul>
  <!-- BLOGS LINKS -->


  <!-- BLOGS PAGINACAO -->
<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-6">                    
  <p class="InternasPaginacao">Página 1 de 3</p>
  </div>
  
                          <div class="col-md-4 col-sm-4 col-xs-6 text-center">                    
  <a href="#" class="LinkInternasPaginacao">Anterior</a> | <a href="#" class="LinkInternasPaginacao">Próxima</a>
  </div>
</div>
  <!-- BLOGS PAGINACAO -->