
<div id="content" >
<table width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
         
         
					<tr>
                    	<td align="center">Số TT</td>
						<td align="center">Mã bệnh án</td>
						<td align="center">Mã bệnh nhân</td>
                      
						<td align="center">Chuẩn đoán</td>
                       
                        <td align="center">ngày nhập viện</td>
                        <td align="center">ngày xuất viện</td>
                       
                         <td align="center">Diễn biến</td>
                        <td align="center">Tình trạng</td>
                        
                      
                        
                        
					</tr>
               <?php
	    include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		$id=$_POST['sua'];
		$sql = mysqli_query("SELECT * FROM tblbenhan where maBenhan='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					$maBA = $row['maBenhan'];
					$maBN = $row['maBenhnhan'];
					
					$chuandoan = $row['chuanDoan'];
					$ngaynhap = $row['ngayNhapvien'];					
					$ngayxuat = $row['ngayXuatvien'];
					$khoa = $row['khoa'];
					$dienbien = $row['dienBienbenh'];
					$tinhtrang = $row['tinhTrang'];
?>
                    <!--<form action="xoaBA.php" method="post">-->
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maBA;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="maba" value="<?php echo $maBA?>" size="5px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="mabn" value="<?php echo $maBN ?>" size="5px"/>
					</td>
                   
                    <td align="center"> 	
						<input type="text" name="chuandoan" value="<?php echo $chuandoan ?>" size="10px"/>
					</td>
                   <td align="center"> 	
						<input type="text" name="ngaynhap" value="<?php echo $ngaynhap ?>" size="10px"/>
					</td>
                    
                    <td align="center"> 	
						<input type="text" name="ngãyuat" value="<?php echo $ngayxuat ?>" size="10px"/>
					</td>
					
                    <td align="center"> 	
						<input type="text" name="dienbien" value="<?php echo $dienbien ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tinhtrang" value="<?php echo $tinhtrang ?>" size="5px"/></td>
                                           
                   
                    
      
	</table>
</div>