<?php  include("config.php");
mysqli_query("SET NAMES utf8");
?>
<div id="content">
<form id="form1" name="form1" method="post" action="">

<h1 align="center"> Thống Kê Bệnh Nhân Theo Dịa Chỉ</h1>
 <table>
    
    <tr class="text"> 
            <td width="150" align="left" style="font-size:20px">Chọn Địa Chỉ</td>
            <td width="10" align="center">:</td>
             <TD style="font-size:19px">
             	<select name="diachi" >
                    <option value="">Chọn xã</option>                               
                    
                     <option value="Đại Minh">Đại Minh</option>
                    <option value="Đại Thắng">Đại Thắng</option>
                    <option value="Đại Tân">Đại Tân</option>
                    <option value="Đại Phong">Đại Phong</option>
                    <option value="Đại Thạnh">Đại Thạnh </option>
                    <option value="Đại Chánh">Đại Chánh</option>
                    <option value="Đại Cường">Đại Cường</option>
                    <option value="Đại Hồng">Đại Hồng</option>
                    <option value="Đại Hưng">Đại Hưng</option>
                    <option value="Đại Sơn">Đại Sơn</option>
                    <option value="Đại Lãnh">Đại Lãnh</option>
                    <option value="Đại Quang">Đại Quang</option>
                    <option value="Đại An">Đại An</option>
                    <option value="Đại Nghia">Đại Nghia</option>
                    <option value="Đại Đồng">Đại Đồng</option>
                    <option value="Đại Hiệp">Đại Hiệp</option>
                    
                </select><br />
              </TD>
           </tr>
           <tr>
          <td align="center"><input type="submit" name="Submit" value="Thống kê" /></td>
          </tr>
	</table>
</form>
		
             <?php
  			if(isset($_POST["Submit"]) && $_POST['diachi']){
		mysqli_query("SET NAMES utf8");
		$stt=0;
			$diachi = $_POST['diachi'];
			$sql = "Select * from  tblbenhnhan where diaChi like '%$diachi%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			if($row<>0){
?>
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
                        <td align='center'>chọn</td>
					</tr>  
<?php
			while($data = mysqli_fetch_array($query)){
				 $stt++;
                     echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value=' ".$maBN."' /> $stt</td>";
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
						echo "<input type='text' name='khoakham' value='".$data['maKhoa']."' size='10px'/>";
					
					echo "</td>
					<td align='center'>";
						echo "<form action='nguoitiepbenh.php?page=sua'method='post'>
						<input type='submit' name='submit' value='Chitiết'  />
						<input type='hidden' name='sua' value='".$data['maBenhnhan']."'/>
						</form>		";
			echo "</td>
               </tr>";
       
	   
		}
        }else echo "<script>alert('không có');</script>";
		
	
			}
		?>   
	</table>
   
