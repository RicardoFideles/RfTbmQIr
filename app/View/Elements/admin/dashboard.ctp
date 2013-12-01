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
		                        					$link = array('controller' => 'paginas', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Páginas</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'news', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Notícias</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'interviews', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Entrevistas</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'people', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>Histórias</span>
		                			</a>
        						</li>
        						<li>
		                        	<a href="<?php 
		                        					$link = array('controller' => 'interviews', 'action' => 'index');
		                        					echo $this->Html->url($link);
		                        			?>" 
		                    			class="tables"><span>promox</span>
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