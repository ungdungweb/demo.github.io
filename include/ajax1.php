<?php	
	// viết câu lệnh truy vấn lấy mã học kỳ theo mã học sinh tại đây ,lấy mã học sinh trong biến $_GET['idHocSinh']....
	 if (isset($_GET['idba'])) {
		$ba = $_GET['idba'] ;
		$connect=mysqli_connect("localhost","root","");
              $data=mysqli_select_db("benhvien",$connect);
              $sql12="Select maBenhan from tblbenhan where maBenhnhan='$ba' ";	
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

