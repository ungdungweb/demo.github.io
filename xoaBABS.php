
	  <?php
		 include("include/config.php");
		 if(isset($_POST['logid']))
		 {
		    $ma = $_POST["xoa"];
		    $result=mysqli_query("Select * from tblbenhanbacsi where logID like'$ma'");
		    if(mysqli_num_rows($result!=0))
		    {
				echo "<script>alert('không có');</script>";	
		    }
			else
			{
		 		$sql = "Delete From tblbenhanbacsi WHERE logID like'$ma'";
			 mysqli_query($sql,$connect);
		 	echo "Đã xóa thành công";
			header("Location:BacSi.php?page=QLBA");	
			}
		 mysqli_close($connect);
		 }
		 else
		 echo"k lay dc mbn";
	 ?>
