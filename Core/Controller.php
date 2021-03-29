<?php 
class Controller{
	public function model($model){
		require_once 'Models/'.$model.'.php';
		$filter = filter_var(rtrim($model, "/"), FILTER_SANITIZE_URL);
		$modelUrl =explode("/", $filter);
		return new $modelUrl[1];
	}
	// gọi view
	public function view($view, $data=[]){
		require_once 'Views/'.$view.'.php';
		// echo $view;
	}
	
	
}
?>