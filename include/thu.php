<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../Content/sitemain.css" />
</head>

<body>
<?php
	include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
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
                        <td align='center'>Khoa Khám</td>
                        
                        
					</tr>      
           
                      <?php
  	if(isset($_POST["Submit"])){
		$selected_button = $_POST['RadioGroup1'];
		if($selected_button == '1'){
			$bhyt = $_POST['BHYT'];
			$sql = "Select * from  tblbenhnhan where BHYT like '%$bhyt%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
			while($data = mysqli_fetch_array($query)){				
             /* echo "'<table width='400px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>";
					echo "<tr>";
                    	echo "<td align='center'>STT</td>";
						echo "<td align='center'>Mã bệnh nhân</td>";
						echo "<td align='center'>Tên bệnh nhân</td>";
                        echo "<td align='center'>Giới tính</td>";
						echo "<td align='center'>Địa chỉ</td>";
                       echo "<td align='center'>CMND</td>";
                       
                        echo "<td align='center'>BHYT</td>";
                        echo "<td align='center'>Khoa Khám</td>";
                        
					echo "</tr>*/
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
		else if($selected_button == '2'){
			$CM = $_POST['CMND'];
			$sql = "Select * from  tblbenhnhan where CMND like '%$CM%'";
			$query = mysqli_query($sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
			while($data = mysqli_fetch_array($query)){
				
              /*echo "'<table width='400px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>";
         
         
					echo "<tr>";
                    	echo "<td align='center'>Số TT</td>";
						echo "<td align='center'>Mã bệnh nhân</td>";
						echo "<td align='center'>Tên bệnh nhân</td>";
                        echo "<td align='center'>Giới tính</td>";
						echo "<td align='center'>Địa chỉ</td>";
                       echo "<td align='center'>CMND</td>";
                      
                        echo "<td align='center'>BHYT</td>";
                        echo "<td align='center'>Khoa Khám</td>";
                        
                        
					echo "</tr>*/
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
		}else echo "<script>alert('phải chọn check');</script>";
	}
	?>
    </table>
  </div>
   



</body>
</html>
