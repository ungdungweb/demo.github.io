
	<?php
	session_start();
	include("include/config.php");
	mysqli_query("SET NAMES utf8");
	if(isset($_POST["maBN"])&& isset($_POST["ngaykham"])&& isset($_POST["ngayxuat"])&& isset($_POST["chuandoan"])&& isset($_POST["dienbien"])&& isset($_POST["tinhtrang"]))
		{
			$maBN=$_REQUEST["maBN"];
			
			$ngaykham=implode("-",array_reverse(explode("/",$_POST["ngaykham"])));
			$ngayxuat=implode("-",array_reverse(explode("/",$_POST["ngayxuat"])));
			
			$chuandoan=$_REQUEST["chuandoan"];
			$dienbien=$_REQUEST["dienbien"];
			$tinhtrang=$_REQUEST["tinhtrang"];
			
		}
	
	$count= mysqli_query('SELECT COUNT(maBenhan) FROM  tblbenhan');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			if($ms<9)
            $t='BA00';
         else
		 	if($ms<98)
            $t='BA0';
			$ma=$ms;
            $ms=$ms+1;
            $add="$t$ms";		
			$sql="INSERT INTO tblbenhan(maBenhan, maBenhnhan, chuanDoan, ngayNhapvien, ngayXuatvien,dienBienbenh, tinhTrang) VALUES ('$add','$maBN','$chuandoan','$ngaykham','$ngayxuat','$dienbien','$tinhtrang')";  
			
         header("Location:BacSi.php?page=QLBA");
		
		 
		   
		   $query=mysqli_query($sql,$connect);
			mysqli_close($connect);
	?>
    
