
	  <?php
		 include("include/config.php");
		 if(isset($_POST['mabn']))
		 {
		    $ma = $_POST["xoa"];
		    $result=mysqli_query("Select * from tblbenhan where maBenhnhan like'$ma'");
		    if(mysqli_num_rows($result!=0))
		    {
				echo "<script>alert('không có');</script>";	
		    }
			else
			{
		 		$sql = "Delete From tblbenhnhan WHERE maBenhnhan like'$ma'";
			 mysqli_query($sql,$connect);
		 	echo "Đã xóa thành công";
			header("Location:BacSi.php?page=QLBN");
			}
		 mysqli_close($connect);
		 }
		 else
		 echo"k lay dc mbn";
	 ?>
