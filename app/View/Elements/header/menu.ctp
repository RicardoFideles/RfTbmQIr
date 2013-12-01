<?php
	$categorias = $this->requestAction(array('controller' => 'Categories', 'action' => 'menu'));
?>

<div class="col-md-12 col-sm-12 col-xs-12">
	<!-- BUSCA E MENU -->
	
	<div class="row bkgMenuBuscaTopo1 RoundedCornerEmCima">
		<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 hidden-xs">
			<p class="EmFoco textColorA">EM FOCO: A Rede Cinemark atualiza seus complexos com salas digitais preparadas para exibir IMAX em 3D...</p>
		</div>
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text-right">
			<p class="FormBusca">
				<form class="form-inline" role="form">
					<div class="col-lg-9 col-md-11 col-sm-10 col-xs-8">
			  			<input type="search" class="form-control input-sm FormBuscaInput" placeholder="">
					</div>
					<div class="col-lg-3 col-md-1 col-sm-2 col-xs-4">
						<button type="submit" class="btn btn-default  btn-sm btn-tbqueroirD">BUSCAR</button>
					</div>
		  		</form>
		  	</p>
		</div>
	</div>
  
	<div class="row bkgMenuBuscaTopo2"></div>
	
	<div class="row bkgMenuBuscaTopo3 bkgA RoundedCornerEmBaixo NoCutMenu">
		<div class="col-md-12 col-sm-12 hidden-xs">
			<ul class="nav nav-pills MainMenu">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">ÚLTIMAS <b class="caret setaBranca-caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">MATÉRIAS</a></li>
						<li>
							<a href="<?php echo $this->Html->url('/historia') ?>">MINHA HISTÓRIA</a>
						</li>
						<li>
							<a href="<?php echo $this->Html->url('/entrevista') ?>">ENTREVISTA</a>
						</li>
						<li>
							<a href="<?php echo $this->Html->url('/blogs') ?>">BLOGS</a>
						</li>
					</ul>
				</li>
				
				
				<?php foreach($categorias as $key => $categoria): ?>
					<li>|</li>
		          		
	          		<?php
	          			$nome = $categoria['categories']['name'];
						$slug = $categoria['categories']['slug'];
						
						$link = array('controller' => 'categories', 'action' => 'view', 'slug' => $slug);
	          		?>
					<li>
						<a href="<?php echo $this->Html->url($link) ?>">
							<?php echo strtoupper($nome); ?>
						</a>
					</li>
          		<?php endforeach; ?>
          		
			</ul>
		</div>
		<div class="col-xs-12 visible-xs">
			<form name="form" id="form">
				<select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)" class="form-control input-sm">
				<option value="#" selected="selected">MENU</option>
				<option value="#">• ÚLTIMAS: MATÉRIAS</option>
				<option value="#">• ÚLTIMAS: MINHA HISTÓRIA</option>
				<option value="#">• ÚLTIMAS: ENTREVISTA</option>
				<option value="#">• ÚLTIMAS: BLOGS</option>
				<option value="#">• CINEMAS</option>
				<option value="#">• TEATROS</option>
				<option value="#">• MUSEUS</option>
				<option value="#">• PASSEIOS</option>
				<option value="#">• EVENTOS</option>
				<option value="#">• ESPORTES</option>
				<option value="#">• BRINQUEDOS</option>
				</select>
			</form>
		</div>
	</div>
	<!-- BUSCA E MENU -->
</div>
