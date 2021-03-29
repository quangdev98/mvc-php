<?php
class category extends Controller{
	function index(){
		$getCate = $this->model('admin/CategorysModel');
  		$this->view('Admin/master',[
  			"Page"=>'cate_list',
  			'data'=>$getCate->getCate()
  		]);
	}
	function add_cate(){
    $CateAdd = $this->model('admin/CategorysModel');
		$this->view('Admin/master',[
			"Page"=>'cate_add',
      'data'=>$CateAdd->add()
		]);
	}
  function update(){
    $getCate = $this->model('admin/CategorysModel');
      $this->view('Admin/master',[
        "Page"=>'cate_edit',
        'data'=>$getCate->update()
      ]);
  }
  function delete(){
    $CateDelete = $this->model('admin/CategorysModel');
    $this->view('Admin/master',[
      "Page"=>'cate_list',
      'data'=>$CateDelete->delete()
    ]);
  }
}