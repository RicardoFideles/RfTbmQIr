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

	public function add_noticia($id = null) {
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
}
