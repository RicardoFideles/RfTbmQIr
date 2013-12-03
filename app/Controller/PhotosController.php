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
				$this->redirect(array('controller' =>'unidades','action' => 'view', $idModel));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Photo->read(null, $id);
		}
		
		$news = $this->Photo->News->find('list', array ('conditions' => array('News.id' => $id)));
		$this->set(compact('news'));
	}

	
	public function admin_delete_noticia ($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Imagem inválida.'));
		}
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('Imagem apagada.'));
			$this->redirect(array('controller' =>'sliders','action' => 'view', $idModel));
		}
		$this->Session->setFlash(__('A imagem não pode ser apagada.'));
		$this->redirect(array('controller' =>'sliders','action' => 'view', $idModel));
	}
}
