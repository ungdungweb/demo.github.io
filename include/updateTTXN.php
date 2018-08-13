
<?php
	    include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		$id=$_POST['sua'];
		$sql = mysqli_query("SELECT * FROM tblphieuxetnghiem where maPhieu='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					$maP = $row['maPhieu'];
					$maXN = $row['maXetnghiem'];
					$maBA = $row['maBenhan'];
					$manv = $row['maNV'];
					$ngayXN = date("d/m/Y",strtotime($row['ngayXetnghiem']));		
					$lan = $row['lanThu'];
					$ketqua = $row['ketQua'];
					$tenXN= $row['tenXetNghiem'];
					
	?>
<div id="content" >
	
   <div class="giua1">
  <form action="updateTTXN.php" method="post">

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
              function getxetnghiem($xn){
              $connect=mysqli_connect("localhost","root","");
              $data=mysqli_select_db("benhvien",$connect);
              $sql="Select maXetnghiem,tenXetNghiem from tblxetnghiem ";	
              mysqli_query("SET NAMES 'utf8'");
              $rs=mysqli_query($sql,$connect);
              $rs=mysqli_query($sql,$connect);
              $str="<select  id='xetnghiem' name='maxn'>";
              $str.="<option value='".$xn."'>Tên xét nghiệm;";
              while($rowt=mysqli_fetch_array($rs))
              $str.="<option value=".$rowt['maXetnghiem'].">".$rowt['tenXetNghiem'];
              $str.="</select>";
              echo($str);
              }
       			getxetnghiem($maXN);
        	?></TD>
        </TR>
           
         
           <tr> 
            <td width="150" align="left">Mã bệnh án</td>
           
            <td><input name="maBA" type="text" class="box" id="txtUserName2" value="<?php echo $maBA?>" size="20" maxlength="40"></td>
            
           </tr>
            <TR>
              <TD><p style="font-size:14px">Mã nhân viên :</p></TD>
             
              <TD style="font-size:19px"><?php 
              function getnhanvien($manv){
              $connect=mysqli_connect("localhost","root","");
              $data=mysqli_select_db("benhvien",$connect);
              $sql="Select maNV,tenNV from tblnguoitiepbenh ";	
              mysqli_query("SET NAMES 'utf8'");
              $rs=mysqli_query($sql,$connect);
              $rs=mysqli_query($sql,$connect);
              $str="<select  id='nhanvien' name='nhanvien'>";
              $str.="<option value='$manv'>chọn mã nhân viên";
			  
              while($rowt=mysqli_fetch_array($rs))
              $str.="<option value=".$rowt['maNV'].">".$rowt['maNV'];
              $str.="</select>";
              echo($str);
              }
       			getnhanvien($manv);
        	?></TD>
        </TR>
          </table>
    	</div>
    	<div class="phangiua2">
        
        	<table width="200%" border="0" cellpadding="2" cellspacing="1" class="text">
            
           
           <tr> 
            <td width="150" align="left">Ngày xét nghiệm:</td>
           
            <td><input name="ngayxn" type="text" class="box" id="txtUserName3" value="<?php echo $ngayXN ?>" size="20" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName3').calendar();
		});
		// ]]>
		</script>
            
           </tr>   	    
          
           
           <tr class="text"> 
            <td width="100" align="left">Kết quả : </td>
          
            <td><input name="ketqua" type="text" class="box" id="txtUserName" value="<?php echo $ketqua ?>" size="25" maxlength="40"></td>
           </tr>
           
           
         
           
          </table>
        </div>
		<div class="btn">
                <tr >
                    <input type="hidden" name="sua2" value="<?php echo $id;?>"/> <br /><br />
                    <td><input type="submit" value="   Lưu  " name="save"/></td>
                    <td><form action="BacSi.php?page=QLBA" method="post">
                    <input type="submit" value="   Bỏ qua   " name="save"/></form>
                    </td>
                </tr>
  		</div>
</form>
  </div>

      

  	
    


