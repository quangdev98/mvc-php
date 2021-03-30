<?php
require_once "Services/CategoryService.php";

class category extends Controller{

  private $service;

  public function __construct(){
    $this->service = new CategoryService();
  }

	function index(){
		$getCate = $this->model('admin/CategorysModel');
  		$this->view('Admin/master',[
  			"Page"=>'cate_list',
  			'data'=>$getCate->getCate()
  		]);
	}
	function add_cate(){
    $status = $this->service->create();

		$this->view('Admin/master',[
			"Page"=>'cate_add',
      'data'=>$status
		]);
	}
  function dataCate(){
    $cateService = $this->service->getData();
    var_dump($cateService);
    $this->view('Admin/master',[
      "Page"=>'cate_edit',
      'data'=>$cateService
    ]);
  }

  // function update(){
  //    $status = $this->service->update();

  //     $this->view('Admin/master',[
  //       "Page"=>'cate_edit',
  //       'data'=>$status
  //     ]);
  // }
  function delete(){
     $status = $this->service->destroy($id);
    $this->view('Admin/master',[
      "Page"=>'cate_list',
      'data'=>$status
    ]);
  }
}