<div class="mainleft">
          	<div class="mainleftinner">
            
              	<div class="leftmenu">
            		<ul>
                    	<li class="current"><a href="#" class="dashboard"><span>Painel</span></a></li>
                    	<li >
                        	<a href="#" 
                			 class="widgets menudrop"><span>Site</span></a>
                			 <ul>
            			 		<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'cities', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Cidades</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'settings', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Preferências</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'categories', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Categorias</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'statuses', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Status Notícias</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'contacts', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Dados Pessoais</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'projects', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Projetos</span>
		                			</a>
        						</li>
                			 </ul>
            			 </li>
                        
                        <li>
                        	<a href="<?php 
                        					$link = array('controller' => 'users', 'action' => 'index');
                        					echo $this->Html->url($link);
                        			?>" 
                    			class="tables"><span>Usuários</span>
                			</a>
                        </li>
                    </ul>
                        
                </div><!--leftmenu-->
            	<div id="togglemenuleft"><a></a></div>
            </div><!--mainleftinner-->
        </div><!--mainleft-->