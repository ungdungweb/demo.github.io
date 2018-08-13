
	<?php
	session_start();
	include("include/config.php");
	if(isset($_POST["mabenhan"])&& isset($_POST["ngaytra"])&& isset($_POST["sotien"]))
		{
			$maBA=$_REQUEST["mabenhan"];
			
			//$ngaytra=implode("-",array_reverse(explode("/",$_POST["ngaytra"])));
			
			$sottien=$_REQUEST["sotien"];
			$ngaytra= date("20y-m-d");
		}
	
	$count= mysqli_query('SELECT COUNT(hoaDonID) FROM  tblthanhtoandot');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			if($ms<9)
            $t='DOT00';
         else
		 	if($ms<98)
            $t='DOT0';
			$ma=$ms;
            $ms=$ms+1;
            $add="$t$ms";		
			$sql="INSERT INTO tblthanhtoandot(hoaDonID,maBenhan, ngayTra,soTien) VALUES ('$add','$maBA','$ngaytra','$sottien')";
        header("Location:nguoitiepbenh.php?page=thanhtoandot");
		echo "$sql";
		   $query=mysqli_query($sql,$connect);
			mysqli_close($connect);
	?>
    
