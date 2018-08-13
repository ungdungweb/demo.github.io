<?php
session_start();
if(isset($_SESSION['maNV'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Content/sitemain.css" />
<link id="ctl00_Link3" href="js/vcb.calendar.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/ui.calendar.js" type="text/javascript"></script>
</head>


<body>
<div id="page">

<?php
	include("include/header1.php");
	
	include("include/leftNV.php");
	switch ($_GET['page']) 
		{
			case "TTbenhnhan": include ('include/QLbenhnhan.php'); break;
			case "TimBS": include ('include/Timbacsi.php'); break;
			//case "TimBA": include ('include/Timbenhan.php'); break;
			case "thongke": include ('include/thongkebenhnhan.php'); break;
			case "TKbenhnhan": include ('include/TKbenhnhan.php'); break;
			case "TKdiachi": include ('include/TKdiachi.php'); break;
			case "TKbenh": include ('include/TKbenh.php'); break;
			//case "chitiet": include ('include/chitietBA.php'); break;
			case "TKttdangki": include ('include/thongkethongtindangki.php'); break;
			case "ttdangkitrongngay": include ('include/thongtindktrongngay.php'); break;
			case "thanhtoandot": include ('include/tiendot.php'); break;
			case "suathanhtoandot": include ('include/updatethanhtoandot.php'); break;
			
			case "tongthanhtoan": include ('include/thanhtoan.php'); break;
			case "tienXN": include ('include/tienxetnghiem.php'); break;
			
			case "chitietthanhtoan": include ('include/chitietthanhtoan.php'); break;
			
			case "xemlichall": include ('include/xemlichtatca.php'); break;
			case "xemlichchitiet": include ('include/xemlichchitiet.php'); break;
			case "updatetinhtrang": include ('include/updatetinhtrang.php'); break;
			
			   
			default: include ('include/content.php'); break;
			
		} 
		
	
	include("include/foodter.php");
?>
</div>
</body>
</html>
<?php }else{
	echo "<meta http-equiv='refresh' content='0;URL=index.php?page=NguoiTiepNenh' />";

}
?>