
<div id="content" >
<table width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
         
         
					<tr>
                    	<td align="center">Số TT</td>
						<td align="center">Mã bệnh án</td>
						
                        
						<td align="center">Chuẩn đoán</td>
                       
                        <td align="center">ngày nhập viện</td>
                        <td align="center">ngày xuất viện</td>
                       
                         <td align="center">Diễn biến</td>
                        <td align="center">Tình trạng</td>
                        <td align='center'>Thông tin xét nghiệm</td>
                        <td align='center'>Bác sĩ theo dõi</td>
                       <td align="center">Xóa</td>
                        <td align="center">Sửa</td>
                        
                        
					</tr>
               <?php
	    include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		$id=$_POST['chitietba'];
		$sql = "Select * from  tblbenhan,tblbenhnhan where tblbenhan.maBenhnhan=tblbenhnhan.maBenhnhan and tblbenhnhan.maBenhnhan='$id' ";
			$query = mysqli_query($sql);
			$row1 = mysqli_num_rows($query);
			if($row1<>0){ 
			$stt=0;
					
while($data = mysqli_fetch_array($query)){	$stt++;
?>
                   
					 <tr>
                     
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $data[maBenhan]; ?>"/><?php echo"$stt";?></td>
                	<td align="centen"> 	
						<input type="text" name="maba" value="<?php echo $data[maBenhan]?>" size="5px" align="middle"/>
                    </td>
					
                    
                    <td align="center"> 	
						<input type="text" name="chuandoan" value="<?php  echo $data[chuanDoan]; ?>" size="10px"/>
					</td>
                   <td align="center"> 	
						<input type="text" name="ngaynhap" value="<?php  echo $data[ngayNhapvien]; ?>" size="10px"/>
					</td>
                    
                    <td align="center"> 	
						<input type="text" name="ngãyuat" value="<?php  echo $data[ngayXuatvien]; ?>" size="10px"/>
					</td>
					
                    <td align="center"> 	
						<input type="text" name="dienbien" value="<?php  echo $data[dienBienbenh]; ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tinhtrang" value="<?php echo $data[tinhTrang]; ?>" size="5px"/></td>
                    <td align='center'>
						<form action='BacSi.php?page=TTXN' method='post'>
						<input type='submit'name='submit' value='chi tiết'  />
						<input type='hidden' name='ttxn' value='<?php echo $data['maBenhan']?>'/> 
						</form>	
			</td>
            <td align='center'>
						<form action='BacSi.php?page=TTBSK' method='post'>
						<input type='submit' name='submit' value='chi tiết'  />
						<input type='hidden' name='ttbsk' value='<?php echo $data['maBenhan']?>'/> 
						</form>		
			</td>        
                    <td align="center">
                    <form action="xoaBA.php" method="post">
						 <input type="submit" name="submit" value="Xóa"  />
						<input type="hidden" name="xoa" value="<?php echo $data[maBenhan]; ?>"/>	</form>
					</td>
           
					
                    <td align="center">
						<form action="BacSi.php?page=suaba" method="post">
						<input type="submit" name="submit" value="Sửa"  />
						<input type="hidden" name="sua" value="<?php echo $data[maBenhan];?>"/> 
						</form>		
			</td>
                    
      <?php 
		}
	  }
	  ?>
	</table>
      <tr >
                   
                    <td align="center"><form action="BacSi.php?page=TKBA" method="post">
                    <input type="submit" value="   Bỏ qua   " name="save"/></form>
                    </td>
                </tr>
</div>