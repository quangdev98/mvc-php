<?php  
/**
 * quangdev
 */
class Users extends Controller
{
	
	function index(){
		$user = $this->model('admin/UsersModel');
		$this->view('Admin/master',[
			"Page"=>'user_list', 
			"data"=>$user->index()
		]);
	}
}


?>