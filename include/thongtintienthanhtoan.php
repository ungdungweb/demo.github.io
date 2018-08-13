
<?php
 $id = $_POST['thanhtoan'];
  include("include/config.php");
  mysqli_query("SET NAMES utf8");
  $tt=0;
  $sql = mysqli_query("SELECT * FROM  tblbenhan,tblbenhanbacsi,tblbacsi,tblkhoa where tblbenhan.maBenhan = '$id' and tblbenhan.maBenhan=tblbenhanbacsi.maBenhan and tblbenhanbacsi.maBacsi= tblbacsi.maBacsi and tblbacsi.maKhoa= tblkhoa.maKhoa ");
?>
