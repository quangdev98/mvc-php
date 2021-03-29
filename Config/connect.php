<?php
// try{
// 	$sql = 'mysql:host=localhost;dbname=mvc_blog';
// 	$conn = new PDO($sql,'root','',[
// 		PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
// 		PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
// 	]);
// 	//tạo bảng
// 	$query = "CREATE TABLE new (
// 		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// 		title VARCHAR(30) NOT NULL,
// 	    content TEXT,
// 	    add_date TIMESTAMP
// 	)";
// 	$conn->exec($query);
// 	// echo "Tạo bảng thành công!";
// 	//insert
// 	$query_insert = "INSERT INTO new (title, content) VALUES ('Quang dev','lorem lorom lorom')";
// 	$conn->exec($query_insert);
// 	// echo "Thêm dữ liệu thành công!";
// }
// catch (PDOException $e) {
//     echo $e->getMessage();
// }
 
// // Ngắt kết nối
// $conn = null;
//  ?>
