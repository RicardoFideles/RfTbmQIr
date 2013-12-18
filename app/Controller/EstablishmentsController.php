<?php
App::uses('AppController', 'Controller');
/**
 * Establishments Controller
 *
 * @property Establishment $Establishment
 * @property PaginatorComponent $Paginator
 */
class EstablishmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Establishment->recursive = 0;
		$this->set('establishments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Establishment->exists($id)) {
			throw new NotFoundException(__('Invalid establishment'));
		}
		$options = array('conditions' => array('Establishment.' . $this->Establishment->primaryKey => $id));
		$this->set('establishment', $this->Establishment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Establishment->create();
			if ($this->Establishment->save($this->request->data)) {
				$this->Session->setFlash(__('The establishment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The establishment could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Establishment->Category->find('list');
		$cities = $this->Establishment->City->find('list');
		$this->set(compact('categories', 'cities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Establishment->exists($id)) {
			throw new NotFoundException(__('Invalid establishment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Establishment->save($this->request->data)) {
				$this->Session->setFlash(__('The establishment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The establishment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Establishment.' . $this->Establishment->primaryKey => $id));
			$this->request->data = $this->Establishment->find('first', $options);
		}
		$categories = $this->Establishment->Category->find('list');
		$cities = $this->Establishment->City->find('list');
		$this->set(compact('categories', 'cities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Establishment->id = $id;
		if (!$this->Establishment->exists()) {
			throw new NotFoundException(__('Invalid establishment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Establishment->delete()) {
			$this->Session->setFlash(__('The establishment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The establishment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function view($id = null) {

		preg_match('/(?:.*?)\-([0-9]+)\.html$/', $id, $matches);

		$id = $matches[1];

		$this -> Establishment -> id = $id;
		if (!$this -> Establishment -> exists()) {
			throw new NotFoundException(__('Estabelecimento inexistente'));
		}
		
		$this->Establishment->recursive = 2;

		$establishment = $this -> Establishment -> read(null, $id);
		
		
		$this->loadModel('Category');
		
		$category = $this->Category->findById($establishment['Category']['id']);
		
		$this -> set(compact('establishment','category' ));
	}
	
	public function ultimas() {
		$options = array('order' => array('Establishment.id' => 'desc'), 'limit' => 4);
		return $this->Establishment->find('all', $options);
	}
	
	public function lista ($categoria = null, $page = null) {
		
		$this->loadModel('Category');
		
		$this->Category->recursive = 0;
		
		$catTemp = $this->Category->findBySlug($categoria);
		
		if ($catTemp != null && !empty($catTemp) && ($catTemp['Category']['id'] != null)) {
			
			$idCategoria = $catTemp['Category']['id'];
			
			
			$this->Category->id = $idCategoria;
			
 			if ($this -> Category -> exists()) {
 				
				$category = $catTemp;
				
				if (empty($page)) {
					$page = 1;
				}
				
				$cidadeSelecionada =  Configure::read('Config.cidadeSelecionada');
		
				$id_cidadeSelecionada = $cidadeSelecionada['City']['id'];
				
						
				$this->Establishment->recursive = 2;
				
				$this->paginate = array('limit' => 6 , 'page' => $page, 'conditions' => array('Establishment.category_id' => $idCategoria, 'Establishment.city_id' => $id_cidadeSelecionada ));
		
				$establishments = $this->paginate();
		
				$this -> set(compact('establishments', 'category'));
 				
			}
				
		} else {
			return $this->redirect('/');
		}
		
	}
	
	public function destaqueCapa () {
		
		$options = array('conditions' => array('Establishment.destaque' => 'sim'), 'limit' => 3);
		
		return $this->Establishment->find('all', $options);
		
	}

	public function outros () {
		
		$cidadeSelecionada =  Configure::read('Config.cidadeSelecionada');
		
		$id_cidadeSelecionada = $cidadeSelecionada['City']['id'];
		
		
		$options = array('conditions' => array('Establishment.city_id' => $id_cidadeSelecionada));
		
		$lista = $this->Establishment->find('all', $options);
		shuffle($lista);
		
		$ultimos_tres_destaques = array();
		
		if (sizeof($lista) > 4)  {
			array_push($ultimos_tres_destaques, $lista[0], $lista[1], $lista[2], $lista[3]);
		}
		
		return $ultimos_tres_destaques; 
		
	}
	
	public function topHome () {
		
		$cidadeSelecionada =  Configure::read('Config.cidadeSelecionada');
		
		$id_cidadeSelecionada = $cidadeSelecionada['City']['id'];
		
		$options = array('conditions' => array('Establishment.city_id' => $id_cidadeSelecionada), 'order' => array('Establishment.media' => 'DESC'), 'limit' => 5);
		
		$lista = $this->Establishment->find('all', $options);
		
		return $lista;
		
	}
	
	public function topHomeCategorias ($id = null) {
		
		$this->loadModel('Category');
		
		if (!$this->Category->exists($id)) {
			return  '';
		}
		
		$cidadeSelecionada =  Configure::read('Config.cidadeSelecionada');
		
		$id_cidadeSelecionada = $cidadeSelecionada['City']['id'];
		
		$options = array('conditions' => array('Establishment.city_id' => $id_cidadeSelecionada, 'Establishment.category_id' => $id ), 'order' => array('Establishment.media' => 'DESC'), 'limit' => 5);
		
		$lista = $this->Establishment->find('all', $options);
		
		return $lista;
		
	}


}
