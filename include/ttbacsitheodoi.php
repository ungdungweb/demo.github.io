<script language="javascript" src="../js/jquery-1.5.1.js"></script>
<script language="javascript">
		$(document).ready(function() {
		 
		  $('#khoa').change(function() {
		   giatri = this.value;
		   $('#bacsi').load('include/ajax.php?idbs='+giatri);
		  });		  
		 });		 

</script>
<?php
	    include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		$id=$_POST['ttbsk'];
		$sql = mysqli_query("SELECT * FROM tblbenhan where maBenhan='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					$maBA = $row['maBenhan'];
					$maBN = $row['maBenhnhan'];
					$maBS = $row['maBacsi'];
					$chuandoan = $row['chuanDoan'];
						
					
	?>
<div id="content" >
	<h1 align="center">Thông tin bác sĩ theo dõi bệnh án</h1>
 
  <form action="thembenhanbacsi.php" method="post">

    	<div class="phangiua1">    
		  <table  border="0" cellpadding="2" cellspacing="1" class="text" width="400">
            <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           
          
            <td width="150" align="left">Mã bệnh án</td>
           
            <td><input name="maBA" type="text" class="box" id="txtUserName2" value="<?php echo $maBA?>" size="27" maxlength="40" ></td>
            
           </tr>
           <tr> 
            <td width="100" align="left">Khoa chuyển</td>
                       
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
             <TR>
              <TD><p style="font-size:20px">Mã bác sĩ :</p></TD>
             
             <td id='bacsi'>
            <select name="mabs" id="mabs">
             <option value="0">-Tên bac si-</option>
            </select>
	    </td>
        </TR>
        <tr> 
            <td width="100" align="left">Lần chuyển</td>
                       
            <TD style="font-size:19px">
             	<select name="lanchuyen" >
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
        <!--<tr> 
            <td width="150" align="left">Ngày chuyển đến:</td>
           
            <td><input name="ngaycden" type="text" class="box" id="txtUserName3" value="" size="20" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName3').calendar();
		});
		// ]]>
		</script>
            
           </tr>   	 
           <tr> 
            <td width="150" align="left">Ngày chuyển đi:</td>
           
            <td><input name="ngaycdi" type="text" class="box" id="txtUserName4" value="" size="20" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName4').calendar();
		});
		// ]]>
		</script>
            
           </tr>  --> 	 
          </table>
        </div>
        <div  class="phangiua2">
        </div>
		<div align="center">
                <tr >
                    <input type="hidden" name="sua2" value="<?php echo $id;?>"/> <br /><br />
                    <td><input type="submit" value="   Thêm  " name="save"/></td>
                    <td><form action="BacSi.php?page=QLBA" method="post">
                    <input type="submit" value="   Bỏ qua   " name="save"/></form>
                    </td>
                </tr>
                </div>
  		
 </form>
 
        

    <div class="cuoi">
  	
    	<table width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
  
					<tr>
                    	<td align="center">Số TT</td>
                        <td align="center">Mã Phiếu</td>
                        <td align="center">Mã bệnh án</td>
						 <td align="center">Mã bác sĩ</td>
						<td align="center">Tên bác sĩ</td>
                        <td align="center">Khoa </td>
                         <td align="center">Ngày chuyển đến </td>
                          <td align="center">Ngày Chuyển đi </td>
                           <td align="center">Thành tiền </td>
                        <td align="center">Xóa</td>
                        <td align="center">Sửa</td>
                        
                        
					</tr>
               <?php
				
  			  include("config.php");
			  $id=$_POST['ttbsk'];
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query("SELECT * FROM tblbenhan,tblbenhanbacsi,tblbacsi,tblkhoa where tblbenhan.maBenhan=tblbenhanbacsi.maBenhan and tblbenhanbacsi.maBacsi=tblbacsi.maBacsi and  tblbacsi.maKhoa=tblkhoa.maKhoa and tblbenhan.maBenhan='$id'", $connect);
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maP = $row['logID'];
					$maBA = $row['maBenhan'];
					$maBS = $row['maBacsi'];
					$tenbacsi = $row['tenBacsi'];		
					$lanchuyen = $row['lanThu'];
					$tenkhoa = $row['tenKhoa'];
					$ngaychuyenden = date("d/m/Y",strtotime($row['ngayChuyenden']));			
					$ngaychuyendi = date("d/m/Y",strtotime($row['ngayChuyendi']));
					$thanhtien = $row['thanhTien'];
					
					?>
                    <form action="xoaBABS.php" method="post">
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
						<input type="text" name="tenbs" value="<?php echo $ngaychuyenden ?>" size="10px"/>
					</td>
                     <td align="center"> 	
						<input type="text" name="tenbs" value="<?php echo $ngaychuyendi ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tenbs" value="<?php echo $thanhtien ?>" size="10px"/>
					</td>
                                                               
                    <td align="center">
						 <input type="submit" name="submit" value="Xóa"  />
						<input type="hidden" name="xoa" value="<?php echo  $row['logID'];?>"/>	
					</td>
           
					</form>
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
  
      
    </div>
  	
    



