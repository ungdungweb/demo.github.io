<?php
include("include/config.php");
		mysqli_query("SET NAMES utf8");
		 $id=$_POST['sua2'];
		$sql = mysqli_query("SELECT * FROM tblbenhan where maBenhan='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					
					$ngaynhap =$row['ngayNhapvien'];			
					
	?>
	<?php
	session_start();
	include("include/config.php");
	if(isset($_POST["maBA"])&& isset($_POST["mabs"])&& isset($_POST["lanchuyen"]))
		{
			$maBA=$_REQUEST["maBA"];
			$mabs=$_REQUEST["mabs"];
			//$ngaycden=implode("-",array_reverse(explode("/",$_POST["ngaycden"])));
			//$ngaycdi=implode("-",array_reverse(explode("/",$_POST["ngaycdi"])));
			$lanchuyen=$_REQUEST["lanchuyen"];
			$makhoa=$_REQUEST["khoa"];
			$ngaycdi= date("20y-m-d"); 
			
		}
		
		
	$sql2 = mysqli_query("SELECT donGiaNgayDem from tblkhoa where maKhoa='KH01'",$connect);
		$sql3 = mysqli_query("SELECT donGiaNgayDem from tblkhoa where maKhoa='KH02'",$connect);
		$sql4 = mysqli_query("SELECT donGiaNgayDem from tblkhoa where maKhoa='KH03'",$connect);
		$sql5 = mysqli_query("SELECT donGiaNgayDem from tblkhoa where maKhoa='KH04'",$connect);
		$sql6 = mysqli_query("SELECT donGiaNgayDem from tblkhoa where maKhoa='KH05'",$connect);
		$sql7 = mysqli_query("SELECT donGiaNgayDem from tblkhoa where maKhoa='KH06'",$connect);
		$sql8 = mysqli_query("SELECT donGiaNgayDem from tblkhoa where maKhoa='KH07'",$connect);
		$sql9 = mysqli_query("SELECT lePhiKHam from tblkhoa ",$connect);
		$row2 = mysqli_fetch_assoc($sql2);	
		$row3 = mysqli_fetch_assoc($sql3);
		$row4 = mysqli_fetch_assoc($sql4);	
		$row5 = mysqli_fetch_assoc($sql5);
		$row6 = mysqli_fetch_assoc($sql6);
		$row7 = mysqli_fetch_assoc($sql7);
		$row8 = mysqli_fetch_assoc($sql8);
		$row9 = mysqli_fetch_assoc($sql9);
		
						$nhi=$row2['donGiaNgayDem'];
						$TMH=$row3['donGiaNgayDem'];
						$noi=$row4['donGiaNgayDem'];
						$ngoai=$row5['donGiaNgayDem'];
						$san=$row6['donGiaNgayDem'];
						$ungbuou=$row7['donGiaNgayDem'];
						$hoisuc=$row8['donGiaNgayDem'];
						$lephikham=$row9['lePhiKHam'];
						
			
		
			//------------------------------
			
	$sql="Select max(ngayChuyendi) as ngayChuyendi,max(lanThu) as lanThu from tblbenhanbacsi where maBenhan='$maBA'";
	$row1=mysqli_fetch_assoc(mysqli_query($sql));{
	
		$ngaycden= $row1['ngayChuyendi'];}
		//-----------tru ngay dai so lan chuyen sau----
			$first_date = strtotime($ngaycdi); 
			$second_date = strtotime($ngaycden);
			$datediff = abs($first_date - $second_date); 
			$day=floor($datediff/(60*60*24));
		//----------tru ngay dai so cho lan chuyen1-------
			$first = strtotime($ngaycdi); 
			$second = strtotime($ngaynhap);
			$datediff1 = abs($first - $second); 
			$day1=floor($datediff1/(60*60*24));
	//----------------------------------
	$count= mysqli_query('SELECT COUNT(logID) FROM  tblbenhanbacsi');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			if($ms<9)
            $t='ID00';
         else
		 	if($ms<98)
            $t='ID0';
			$ma=$ms;
            $ms=$ms+1;
            $add="$t$ms";	
if($lanchuyen==1){
	if(($row1['lanThu']+1)==$lanchuyen){
		if($makhoa=='KH01')
			{
				$tien=floor($datediff1/(60*60*24))*$nhi + '20000';
				
			$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','$ngaynhap','$ngaycdi','$tien')";  
      		 $sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
			}else
			if($makhoa=='KH02')
			{
				$tien=floor($datediff1/(60*60*24))*$TMH + '20000';
			$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','$ngaynhap','$ngaycdi','$tien')";  
       		$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
			}else
			if($makhoa=='KH03')
			{
				$tien=floor($datediff1/(60*60*24))*$noi + '20000';
			$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','$ngaynhap','$ngaycdi','$tien')";  
        	$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
			}else
			if($makhoa=='KH04')
			{
				$tien=floor($datediff1/(60*60*24))*$ngoai + '20000';
			$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','$ngaynhap','$ngaycdi','$tien')";  
        	$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
			}else
			if($makhoa=='KH05')
			{
				$tien=floor($datediff1/(60*60*24))*$san + '20000';
			$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','$ngaynhap','$ngaycdi','$tien')";  
       		$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
			}else
			if($makhoa=='KH06')
			{
				$tien=floor($datediff1/(60*60*24))*$ungbuou + '20000';
			$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','$ngaynhap','$ngaycdi','$tien')";  
       	 	$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
			}else
			if($makhoa=='KH07')
			{
				$tien=floor($datediff1/(60*60*24))*$hoisuc + '20000';
			$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','$ngaynhap','$ngaycdi','$tien')";  
      		$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
			}
			$query=mysqli_query($sql10,$connect);
			$query=mysqli_query($sql1,$connect);
			header("Location:BacSi.php?page=QLBA");
	}else
					echo "<script type='text/javascript'>alert('Lần chuyển chưa đúng xin kiểm tra lại')</script><meta http-equiv='refresh' content='0; url=BacSi.php?page=QLBA'>";

}
else{ 
			if(($row1['lanThu']+1)==$lanchuyen){
						if($makhoa=='KH01')
						{
							$tien=floor($datediff/(60*60*24))*$nhi + '20000';
							
						$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','".$row1['ngayChuyendi']."','$ngaycdi','$tien')";  
						 $sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
						}else
						if($makhoa=='KH02')
						{
							$tien=floor($datediff/(60*60*24))*$TMH + '20000';
						$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','".$row1['ngayChuyendi']."','$ngaycdi','$tien')";  
						$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
						}else
						if($makhoa=='KH03')
						{
							$tien=floor($datediff/(60*60*24))*$noi + '20000';
						$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','".$row1['ngayChuyendi']."','$ngaycdi','$tien')";  
						$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
						}else
						if($makhoa=='KH04')
						{
							$tien=floor($datediff/(60*60*24))*$ngoai + '20000';
						$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','".$row1['ngayChuyendi']."','$ngaycdi','$tien')";  
						$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
						}else
						if($makhoa=='KH05')
						{
							$tien=floor($datediff/(60*60*24))*$san + '20000';
						$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','".$row1['ngayChuyendi']."','$ngaycdi','$tien')";  
						$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
						}else
						if($makhoa=='KH06')
						{
							$tien=floor($datediff/(60*60*24))*$ungbuou + '20000';
						$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','".$row1['ngayChuyendi']."','$ngaycdi','$tien')";  
						$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
						}else
						if($makhoa=='KH07')
						{
							$tien=floor($datediff/(60*60*24))*$hoisuc + '20000';
						$sql1="INSERT INTO tblbenhanbacsi(logID ,maBenhan, maBacsi,lanThu,ngayChuyenden,ngayChuyendi,thanhTien) VALUES ('$add','$maBA','$mabs','$lanchuyen','".$row1['ngayChuyendi']."','$ngaycdi','$tien')";  
						$sql10="update tblbenhan set ngayXuatvien='".$ngaycdi."' WHERE maBenhan='$id'";
						}
						$query=mysqli_query($sql10,$connect);
			$query=mysqli_query($sql1,$connect);
			header("Location:BacSi.php?page=QLBA");
			}else
					echo "<script type='text/javascript'>alert('Lần chuyển chưa đúng xin kiểm tra lại')</script><meta http-equiv='refresh' content='0; url=BacSi.php?page=QLBA'>";
}



			
			mysqli_close($connect);
	?>
    
