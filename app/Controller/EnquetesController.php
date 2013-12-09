<?php
App::uses('AppController', 'Controller');
/**
 * Enquetes Controller
 *
 * @property Enquete $Enquete
 * @property PaginatorComponent $Paginator
 */
class EnquetesController extends AppController {

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
		$this->Enquete->recursive = 0;
		$this->set('enquetes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Enquete->exists($id)) {
			throw new NotFoundException(__('Invalid enquete'));
		}
		$options = array('conditions' => array('Enquete.' . $this->Enquete->primaryKey => $id));
		$this->set('enquete', $this->Enquete->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Enquete->create();
			if ($this->Enquete->save($this->request->data)) {
				$this->Session->setFlash(__('The enquete has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The enquete could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Enquete->exists($id)) {
			throw new NotFoundException(__('Invalid enquete'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Enquete->save($this->request->data)) {
				$this->Session->setFlash(__('The enquete has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The enquete could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Enquete.' . $this->Enquete->primaryKey => $id));
			$this->request->data = $this->Enquete->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Enquete->id = $id;
		if (!$this->Enquete->exists()) {
			throw new NotFoundException(__('Invalid enquete'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Enquete->delete()) {
			$this->Session->setFlash(__('The enquete has been deleted.'));
		} else {
			$this->Session->setFlash(__('The enquete could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
