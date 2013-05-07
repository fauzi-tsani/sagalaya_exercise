<?php

namespace app\controllers;

	use app\models\User;

class UsersController extends \lithium\action\Controller
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
        $users = User::findAll();
        $usersfilter = User::findAll(/*array(
			'where' =>	array(
				'and' => array(
	            	//array('email' => array('like' => '%@gmail.com%'))

					//array('active' => array('eq' => '1')),
    	    	),
				'or' => array(
					//array('email' => array('like' => 'x%')),
				)
			
			),
			'leftJoin'=>array(
				array(
					'field'=>'profile',
					'where'=>array(
						array('fullname'=>array('like'=>'x%'))
					)
				)
			)
		)*/);
		$usersfilter = User::searchUser();
		$usersfilter2 = User::searchUser();
        return compact('users','usersfilter','usersfilter2');
    }
    public function search(){
        $filter =  User::findAll();
        if($this->request->data){
            $filter = User::searchUser($this->request->data);
        }
        return compact('filter','errors');
    }
    
    public function create()
    {
        if ($this->request->data) {
        	$user = new User($this->request->data);
        	if($user->save()) {
        		$this->_message('Successfully to create User '.$this->request->data['usertype[user_type]']);
        		$this->redirect('Users::index');
        	} else {
        		$this->_message('Failed to create User, please check the error');
        		$errors = $user->getErrors();	
        	}
        }

        return compact('user', 'errors');
    }

    public function edit()
    {
        if ($this->request->id) {

        	$user = User::get($this->request->id);
        	if($this->request->data) {
        		$user->properties = $this->request->data;
        		if($user->save()) {
        			$this->_message('Successfully to update User');
        			$this->redirect('Users::index');
        		} else {
        			$this->_message('Failed to update User, please check the error');
        			$errors = $user->getErrors();
        		}
        	}

        } else {
        	$this->_message('Must provide id to edit User');
        	$this->redirect($this->request->referer());
        }

        return compact('user', 'errors');
    }

    public function view()
    {
        if ($this->request->id) {
        	$user = User::get($this->request->id);
        }

        return compact('user');
    }

    public function delete()
    {
        if ($this->request->id) {
        	$user = User::get($this->request->id);
        	$user->delete();
        	$this->_message('Success to delete User');
        	$this->redirect('Users::index');
        	return true;
        }

        $this->_message('User id cannot be empty');
        $this->redirect($this->request->referer());
        return false;
    }


}

?>
