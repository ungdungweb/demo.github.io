
<?php
	    include("config.php");
		
		mysqli_query($connect, "SET NAMES utf8");
		$id=$_POST['ttbsk'];
		$sql = mysqli_query($connect, "SELECT * FROM tblbenhan where maBenhan='$id'", $connect);
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
    <h1 align="center">Thông tin bác sĩ theo dõi bệnh án</h1><br>
   
    	<table width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
  
					<tr>
                    	<td align="center">Số TT</td>
                        <td align="center">Mã Phiếu</td>
                        <td align="center">Mã bệnh án</td>
						 <td align="center">Mã bác sĩ</td>
						<td align="center">Tên bác sĩ</td>
                        <td align="center">Khoa </td>
                     
                        
					</tr>
               <?php
				
  			  include("config.php");
			  $id=$_POST['ttbsk'];
				mysqli_query($connect, "SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query($connect, "SELECT * FROM tblbenhanbacsi,tblbacsi,tblkhoa where tblbenhanbacsi.maBacsi=tblbacsi.maBacsi and tblbacsi.maKhoa=tblkhoa.maKhoa and maBenhan='$id'", $connect);
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maP = $row['logID'];
					$maBA = $row['maBenhan'];
					$maBS = $row['maBacsi'];
					$tenbacsi = $row['tenBacsi'];		
					$tenkhoa = $row['tenKhoa'];
					
					
					
					?>
                  
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maP;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="logid" value="<?php echo $maP?>" size="10px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="maba" value="<?php echo $maBA ?>" size="10px"/>
					</td>
                
                    <td align="center"> 	
						<input type="text" name="mabs" value="<?php echo $maBS ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tenbs" value="<?php echo $tenbacsi ?>" size="10px"/>
					</td>
                   <td align="center"> 	
						<input type="text" name="khoa" value="<?php echo $tenkhoa ?>" size="10px"/>
					</td>
                                                               
                    
                    <?php 
				}
					
			?> 
      
	</table>
  
      
    </div>
  	
    



