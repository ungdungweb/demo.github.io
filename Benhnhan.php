<?php
session_start();
if(isset($_SESSION['maBenhnhan'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Content/sitemain.css" />
</head>


<body>
<div id="page">

<?php
	include("include/header1.php");
	
	include("include/leftBN.php");
	switch ($_GET['page']) 
		{
			case "TimBS": include ('include/Timbacsi.php'); break;
			case "XemBA": include ('include/Xembenhan.php'); break;
			case "TTBSKbenhan": include ('include/TTbacsitheodoiBABN.php'); break;
		
			
			case "TTXNbenhan": include ('include/TTxetnghiemBABN.php'); break;
			default: include ('include/content.php'); break;
			
		} 
		
	
	include("include/foodter.php");
?>
</div>
</body>
</html>
<?php }else{
	echo "<meta http-equiv='refresh' content='0;URL=index.php?page=Benhnhan' />";

}
?>