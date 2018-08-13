
	<?php
	include("include/config.php");
	if(isset($_POST['tenbn'])&& isset($_POST['gioitinh'])&& isset($_POST['diachi'])&& isset($_POST['ngaysinh']) && isset($_POST['cmnd'])&& isset($_POST['bhyt']))
		{
			$tenbn=$_REQUEST['tenbn'];
			$gioitinh=$_REQUEST['gioitinh'];
			$diachi=$_REQUEST['diachi'];
			$ngaysinh=implode("-",array_reverse(explode("/",$_POST['ngaysinh'])));
			$cmnd=$_REQUEST['cmnd'];
			$bhyt=$_REQUEST['bhyt'];
			
		}
	$sql="Select * from tblbenhnhan Where BHYT='{$bhyt}'";
	$query=mysqli_query($connect, $sql);
	if(mysqli_num_rows($query)!=0)
		{
			echo trim("<script>alert('BHYT đã có');</script><meta http-equiv='refresh' content='0; url=nguoitiepbenh.php?page=TTbenhnhan'>");	
		}
										
		else
		 {
			$sql="Select * from tblbenhnhan Where CMND='{$cmnd}'";
			$query=mysqli_query($connect, $sql);
			if(mysqli_num_rows($query)!=0)
			 {
				echo trim("<script>alert('CMND đã có');</script><meta http-equiv='refresh' content='0; url=nguoitiepbenh.php?page=TTbenhnhan'>");	
			 }
			else
			{
	
	$count= mysqli_query($connect, "SELECT COUNT(maBenhnhan) FROM  tblbenhnhan");
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
				
			$sql="INSERT INTO tblbenhnhan(maBenhnhan,tenBenhnhan,gioiTinh,diaChi,ngaySinh,CMND,BHYT,matKhau) VALUES('$add','$tenbn','$gioitinh','$diachi','$ngaysinh','$cmnd','$bhyt','1234')";   
			
		   $query=mysqli_query($connect, $sql);
          $selectmatk = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tblbenhnhan WHERE CMND = '{$cmnd}'"));
		  $_SESSION['mabn'] = $selectmatk['maBenhnhan'];
		 //var_dump($_SESSION['mabn']);exit();
		  echo "<meta http-equiv=refresh content='0;url=datlichkham.php'>";
			}
		 }
	?>
    
