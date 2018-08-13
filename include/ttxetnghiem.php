
<?php
	    include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		$id=$_POST['ttxn'];
		$sql = mysqli_query("SELECT * FROM tblbenhan where maBenhan='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					$maBA = $row['maBenhan'];
					
	?>
<div id="content" >
	
   <div class="giua1">
  <form action="themttxetnghiem.php" method="post" >

    	<div class="phangiua1">    
		  <table  border="0" cellpadding="2" cellspacing="1" class="text" width="400">
            <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           
           <tr class="text"> 
            <td width="103" align="left">Mã Phiếu :</td>
           
            
           </tr>
           </tr>
           <TR>
              <TD><p style="font-size:16px">Xét nghiệm :</p></TD>
              <TD style="font-size:19px"><?php 
              function getxetnghiem(){
              $connect=mysqli_connect("localhost","root","");
              $data=mysqli_select_db("benhvien",$connect);
              $sql="Select maXetnghiem,tenXetNghiem from tblxetnghiem ";	
              mysqli_query("SET NAMES 'utf8'");
              $rs=mysqli_query($sql,$connect);
              $rs=mysqli_query($sql,$connect);
              $str="<select  id='xetnghiem' name='maxn'>";
              $str.="<option value=''>Tên xét nghiệm;";
              while($rowt=mysqli_fetch_array($rs))
              $str.="<option value=".$rowt['maXetnghiem'].">".$rowt['tenXetNghiem'];
              $str.="</select>";
              echo($str);
              }
       			getxetnghiem();
        	?></TD>
        </TR>
         
           <tr> 
            <td width="150" align="left">Mã bệnh án</td>
           
            <td><input name="maBA" type="text" class="box" id="txtUserName2" value="<?php echo $maBA?>" size="20" maxlength="40" ></td>
            
           </tr>
             <TR>
              <TD><p style="font-size:14px">Mã nhân viên :</p></TD>
             
              <TD style="font-size:19px"><?php 
              function getnhanvien(){
              $connect=mysqli_connect("localhost","root","");
              $data=mysqli_select_db("benhvien",$connect);
              $sql="Select maNV,tenNV from tblnguoitiepbenh ";	
              mysqli_query("SET NAMES 'utf8'");
              $rs=mysqli_query($sql,$connect);
              $rs=mysqli_query($sql,$connect);
              $str="<select  id='nhanvien' name='nhanvien'>";
              $str.="<option value=''>chọn mã nhân viên";
			  
              while($rowt=mysqli_fetch_array($rs))
              $str.="<option value=".$rowt['maNV'].">".$rowt['maNV'];
              $str.="</select>";
              echo($str);
              }
       			getnhanvien();
        	?></TD>
        </TR>
          </table>
    	</div>
    	<div class="phangiua2">
        
        	<table width="200%" border="0" cellpadding="2" cellspacing="1" class="text">
            
           
           <tr> 
            <td width="150" align="left">Ngày xét nghiệm:</td>
           
            <td><input name="ngayxn" type="text" class="box" id="txtUserName3" value="" size="20" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName3').calendar();
		});
		// ]]>
		</script>
            
           </tr>   	    
          <tr> 
            <td width="100" align="left">Lần xét nghiệm</td>
                       
            <TD style="font-size:19px">
             	<select name="lan" >
                <option value="<?php echo $dottra ?>">Chọn </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                 </select><br />
              </TD>
              </tr>
           
           <tr class="text"> 
            <td width="100" align="left">Kết quả : </td>
          
            <td><input name="ketqua" type="text" class="box" id="txtUserName" value="<?php echo $ketqua ?>" size="25" maxlength="40"></td>
           </tr>
           
           
         
           
          </table>
        </div>
		<div class="btn">
                <tr >
                    <input type="hidden" name="sua2" value="<?php echo $id;?>" "/> <br /><br />
                    <td><input type="submit" value="   Thêm  " name="save"/></td>
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
                        <td align="center">Mã Phiếu</td>
                        <td align="center">Mã bệnh án</td>
                        <td align="center">Mã xét nghiệm</td>
                         <td align="center">Tên xét nghiệm</td>
						 <td align="center">Mã nhân viên</td>
						<td align="center">ngày xét nghiệm</td>
                        <td align="center">lần thứ </td>
                         <td align="center">Kết quả</td>
                          <td align="center">Thành tiền</td>
                        <td align="center">Xóa</td>
                        <td align="center">Sửa</td>
                        
                        
                        
					</tr>
               <?php
				
  			  include("include/config.php");
			  $id=$_POST['ttxn'];
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query("SELECT * FROM  tblphieuxetnghiem,tblxetnghiem where tblphieuxetnghiem.maXetnghiem=tblxetnghiem.maXetnghiem and maBenhan='$id'");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maP = $row['maPhieu'];
					$maXN = $row['maXetnghiem'];
					$maBA = $row['maBenhan'];
					$maNV = $row['maNV'];
						
					$ngayXN = date("d/m/Y",strtotime($row['ngayXetnghiem']));			
					
					$lan = $row['lanThu'];
					$ketqua = $row['ketQua'];
					$tenXN= $row['tenXetNghiem'];
					$dongia= $row['thanhTien'];
					
					
					?>
                    <form action="xoaxetnghiem.php" method="post">
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
						<input type="text" name="ngaynhap" value="<?php echo $maNV ?>" size="10px"/>
					</td>
                    
                    <td align="center"> 	
						<input type="text" name="ngayXN" value="<?php echo $ngayXN ?>" size="10px"/>
					</td>
					
                    <td align="center"> 	
						<input type="text" name="solan" value="<?php echo $lan ?>" size="5px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="ketqua" value="<?php echo $ketqua ?>" size="10px"/></td>
                         <td align="center"> 	
						<input type="text" name="dongia" value="<?php echo $dongia ?>" size="10px"/></td>
                                           
                    <td align="center">
						 <input type="submit" name="submit" value="Xóa"  />
						<input type="hidden" name="xoa" value="<?php echo $row['maPhieu']?>"/>	
					</td>
           
					</form>
                    <td align="center">
						<form action="BacSi.php?page=suattxn" method="post">
						<input type="submit" name="submit" value="Sửa"  />
						<input type="hidden" name="sua" value="<?php echo $row['maPhieu'];?>"/> 
						</form>		
			</td>
                    <?php 
				}
					
			?> 
      
	</table>
    
  
      
    </div>
  	
    

</div>

