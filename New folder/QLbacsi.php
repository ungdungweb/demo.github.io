
<?php
	include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		if(isset($_POST["tenbs"])&& isset($_POST["khoa"])&& isset($_POST["ngaysinh"])&& isset($_POST["gioitinh"]) && isset($_POST["diachi"])&& isset($_POST["cmnd"])&& isset($_POST["trinhdo"])&& isset($_POST["email"])&& isset($_POST["sodt"]))
		{
			$tenbs=$_REQUEST["tenbs"];
			$khoa=$_REQUEST["khoa"];
			$ngaysinh=$_REQUEST["ngaysinh"];
			$gioitinh=$_REQUEST["gioitinh"];
			$diachi=$_REQUEST["diachi"];
			$cmnd=$_REQUEST["cmnd"];
			$trinhdo=$_REQUEST["trinhdo"];
			$email=$_REQUEST["email"];
			$sodt=$_REQUEST["sodt"];			
		}
	?>
<div id="content" >
	
   
  <form action="thembacsi.php" method="post">

    	<div class="phangiua1">    
		  <table  border="0" cellpadding="2" cellspacing="1" class="text" >
            <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           
           <tr class="text"> 
            <td width="200" align="left">Mã bác sĩ</td>
            <td width="5" align="center">:</td>
            
           </tr>
           <tr> 
            <td width="100" align="left">Họ và tên</td>
            <td width="10" align="center">:</td>
             <td><input name="tenbs" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           
           <tr class="text"> 
            <td width="100" align="left">Giới tính</td>
            <td width="10" align="center">:</td>
          
             <TD style="font-size:19px">
             	<select name="gioitinh" >
                <option value="">Chọn giới tính</option>                               
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                 </select><br />
              </TD>
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
            <td><input name="ngaysinh" type="text" class="box" id="txtUserName1" value="" size="25" maxlength="40">
             <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName1').calendar();
		});
		// ]]>
		</script>
            </td>
           
           </tr>
           
           <tr class="text"> 
            <td width="100" align="left">Trình độ</td>
            <td width="10" align="center">:</td>
            <td><input name="trinhdo" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">Email</td>
            <td width="10" align="center">:</td>
             <td><input name="email" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">Số điện thoại</td>
            <td width="10" align="center">:</td>
             <td><input name="sodt" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">Khoa </td>
            <td width="10" align="center">:</td>            
            <TD style="font-size:19px">
             	<?php 
           function getkhoa(){
           $connect=mysqli_connect("localhost","root","");
           $data=mysqli_select_db("benhvien",$connect);
           $sql="Select maKhoa,tenKhoa from tblkhoa ";	
           mysqli_query("SET NAMES 'utf8'");
           $rs=mysqli_query($sql,$connect);
           $rs=mysqli_query($sql,$connect);
           $str="<select  id='khoa' name='khoa'>";
           $str.="<option value=''>khoa;";
           while($rowt=mysqli_fetch_array($rs))
           $str.="<option value=".$rowt['maKhoa'].">".$rowt['maKhoa']."- ".$rowt['tenKhoa'];
           $str.="</select>";
           echo($str);
           }
           getkhoa();
           ?>
              </TD>
          </table>
        </div>
		<div class="btn">
                <tr >
                    <td><input type="submit" value="   Thêm   " name="them"/></td>
                    <td><form action="BacSi.php?page=QLBS" method="post">
                    <input type="submit" value="   Bỏ qua   " name="save"/></form>
                    </td>
                </tr>
  		</div>
 </form>
 
        

    <div class="cuoi">
  	
    	<table width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
         
         
					<tr>
                    	<td align="center">Số TT</td>
						<td align="center">Mã bác sĩ</td>
						<td align="center">Tên bác sĩ</td>
                        <td align="center">Giới tính</td>
						<td align="center">Địa chỉ</td>
                       
                        <td align="center">CMND</td>
                        <td align="center">Trình độ</td>
                        <td align="center">Email</td>
                        <td align="center">Điện thoại</td>
                        <td align="center">khoa</td>
                        <td align="center">Xóa</td>
                        <td align="center">Sửa</td>
                        
                        
					</tr>
               <?php
				
  			  include("include/config.php");
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query("SELECT * FROM  tblbacsi");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maBS = $row['maBacsi'];
					$tenBS = $row['tenBacsi'];
					$khoakham = $row['maKhoa'];
					$ngaysinh = $row['ngaySinh'];
					$gioitinh = $row['gioiTinh']; 
					$diaChi = $row['diaChi'];
										
					$cmnd = $row['CMND'];
					$trinhdo = $row['trinhDo'];
					$email = $row['Email'];
					$sodt = $row['soDT'];
					
					?>
                    <form action="xoabacsi.php" method="post">
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maBS;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="mabs" value="<?php echo $maBS?>" size="10px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="tenbs" value="<?php echo $tenBS ?>" size="15px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="gt" value="<?php echo $gioitinh ?>" size="5px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="dchi" value="<?php echo $diaChi ?>" size="10px"/>
					</td>
                   <!--<td align="center"> 	
						<input type="text" name="cm" value="<?php echo $ngaysinh ?>" size="10px"/>
					</td>-->
                    <td align="center"> 	
						<input type="text" name="cmnd" value="<?php echo $cmnd ?>" size="10px"/>
					</td>
					<td align="center"> 	
						<input type="text" name="trinhdo" value="<?php echo $trinhdo ?>" size="5px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="email" value="<?php echo $email ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="so dt" value="<?php echo $sodt ?>" size="10px"/></td>
                        <td align="center"> 	
						<input type="text" name="khoakham" value="<?php echo $khoakham ?>" size="10px"/>
					
					</td>
                    
                    <td align="center">
						 <input type="submit" name="submit" value="Xóa"  />
						<input type="hidden" name="xoa" value="<?php echo $row['maBacsi']?>"/>	
					</td>
           
					</form>
                    <td align="center">
						<form action="Bacsi.php?page=suaBS" method="post">
						<input type="submit" name="submit" value="Sửa"  />
						<input type="hidden" name="suabs" value="<?php echo $row['maBacsi'];?>"/> 
						</form>		
			</td>
                    <?php 
				}
					
			?> 
      
	</table>
    
  
      
    </div>
  	
    

</div>

