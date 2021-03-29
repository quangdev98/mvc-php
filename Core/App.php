<?php 
 class App{

 	protected $controller = "admin";
 	protected $action= "index";
 	protected $params= [];



 	function __Construct(){
 		$controller_ = $this->controller;
 		$action_ = $this->action;
 		$params_ = $this->params;


 		$arr = $this->UrlProcess();
 		//xử lý controller
 		if (!isset($arr)) {
 			require_once 'Controllers/admin/'.$controller_.'.php';
 		}
 		if (file_exists('Controllers/admin/'.$arr[0].'.php')) {
		    $controller_ = $arr[0];
		    unset($arr[0]);
		}
	    require_once 'Controllers/admin/'.$controller_.'.php';
	    $controller_ = new $controller_;
	    // xử lý function 
	    if (isset($arr[1])) {
	    	if (method_exists($controller_, $arr[1])) {
	    		$action_ = $arr[1];
    		unset($arr[1]);
	    	}
	    } 
	    // print_r($arr);
	    //xử lý params
	    $params_ = $arr ? array_values($arr) : [];
	    call_user_func_array([$controller_,$action_],$params_);
 	}
 	function UrlProcess(){
 		if (isset($_GET['url'])) {
 			// print_r($u = $_GET['url']);
 			$filter = filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL);
 			return explode("/", $filter);
 		}
 	}
 }


?>