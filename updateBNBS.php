
	
	<?php
		 include("include/config.php");
		 mysqli_query("SET NAMES utf8");
		 if(isset($_POST["tenbn"])&& isset($_POST["gioitinh"])&& isset($_POST["diachi"])&& isset($_POST["ngaysinh"]) && isset($_POST["cmnd"])&& isset($_POST["dantoc"])&& isset($_POST["nn"])&& isset($_POST["bhyt"])&& isset($_POST["khoa"]))
		 {
		 			$tenBN = $_POST["tenbn"];
					$diaChi = $_POST["diachi"];
					$ngaysinh = implode("-",array_reverse(explode("/",$_POST["ngaysinh"])));
					$gioitinh =$_POST["gioitinh"];					
					$cmnd = $_POST["cmnd"];
					$dantoc = $_POST["dantoc"];
					$nghenghiep = $_POST["nn"];
					$BHYT = $_POST["bhyt"];
					$ngoaituyen=$_POST["ngoaituyen"];
					$gioithieu=$_POST["gioithieu"];
					$khoakham = $_POST["khoa"];
				    $id= $_POST["sua2"];
		 $sql="update tblbenhnhan set tenBenhnhan='".$tenBN."' , diaChi='".$diaChi."', ngaySinh='".$ngaysinh."', gioiTinh='".$gioitinh."', CMND='".$cmnd."', danToc='".$dantoc."', ngheNghiep='".$nghenghiep."', BHYT='".$BHYT."',ngoaiTuyen='".$ngoaituyen."',tinhTrang='".$gioithieu."', maKhoa='".$khoakham."' WHERE maBenhnhan='$id'";
		 mysqli_query($sql,$connect);
		  header("Location:BacSi.php?page=QLBN");
		  
		
		 }
		else
			echo "Thông tin nhập vào phải hợp lệ";
		mysqli_close($connect);
	 ?>

   
