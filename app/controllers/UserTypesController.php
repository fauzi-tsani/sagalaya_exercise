<?php

namespace app\controllers;

use app\models as Model;

class UserTypesController extends \lithium\action\Controller
{

    /**
     * Array of function excluded from auth (has public access)
     */
    public $publicActions = array(create,view);

    public function _message($value)
    {
        \lithium\storage\Session::write('message', $value);
    }

    public function index()
    {
        $usertype = Model\UserType::findAll();

        return compact('usertype');
    }

    public function create()
    {
        if ($this->request->data) {
        	$usertype = new Model\UserType($this->request->data);
        	if($profile->save()) {
        		$this->_message('Successfully to create usertype');
        		$this->redirect('Users::index');
        	} else {
        		$this->_message('Failed to create usertype, please check the error');
        		$errors = $usertype->getErrors();
        	}

        }

        return compact('usertype', 'errors');
    }
}
