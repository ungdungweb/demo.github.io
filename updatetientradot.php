
	<?php
		 include("include/config.php");
		 mysqli_query("SET NAMES utf8");
		if(isset($_POST["mabenhan"])&& isset($_POST["ngaytra"])&& isset($_POST["sotien"]))
		{
				$maBA=$_REQUEST["mabenhan"];
			
			$ngaytra=implode("-",array_reverse(explode("/",$_POST["ngaytra"])));
			
			$sottien=$_REQUEST["sotien"];
			
			$id= $_POST["sua2"];
		 $sql="update tblthanhtoandot set maBenhan='".$maBA."' ,ngayTra='".$ngaytra."', soTien='".$sottien."' WHERE hoaDonID='$id'";
		 mysqli_query($sql,$connect);
		header("Location:nguoitiepbenh.php?page=thanhtoandot");
	
		
		 }
		else
			echo "Thông tin nhập vào phải hợp lệ";
		mysqli_close($connect);
	 ?>
