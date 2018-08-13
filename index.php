<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Content/sitemain.css"/>

</head>

<body>
<div id="page">

<?php
	include("include/header.php");
	include("include/left.php");
?>
<?php	
		
	switch ($_GET['page']) 
		{
		    case "trangchu": include ('include/content.php'); break;
			case "BacSi": include ('include/dangnhap.php'); break;
			case "NguoiTiepNenh": include ('include/loginNV.php'); break;
			case "Benhnhan": include ('include/loginBN.php'); break;
			case "benhnhanDK": include ('include/loginBNdangki.php'); break;
			case "thongbao": include ('include/dangkithanhcong.php'); break;
			default: include ('include/content.php'); break;
			
		} 
	
?>
<?php include("include/foodter.php"); ?>
</div>
</body>
</html>

