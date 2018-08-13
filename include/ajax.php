

<?php
// viết câu lệnh truy vấn lấy mã học sinh theo mã lop tại đây ,lấy mã lớp trong biến $_GET['idLop']....
	 if (isset($_GET['idbs'])) {
		$hs = $_GET['idbs'] ;
		$connect=mysqli_connect("localhost","root","");
              $data=mysqli_select_db("benhvien",$connect);
              $sql13="Select maBacsi,tenBacsi from tblbacsi where maKhoa='$hs' ";	
              mysqli_query("SET NAMES 'utf8'");
				$rs13=mysqli_query($sql13,$connect);
					$str13.="<select name=mabs>";
					//$str13.="<option value=''>Chọn tên học sinh";
					while($row=mysqli_fetch_array($rs13))
						{
							$str13.="<option  values=".$row['maBacsi'].">".$row['maBacsi']."-".$row['tenBacsi']."</option>";
						}
						$str13.="</select>";							
				echo trim($str13);
		
	 }
?>

<?php	
	// viết câu lệnh truy vấn lấy mã học kỳ theo mã học sinh tại đây ,lấy mã học sinh trong biến $_GET['idHocSinh']....
	 if (isset($_GET['idba'])) {
		$ba = $_GET['idba'] ;
		$connect=mysqli_connect("localhost","root","");
              $data=mysqli_select_db("benhvien",$connect);
              $sql12="Select maBenhan from tblbenhan where maBenhan='$ba' ";	
              mysqli_query("SET NAMES 'utf8'");
				$rs12=mysqli_query($sql12,$connect);
					$str12.="<select name=mabenhan>";
					
					while($row=mysqli_fetch_array($rs12))
						{
							$str12.="<option  values=".$row['maBenhan'].">".$row['maBenhan']."</option>";
						}
						$str12.="</select>";							
				echo trim($str12);
		
	 }
?>

<?php		
	// viết câu lệnh truy vấn lấy năm học theo mã học kỳ tại đây, lấy mã học kỳ trong biến $_GET['idHocKy'] ....
	//if(isset($_GET['idHocKy'])){		
	//	include("connect.php");
	//	$nh = $_GET['idHocKy'] ;
	//	$str12 = "";
	//	$sql12="Select * from tblnamhoc";	
	//	mysqli_query("SET NAMES 'utf8'");
	//	$rs12=mysqli_query($sql12,$connect);
	//	$str12.="<select name=TenNH1>";
	//	$str12.="<option value=''>Chọn năm học</option>";
	//	while($row=mysqli_fetch_array($rs12))
	//	{
	//		$str12.="<option  values=".$row['MaNH'].">".$row['MaNH']."</option>";
	//	}
	//	$str12.="</select>";							
	//	echo $str12;
	//}
?>