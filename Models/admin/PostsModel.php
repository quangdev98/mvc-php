<?php  
	class PostsModel extends database{
		public function getPost(){
			try{
				$productQuery = "SELECT post.id,post.title,post.contentHot,category.name as categoryName, user.name as author FROM post 
				LEFT JOIN category on post.cate_id = category.id
				LEFT JOIN user on post.user_id = user.id";
				$pro = $this->conn->prepare($productQuery);
				$pro -> setFetchMode(PDO::FETCH_OBJ);
				$pro->execute();
				$query = $pro->fetchAll();
				return $query;
			}catch(PDOException $e){
				echo $e->getMessage();
				return [];
			}
		}
		public function add(){
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (!empty($_POST['title'])){ $title = $_POST['title']; }
				if (!empty($_POST['contentHot'])){ $contentHot = $_POST['contentHot']; }
				if (!empty($_POST['tag'])){ $tag = $_POST['tag']; }
				if (!empty($_FILES['image']['name'])) {
					$imageFile = $_FILES['image'];
					move_uploaded_file($imageFile['tmp_name'], '../../Assets/Admin_asset/images/post/'.$imageFile['name']);
					$image= $imageFile['name'];
				}
				if (!empty($_POST['content'])){ $content = $_POST['content']; }
				if (!empty($_POST['user_id'])){ $user_id = $_POST['user_id']; }
				if (!empty($_POST['cate_id'])){ $cate_id = $_POST['cate_id']; }
				$sql_ = "INSERT INTO post(title,contentHot,image,tag,content,user_id,cate_id) 
						VALUES('$title','$contentHot','$image','$tag','$content','$user_id','$cate_id')";
				$stmt = $this->conn->prepare($sql_);
				$result = $stmt->execute();
				if ($result) {
					header('location: '.Helper::getUrlPage(posts));
				} else{
					echo "Có lỗi trong quá trình thêm mới <br/> Vui lòng thử lại.";
				}
			}
			$getCateId = "SELECT category.id, category.name FROM category";
			$cateId = $this->conn->prepare($getCateId);
			$cateId -> setFetchMode(PDO::FETCH_OBJ);
			$cateId->execute();
			$queryCate = $cateId->fetchAll();
			// 
			$getUserId = "SELECT user.id, user.name FROM user";
			$userId = $this->conn->prepare($getUserId);
			$userId -> setFetchMode(PDO::FETCH_OBJ);
			$userId->execute();
			$queryUser = $userId->fetchAll();
			return ['categories'=>$queryCate,'users'=>$queryUser];
		}
		public function update(){
			try{
				$id= $_GET['id'];
				$sql_ = "SELECT * FROM post WHERE post.id = $id";
				$stmt= $this->conn->prepare($sql_);
				$stmt->execute();
				$red = $stmt->fetch(PDO::FETCH_BOTH);
				if (isset($_POST['submit'])) {
					if (!empty($_POST['title'])){ $title = $_POST['title']; }
					if (!empty($_POST['contentHot'])){ $contentHot = $_POST['contentHot']; }
					if (!empty($_POST['image'])){ $image = $_POST['image']; }
					if (!empty($_POST['tag'])){ $tag = $_POST['tag']; }
					if (!empty($_POST['content'])){ $content = $_POST['content']; }
					if (!empty($_POST['user_id'])){ $user_id = $_POST['user_id']; }
					if (!empty($_POST['cate_id'])){ $cate_id = $_POST['cate_id']; }
					$update = "UPDATE post SET title = '$title',contentHot = '$contentHot',image = '$image',tag = '$tag',content = '$content',user_id = '$user_id',cate_id = '$cate_id' WHERE id = $id";
					$query= $this->conn->prepare($update);
					$results = $query->execute();
					if ($results) {
						header('location: '.Helper::getUrlPage(posts));
					}
				}
				$getCateId = "SELECT category.id, category.name FROM category";
				$cateId = $this->conn->prepare($getCateId);
				$cateId -> setFetchMode(PDO::FETCH_OBJ);
				$cateId->execute();
				$queryCate = $cateId->fetchAll();
				// 
				$getUserId = "SELECT user.id, user.name FROM user";
				$userId = $this->conn->prepare($getUserId);
				$userId -> setFetchMode(PDO::FETCH_OBJ);
				$userId->execute();
				$queryUser = $userId->fetchAll();
				return ['select'=>$red,'categories'=>$queryCate,'users'=>$queryUser];
			// return $red;
			}catch (PDOException $e){
				echo $e->getMessage();
				return [];
			}
		}
		public function delete(){
			$id= $_GET['id'];
			$sql_ = "DELETE FROM post WHERE post.id = $id";
			$stmt= $this->conn->prepare($sql_);
			$result = $stmt->execute();
			if ($result) {
				if ($result) {
					header('location: '.Helper::getUrlPage(posts));

				}
			}
		}
	}

?>