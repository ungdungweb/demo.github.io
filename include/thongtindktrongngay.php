<div id="content" >
	<h1 align="center">Thông tin bác sĩ theo dõi bệnh án</h1>
 
  <form action="" method="post">

    	<div  align="center">  
        <tr>
   	        <td>Bệnh nhân đăng kí trong ngày</td>
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
         <td width="100" align="left">tình trạng</td>
            <td width="10" align="center">:</td>  
		 <TD style="font-size:19px">
             	<select name="tinhtrang" >
                <option value="0">Chọn </option>                               
                <option value="1">Đã Đến khám</option>
                <option value="0">Chưa đến khám</option>
                 </select><br />
              </TD>
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
	if(isset($_POST["Submit"]) ){
			$ngaydk = implode("-",array_reverse(explode("/",$_POST["ngaydk"])));
			$tinhtrang = $_POST['tinhtrang'];
			$sql = "Select * from  tblbenhnhan,tbldatlichkham where  tblbenhnhan.maBenhnhan=tbldatlichkham.maBenhnhan and tbldatlichkham.tinhTrang= '".$tinhtrang."' and ngayDK = '".$ngaydk."'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
			
?>
<table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
					<tr>            	
						<td align='center'>Mã bệnh nhân</td>
						<td align='center'>Tên bệnh nhân</td>
                        <td align='center'>Ngày sinh</td>
                         <td align='center'>Giới tính</td>
                          <td align='center'>CMND</td> 
                           <td align='center'>BHYT</td> 
						<td align='center'>Địa chỉ</td>
						<td align='center'>Lịch chi tiết</td>                    
						</tr>
<?php
			while($data = mysqli_fetch_array($query)){				
              
                     echo "<tr>";                	                  
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBenhnhan']."' size='10px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['tenBenhnhan']."' size='13px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['ngaySinh']."' size='10px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='dchi' value='".$data['gioiTinh']."' size='5px'/>";
					echo "</td>                    

                    <td align='center'>"; 	
						echo "<input type='text' name='cmnd' value='".$data['CMND']."' size='10px'/>";
					echo "</td>
                    <td align='center'> ";
						echo "<input type='text' name='trinhdo' value='".$data['BHYT']."' size='13px'/></td>";
                        echo "<td align='center'>";
						echo "<input type='text' name='khoakham' value='".$data['diaChi']."' size='10px'/> ";
					echo "</td>";
					 
					 echo "<td align='center'>
						<form action='nguoitiepbenh.php?page=xemlichchitiet' method='post'>
						<input type='submit' name='submit' value='Xem lịch' />
						<input type='hidden' name='xemlich' value='".$data['maLich']."'/> 
						</form>		
			</td>";
					
               echo "</tr>";
       
            }
			}else echo "<script>alert('không có');</script>";
		}
?>



