
<div id="content">
	<h1 align="center">Thống kê bệnh án thuộc nhóm bệnh- bệnh</h1>
    <br />
<br />
		
   	  <form id="form1" name="form1" method="post" action="">
   	    <table width="400" align="left" >
     
   	      
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
					   mysqli_query("SET NAMES utf8");
  	if(isset($_POST["Submit"]) && $_POST['benh']){
		$stt=0;
			$benh = $_POST['benh'];
			$sql = "Select * from  tblBenhan where chuanDoan like '%$benh%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
?>
 <table width='400px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>
					<tr>
                    	<td align="center">Số TT</td>
						<td align="center">Mã bệnh án</td>
						<td align="center">Mã bệnh nhân</td>
						<td align="center">Chuẩn đoán</td>
                        <td align="center">ngày nhập viện</td>
                        <td align="center">ngày xuất viện</td>
                         <td align="center">Diễn biến</td>
                        <td align="center">Tình trạng</td>
                        <td align="center">Chi tiết xét nghiệm</td>
                        <td align="center">Bác sĩ theo dõi</td>
                        <td align="center">TT bệnh nhân</td>
                        
					</tr>
<?php
			while($data = mysqli_fetch_array($query)){
				
            $stt++;
                      echo "<tr>";
                	
                    echo "<td align='center'> <input  type='hidden' name='ma' value=' ".$data['maBenhan']."' />$stt</td>";
					echo "<td align='center'> ";	
						echo "<input type='text' name='maba' value='".$data['maBenhan']."' size='5px' align='middle'/>";
                   echo "</td>";
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBenhnhan']."' size='5px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['chuanDoan']."' size='10px'/>";
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
						<input type='submit'name='submit' value='xem'  />
						<input type='hidden' name='ttxn' value='".$data['maBenhan']."'/> 
						</form>	";	
			echo "</td>
            <td align='center'>";
						echo"<form action='BacSi.php?page=TTBSK' method='post'>
						<input type='submit' name='submit' value='xem'  />
						<input type='hidden' name='ttbsk' value='".$data['maBenhan']."'/> 
						</form>		
			</td>";
                        
              echo "<td align='center'>";
						echo "<form action='nguoitiepbenh.php?page=sua'method='post'>
						<input type='submit' name='submit' value='xem'  />
						<input type='hidden' name='sua' value='".$data['maBenhnhan']."'/>
						</form>		";
			echo "</td>
			
			   </tr>";

	   
		}
        }else echo "<script>alert('không có');</script>";
		
	}
	?>
	</table>
</div>

