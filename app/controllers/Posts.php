<?php 

class Posts extends Controller{

	public function __construct(){
		if (!isLoggedIn()) {
			redirect('users/login');
		}

		$this->postModel = $this->model('Post');
		$this->userModel = $this->model('User');
	}


	public function index(){
		$post = $this->postModel->getPosts();

		$data = [
			'posts' => $post
		];

		$this->view('posts/index',$data);
	}

	public function add(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = [
			'title'=> trim($_POST['title']),
			'body' => trim($_POST['body']),
			'user_id' => $_SESSION['user_id'],
		// error variable handler
			'title_err' => '',
			'body_err' => ''
			];


			if (empty($data['title'])) {
				$data['title_err'] = 'Please  enter Title';
			}
			if (empty($data['body'])) {
				$data['body_err'] = 'Please  enter Post Body';
			}

			if (empty($data['title_err']) && empty($data['body_err'])) {
				if ($this->postModel->addPost($data)) {
					flash('post_message', 'Post added');
					redirect('posts');
				}else{
					die('Something went wrong');
				}
				
			}else{
				$this->view('posts/add',$data);
			}
			
		}else{
			$data = [
			'title'=> '',
			'body' => '',
			// error variable handler
			'title_err' => '',
			'body_err' => '',
			];
		$this->view('posts/add',$data);	

		}

	}

	public function show($id){
		$post = $this->postModel->getPostById($id);
		$user = $this->userModel->getUserBtId($post->user_id);
		$data = [
			'post' => $post,
			'user' => $user,

		];

		$this->view('posts/show',$data);
	}

}

?>