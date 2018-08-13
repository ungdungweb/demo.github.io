
<?php
	    include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		$id=$_POST['ttxn'];
		$sql = mysqli_query("SELECT * FROM tblbenhan where maBenhan='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					$maBA = $row['maBenhan'];
					$maBN = $row['maBenhnhan'];
					$maBS = $row['maBacsi'];
					$chuandoan = $row['chuanDoan'];
					$ngaynhap = date("d/m/Y",strtotime($row['ngayNhapvien']));			
					$ngayxuat = date("d/m/Y",strtotime($row['ngayXuatvien']));	
					$khoa = $row['khoa'];
					$dienbien = $row['dienBienbenh'];
					$tinhtrang = $row['tinhTrang'];
	?>
<div id="content" >
  
    <div class="cuoi">
    <h1 align="center">Thông Tin Xét Nghiệm Của Bệnh Án</h1><br>
  	
    	<table width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
         
         
					<tr>
                    	<td align="center">Số TT</td>
                        <td align="center">Mã Phiếu</td>
                        <td align="center">Mã bệnh án</td>
                        <td align="center">Mã xét nghiệm</td>
                         <td align="center">Tên xét nghiệm</td>
						 <td align="center">Tên Nhân Viên</td>
						<td align="center">ngày xét nghiệm</td>
                        <td align="center">lần thứ </td>
                         <td align="center">Kết quả</td>
                    
                        
                        
                        
					</tr>
               <?php
				
  			  include("include/config.php");
			  $id=$_POST['ttxn'];
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query("SELECT * FROM  tblphieuxetnghiem,tblxetnghiem,tblnguoitiepbenh where tblphieuxetnghiem.maNV=tblnguoitiepbenh.maNV and tblphieuxetnghiem.maXetnghiem=tblxetnghiem.maXetnghiem and maBenhan='$id'");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maP = $row['maPhieu'];
					$maXN = $row['maXetnghiem'];
					$maBA = $row['maBenhan'];
					$tennv = $row['tenNV'];
					$ngayXN = $row['ngayXetnghiem'];		
					$lan = $row['lanThu'];
					$ketqua = $row['ketQua'];
					$tenXN= $row['tenXetNghiem'];
					
					
					?>
                    
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maP;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="maphieu" value="<?php echo $maP?>" size="10px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="maba" value="<?php echo $maBA ?>" size="10px"/>
					</td>
                
                    <td align="center"> 	
						<input type="text" name="maXN" value="<?php echo $maXN ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tenXN" value="<?php echo $tenXN ?>" size="10px"/>
					</td>
                   <td align="center"> 	
						<input type="text" name="ngaynhap" value="<?php echo $tennv ?>" size="10px"/>
					</td>
                    
                    <td align="center"> 	
						<input type="text" name="ngãyuat" value="<?php echo $ngayXN ?>" size="10px"/>
					</td>
					
                    <td align="center"> 	
						<input type="text" name="dienbien" value="<?php echo $lan ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tinhtrang" value="<?php echo $ketqua ?>" size="10px"/></td>
                                           
                    
                    
                    <?php 
				}
					
			?> 
      
	</table>
    
  
      
    </div>
  	
    

</div>

