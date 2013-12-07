<?php
App::uses('AppController', 'Controller');
/**
 * Photos Controller
 *
 * @property Photo $Photo
 * @property PaginatorComponent $Paginator
 */
class PhotosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function admin_add_noticia($id = null) {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'news','action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		}
		$news = $this->Photo->News->find('list', array ('conditions' => array('News.id' => $id)));
		$this->set(compact('news'));
	}
	
	public function admin_edit_noticia ($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Foto inválida.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'news','action' => 'view', $idModel));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Photo->read(null, $id);
		}
		
		$news = $this->Photo->News->find('list', array ('conditions' => array('News.id' => $idModel)));
		$this->set(compact('news'));
	}

	
	public function admin_delete_noticia ($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Imagem inválida.'));
		}
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('Imagem apagada.'));
			$this->redirect(array('controller' =>'news','action' => 'view', $idModel));
		}
		$this->Session->setFlash(__('A imagem não pode ser apagada.'));
		$this->redirect(array('controller' =>'sliders','action' => 'view', $idModel));
	}
	
	/**
	 * Entrevista
	 */
	
	public function admin_add_entrevista($id = null) {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'interviews','action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		}
		$interviews = $this->Photo->Interview->find('list', array ('conditions' => array('Interview.id' => $id)));
		$this->set(compact('interviews'));
	}
	
	public function admin_edit_entrevista ($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Foto inválida.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'interviews','action' => 'view', $idModel));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Photo->read(null, $id);
		}
		
		$interviews = $this->Photo->Interview->find('list', array ('conditions' => array('Interview.id' => $idModel)));
		$this->set(compact('interviews'));
	}

	
	public function admin_delete_entrevista ($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Imagem inválida.'));
		}
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('Imagem apagada.'));
			$this->redirect(array('controller' =>'interviews','action' => 'view', $idModel));
		}
		$this->Session->setFlash(__('A imagem não pode ser apagada.'));
		$this->redirect(array('controller' =>'interviews','action' => 'view', $idModel));
	}
	
	/**
	 * Estabelecimentos
	 */
	
	public function admin_add_estabelecimento($id = null) {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'establishments','action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		}
		$establishments = $this->Photo->Establishment->find('list', array ('conditions' => array('Establishment.id' => $id)));
		$this->set(compact('establishments'));
	}
	
	public function admin_edit_estabelecimento ($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Foto inválida.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'establishments','action' => 'view', $idModel));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Photo->read(null, $id);
		}
		
		$establishments = $this->Photo->Establishment->find('list', array ('conditions' => array('Establishment.id' => $idModel)));
		$this->set(compact('establishments'));
	}

	
	public function admin_delete_estabelecimento ($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Imagem inválida.'));
		}
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('Imagem apagada.'));
			$this->redirect(array('controller' =>'establishments','action' => 'view', $idModel));
		}
		$this->Session->setFlash(__('A imagem não pode ser apagada.'));
		$this->redirect(array('controller' =>'establishments','action' => 'view', $idModel));
	}
}
