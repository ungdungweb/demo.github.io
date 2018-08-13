
	  <?php
		 include("include/config.php");
		 if(isset($_POST['maba']))
		 {
		    $ma = $_POST["xoa"];
		    $result=mysqli_query("Select * from tblthanhtoandot where hoaDonID like'$ma'");
		    if(mysqli_num_rows($result!=0))
		    {
				echo "<script>alert('không có');</script>";	
		    }
			else
			{
		 		$sql = "Delete From tblthanhtoandot WHERE hoaDonID like'$ma'";
			 mysqli_query($sql,$connect);
		 	echo "Đã xóa thành công";
			header("Location:nguoitiepbenh.php?page=thanhtoandot");	
			}
		 mysqli_close($connect);
		 }
		 else
		 echo"k lay dc mbn";
	 ?>
