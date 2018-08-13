<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	include("include/config.php");
	if(isset($_POST["tenbn"])&& isset($_POST["gioitinh"])&& isset($_POST["diachi"])&& isset($_POST["ngaysinh"]) && isset($_POST["cmnd"])&& isset($_POST["dantoc"])&& isset($_POST["nn"])&& isset($_POST["bhyt"])&& isset($_POST["khoa"]))
		{
			$tenbn=$_REQUEST["tenbn"];
			$gioitinh=$_REQUEST["gioitinh"];
			$diachi=$_REQUEST["diachi"];
			$ngaysinh=$_REQUEST["ngaysinh"];
			$cmnd=$_REQUEST["cmnd"];
			$dantoc=$_REQUEST["dantoc"];
			$nn=$_REQUEST["nn"];
			$bhyt=$_REQUEST["bhyt"];
			$khoa=$_REQUEST["khoa"];			
		}
	
	$count= mysqli_query('SELECT COUNT(maBenhnhan) FROM  tblbenhnhan');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			if($ms<9)
            $t='BN00';
         else
		 	if($ms<98)
            $t='BN00';
			$ma=$ms;
            $ms=$ms+1;
            $add="$t$ms";		
			$sql="INSERT INTO tblbenhnhan(maBenhnhan,tenBenhnhan,gioiTinh,diaChi,ngaySinh,CMND,danToc,ngheNghiep,BHYT,tenKhoa) VALUES('$add','$tenbn','$gioitinh','$diachi','$ngaysinh','$cmnd','$dantoc','$nn','$bhyt','$khoa')";   
          /* header("Location:nguoitiepbenh.php?page=TTbenhnhan");*/
		  echo "$sql";
		   $query=mysqli_query($sql,$connect);
			mysqli_close($connect);
	?>
</body>
</html>
<form action="moi.php" method="post">
<div class="giua">
    	<div class="phangiua1">    
		  <table  border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           
           <tr class="text"> 
            <td width="100" align="left">Mã bệnh nhân</td>
            <td width="10" align="center">:</td>
            <td><input name="mabn" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">Họ và tên</td>
            <td width="10" align="center">:</td>
             <td><input name="tenbn" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           
           <tr class="text"> 
            <td width="100" align="left">Giới tính</td>
            <td width="10" align="center">:</td>
            <td><input name="gioitinh" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">Địa chỉ</td>
            <td width="10" align="center">:</td>
            <td><input name="diachi" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">CMND</td>
            <td width="10" align="center">:</td>
            <td><input name="cmnd" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
          
          </table>
    	</div>
        <div class="phangiua2">
        
        	<table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           
           <tr class="text"> 
            <td width="100" align="left">Ngày sinh</td>
            <td width="10" align="center">:</td>
            <td><input name="ngaysinh" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">Dân tộc</td>
            <td width="10" align="center">:</td>
            <td><input name="dantoc" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           
           <tr class="text"> 
            <td width="100" align="left">Nghề nghiệp</td>
            <td width="10" align="center">:</td>
            <td><input name="nn" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">BHYT</td>
            <td width="10" align="center">:</td>
             <td><input name="bhyt" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <?php 
                 function getLoaiphong(){
                 include("include/config.php");
                  $sql="Select maKhoa,tenKhoa from tblkhoa";	
                  mysqli_query($connect, "SET NAMES 'utf8'");
                   $rs=mysqli_query($connect, $sql);
                  $rs=mysqli_query($connect, $sql);
                 $str="<select  id='lp' name='khoa'>";
                 $str.="<option value=''>Mã khoa- Tên;";
                   while($rowt=mysqli_fetch_array($rs))
                  $str.="<option value=".$rowt['maKhoa'].">".$rowt['maKhoa']."- ".$rowt['tenKhoa'];
                    $str.="</select>";
                     echo($str);
                   }
                getLoaiPhong();
             ?>
				
           </tr>
          </table>
        </div>
  </div>
        <div class="btn">
                <tr >
                    <td><input type="submit" value="   Thêm   " name="them"/></td>
                    <!--<td><input type="submit" value="   Sửa   " name="sua"/></td>
                     <td><input type="submit" value="   Xóa   " name="sua"/></td>-->
                </tr>
  </div>
 </form>
    