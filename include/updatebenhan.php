
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
					$ngaynhap = date("d/m/Y",strtotime($row['ngayNhapvien']));			
					$ngayxuat = date("d/m/Y",strtotime($row['ngayXuatvien']));	
					$dienbien = $row['dienBienbenh'];
					$tinhtrang = $row['tinhTrang'];
	?>
<div id="content" >
	
   <div class="giua1">
  <form action="updateBA.php" method="post">

    	<div class="phangiua1">    
		  <table  border="0" cellpadding="2" cellspacing="1" class="text" width="400">
            <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           
           <tr class="text"> 
            <td width="103" align="left">Mã bệnh án :</td>
           
            
           </tr>
           <tr> 
             <?php
				session_start();
				
					$sql="Select * from  tblbenhnhan";
					mysqli_query("SET NAMES utf8");
					$rs=mysqli_query($sql);
					$str.="<TD align='left'>Mã bệnh nhân :</TD>";
					
					$str.="<TD size=25><select name=maBN>";
					
					$str.=" <option value='$maBN'>Chon mã";
					while($row=mysqli_fetch_array($rs))
						{
						$str.="<option values=".$row['tenBenhnhan'].">".$row['maBenhnhan'];
						}
						$str.="</select>";
					$str.="</TD>";
						
  					echo $str;
				?>
				
           </tr>
           
          <!-- <tr class="text"> 
            <td width="103" align="left">Mã đơn thuốc</td>
            <td width="-1" align="center">:</td>
            <td><input name="maDT" type="text" class="box" id="txtUserName" value="" size="20" maxlength="40"></td>
             
           </tr>-->
           <tr> 
            <td width="150" align="left">Ngày khám/nhập viện:</td>
           
            <td><input name="ngaykham" type="text" class="box" id="txtUserName2" value="<?php echo $ngaynhap ?>" size="20" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName2').calendar();
		});
		// ]]>
		</script>
           </tr>
           <tr> 
            <td width="103" align="left">Ngày xuất viện:</td>
           
            <td><input name="ngayxuat" type="text" class="box" id="txtUserName3" value="<?php echo $ngayxuat ?>" size="20" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName3').calendar();
		});
		// ]]>
		</script>
            
           </tr>
          
       </table>
    	</div>
    	<div class="phangiua2">
        
        	<table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            
           
           
           <tr> 
            <td width="100" align="left">Chuẩn đoán</td>
            <td width="10" align="center">:</td>
            <td><input name="chuandoan" type="text" class="box" id="txtUserName" value="<?php echo $chuandoan ?>" size="25" maxlength="40"></td>
            </tr>
           
           <tr class="text"> 
            <td width="100" align="left">Diễn biến bệnh</td>
            <td width="10" align="center">:</td>
            <td><input name="dienbien" type="text" class="box" id="txtUserName" value="<?php echo $dienbien ?>" size="25" maxlength="40"></td>
           </tr>
           <tr class="text"> 
            <td width="100" align="left">Tinh trang</td>
            <td width="10" align="center">:</td>
            <TD style="font-size:19px">
             	<select name="tinhtrang" >
                <option value="<?php echo "$tinhtrang"; ?>">tình trạng</option>                               
                <option value="TN">Điều trị tại nhà</option>
                <option value="NV">Nhập viện</option>
                <option value="XV">Xuất viện</option>
                
                 </select><br />
              </TD>
           </tr>
      
          </table>
        </div>
		<div class="btn">
                <tr >
                    <input type="hidden" name="sua2" value="<?php echo $id;?>"/> <br /><br />
                    <td><input type="submit" value="   Lưu   " name="save"/></td>
                    <td><form action="BacSi.php?page=QLBA" method="post">
                    <input type="submit" value="   Bỏ qua   " name="save"/></form>
                    </td>
                </tr>
  		</div>
 </form>
  </div>
        

    <div class="cuoi">
  	
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
                        <td align="center">Xóa</td>
                        <td align="center">Sửa</td>
                        <td align="center">TT xét nghiệm</td>
                        <td align="center">Bác sĩ theo dõi </td>
                        
                        
					</tr>
               <?php
				
  			  include("include/config.php");
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query("SELECT * FROM  tblbenhan");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maBA = $row['maBenhan'];
					$maBN = $row['maBenhnhan'];
					$maBS = $row['maBacsi'];
					$chuandoan = $row['chuanDoan'];
					$ngaynhap = $row['ngayNhapvien'];					
					$ngayxuat = $row['ngayXuatvien'];
					$khoa = $row['khoa'];
					$dienbien = $row['dienBienbenh'];
					$tinhtrang = $row['tinhTrang'];
					
					?>
                    <form action="xoaBA.php" method="post">
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maBA;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="maba" value="<?php echo $maBA?>" size="10px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="mabn" value="<?php echo $maBN ?>" size="10px"/>
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
						<input type="text" name="tinhtrang" value="<?php echo $tinhtrang ?>" size="10px"/></td>
                                           
                    <td align="center">
						 <input type="submit" name="submit" value="Xóa"  />
						<input type="hidden" name="xoa" value="<?php echo $row['maBenhan']?>"/>	
					</td>
           
					</form>
                    <td align="center">
						<form action="BacSi.php?page=suaba" method="post">
						<input type="submit" name="submit" value="Sửa"  />
						<input type="hidden" name="sua" value="<?php echo $row['maBenhan'];?>"/> 
						</form>		
			</td>
            <td align="center">
						<form action="BacSi.php?page=TTXN" method="post">
						<input type="submit" name="submit" value="chi tiết"  />
						<input type="hidden" name="ttxn" value="<?php echo $row['maBenhan'];?>"/> 
						</form>		
			</td>
            <td align="center">
						<form action="BacSi.php?page=TTBSK" method="post">
						<input type="submit" name="submit" value="chi tiết"  />
						<input type="hidden" name="ttbsk" value="<?php echo $row['maBenhan'];?>"/> 
						</form>		
			</td>
                    <?php 
				}
					
			?> 
      
	</table>
    
  
      
    </div>
  	
    

</div>

