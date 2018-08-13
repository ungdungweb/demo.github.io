
	<?php
	session_start();
	include("include/config.php");
	mysqli_query("SET NAMES utf8");
	if(isset($_POST["tenbs"])&& isset($_POST["khoa"])&& isset($_POST["ngaysinh"])&& isset($_POST["gioitinh"]) && isset($_POST["diachi"])&& isset($_POST["cmnd"])&& isset($_POST["trinhdo"])&& isset($_POST["email"])&& isset($_POST["sodt"]))
		{
		
			$tenbs=$_REQUEST["tenbs"];
			$khoa=$_REQUEST["khoa"];
			$ngaysinh=implode("-",array_reverse(explode("/",$_POST["ngaysinh"])));
			$gioitinh=$_REQUEST["gioitinh"];
			$diachi=$_REQUEST["diachi"];
			$cmnd=$_REQUEST["cmnd"];
			$trinhdo=$_REQUEST["trinhdo"];
			$email=$_REQUEST["email"];
			$sodt=$_REQUEST["sodt"];
		}
	$sql="Select * from tblbacsi Where CMND='".$cmnd."'";
	$query=mysqli_query($sql,$connect);
	if(mysqli_num_rows($query)!=0)
		{
			echo trim("<script>alert('CMND  đã tồ tại');</script><meta http-equiv='refresh' content='0; url=BacSi.php?page=QLBS'>");	
		}
										
		else
		 {
	$count= mysqli_query('SELECT COUNT(maBacsi) FROM  tblbacsi');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			if($ms<9)
            $t='BS00';
         else
		 	if($ms<98)
            $t='BS0';
			$ma=$ms;
            $ms=$ms+1;
            $add="$t$ms";		
			$sql="INSERT INTO tblbacsi(maBacsi,tenBacsi,maKhoa,ngaySinh,gioiTinh,diaChi,CMND,trinhDo,Email,soDT) VALUES('$add','$tenbs','$khoa','$ngaysinh','$gioitinh','$diachi','$cmnd','$trinhdo','$email','$sodt')";   
          header("Location:BacSi.php?page=QLBS");
		  
		  
		   $query=mysqli_query($sql,$connect);
			mysqli_close($connect);
		 }
	?>
    
