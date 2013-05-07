<?php

namespace app\controllers;

use app\models\Helps;
use lithium\action\DispatchException;

class HelpsController extends \lithium\action\Controller {

	public function index() {
		$helps = Helps::all();
		return compact('helps');
	}

	public function view() {
		$help = Helps::first($this->request->id);
		return compact('help');
	}

	public function add() {
		$help = Helps::create();

		if (($this->request->data) && $help->save($this->request->data)) {
			return $this->redirect(array('Helps::view', 'args' => array($help->id)));
		}
		return compact('help');
	}

	public function edit() {
		$help = Helps::find($this->request->id);

		if (!$help) {
			return $this->redirect('Helps::index');
		}
		if (($this->request->data) && $help->save($this->request->data)) {
			return $this->redirect(array('Helps::view', 'args' => array($help->id)));
		}
		return compact('help');
	}

	public function delete() {
		if (!$this->request->is('post') && !$this->request->is('delete')) {
			$msg = "Helps::delete can only be called with http:post or http:delete.";
			throw new DispatchException($msg);
		}
		Helps::find($this->request->id)->delete();
		return $this->redirect('Helps::index');
	}
}

?>