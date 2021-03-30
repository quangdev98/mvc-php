<?php  
/**
 * quangdev
 */
class Users extends Controller
{
	
	public function index(){
		$user = $this->model('admin/UsersModel');
		$this->view('Admin/master',[
			"Page"=>'user_list', 
			"data"=>$user->index()
		]);
	}
	public function create(){
    	$UserAdd = $this->model('admin/UsersModel');
		$this->view('Admin/master',[
			"Page"=>'user_add',
      		'data'=>$UserAdd->add()
		]);
	}
	public function update(){
		$getUser = $this->model('admin/UsersModel');
	  $this->view('Admin/master',[
	    "Page"=>'user_edit',
	    'data'=>$getUser->update()
	  ]);
	}
	public function delete(){
		$UserDelete = $this->model('admin/UsersModel');
		$this->view('Admin/master',[
		  "Page"=>'user_list',
		  'data'=>$UserDelete->delete()
		]);
	}
}


?>