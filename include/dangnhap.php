<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../Content/sitemain.css" />
</head>
  
<body>
<div id="content">
<div id="content1">
	<tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea"><form action=checkBS.php method=post>
       <p>&nbsp;</p>
       <table width="350" border="1" align="center" cellpadding="5" cellspacing="1" class="entryTable">
        <tr id="entryTableHeader"> 
         <td align="center" bgcolor="#0033FF" ><b>Mời Bác Sĩ Đăng Nhập</b></td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		
		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td width="100" align="right">User Name</td>
            <td width="10" align="center">:</td>
            <td><input name="maBS" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="right">Password</td>
            <td width="10" align="center">:</td>
            <td><input name="password" type="password" class="box" id="txtPassword" value="" size="25"></td>
           </tr>
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td align="left"><input name="btnLogin" type="submit" class="box" id="btnLogin" value="Login"></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p><?php if(isset($_GET["loi"])){
		   		switch($_GET["loi"]){
					case "s1" : "<center><h1>Sai tên đăng nhập hoặc mật khẩu.<br></h1></center>";break;
					case "s2" : "<center><h1>Thành công.<br></h1></center>";break;
					default : "<center><h1>Loi<br></h1></center>";break;	
				}
		   }
		   ?></p>
      </form>
        
      </td>
    </tr>
   </table></td>
 </tr>
</div>
</div>
</body>
</html>
