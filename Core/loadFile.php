<?php  
include 'Config/config.php';
public function __construct() 
{
	foreach ($autoLoad as $file) {
	    include 'Core/' . $file . '.php';
	    $$file = new $file();
	}
	//LOAD FILE TRONG MODELS
	foreach ($autoLoadModel as $file) {
	    include 'Models/'.$file .'.php';
	}
	// echo $controllerName;
	if (file_exists('ControllerS/'.$controllerName.'.php')) {
	    include 'ControllerS/'.$controllerName.'.php';
	} else {
	    echo ('File Not Found !!');
	};
	$controller = new $controllerName();
	if (method_exists($controller, $action)) {
	    $controller->$action();
	} else {
	    echo "Method not Found";
	}	
}
?>