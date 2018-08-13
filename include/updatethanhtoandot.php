<script language="javascript" src="../js/jquery-1.5.1.js"></script>
<script language="javascript">
		$(document).ready(function() {
		 
		  $('#benhnhan').change(function() {
		   giatri = this.value;
		   $('#benhan').load('include/ajax1.php?idba='+giatri);
		  });		  
		 });		 

</script>
<?php
	include("include/config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		include("include/config.php");
	if(isset($_POST["maBN"])&& isset($_POST["ngaykham"])&& isset($_POST["ngayxuat"]) && isset($_POST["chuandoan"])&& isset($_POST["dienbien"])&& isset($_POST["tinhtrang"]))
		{
			$maBN=$_REQUEST["maBN"];
			
			$ngaykham=$_REQUEST["ngaykham"];
			$ngayxuat=$_REQUEST["ngayxuat"];
			$khoa=$_REQUEST["khoa"];
			$chuandoan=$_REQUEST["chuandoan"];
			$dienbien=$_REQUEST["dienbien"];
			$tinhtrang=$_REQUEST["tinhtrang"];
			$mabs=$_REQUEST["mabs"];
					
		}
	?>
<div id="content" >
	<div class="dau">

	
    <br />

<h2 align="center">Tìm thông tin bệnh nhân</h2>
   	  <form id="form1" name="form1" method="post" action="">
   	    <table width="400" align="left" >
     
   	      <tr>
   	        <td><p>
   	          <label>
   	            <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
   	          </label>
   	          
            </p></td>
   	        <td>Tên bệnh nhân</td>
            <td > <input type="text" name="tenBN" value="" /></td>
            
          </tr>
   	      <tr>
   	        <td><label>
   	            <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1" />
   	        </label></td>
   	        <td>CMND</td>
             <td > <input type="text" name="CMND" value="" /></td>
          </tr>
          <tr>
          <td align="center"><input type="submit" name="Submit" value="Tìm Thông Tin" /></td>
          </tr>
        </table>
     
	    </form>
        <table width='400px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>
         
         
					<tr>
                    	<td align='center'>Số TT</td>
						<td align='center'>Mã bệnh nhân</td>
						<td align='center'>Tên bệnh nhân</td>
                        <td align='center'>Giới tính</td>
						<td align='center'>Địa chỉ</td>
                       <td align='center'>CMND</td>
                      
                        <td align='center'>BHYT</td>
                        <td align='center'>Khoa Khám</td>
                        
                        
					</tr>      
           
                      <?php
  	if(isset($_POST["Submit"])){
		$selected_button = $_POST['RadioGroup1'];
		if($selected_button == '1' && $_POST['tenBN']){
			$tenBN = $_POST['tenBN'];
			$sql = "Select * from  tblbenhnhan where tenBenhnhan like '%$tenBN%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
			while($data = mysqli_fetch_array($query)){				
                     echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value=' ".$maBN."' /></td>";
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBenhnhan']."' size='10px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['tenBenhnhan']."' size='15px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='gt' value='".$data['gioiTinh']."' size='5px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='dchi' value='".$data['diaChi']."' size='10px'/>";
					echo "</td>                    
                    <td align='center'>"; 	
						echo "<input type='text' name='cmnd' value='".$data['CMND']."' size='10px'/>";
					echo "</td>
                    <td align='center'> ";
						echo "<input type='text' name='bhyt' value='".$data['BHYT']."' size='10px'/></td>";
                        echo "<td align='center'>";
						echo "<input type='text' name='khoakham' value='".$data['tenKhoa']."' size='10px'/> ";
					
					echo "</td>
               </tr>";
	   
            }
			}else echo "<script>alert('không có');</script>";
		}
		else if($selected_button == '2' && $_POST['CMND']){
			$CM = $_POST['CMND'];
			$sql = "Select * from  tblbenhnhan where CMND like '%$CM%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
			while($data = mysqli_fetch_array($query)){
                     echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value=' ".$maBN."' /></td>";
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBenhnhan']."' size='10px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['tenBenhnhan']."' size='15px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='gt' value='".$data['gioiTinh']."' size='5px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='dchi' value='".$data['diaChi']."' size='10px'/>";
					echo "</td>                    
                    <td align='center'>"; 	
						echo "<input type='text' name='cmnd' value='".$data['CMND']."' size='10px'/>";
					echo "</td>
                    <td align='center'> ";
						echo "<input type='text' name='bhyt' value='".$data['BHYT']."' size='10px'/></td>";
                        echo "<td align='center'>";
						echo "<input type='text' name='khoakham' value='".$data['tenKhoa']."' size='10px'/>";
					
					echo "</td>
               </tr>";
       
	   
		}
        }else echo "<script>alert('không có');</script>";
		}else echo "<script>alert('phải chọn check và nhập thông tin cần tìm');</script>";
	}
	?>
    </table>
  </div>
  <?php
	session_start();
	include("include/config.php");
	$id=$_POST['sua'];
	$sql = mysqli_query("SELECT * FROM tblthanhtoandot where hoaDonID='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					$maHD = $row['hoaDonID'];
					$maBA = $row['maBenhan'];
					$ngaytra = date("d/m/Y",strtotime($row['ngayTra']));	
					$dottra = $row['dotTra'];
					$sotien = $row['soTien'];
					$mabn = $row['maBenhnhan'];
					
		?>
  <div class="giua">
   <div class="giua1">
  <form action="updatetientradot.php" method="post">

    	<div class="phangiua1">    
		  <table  border="0" cellpadding="2" cellspacing="1" class="text" width="400">
            <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           
          
           <tr> 
            <td width="100" align="left">Mã bệnh nhân :</td>
                       
            <TD style="font-size:19px">
             	<?php 
           function getbenhnhan($mabn){
           $connect=mysqli_connect("localhost","root","");
           $data=mysqli_select_db("benhvien",$connect);
           $sql="Select maBenhnhan,tenBenhnhan from tblbenhnhan ";	
           mysqli_query("SET NAMES 'utf8'");
           $rs=mysqli_query($sql,$connect);
           $rs=mysqli_query($sql,$connect);
           $str="<select  id='benhnhan' name='benhnhan'>";
           $str.="<option value='$mabn'>ma benh nhan;";
           while($rowt=mysqli_fetch_array($rs))
           $str.="<option value=".$rowt['maBenhnhan'].">".$rowt['maBenhnhan'];
           $str.="</select>";
           echo($str);
           }
           getbenhnhan($maBN);
           ?>
              </TD>
           </tr>
           
         <tr> 
            <td width="100" align="left">Mã bệnh án:</td>
                       
            <td id='benhan'>
            <select name="mabenhan" id="mabenhan">
             <option value="<?php echo $maBA ?>">-ma benh an-</option>
            </select>
	    </td>
           <tr> 
           
          </tr>  
          </table>
    	</div>
    	<div class="phangiua2">
        
        	<table width="150%" border="0" cellpadding="2" cellspacing="1" class="text">
            
           
           
           <tr> 
            <td width="150" align="left">Ngày trả:</td>
           
            <td><input name="ngaytra" type="text" class="box" id="txtUserName2" value="<?php echo $ngaytra ?>" size="20" maxlength="40"></td>
             <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName2').calendar();
		});
		// ]]>
		</script>
           </tr>
           <tr class="text"> 
            <td width="100" align="left">Số tiền :</td>
           
            <td><input name="sotien" type="text" class="box" id="txtUserName" value="<?php echo $sotien?>" size="20" maxlength="40"> Đồng</td>
           </tr>
          </table>
        </div>
		<div class="btn">
                <tr >
                 <input type="hidden" name="sua2" value="<?php echo $id;?>"/> <br /><br />
                    <td><input type="submit" value="   Lưu   " name="them"/></td>
                    <td><form action="nguoitiepbenh.php?page=thanhtoandot" method="post">
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
						<td align="center">Mã ID</td>
						<td align="center">Mã bệnh ánn</td>
						<td align="center">Ngày trả</td>
                        
                        <td align="center">Số tiền</td> 
                        <td align="center">Xóa</td>
                        <td align="center">Sửa</td>
                           
                        
                        
					</tr>
               <?php
				
  			  include("include/config.php");
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query("SELECT * FROM  tblthanhtoandot");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
					$maHD = $row['hoaDonID'];
                	$maBA = $row['maBenhan'];
					$ngaytra = $row['ngayTra'];					
					$dottra = $row['dotTra'];
					$sotien = $row['soTien'];
					
					?>
                    <form action="xoathanhtoandot.php" method="post">
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maHD ;?>" /><?php echo $tt; ?></td>
                    <td align="centen"> 	
						<input type="text" name="maba" value="<?php echo $maHD?>" size="10px" align="middle"/>
                    </td>
                	<td align="centen"> 	
						<input type="text" name="maba" value="<?php echo $maBA?>" size="10px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="mabn" value="<?php echo $ngaytra ?>" size="10px"/>
					</td>
                  
                   
                   <td align="center"> 	
						<input type="text" name="ngaynhap" value="<?php echo $sotien ?>" size="10px"/>
					</td>
                                           
                    <td align="center">
						 <input type="submit" name="submit" value="Xóa"  />
						<input type="hidden" name="xoa" value="<?php echo $row['hoaDonID']?>"/>	
					</td>
           
					</form>
                    <td align="center">
						<form action="BacSi.php?page=suaba" method="post">
						<input type="submit" name="submit" value="Sửa"  />
						<input type="hidden" name="sua" value="<?php echo $row['hoaDonID'];?>"/> 
						</form>		
			</td>
            
                    <?php 
				}
					
			?> 
      
	</table>
    
  
      
    </div>
  	
    

</div>

