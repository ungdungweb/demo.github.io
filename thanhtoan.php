<?php
		 include("include/config.php");
		 mysqli_query("SET NAMES utf8");
		
			$naythanhtoan= date("20y-m-d"); 
			$id= $_POST["thanhtoan"];
		 $sql="update tblbenhan set ngayThanhToan='".$naythanhtoan."'  WHERE maBenhan='$id'";
		 mysqli_query($sql,$connect);
		include ('include/hoadon.php');
		

		 
		mysqli_close($connect);
	 ?>