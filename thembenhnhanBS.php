
	<?php
	
	
	include("include/config.php");
	mysqli_query("SET NAMES utf8");
	if(isset($_POST["tenbn"])&& isset($_POST["gioitinh"])&& isset($_POST["diachi"])&& isset($_POST["ngaysinh"]) && isset($_POST["cmnd"])&& isset($_POST["dantoc"])&& isset($_POST["nn"])&& isset($_POST["bhyt"])&& isset($_POST["khoa"])&& isset($_POST["ngoaituyen"]))
		{
			$tenbn=$_REQUEST["tenbn"];
			$gioitinh=$_REQUEST["gioitinh"];
			$diachi=$_REQUEST["diachi"];
			$ngaysinh=implode("-",array_reverse(explode("/",$_POST["ngaysinh"])));
			$cmnd=$_REQUEST["cmnd"];
			$dantoc=$_REQUEST["dantoc"];
			$nn=$_REQUEST["nn"];
			$bhyt=$_REQUEST["bhyt"];
			$ngoaituyen=$_REQUEST["ngoaituyen"];
			$gioithieu=$_POST["gioithieu"];
			$khoa=$_REQUEST["khoa"];			
		}
	$sql="Select * from tblbenhnhan Where BHYT='".$bhyt."'";
	$query=mysqli_query($sql,$connect);
	if(mysqli_num_rows($query)!=0)
		{
			echo trim("<script>alert('BHYT đã có');</script><meta http-equiv='refresh' content='0; url=nguoitiepbenh.php?page=TTbenhnhan'>");	
		}
										
		else
		 {
			$sql="Select * from tblbenhnhan Where CMND='".$cmnd."'";
			$query=mysqli_query($sql,$connect);
			if(mysqli_num_rows($query)!=0)
			 {
				echo trim("<script>alert('CMND đã có');</script><meta http-equiv='refresh' content='0; url=nguoitiepbenh.php?page=TTbenhnhan'>");	
			 }
			else
			{
	$count= mysqli_query('SELECT COUNT(maBenhnhan) FROM  tblbenhnhan');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			if($ms<9)
            $t='BN00';
         else
		 	if($ms<98)
            $t='BN0';
			$ma=$ms;
            $ms=$ms+1;
            $add="$t$ms";		
			$sql="INSERT INTO tblbenhnhan(maBenhnhan,tenBenhnhan,gioiTinh,diaChi,ngaySinh,CMND,danToc,ngheNghiep,BHYT,ngoaiTuyen,tinhTrang,maKhoa,matKhau) VALUES('$add','$tenbn','$gioitinh','$diachi','$ngaysinh','$cmnd','$dantoc','$nn','$bhyt','$ngoaituyen','$gioithieu','$khoa','1234')";   
           header("Location:BacSi.php?page=QLBN");
		   $query=mysqli_query($sql,$connect);
			mysqli_close($connect);
			}
		 }
		
	?>
    
