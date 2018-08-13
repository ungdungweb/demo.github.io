<?php  include("config.php");
mysqli_query("SET NAMES utf8");
?>
<div id="content" >

	<div class="dau"><br />
    <h1 align="center" > Thanh Toan Bệnh Án</h1>
<br />

            <table width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
  
					<tr>
                    	<td align="center">Số TT</td>
                        <td align="center">Mã Phiếu</td>
                        <td align="center">Mã bệnh án</td>
						 <td align="center">Mã bác sĩ</td>
						<td align="center">Tên bác sĩ</td>
                        <td align="center">Khoa </td>
                         <td align="center">Ngày chuyển đến </td>
                          <td align="center">Ngày chuyển đi </td>
                        
                        <td align="center">Sửa</td>
                        
                        
					</tr>
               <?php
			   $id = $_POST['thanhtoan'];
				
  			  include("include/config.php");
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				/*$sql = mysqli_query("SELECT * FROM  tblbenhan,tblbenhanbacsi where maBenhan = '$id'");*/
				$sql = mysqli_query("SELECT * FROM tblbenhan,tblbenhanbacsi,tblbacsi,tblkhoa where tblbenhanbacsi.maBacsi=tblbacsi.maBacsi and tblbacsi.maKhoa=tblkhoa.maKhoa and tblbenhan.maBenhan='$id'", $connect);
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maBA = $row['maBenhan'];
				
					$maP = $row['logID'];
					$maBA = $row['maBenhan'];
					$maBS = $row['maBacsi'];
					$tenbacsi = $row['tenBacsi'];		
					$tenkhoa = $row['tenKhoa'];
					$ngaychuyenden = $row['ngayChuyenden'];
					$ngaychuyendi = $row['ngayChuyendi'];
					
					
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
                    <td align="center"> 	
						<input type="text" name="khoa" value="<?php echo $ngaychuyenden ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="khoa" value="<?php echo $ngaychuyendi ?>" size="10px"/>
					</td>
                                                               
                  
                    <td align="center">
						<form action="BacSi.php?page=suababs" method="post">
						<input type="submit" name="submit" value="Sửa"  />
						<input type="hidden" name="sua" value="<?php echo  $row['logID'];?>"/> 
						</form>		
			</td>
                    <?php 
				}
					
			?> 
      
	</table>