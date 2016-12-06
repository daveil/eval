<?php
class LrnsController extends AppController {

	var $name = 'Lrns';

	function index() {
		$this->Lrn->recursive = 0;
		$this->set('lrns', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid lrn', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lrn', $this->Lrn->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lrn->create();
			$this->data['Lrn']['encoded_by']=$_SESSION['Auth']['User']['username'];
			if ($this->Lrn->save($this->data)) {
				$this->Session->setFlash(__('The lrn has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lrn could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid lrn', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Lrn']['encoded_by']=$_SESSION['Auth']['User']['username'];
			if ($this->Lrn->save($this->data)) {
				$this->Session->setFlash(__('The lrn has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lrn could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lrn->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for lrn', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lrn->delete($id)) {
			$this->Session->setFlash(__('Lrn deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Lrn was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
