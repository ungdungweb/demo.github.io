
	<?php
		 include("include/config.php");
		 mysqli_query("SET NAMES utf8");
		 if(isset($_POST["maBN"])&& isset($_POST["ngaykham"])&& isset($_POST["ngayxuat"]) && isset($_POST["chuandoan"])&& isset($_POST["dienbien"])&& isset($_POST["tinhtrang"]))
		{
			$maBN=$_REQUEST["maBN"];
			
			$ngaykham=implode("-",array_reverse(explode("/",$_POST["ngaykham"])));
			$ngayxuat=implode("-",array_reverse(explode("/",$_POST["ngayxuat"])));
			
			$chuandoan=$_REQUEST["chuandoan"];
			$dienbien=$_REQUEST["dienbien"];
			$tinhtrang=$_REQUEST["tinhtrang"];
			
			$id= $_POST["sua2"];
		 $sql="update tblbenhan set maBenhnhan='".$maBN."' ,chuanDoan='".$chuandoan."', ngayNhapvien='".$ngaykham."', ngayXuatvien='".$ngayxuat."',dienBienbenh='".$dienbien."', tinhTrang='".$tinhtrang."' WHERE maBenhan='$id'";
		 mysqli_query($sql,$connect);
		header("Location:BacSi.php?page=QLBA");
	
		
		 }
		else
			echo "Thông tin nhập vào phải hợp lệ";
		mysqli_close($connect);
	 ?>
