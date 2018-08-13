<div id="content" >
	<h1 align="center">Thông tin bác sĩ theo dõi bệnh án</h1>
 
  <form action="" method="post">

    	<div  align="center">  
        <tr>
   	        <td>Phiết xét nghiệm trong ngày</td>
             <td > <input type="text" name="ngaydk" id="ngaydk" value="" /></td>
             <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#ngaydk').calendar();
		});
		// ]]>
		</script>
          </tr>
          <tr>
          </td>
   	      
           <?php
				session_start();
				include("config.php");
					$sql="Select * from  tblxetnghiem";
					mysqli_query("SET NAMES utf8");
					$rs=mysqli_query($sql);
					$str.="<TD align='left'>Xét nghiệm</TD>";
					
					$str.="<TD size=25><select name=xetnghiem>";
					
					$str.=" <option value=''>Chon xét nghiệm";
					while($row=mysqli_fetch_array($rs))
						{
						$str.="<option values=".$row['maXetnghiem'].">".$row['tenXetNghiem'];
						}
						$str.="</select>";
					$str.="</TD>";
					
  					echo $str;
				?>
				
          
          </tr>
              </tr>
        </div>
       <div align="center">
		<tr align="center">
          <td align="center"><input type="submit" name="Submit" value="Tìm Thông Tin" /></td>
          </tr>
    </div>
  	</form>	
 
        
<?php
   include("config.php");
   mysqli_query("SET NAMES utf8");
	if(isset($_POST["Submit"])){
			$ngaydk = implode("-",array_reverse(explode("/",$_POST["ngaydk"])));
			$xetnghiem = $_POST['xetnghiem'];
			$sql = "Select * from  tblbenhan,tblphieuxetnghiem,tblxetnghiem where tblbenhan.maBenhan=tblphieuxetnghiem.maBenhan and tblphieuxetnghiem.maXetnghiem=tblxetnghiem.maXetnghiem and tenXetNghiem= '".$xetnghiem."' and ngayXetnghiem = '".$ngaydk."'";
			$query = mysqli_query($sql);$stt=0;
			$row = mysqli_num_rows($query);
			if($row<>0){ 
			
?>
<table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
					<tr>          
                    <td align='center'>STT</td>  	
						<td align='center'>Mã phiếu</td>
						<td align='center'>Mãbệnh án</td>
                        <td align='center'>Mã xét nghiệm</td>
                        <td align='center'>Tên xét nghiệm</td> 
                         <td align='center'>Mã nhân viên</td>
                          <td align='center'>Ngày xét nghiệm</td> 
                           
						<td align='center'>Kết quả</td>
						<td align='center'>Chi tiết</td>                    
						</tr>
<?php
			while($data = mysqli_fetch_array($query)){	$stt++;	
              
                     echo "<tr>"; 
					 	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='$stt' size='3px' align='middle'/></td>";               	                  
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maPhieu']."' size='5px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['maBenhan']."' size='5px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['maXetnghiem']."' size='8px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='dchi' value='".$data['tenXetNghiem']."' size='10px'/>";
					echo "</td>                    

                    <td align='center'>"; 	
						echo "<input type='text' name='cmnd' value='".$data['maNV']."' size='10px'/>";
					echo "</td>
                    <td align='center'> ";
					echo "<input type='text' name='trinhdo' value='".$data['ngayXetnghiem']."' size='10px'/></td>";
                    echo"	<td align='center'>"; 	
					echo "<input type='text' name='cmnd' value='".$data['ketQua']."' size='10px'/>";
					echo "</td>	";		
					 echo "<td align='center'>
						<form action='bacsi.php?page=suattxn' method='post'>
						<input type='submit' name='submit' value='Xem' />
						<input type='hidden' name='sua' value='".$data['maPhieu']."'/> 
						</form>		
			</td>";
					
               echo "</tr>";
       
            }
			}else echo "<script>alert('không có');</script>";
		}
?>



