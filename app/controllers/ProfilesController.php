<?php

namespace app\controllers;

use app\models as Model;

class ProfilesController extends \lithium\action\Controller
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
        $profiles = Model\User::findAll();

        return compact('profiles');
    }

    public function create()
    {
        if ($this->request->data) {
        	$profile = new Model\Profile($this->request->data);
        	if($profile->save()) {
        		$this->_message('Successfully to create profile');
        		$this->redirect('Users::index');
        	} else {
        		$this->_message('Failed to create profile, please check the error');
        		$errors = $profile->getErrors();
        	}

        }

        return compact('user', 'errors');
    }
}
