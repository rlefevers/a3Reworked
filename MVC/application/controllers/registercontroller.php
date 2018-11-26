<?php

class RegisterController extends Controller{

	protected $userObject;

	public function defaultTask(){

		$this->userObject = new Users();
		$this->set('task', 'register');


	}

	public function register(){

			$this->postObject = new Users();

			$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$passhash);

			$this->userObject->addUser($data);
			$this->set('message', 'Thanks for registering!');

	}



}

?>
