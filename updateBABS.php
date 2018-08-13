
	<?php
		 include("include/config.php");
		 mysqli_query("SET NAMES utf8");
		if(isset($_POST["maBA"])&& isset($_POST["mabs"]))
		{
			$maBA=$_REQUEST["maBA"];
			$mabs=$_REQUEST["mabs"];
			//$ngaycden=implode("-",array_reverse(explode("/",$_POST["ngaycden"])));
			$ngaycdi= date("20y-m-d"); 	
			$id= $_POST["sua2"];
		 $sql="update tblbenhanbacsi set maBenhan='".$maBA."' ,maBacsi='".$mabs."' WHERE logID='$id'";
		 mysqli_query($sql,$connect);
		header("Location:BacSi.php?page=QLBA");

		 }
		else
			echo "Thông tin nhập vào phải hợp lệ";
		mysqli_close($connect);
	 ?>
