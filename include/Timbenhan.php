<?php  include("config.php");
mysqli_query("SET NAMES utf8");
?>
<div id="content" >

	<div class="dau"><br />
    <h1 align="center" > Tìm Kiếm Bệnh Án</h1>
<br />

		
   	  <form id="form1" name="form1" method="post" action="">
   	    <table width="350" align="center" >   
   	      <tr>
   	        <td>
   	          <label>
   	            <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
   	          </label>
            </td>
   	        <td>Mã bệnh nhân</td>
            <td > <input type="text" name="mabn" value="" /></td>
          </tr>
   	      <tr>
   	        <td><label>
   	            <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1" />
   	        </label></td>
   	        <td>Mã bệnh án</td>
             <td > <input type="text" name="maba" value="" /></td>
          </tr>
          <tr>
   	        <td><label>
   	            <input type="radio" name="RadioGroup1" value="3" id="RadioGroup1_1" />
   	        </label></td>
   	        <td>Tên bệnh nhân</td>
             <td > <input type="text" name="tenBN" value="" /></td>
          </tr>
          <tr>
           <td align="center"><input type="submit" name="Submit" value="Tìm Thông Tin" /></td>
          </tr>
        </table>
      </form>
	
    
        
           
                      <?php
  	if(isset($_POST["Submit"])){
		$selected_button = $_POST['RadioGroup1'];
		if($selected_button == '1' && $_POST['mabn']){
			$mabn = $_POST['mabn'];
			$sql = "Select * from  tblbenhan,tblbenhnhan where tblbenhan.maBenhnhan=tblbenhnhan.maBenhnhan and tblbenhnhan.maBenhnhan like '%$mabn%' ";
			$query = mysqli_query($connect, $sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
			$stt=0;
			?>
            <table width='400px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>
         
         
					<tr>
                    	<td align='center'>Số TT</td>
                        <td align='center'>Mã bệnh án</td>
						<td align='center'>Mã bệnh nhân</td>
                        <td align='center'>Chuẩn đoán</td>
						<td align='center'>Ngày nhập viện</td>
                       <td align='center'>Ngày xuất viện</td>
                        <td align='center'>Diễn biến</td>
                        <td align='center'>Tình trạng</td>
                        <td align='center'>Thông tin xét nghiệm</td>
                        <td align='center'>Bác sĩ theo dõi</td>
                        
                        
					</tr> 
            <?php
			while($data = mysqli_fetch_array($query)){	$stt++;
                    echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value=' ".$data['maBenhan']."' />$stt</td>";
					echo "<td align='center'> ";	
						echo "<input type='text' name='maba' value='".$data['maBenhan']."' size='5px' align='middle'/>";
                   echo "</td>";
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBenhnhan']."' size='5px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['chuanDoan']."' size='15px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='gt' value='".$data['ngayNhapvien']."' size='10px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='dchi' value='".$data['ngayXuatvien']."' size='10px'/>";
					echo "</td>                    
                    <td align='center'>"; 	
						echo "<input type='text' name='cmnd' value='".$data['dienBienbenh']."' size='10px'/>";
					echo "</td>
                    <td align='center'> ";
						echo "<input type='text' name='bhyt' value='".$data['tinhTrang']."' size='5px'/></td>";
						echo"<td align='center'>";
						echo "<form action='BacSi.php?page=TTXN' method='post'>
						<input type='submit'name='submit' value='chi tiết'  />
						<input type='hidden' name='ttxn' value='".$data['maBenhan']."'/> 
						</form>	";	
			echo "</td>
            <td align='center'>";
						echo"<form action='BacSi.php?page=TTBSK' method='post'>
						<input type='submit' name='submit' value='chi tiết'  />
						<input type='hidden' name='ttbsk' value='".$data['maBenhan']."'/> 
						</form>		
			</td>";
                        
               echo "</tr>";
	   
            }
			}else echo "<script>alert('không có');</script>";
		}
		else if($selected_button == '2' && $_POST['maba']){
			$maba = $_POST['maba'];
			$sql = "Select * from  tblbenhan where maBenhan like '%$maba%'";
			$query = mysqli_query($connect, $sql);
			$row = mysqli_num_rows($query);
			$stt=0;
			if($row<>0){ 
			?>
            <table width='400px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>
         
         
					<tr>
                    	<td align='center'>Số TT</td>
                        <td align='center'>Mã bệnh án</td>
						<td align='center'>Mã bệnh nhân</td>
                        <td align='center'>Chuẩn đoán</td>
						<td align='center'>Ngày nhập viện</td>
                       <td align='center'>Ngày xuất viện</td>
                        <td align='center'>Diễn biến</td>
                        <td align='center'>Tình trạng</td>
                        <td align='center'>Thông tin xét nghiệm</td>
                        <td align='center'>Bác sĩ theo dõi</td>
                        
                        
					</tr> 
                    <?php
			while($data = mysqli_fetch_array($query)){$stt++;
                     echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value=' ".$data['maBenhan']."' />$stt</td>";
					echo "<td align='center'> ";	
						echo "<input type='text' name='maba' value='".$data['maBenhan']."' size='5px' align='middle'/>";
                   echo "</td>";
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBenhnhan']."' size='5px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['chuanDoan']."' size='15px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='gt' value='".$data['ngayNhapvien']."' size='10px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='dchi' value='".$data['ngayXuatvien']."' size='10px'/>";
					echo "</td>                    
                    <td align='center'>"; 	
						echo "<input type='text' name='cmnd' value='".$data['dienBienbenh']."' size='10px'/>";
					echo "</td>
                    <td align='center'> ";
						echo "<input type='text' name='bhyt' value='".$data['tinhTrang']."' size='5px'/></td>";
						echo"<td align='center'>";
						echo "<form action='BacSi.php?page=TTXN' method='post'>
						<input type='submit'name='submit' value='chi tiết'  />
						<input type='hidden' name='ttxn' value='".$data['maBenhan']."'/> 
						</form>	";	
			echo "</td>
            <td align='center'>";
						echo"<form action='BacSi.php?page=TTBSK' method='post'>
						<input type='submit' name='submit' value='chi tiết'  />
						<input type='hidden' name='ttbsk' value='".$data['maBenhan']."'/> 
						</form>		
			</td>";
                        
               echo "</tr>";
	   
		}
        }else echo "<script>alert('không có');</script>";
		}
		else if($selected_button == '3' && $_POST['tenBN']){
			$tenbenhnhan = $_POST['tenBN'];
			
			$sql = "Select * from  tblbenhnhan,tblkhoa where tblbenhnhan.maKhoa= tblkhoa.maKhoa and tenBenhnhan like '%$tenbenhnhan%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			$stt=0;
			if($row<>0){ 
			
	?>
     <table align="center" width='400px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>
					<tr>
                    	<td align='center'>STT</td>
						<td align='center'>Mã bệnh nhân</td>
						<td align='center'>Tên bệnh nhân</td>
                      
						<td align='center'>Địa chỉ</td>
                       <td align='center'>CMND</td>
                       <td align='center'>BHYT</td>
                     <td align='center'>Khoa Khám</td>
                     <td align='center'>Chi tiết BN</td>
                     <td align='center'>Chi tiết BA</td>
                        
					</tr>
    <?php
			while($data = mysqli_fetch_array($query)){
				
            $stt++;
                     echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value=' ".$maBN."' /> $stt</td>";
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBenhnhan']."' size='5px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['tenBenhnhan']."' size='15px'/>";
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
					
					echo "</td>";
					echo "</td>
					<td align='center'>";
						echo "<form action='bacsi.php?page=sua'method='post'>
						<input type='submit' name='submit' value='xem'  />
						<input type='hidden' name='sua' value='".$data['maBenhnhan']."'/>
						</form>		";
			echo "</td>
			<td align='center'>";
						echo "<form action='bacsi.php?page=chitietba'method='post'>
						<input type='submit' name='submit' value='Xem'  />
						<input type='hidden' name='chitietba' value='".$data['maBenhnhan']."'/>
						</form>		";
			echo "</td>
               </tr>";
	   
		}
			
        }else echo "<script>alert('không có');</script>";
		
		
		}else echo "<script>alert('phải chọn check và thông tin cần tìm');</script>";
	}
	?>
    </table>
    		
