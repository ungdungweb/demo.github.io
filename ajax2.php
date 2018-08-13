<?php
if (isset($_POST['idbs'])) {
		$hs = $_POST['idbs'] ;
		$connect=mysqli_connect("localhost","root","");
              $data=mysqli_select_db("benhvien",$connect);
              $sql13="Select maBacsi,tenBacsi from tblbacsi where maKhoa='$hs' ";	
              mysqli_query("SET NAMES 'utf8'");
				$rs13=mysqli_query($sql13,$connect);
					
					while($row=mysqli_fetch_array($rs13))
						{
							$str13.="<option value=".$row['maBacsi'].">".$row['maBacsi']."-".$row['tenBacsi']."</option>";
						}						
				echo trim($str13);
		
	 }
?>
