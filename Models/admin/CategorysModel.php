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
	public function add($name){
			$sql_ = "INSERT INTO category(name) VALUES('$name')";
			$stmt= $this->conn->prepare($sql_);
			return $stmt->execute();
	}
	public function getdata($id)
	{
			$sql_ = "SELECT * FROM category WHERE category.id = $id";
			$stmt= $this->conn->prepare($sql_);
			$stmt->execute();
			// print_r($stmt->fetch(PDO::FETCH_BOTH));	
			return $stmt->fetch(PDO::FETCH_BOTH);
	}

	// public function update($name,$id){
	// 	try{
			
	// 		$update = "UPDATE category SET name = '$name' WHERE id = $id";
	// 		$query= $this->conn->prepare($update);
	// 		return $query->execute();
			

	// 	}catch (PDOException $e){
	// 		echo $e->getMessage();
	// 		return [];
	// 	}
	// }
	public function delete($id){
		// $id= $_GET['id'];
		$sql_ = "DELETE FROM category WHERE category.id = $id";
		$stmt= $this->conn->prepare($sql_);
		return $stmt->execute();
		
	}

}
?>