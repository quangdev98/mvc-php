<?php  
 /**
  * Quang dev
  */
 class UsersModel extends database
 {
 	
 	public function index(){
 		try{
	 		$userModel = "SELECT * FROM user";
	 		$userQuery = $this->conn->prepare($userModel);
			$userQuery -> setFetchMode(PDO::FETCH_OBJ);
			$userQuery->execute();
			$query = $userQuery->fetchAll();
			return $query;
		}catch(PDOException $e){
			echo $e->getMessage();
			return [];
		}
 	}
 	public function add(){
 		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (!empty($_POST['name'])){ $name = $_POST['name']; }
			if (!empty($_POST['slug'])){ $slug = $_POST['slug']; }
			if (!empty($_POST['phone'])){ $phone = $_POST['phone']; }
			if (!empty($_FILES['image']['name'])) {
				$imageFile = $_FILES['image'];
				move_uploaded_file($imageFile['tmp_name'], './Assets/Admin_asset/images/user/'.$imageFile['name']);
				$image= $imageFile['name'];
			}
			if (!empty($_POST['email'])){ $email = $_POST['email']; }
			if (!empty($_POST['password'])){ $password = $_POST['password']; }
			if (!empty($_POST['level'])){ $level = $_POST['level']; }
			$sql_ = "INSERT INTO user(name,slug,phone,image,email,password,level) 
					VALUES('$name','$slug','$phone','$image','$email','$password','$level')";

			$stmt = $this->conn->prepare($sql_);
			$data = [$name,$phone,$image,$password,$id,$email,$level,$slug];
			$result = $stmt->execute($data);
			if ($result) {
				header('location: '.Helper::getUrlPage(users));
				// var_dump($_FILES);
			} else{
				echo "Có lỗi trong quá trình thêm mới <br/> Vui lòng thử lại.";
			}
		}
 	}
 	public function update(){
		try{

		$id= $_GET['id'];
		$sql_ = "SELECT * FROM user WHERE user.id = $id";
		$stmt= $this->conn->prepare($sql_);
		// $stmt->setFetchMode(PDO::FETCH_OBJ);
		$stmt->execute();
		$red = $stmt->fetch(PDO::FETCH_BOTH);
		if (isset($_POST['submit'])) {
			if (!empty($_POST['name'])){ $name = $_POST['name']; }
			if (!empty($_POST['phone'])){ $phone = $_POST['phone']; }
			if (!empty($_POST['email'])){ $email = $_POST['email']; }
			if (!empty($_POST['password'])){ $password = $_POST['password']; }
			if (!empty($_POST['level'])){ $level = $_POST['level']; }
			$update = "UPDATE user SET name = '$name', phone = '$phone', email = '$email',password = '$password', level = '$level' WHERE id = $id";
			$query= $this->conn->prepare($update);
			$results = $query->execute();
			if ($results) {
				header('location: '.Helper::getUrlPage(users));
			}
		}
		return $red;
		}catch (PDOException $e){
			echo $e->getMessage();
			return [];
		}
	}
	public function delete(){
		$id= $_GET['id'];
		$sql_ = "DELETE FROM user WHERE user.id = $id";
		$stmt= $this->conn->prepare($sql_);
		$result = $stmt->execute();
		if ($result) {
			if ($result) {
				header('location: '.Helper::getUrlPage(users));

			}
		}
	}
 }


?>