<?php  include("config.php");
mysqli_query("SET NAMES utf8");
?>
<div id="content">
	<h1 align="center">Thống kê bệnh nhân thuộc nhóm bệnh- bệnh</h1>
    <br />
<br />
		
   	  <form id="form1" name="form1" method="post" action="">
   	    <table width="400" align="center" >
     
   	      
   	      <tr>
   	       
   	        	<td align="center">Bệnh Cần Thống Kê</td>
            	<td align="center">:</td>
            	<td > <input type="text" name="benh" value="" /></td>
          </tr>
          <tr>
          <td align="center"><input type="Submit" name="Submit" value="Thống Kê" /></td>
          </tr>
        </table>
      </form>
     
      
                      <?php
					   include("config.php");
					  
  	if(isset($_POST["Submit"]) && $_POST['benh']){
		$stt=0;
			$benh = $_POST['benh'];
			$sql = "Select * from  tblbenhnhan, tblBenhan, tblkhoa where tblbenhnhan.maBenhnhan=tblBenhan.maBenhnhan and tblbenhnhan.maKhoa=tblkhoa.maKhoa and chuanDoan like '%$benh%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
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
                    /*echo "<td align='center'>"; 	
						echo "<input type='text' name='gt' value='".$data['gioiTinh']."' size='5px'/>";

					echo "</td>";*/
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
						echo "<form action='nguoitiepbenh.php?page=sua'method='post'>
						<input type='submit' name='submit' value='xem'  />
						<input type='hidden' name='sua' value='".$data['maBenhnhan']."'/>
						</form>		";
			echo "</td>
			<td align='center'>";
						echo "<form action='nguoitiepbenh.php?page=chitiet'method='post'>
						<input type='submit' name='submit' value='Xem'  />
						<input type='hidden' name='sua' value='".$data['maBenhan']."'/>
						</form>		";
			echo "</td>
               </tr>";
	   
		}
        }else echo "<script>alert('không có');</script>";
		
	}
	?>
	</table>
</div>

