<?php
App::uses('AppController', 'Controller');
/**
* Comments Controller
*
* @property Comment $Comment
* @property PaginatorComponent $Paginator
*/
class CommentsController extends AppController {

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
	public function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->Paginator->paginate());
	}

/**
* view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
	public function view($id = null) {
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
		$this->set('comment', $this->Comment->find('first', $options));
	}

/**
* add method
*
* @return void
*/
	public function add() {
		if ($this->request->is('post')) {
			
			if ($this->Recaptcha->verify()) {
				
				$this->loadModel('Establishment');
				
				$id = $this->request->data['Establishment']['id'];
		
				if (!$this->Establishment->exists($id)) {
					$this->Session->setFlash("Ocorreu um erro tente novamente.");
					$this->redirect($this->referer());
				}
				
				$establishment = $this->Establishment->read(null, $id);
				
				if (!empty($this->request->data['Establishment']['visual'])) {
						
					$visual = $establishment['Establishment']['visual'];
					$total_visual = $establishment['Establishment']['visual_count'];
					
					$visual += $this->request->data['Establishment']['visual'];
					$total_visual += 1;
					
					$this->Establishment->set('visual', $visual);
					$this->Establishment->set('visual_count', $total_visual);
				}
				
				
				if (!empty($this->request->data['Establishment']['auditiva'])) {
						
					$auditiva = $establishment['Establishment']['auditiva'];
					$total_auditiva = $establishment['Establishment']['auditiva_count'];
					
					$auditiva += $this->request->data['Establishment']['auditiva'];
					$total_auditiva += 1;
					
					$this->Establishment->set('auditiva', $auditiva);
					$this->Establishment->set('auditiva_count', $total_auditiva);
				}
				
				
				if (!empty($this->request->data['Establishment']['motora'])) {
						
					$motora = $establishment['Establishment']['motora'];
					$total_motora = $establishment['Establishment']['motora_count'];
					
					$motora += $this->request->data['Establishment']['motora'];
					$total_motora += 1;
					
					$this->Establishment->set('motora', $motora);
					$this->Establishment->set('motora_count', $total_motora);
				}
				
				
				if (!empty($this->request->data['Establishment']['intelectual'])) {
						
					$intelectual = $establishment['Establishment']['intelectual'];
					$total_intelectual = $establishment['Establishment']['intelectual_count'];
					
					$intelectual += $this->request->data['Establishment']['intelectual'];
					$total_intelectual += 1;
					
					$this->Establishment->set('intelectual', $intelectual);
					$this->Establishment->set('intelectual_count', $total_intelectual);
				}
				
				if ($this->Establishment->save()) {
					
					$this->request->data['Comment']['user_id'] = 2;
					$this->request->data['Comment']['status'] = 'aguardando';
					$this->request->data['Comment']['establishment_id'] = $id;
					
					
					$this->Comment->create();
					if ($this->Comment->save($this->request->data)) {
						$this->redirect($this->referer());
					} else {
						$this->Session->setFlash(__('Ocorreu um erro tente novamente.'));
						$this->redirect($this->referer());
					}
					
					
				}
				
		    } else {
		        $this->Session->setFlash($this->Recaptcha->error);
				$this->redirect($this->referer());
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
	public function edit($id = null) {
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
			$this->request->data = $this->Comment->find('first', $options);
		}
		$users = $this->Comment->User->find('list');
		$establishments = $this->Comment->Establishment->find('list');
		$news = $this->Comment->News->find('list');
		$interviews = $this->Comment->Interview->find('list');
		$people = $this->Comment->Person->find('list');
		$this->set(compact('users', 'establishments', 'news', 'interviews', 'people'));
	}

/**
* delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
	public function delete($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('The comment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}