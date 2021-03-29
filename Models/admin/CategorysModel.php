<?php  
class CategorysModel extends database{
	public function getCate(){
		try{
			$sql_ = "SELECT count(post.cate_id) as numberPost, category.id, category.name FROM post RIGHT JOIN category on post.cate_id = category.id GROUP BY category.id";
			$stmt =$this->conn->prepare($sql_);
			$stmt->setFetchMode(PDO::FETCH_OBJ);
			$stmt->execute();
			// print_r($stmt);
			$red = $stmt->fetchAll();
			return $red;
		}catch (PDOException $e){
			echo $e->getMessage();
			return [];
		}
	}
	public function add(){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (!empty($_POST['name'])){ $name = $_POST['name']; }
			$sql_ = "INSERT INTO category(name) VALUES('$name')";
			$stmt= $this->conn->prepare($sql_);
			$result = $stmt->execute();
			if ($result) {
				header('location: '.Helper::getUrlPage(category));

			}
		}
			 // echo "Thêm dữ liệu thành côngfgdgfj";
	}
	public function update(){
		try{

		$id= $_GET['id'];
		$sql_ = "SELECT * FROM category WHERE category.id = $id";
		$stmt= $this->conn->prepare($sql_);
		// $stmt->setFetchMode(PDO::FETCH_OBJ);
		$stmt->execute();
		$red = $stmt->fetch(PDO::FETCH_BOTH);
		if (isset($_POST['submit'])) {
			if (!empty($_POST['name'])){ $name = $_POST['name']; }$name = $_POST['name'];
			$update = "UPDATE category SET name = '$name' WHERE id = $id";
			$query= $this->conn->prepare($update);
			$results = $query->execute();
			if ($results) {
				header('location: '.Helper::getUrlPage(category));
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
		$sql_ = "DELETE FROM category WHERE category.id = $id";
		$stmt= $this->conn->prepare($sql_);
		$result = $stmt->execute();
		if ($result) {
			if ($result) {
				header('location: '.Helper::getUrlPage(category));

			}
		}
	}

}
?>