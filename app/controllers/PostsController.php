<?php

namespace app\controllers;
use app\models\Post;
use sagalaya\extensions\security\Auth;

class PostsController extends \lithium\action\Controller {
	public $publicActions = array(index);

    public function _message($value)
    {
        \lithium\storage\Session::write('message', $value);
    }

	public function index() {
		$posts = Post::findAll(array(
			
		));
        return array('foo' => 'bar', 'title' => 'Posts','posts'=>$posts);
    }
	
	public function add() {
		$success = false;
		$session = Auth::check('default');
		$wawaw = $session->id;
		if ($this->request->data){
				$post = new Post($this->request->data);
				//$success = $post->save();
			if ($post->save()){
				$this->_message('Successfully to create post');
        		$this->redirect('Posts::index');
        	} else {
        		$this->_message('Failed to create post, please check the error');
        		$errors = $post->getErrors();
    		}
    	}
	    return compact('posts','success','wawaw');
	}
}
?>
