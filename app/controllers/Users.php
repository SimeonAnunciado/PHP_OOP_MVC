<?php 

class Users extends Controller{
	public function __construct(){
		$this->userModel = $this->model('User');
	}

	public function register(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$data = [
			'name' => trim($_POST['name']),
			'email' => trim($_POST['email']),
			'password' => trim($_POST['password']),
			'confirm_password' => trim($_POST['confirm_password']),
			// error handler
			'name_err' => '',
			'email_err' => '',
			'password_err' => '',
			'confirm_password_err' => ''
			];

		if (empty($data['name'])) {
			$data['name_err'] = 'Invalid Please enter Name.';
		}
		if (empty($data['email'])) {
			$data['email_err'] = 'Invalid Please enter email.';
		}else{
			if ($this->userModel->findUserByEmail($data['email'])) {
				$data['email_err'] = 'Email Already Taken';
			}
		}

		if (empty($data['password'])) {
			$data['password_err'] = 'Invalid Please enter Password';
		}else if(strlen($data['password']) < 6 ){
			$data['password_err'] = 'Please enter Password Atleast 6 Characters';
		}

		if (empty($data['confirm_password'])) {
			$data['confirm_password_err'] = 'Invalid Please Enter Confirm Password';
		}
		else{
			if ($data['confirm_password'] != $data['password']) {
				$data['confirm_password_err'] = 'Password Does not matched';
			}
		}

		if (empty($data['name_err']) AND empty($data['email_err']) AND empty($data['password_err']) AND  empty($data['confirm_password_err']) ) {
			$data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

			if ($this->userModel->Register($data)) {
				flash('success_register', 'Registered success you can now login');
				redirect('users/login');
			}else{
				die('Something Went Wrong');
			}

		}else{
			$this->view('users/register',$data);
		}




		}else{
			$data = [
				'name' => '',
				'email' => '',
				'password' => '',
				'confirm_password' => '',
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => ''
			];

			$this->view('users/register',$data);
		}
	}

	public function login(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$data = [
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'email_err' => '',
				'password_err' => '',
			];

			if (empty($data['email'])) {
				$data['email_err'] = 'Please enter Valid email';
 			}
 			if (empty($data['password']) ) {
				$data['password_err'] = 'Please Enter Password';
 			}

 			// check if all input are valid
 			if (empty($data['email_err']) && empty($data['password_err ']) ) {
 				die('success login');
 			}else{
 				$this->view('users/login',$data);
 			}



		}else{
			$data = [
		
				'email' => '',
				'password' => '',
				'email_err' => '',
				'password_err' => '',
			];

			$this->view('users/login',$data);
		}
	}
}

?>