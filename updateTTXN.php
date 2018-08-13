
	<?php
		 include("include/config.php");
		 mysqli_query("SET NAMES utf8");
		 if(isset($_POST["maxn"])&& isset($_POST["maBA"])&& isset($_POST["nhanvien"]) && isset($_POST["ngayxn"])&& isset($_POST["ketqua"]))
		{
			$maxn=$_REQUEST["maxn"];
			$maBA=$_REQUEST["maBA"];
			$mavn=$_REQUEST["nhanvien"];
			$ngayxetnghiem=implode("-",array_reverse(explode("/",$_POST["ngayxn"])));
			$lan=$_REQUEST["lan"];
			$ketqua=$_REQUEST["ketqua"];
			
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
						
			$id= $_POST["sua2"];
			if($maxn=='XN001')
			{
		 $sql="update tblphieuxetnghiem set maXetnghiem='".$maxn."' ,maBenhan='".$maBA."', maNV='".$mavn."', ngayXetnghiem='".$ngayxetnghiem."', ketQua='".$ketqua."',thanhTien='".$Xquang."' WHERE maPhieu='$id'";
		}else
		if($maxn=='XN002')
			{
		 $sql="update tblphieuxetnghiem set maXetnghiem='".$maxn."' ,maBenhan='".$maBA."', maNV='".$mavn."', ngayXetnghiem='".$ngayxetnghiem."', ketQua='".$ketqua."',thanhTien='".$mau."' WHERE maPhieu='$id'";
		}else
		if($maxn=='XN003')
			{
		 $sql="update tblphieuxetnghiem set maXetnghiem='".$maxn."' ,maBenhan='".$maBA."', maNV='".$mavn."', ngayXetnghiem='".$ngayxetnghiem."', ketQua='".$ketqua."',thanhTien='".$nuoctieu."' WHERE maPhieu='$id'";
		}else
		if($maxn=='XN004')
			{
		 $sql="update tblphieuxetnghiem set maXetnghiem='".$maxn."' ,maBenhan='".$maBA."', maNV='".$mavn."', ngayXetnghiem='".$ngayxetnghiem."', ketQua='".$ketqua."',thanhTien='".$tim."' WHERE maPhieu='$id'";
		}
		 mysqli_query($sql,$connect);
		header("Location:BacSi.php?page=QLBA");
	
	
		
		 }
		else
			echo "Thông tin nhập vào phải hợp lệ";
		mysqli_close($connect);
	 ?>
