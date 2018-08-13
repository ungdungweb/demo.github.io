<div id="content" >
	<h1 align="center">Thông tin chi tiết lịch khám</h1>
 
          

    <div class="cuoi">
  	
    	<table width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000" align="center">
  
					<tr>
                    	<td align="center">Số TT</td>
                        <td align="center">Mã lịch</td>
                        <td align="center">Mã bệnh nhan</td>
						 <td align="center">Khoa</td>
						<td align="center">Ma bác sĩ</td>
                        <td align="center">Ngày DK </td>
                        <td align="center">Giờ Dk</td>
                        <td align="center">Tình trạng</td>
                        <td align="center">cập nhật tình trạng</td>
                        
                        
					</tr>
               <?php
				
  			  include("config.php");
			  $id=$_POST['xemlich'];
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query("SELECT * FROM tbldatlichkham,tblbacsi,tblkhoa where tbldatlichkham.maBacsi=tblbacsi.maBacsi and tblbacsi.maKhoa=tblkhoa.maKhoa and maLich='$id'", $connect);
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$malich = $row['maLich'];
					$maBN = $row['maBenhnhan'];
					$khoa = $row['tenKhoa'];
					$mabs = $row['maBacsi'];
					$ngaykd = $row['ngayDK'];			
 				    $giodk = $row['gioDK'];
					$tinhtrang = $row['tinhTrang'];
					
					
					
					?>
                    <form action="" method="post">
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $malich;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="logid" value="<?php echo $malich?>" size="10px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="maba" value="<?php echo $maBN ?>" size="10px"/>
					</td>
                
                    <td align="center"> 	
						<input type="text" name="mabs" value="<?php echo $khoa ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tenbs" value="<?php echo $mabs ?>" size="10px"/>
					</td>
                   <td align="center"> 	
						<input type="text" name="khoa" value="<?php echo $ngaykd ?>" size="10px"/>
					</td>
                         
                         <td align="center"> 	
						<input type="text" name="khoa" value="<?php echo $giodk ?>" size="5px"/>
					</td>
                             
                               <td align="center"> 	
						<input type="text" name="khoa" value="<?php echo $tinhtrang ?>" size="5px"/>
					</td>                                  
                                                      
					</form>
                    <td align="center">
						<form action="nguoitiepbenh.php?page=updatetinhtrang" method="post">
						<input type="submit" name="submit" value="chọn"  />
						<input type="hidden" name="updatetinhtrang" value="<?php echo  $row['maLich'];?>"/> 
						</form>		
			</td>
                    <?php 
				}
					
			?> 
      
	</table>
  
      
    </div>
  	
    



