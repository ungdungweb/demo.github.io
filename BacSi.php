<?php
session_start();
if(isset($_SESSION['maBacsi'])){
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
	
	include("include/leftBS.php");
	switch ($_GET['page']) 
		{
			case "QLBN": include ('include/QLbenhnhanBS.php'); break;
			case "QLBA": include ('include/QLbenhan.php'); break;
			case "QLBS": include ('include/QLbacsi.php'); break;
			case "TKBS": include ('include/Timbacsi.php'); break;
			case "TKBA": include ('include/Timbenhan.php'); break;
			case "TKeBN": include ('include/Thongkebenhnhan.php'); break;
			case "sua": include ('include/updatebenhnhanBS.php'); break;
			case "chitietba": include ('include/chitietBAtheoten.php'); break;
			case "suaba": include ('include/updatebenhan.php'); break;
			case "BA": include ('include/Tkbenhankhoa.php'); break;
			case "TTXN": include ('include/ttxetnghiem.php'); break;
			case "suattxn": include ('include/updateTTXN.php'); break;
			case "suaBS": include ('include/updatebacsi.php'); break;
			case "TTBSK": include ('include/ttbacsitheodoi.php'); break;
			case "suababs": include ('include/updatebenhanbacsi.php'); break;
			case "BABenh": include ('include/Tkbenhanbenh.php'); break;
			case "CTbenhnhan": include ('include/chitietBN.php'); break;
			case "BAxetnghiem": include ('include/thongkexetnghiem.php'); break;
			 
			default: include ('include/content.php'); break;
			
		} 
		
	
	include("include/foodter.php");
?>
</div>
</body>
</html>
<?php }else{
	echo "<meta http-equiv='refresh' content='0;URL=index.php?page=BacSi' />";

}
?>