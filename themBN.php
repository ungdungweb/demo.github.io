<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	include("include/include/config.php");
	if(isset($_POST["mabn"])&& isset($_POST["tenbn"])&& isset($_POST["gioitinh"])&& isset($_POST["diachi"])&& isset($_POST["ngaysinh"]) && isset($_POST["cmnd"])&& isset($_POST["dantoc"])&& isset($_POST["nn"])&& isset($_POST["bhyt"])&& isset($_POST["khoa"]))
		{
			$mabn=$_REQUEST["mabn"];
			$tenbn=$_REQUEST["tenbn"];
			$gioitinh=$_REQUEST["gioitinh"];
			$diachi=$_REQUEST["diachi"];
			$ngaysinh=$_REQUEST["ngaysinh"];
			$cmnd=$_REQUEST["cmnd"];
			$dantoc=$_REQUEST["dantoc"];
			$nn=$_REQUEST["nn"];
			$bhyt=$_REQUEST["bhyt"];
			$khoa=$_REQUEST["khoa"];			
		}
	$csm-$csc=$cst;
	$count= mysqli_query('SELECT COUNT(maBenhnhan) FROM  tblbenhnhan');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			 if($ms<9)
            $t='BN000';
         else
		 	if($ms<98)
            $t='BN00';
			$ma=$ms;
            $ms=$ms+1;
            $add="$t$ms";												           
			$sql="INSERT INTO tblbenhnhan(maBenhnhan,tenBenhnhan,ngaySinh,gioiTinh,diaChi,CMND,danToc,ngheNghiep,BHYT,tenKhoa) VALUES('$add','$tenbn','$gioitinh','$diachi','$ngaysinh','$cmnd','$dantoc','$nn','$bhyt','$khoa')";   
            header ('location:nguoitiepbenh.php?page=TTbenhnhan');																						            $query=mysqli_query($sql,$connect);
	?>
</body>
</html>