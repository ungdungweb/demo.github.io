
<div id="content" >
	<h1 align="center">Thống Kê Bệnh Án Từng Khoa</h1>
    <br />
<br />
		
   	  <form id="form1" name="form1" method="post" action="">
   	    <table width="400" align="left" >
     
   	      
   	      <tr>
   	       
   	        <td align="center">Khoa cần thống kê</td>
            <td align="center">:</td>
            
             		
						<?php
                            session_start();
                            include("config.php");
                                $sql="Select * from  tblkhoa";
                                mysqli_query("SET NAMES utf8");
                                $rs=mysqli_query($sql);
                                
                                
                                $str.="<TD size=25><select name=khoa>";
                                
                                $str.=" <option value=''>Chon Khoa";
                                while($row=mysqli_fetch_array($rs))
                                    {
                                    $str.="<option values=".$row['maKhoa'].">".$row['tenKhoa'];
                                    }
                                    $str.="</select>";
                                $str.="</TD>";
                           	
                                echo $str;
                            ?>           
          </tr>
          <tr>
          <td align="center"><input type="Submit" name="Submit" value="Thống Kê" /></td>
          </tr>
        </table>
      </form>
     
                      <?php
					   include("config.php");
					   mysqli_query("SET NAMES utf8");
  	if(isset($_POST["Submit"]) && $_POST['khoa']){
		$stt=0;
			$khoa = $_POST['khoa'];
			$sql = "Select * from  tblbenhan, tblkhoa,tblbacsi,tblbenhanbacsi where tblbenhan.maBenhan =tblbenhanbacsi.maBenhan and tblbacsi.maBacsi =tblbenhanbacsi.maBacsi and tblkhoa.maKhoa =tblbacsi.maKhoa and tenKhoa like '%$khoa%'";
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
                        <td align="center">Chi Tiết BN</td>
                        
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
			echo "</td>";
			echo "<td align='center'>";
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
			echo "</td>";
            
                        
               echo "</tr>";

	   
		}
        }else echo "<script>alert('không có');</script>";
		
	}
	?>
	</table>
</div>

