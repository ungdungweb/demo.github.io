
	<?php
	session_start();
	include("include/config.php");
	mysqli_query("SET NAMES utf8");
	if(isset($_POST["tenbn"])&& isset($_POST["gioitinh"])&& isset($_POST["diachi"])&& isset($_POST["ngaysinh"]) && isset($_POST["bhyt"]))
		{
			$tenbn=$_REQUEST["tenbn"];
			$gioitinh=$_REQUEST["gioitinh"];
			$diachi=$_REQUEST["diachi"];
			$ngaysinh=implode("-",array_reverse(explode("/",$_POST["ngaysinh"])));
			
			$dienthoai=$_REQUEST["dienthoai"];
			$email=$_REQUEST["email"];
			$bhyt=$_REQUEST["bhyt"];
			
		}
	
		 $sql="Select * from tblbenhnhan Where BHYT='".$bhyt."'";
	$query=mysqli_query($sql,$connect);
	if(mysqli_num_rows($query)!=0)
		{
			echo trim("<script>alert('BHYT đã có');</script><meta http-equiv='refresh' content='0; url=thongtinDKnhi.php'>");	
		}
										
		else
		 {
			/*--------------------------*/
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
			$sql1="INSERT INTO tblbenhnhan(maBenhnhan,tenBenhnhan,gioiTinh,diaChi,ngaySinh,CMND,BHYT,matKhau) VALUES('$add','$tenbn','$gioitinh','$diachi','$ngaysinh','$cmnd','$bhyt','1234')";   
			$query=mysqli_query($sql1,$connect);
			$selectmatk = mysqli_fetch_array(mysqli_query("SELECT * FROM tblbenhnhan WHERE BHYT = ".$bhyt.""));
		  $_SESSION['mabn'] = $selectmatk['maBenhnhan'];
		//var_dump($_SESSION['mabn']); exit();
		   echo "<meta http-equiv=refresh content='0;url=datlichkham.php'>";
			mysqli_close($connect);
		 }
	?>
    
