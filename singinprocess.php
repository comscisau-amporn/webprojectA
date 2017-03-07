<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$uname = $_POST['uname'];
		$upassword = $_POST['upassword']; 

		$host = "localhost";
		$userdb = "root";
		$passworddb = "";
		$dbname = "comsci_db";
		$conn = mysqli_connect($host,$userdb,$passworddb,$dbname);

		$strsql = "select * from user_tb where uname='".$uname."' and upassword='".$upassword."'";

		//สั่งให้ทำงาน นำผลลัพธ์ที่ได้เก็บในตัวแปร

		$result = mysqli_query($conn, $strsql);

		//เอามาใช้งาน

		if ($row = mysqli_fetch_array($result)){
			//have data
			echo "OK";
		}else{
			//don't have data
			echo "User name และ Password ไม่ถูกต้อง";
		}


	 ?>
</body>
</html>