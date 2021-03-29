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
 }


?>