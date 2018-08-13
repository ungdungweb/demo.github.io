
	<?php
	session_start();
	
	include("include/config.php");
	if(isset($_POST["maxn"])&& isset($_POST["maBA"])&& isset($_POST["nhanvien"]) && isset($_POST["ngayxn"])&& isset($_POST["lan"])&& isset($_POST["ketqua"]))
		{
			$maxn=$_REQUEST["maxn"];
			$maBA=$_REQUEST["maBA"];
			$manv=$_REQUEST["nhanvien"];
			$ngayxetnghiem=implode("-",array_reverse(explode("/",$_POST["ngayxn"])));
			$lan=$_REQUEST["lan"];
			$ketqua=$_REQUEST["ketqua"];
			
		}
	/*--------------------*/

		
			$sql2 = mysqli_query("SELECT DonGia from tblxetnghiem where maXetnghiem='XN001'",$connect);
		$sql3 = mysqli_query("SELECT DonGia from tblxetnghiem where maXetnghiem='XN002'",$connect);
		$sql4 = mysqli_query("SELECT DonGia from tblxetnghiem where maXetnghiem='XN003'",$connect);
		$sql5 = mysqli_query("SELECT DonGia from tblxetnghiem where maXetnghiem='XN004'",$connect);
		$row2 = mysqli_fetch_assoc($sql2);	
		$row3 = mysqli_fetch_assoc($sql3);
		$row4 = mysqli_fetch_assoc($sql4);	
		$row5 = mysqli_fetch_assoc($sql5);
		
						$Xquang=$row2['DonGia'];
						$mau=$row3['DonGia'];
						$nuoctieu=$row4['DonGia'];
						$tim=$row5['DonGia'];
	$sql="Select max(lanThu) as lanThu from tblphieuxetnghiem where maBenhan='$maBA'";
	$row1=mysqli_fetch_assoc(mysqli_query($sql));
	/*--------------------*/
	$count= mysqli_query('SELECT COUNT(maPhieu) FROM  tblphieuxetnghiem');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			if($ms<9)
            $t='P00';
         else
		 	if($ms<98)
            $t='P0';
			$ma=$ms;
            $ms=$ms+1;
            $add="$t$ms";
		if(($row1['lanThu']+1)==$lan){	
			if($maxn =='XN001')	
			{
			$sql1="INSERT INTO tblphieuxetnghiem(maPhieu,maXetnghiem, maBenhan, maNV, ngayXetnghiem, lanThu, ketQua,thanhTien) VALUES ('$add','$maxn','$maBA','$manv','$ngayxetnghiem','$lan','$ketqua','$Xquang')"; 
			}else
			if($maxn =='XN002')	
			{
			$sql1="INSERT INTO tblphieuxetnghiem(maPhieu,maXetnghiem, maBenhan, maNV, ngayXetnghiem, lanThu, ketQua,thanhTien) VALUES ('$add','$maxn','$maBA','$manv','$ngayxetnghiem','$lan','$ketqua','$mau')"; 
			}else
			if($maxn =='XN003')	
			{
			$sql1="INSERT INTO tblphieuxetnghiem(maPhieu,maXetnghiem, maBenhan, maNV, ngayXetnghiem, lanThu, ketQua,thanhTien) VALUES ('$add','$maxn','$maBA','$manv','$ngayxetnghiem','$lan','$ketqua','$nuoctieu')"; 
			}else
			if($maxn =='XN004')	
			{
			$sql1="INSERT INTO tblphieuxetnghiem(maPhieu,maXetnghiem, maBenhan, maNV, ngayXetnghiem, lanThu, ketQua,thanhTien) VALUES ('$add','$maxn','$maBA','$manv','$ngayxetnghiem','$lan','$ketqua','$tim')"; 
			}
			$query=mysqli_query($sql1,$connect); 
			 header("Location:BacSi.php?page=QLBA");
		}
		else
					echo "<script type='text/javascript'>alert('lần xét nghiệm không đúng xin kiểm tra lại')</script><meta http-equiv='refresh' content='0; url=BacSi.php?page=QLBA'>";
         
		
	  
			mysqli_close($connect);
	?>
    
