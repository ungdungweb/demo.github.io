
	<?php
		 include("include/config.php");
		 mysqli_query("SET NAMES utf8");
		 if(isset($_POST["tenbs"])&& isset($_POST["khoa"])&& isset($_POST["ngaysinh"])&& isset($_POST["gioitinh"]) && isset($_POST["diachi"])&& isset($_POST["cmnd"])&& isset($_POST["trinhdo"])&& isset($_POST["email"])&& isset($_POST["sodt"]))
		 {
		 			$tenbs = $_POST["tenbs"];
					$khoa = $_POST["khoa"];
					$ngaysinh = implode("-",array_reverse(explode("/",$_POST["ngaysinh"])));
					$gioitinh =$_POST["gioitinh"];					
					$diachi = $_POST["diachi"];
					$cmnd = $_POST["cmnd"];
					$trinhdo = $_POST["trinhdo"];
					$email = $_POST["email"];
					$sodt = $_POST["sodt"];
				    $id= $_POST["sua2"];
		 $sql="update tblbacsi set tenBacsi='".$tenbs."' , maKhoa='".$khoa."', ngaySinh='".$ngaysinh."', gioiTinh='".$gioitinh."', diaChi='".$diachi."', CMND='".$cmnd."', trinhDo='".$trinhdo."', Email='".$email."', soDT='".$sodt."' WHERE maBacsi='$id'";
		 mysqli_query($sql,$connect);
		header("Location:BacSi.php?page=QLBS");
		
		 }
		else
			echo "Thông tin nhập vào phải hợp lệ";
		mysqli_close($connect);
	 ?>
