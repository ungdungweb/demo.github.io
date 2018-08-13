<script type="text/javascript">
	function QLbenhnhan(){
	var f=document.regForm;
	if(f.tenbn.value=='') { alert('Bạn chưa nhập tên bệnh nhân'); return false;}
	
	if(f.gioitinh.value=='') { alert('Bạn chưa nhập gioi tinh'); return false;}
	if(f.diachi.value=='') { alert('Bạn chưa nhập địa chỉ'); return false;}
	if(f.cmnd.value=='') { alert('Bạn chưa nhập CMND'); return false;}
	if(f.ngaysinh.value=='') { alert('Bạn chưa nhập ngày sinh'); return false;}
	if(f.dantoc.value=='') { alert('Bạn chưa nhập dân tộc'); return false;}
	if(f.nn.value=='') { alert('Bạn chưa nhập nghề nghiệp'); return false;}
	if(f.khoa.value=='') { alert('Bạn chưa nhập khoa'); return false;}
	if(f.bhyt.value!='')
	{
			if(f.ngoaituyen.value=='') { alert('BHYT nội tuyến hay ngoại tuyến'); return false;}
			if(f.ngoaituyen.value==0 && f.gioithieu.value=='' ) { alert('Có giấy giới thiệu hay không'); return false;}
			if(isNaN(f.bhyt.value) || f.bhyt.value.length <15 || f.bhyt.value.length >15)
				{
				alert('BHYT Phải đủ 15 số');		
				return false;
				}
	}
	if(isNaN(f.cmnd.value) || f.cmnd.value.length <9 || f.cmnd.value.length >9){
		alert('số cnnd phải 9 số');		
		return false;
	}
	
	

	
}
</script>
<?php
	include("include/config.php");
		mysqli_query($connect, "SET NAMES utf8");
		if(isset($_POST["tenbn"])&& isset($_POST["gioitinh"])&& isset($_POST["diachi"])&& isset($_POST["ngaysinh"]) && isset($_POST["cmnd"])&& isset($_POST["dantoc"])&& isset($_POST["nn"])&& isset($_POST["bhyt"])&& isset($_POST["khoa"]))
		{
			$tenbn=$_REQUEST["tenbn"];
			$gioitinh=$_REQUEST["gioitinh"];
			$diachi=$_REQUEST["diachi"];
			$ngaysinh=$_REQUEST["ngaysinh"];
			$cmnd=$_REQUEST["cmnd"];
			$dantoc=$_REQUEST["dantoc"];
			$nn=$_REQUEST["nn"];
			$bhyt=$_REQUEST["bhyt"];
			$khoa=$_REQUEST["khoa"];			
		}
	?>
<div id="content" >
	<div class="dau">

	
    <br />
	<br />

   	  <form id="form1" name="form1" method="post" action="">
   	    <table width="200" align="left" >
     
   	      <tr>
   	        <td><p>
   	          <label>
   	            <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
   	          </label>
   	          
            </p></td>
   	        <td>BHYT</td>
            <td > <input type="text" name="BHYT" value="" /></td>
            
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
                        <td align='center'>Chi tiết</td>
                        
                        
                        
					</tr>      
           
                      <?php
  	if(isset($_POST["Submit"])){
		$selected_button = $_POST['RadioGroup1'];
		if($selected_button == '1' && $_POST['BHYT']){
			$bhyt = $_POST['BHYT'];
			$sql = "Select * from  tblbenhnhan where BHYT like '%$bhyt%'";
			$query = mysqli_query($connect, $sql);
			$row = mysqli_num_rows($query);
			$stt=0;
			if($row<>0){ 
			while($data = mysqli_fetch_array($query)){	$stt++;			
                     echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value='' />$stt</td>";
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
					echo"<td align='center'>
						<form action='BacSi.php?page=sua' method='post'>
						<input type='submit' name='submit' value='Sửa'  />
						<input type='hidden' name='sua' value='".$data['maBenhnhan']."'/> 
						</form>		
					</td>
                        
               </tr>";
	   
            }
			}else echo "<script>alert('không có');</script>";
		}
		else if($selected_button == '2' && $_POST['CMND']){
			$CM = $_POST['CMND'];
			$sql = "Select * from  tblbenhnhan where CMND like '%$CM%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			$stt=0;
			if($row<>0){ 
			while($data = mysqli_fetch_array($query)){$stt++;
                     echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value=' ".$maBN."' />$stt</td>";
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
						echo"<td align='center'>
						<form action='BacSi.php?page=sua' method='post'>
						<input type='submit' name='submit' value='Sửa'  />
						<input type='hidden' name='sua' value='".$data['maBenhnhan']."'/> 
						</form>		
					</td>
                        
               </tr>";
       
	   
		}
        }else echo "<script>alert('không có');</script>";
		}else echo "<script>alert('phải chọn check và nhập đầy đủ thông tin tìm');</script>";
	}
	?>
    </table>
  </div>
   <div class="giua">
  <form action="thembenhnhanBS.php" method="post" name="regForm">

    	<div class="phangiua1">    
		  <table  border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           
           <tr class="text"> 
            <td width="100" align="left">Mã bệnh nhân</td>
            <td width="10" align="center">:</td>
            
           </tr>
           <tr> 
            <td width="100" align="left">Họ và tên</td>
            <td width="10" align="center">:</td>
             <td><input name="tenbn" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           
           <tr class="text"> 
            <td width="100" align="left">Giới tính</td>
            <td width="10" align="center">:</td>
            <!--<td><input name="gioitinh" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>-->
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
           <tr class="text"> 
            <td width="100" align="left">Ngày sinh</td>
            <td width="10" align="center">:</td>
            <td><input name="ngaysinh" type="text" class="box" id="txtUserName1" value="<?php echo $ngaysinh ?>" size="25" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName1').calendar();
		});
		// ]]>
		</script>
           </tr>
          
          </table>
    	</div>
        <div class="phangiua2">
        
        	<table width="300%" border="0" cellpadding="2" cellspacing="1" class="text">
           
           
           <tr> 
            <td width="100" align="left">Dân tộc</td>
            <td width="10" align="center">:</td>
            <!--<td><input name="dantoc" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>-->
            <TD style="font-size:19px">
             	<select name="dantoc" >
                <option value="">Chọn dân tộc</option>                               
                <option value="kinh">kinh</option>
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
           
           <tr class="text"> 
            <td width="100" align="left">Nghề nghiệp</td>
            <td width="10" align="center">:</td>
            <td><input name="nn" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="left">BHYT</td>
            <td width="10" align="center">:</td>
             <td><input name="bhyt" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
            <tr class="text"> 
            <td width="130" align="left">Nội/Ngoại tuyến</td>
            <td width="10" align="center">:</td>
          
             <TD style="font-size:19px">
             	<select name="ngoaituyen" >
                <option value="">Chọn tuyến</option>                               
                <option value="1">Nội Tuyến</option>
                <option value="0">Ngoại Tuyến</option>
                 </select><br />
              </TD>
           </tr>
            <tr class="text"> 
            <td width="120" align="left">Giấy Giới thiệu</td>
            <td width="5" align="center">:</td>

             <TD  width="2%" colspan="">
             	<select name="gioithieu" >
                <option value="">Giấy giới thiệu</option>                               
                <option value="1">Có</option>
                <option value="0">Không</option>
                 </select><br />
              </TD>
              <td>
              (*)chỉ chọn khi vượt tuyến
              </td>
           </tr>
          <tr> 
            <td width="100" align="left">Khoa khám</td>
            <td width="10" align="center">:</td>            
            <TD style="font-size:19px">
             	<?php 
           function getkhoa(){
           include("include/config.php");
           $sql="Select maKhoa,tenKhoa from tblkhoa ";	
           mysqli_query($connect, "SET NAMES 'utf8'");
           $rs=mysqli_query($connect, $sql);
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
                    <td><input type="submit" value="   Thêm   " name="them" onclick="return QLbenhnhan();" /></td>
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
						<td align="center">Mã bệnh nhân</td>
						<td align="center">Tên bệnh nhân</td>
                        <td align="center">Giới tính</td>
						<td align="center">Địa chỉ</td>
                        <!--<td align="center">Ngày sinh</td>-->
                        <td align="center">CMND</td>
                        <!--<td align="center">Dân tộc</td>
                        <td align="center">nghề nghiệp</td>-->
                        <td align="center">BHYT</td>
                        <td align="center">Khoa Khám</td>
                        <td align="center">Xóa</td>
                        <td align="center">Sửa</td>
                        
                        
					</tr>
               <?php
				$makhoa =  $_SESSION['maKhoa'];
  			  include("include/config.php");
				mysqli_query("SET NAMES utf8");
				$tt=0;
				$khoakham = $row['maKhoa']; // lay gia tri session
  				$sql = mysqli_query("SELECT * FROM  tblbenhnhan WHERE maKhoa = '".$makhoa."'");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maBN = $row['maBenhnhan'];
					$tenBN = $row['tenBenhnhan'];
					$diaChi = $row['diaChi'];
					$ngaysinh = $row['ngaySinh'];
					$gioitinh = $row['gioiTinh'];					
					$cmnd = $row['CMND'];
					$dantoc = $row['danToc'];
					$nghenghiep = $row['ngheNghiep'];
					$BHYT = $row['BHYT'];
					$khoakham = $row['maKhoa']; 
					?>
                    <form action="xoaBNBS.php" method="post">
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maBN;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="mabn" value="<?php echo $maBN?>" size="10px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="tenbn" value="<?php echo $tenBN ?>" size="15px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="gt" value="<?php echo $gioitinh ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="dchi" value="<?php echo $diaChi ?>" size="10px"/>
					</td>
                  <!--  <td align="center"> 	
						<input type="text" name="cm" value="<?php echo $ngaysinh ?>" size="10px"/>
					</td>-->
                    
                    <td align="center"> 	
						<input type="text" name="cmnd" value="<?php echo $cmnd ?>" size="10px"/>
					</td>
					<!--<td align="center"> 	
						<input type="text" name="dantoc" value="<?php echo $dantoc ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="nn" value="<?php echo $nghenghiep ?>" size="10px"/>
					</td>-->
                    <td align="center"> 	
						<input type="text" name="bhyt" value="<?php echo $BHYT ?>" size="10px"/></td>
                        <td align="center"> 	
						<input type="text" name="khoakham" value="<?php echo $khoakham ?>" size="10px"/>
					
					</td>
                    
                    <td align="center">
						 <input type="submit" name="submit" value="Xóa"  />
						<input type="hidden" name="xoa" value="<?php echo $row['maBenhnhan']?>"/>	
					</td>
           
					</form>
                    <td align="center">
						<form action="BacSi.php?page=sua" method="post">
						<input type="submit" name="submit" value="Sửa"  />
						<input type="hidden" name="sua" value="<?php echo $row['maBenhnhan'];?>"/> 
						</form>		
			</td>
                    <?php 
				}
					
			?> 
      
	</table>
    </div>
  	
    

</div>

