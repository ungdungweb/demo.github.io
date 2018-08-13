<script type="text/javascript">
	function QLbenhan(){
	var f=document.regForm;
	if(f.maBN.value=='') { alert('Bạn chưa nhập mã bệnh nhân'); return false;}
	
	if(f.ngaykham.value=='') { alert(' Bạn chưa nhập ngày nhập viện'); return false;}
	if(f.chuandoan.value=='') { alert('Bạn chưa nhập chuẩn đoán'); return false;}
	if(f.dienbien.value=='') { alert('Bạn chưa nhập diễn biến'); return false;}
	if(f.tinhtrang.value=='') { alert('Bạn chưa nhập tình trạng'); return false;}
}
</script>
<?php
	include("include/config.php");
		mysqli_query($connect, "SET NAMES utf8");
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
			$query = mysqli_query($connect, $sql);
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
			$query = mysqli_query($connect, $sql);
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
		}else echo "<script>alert('phải chọn check và nhập đầy đủ thông tin cần tìm');</script>";
	}
	?>
    </table>
  </div>
  <div class="giua">
   <div class="giua1">
  <form action="thembenhan.php" method="post" name="regForm">

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
					$sql="Select * from  tblbenhnhan";
					$rs=mysqli_query($connect, $sql);
                    $str="";
					$str.="<td align='left'>Mã bệnh nhân :</td>";
					
					$str.="<td size=25><select name=maBN>";
					
					$str.=" <option value=''>Chon mã";
					while($row=mysqli_fetch_array($rs))
						{
						$str.="<option values=".$row['tenBenhnhan'].">".$row['maBenhnhan'];
						}
						$str.="</select>";
					$str.="</td>";
						
  					echo $str;
				?>
				
           </tr>
           
         
           <tr> 
            <td width="150" align="left">Ngày khám/nhập viện:</td>
           
            <td><input name="ngaykham" type="text" class="box" id="txtUserName2" value="" size="20" maxlength="40"></td>
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
           
            <td><input name="ngayxuat" type="text" class="box" id="txtUserName3" value="" size="20" maxlength="40"></td>
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
            <td><input name="chuandoan" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
            </tr>
           
           <tr class="text"> 
            <td width="100" align="left">Diễn biến bệnh</td>
            <td width="10" align="center">:</td>
            <td><input name="dienbien" type="text" class="box" id="txtUserName" value="" size="25" maxlength="40"></td>
           </tr>
           <tr class="text"> 
            <td width="100" align="left">Tinh trang</td>
            <td width="10" align="center">:</td>
            <td style="font-size:19px">
             	<select name="tinhtrang" >
                <option value="">tình trạng</option>                               
                <option value="TN">Điều trị tại nhà</option>
                <option value="NV">Nhập viện</option>
                <option value="XV">Xuất viện</option>
                
                 </select><br />
              </td>
           </tr>
            
           
         
           
          </table>
        </div>
		<div class="btn">
                <tr >
                    <td><input type="submit" value="   Thêm   " name="them" onclick="return QLbenhan();" /></td>
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
			  mysqli_query($connect, "SET NAMES utf8");
				
				$tt=0;
  				$sql = mysqli_query($connect, "SELECT * FROM  tblbenhan");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maBA = $row['maBenhan'];
					$maBN = $row['maBenhnhan'];
					
					$chuandoan = $row['chuanDoan'];
					$ngaynhap = $row['ngayNhapvien'];					
					$ngayxuat = $row['ngayXuatvien'];
					
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

