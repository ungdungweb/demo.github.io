
	  <?php
		 include("include/config.php");
		 if(isset($_POST['mabs']))
		 {
		    $ma = $_POST["xoa"];
		    $result=mysqli_query("Select * from tblbacsi where maBacsi like'$ma'");
		    if(mysqli_num_rows($result!=0))
		    {
				echo "<script>alert('không có');</script>";	
		    }
			else
			{
		 		$sql = "Delete From tblbacsi WHERE maBacsi like'$ma'";
			 mysqli_query($sql,$connect);
		 	echo "Đã xóa thành công";
			header("Location:BacSi.php?page=QLBS");
			}
		 mysqli_close($connect);
		 }
		 else
		 echo"k lay dc mbn";
	 ?>
