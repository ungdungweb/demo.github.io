<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link id="ctl00_Link3" href="../js/vcb.calendar.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../js/ui.calendar.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="600" border="1" style="border-color:#03F;">
    <tr>
      <td colspan="4" align="center">Tìm kiếm bệnh nhân</td>
    </tr>
    <tr>
      <td>Từ ngày</td>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="tungay" /></td>
      <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#tungay').calendar();
		});
		// ]]>
		</script>
      <td>Đến ngày</td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="denngay" /></td>
      <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#denngay').calendar();
		});
		// ]]>
		</script>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>