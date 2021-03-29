<?php  
 /**
  * 
  */
 class Posts extends Controller
 {
 	
 	public function index(){
 		$post = $this->model('admin/PostsModel');
 		$this->view('Admin/master',[
  			"Page"=>'post_list',
  			'data'=>$post->getPost()
  		]);
 	}
 	public function add(){
 		$postAdd = $this->model('admin/PostsModel');
 		$this->view('Admin/master',[
 			"Page"=>'post_add',
 			'data'=>$postAdd->add()
 		]);
 	}
 	public function update(){
 		$postUpdate = $this->model('admin/PostsModel');
 		$this->view('Admin/master',[
 			"Page"=>'post_edit',
 			'data'=>$postUpdate->update()
 		]);
 	}
 	public function delete(){
 		$post = $this->model('admin/PostsModel');
 		$this->view('Admin/master',[
  			"Page"=>'post_list',
  			'data'=>$post->delete()
  		]);
 	}
 }


?>