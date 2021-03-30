<?php  

require_once 'Models/admin/CategorysModel.php';

class CategoryService 
{
	private $model;
	
	function __construct()
	{
		$this->model = new CategorysModel();
	}


	public function create()
	{

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = !isset($_POST['name']) ? '' : $_POST['name'];
			if ($name == '') return false;
			$status = $this->model->add($name);
			
			if ($status) {
				header('location: '.Helper::getUrlPage(category));

			}
		}
	}
	public function getData()
	{
		$id= $_GET['id'];
		$status = $this->model->getdata($id);
		// print_r($status);
	}
	// public function update($id)
	// {
	// 	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 		$name = !isset($_POST['name']) ? '' : $_POST['name'];
	// 		if ($name == '') return false;
	// 		$status = $this->model->update($name,$id);
	// 		if ($status) {
	// 			header('location: '.Helper::getUrlPage(category));
	// 		}
	// 	}

	// }
	public function destroy()
	{
		$id= $_GET['id'];
		$status = $this->model->delete($id);
		if ($status) {
			header('location: '.Helper::getUrlPage(category));

		}
	}
}



?>