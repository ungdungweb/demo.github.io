
<?php
	    include("config.php");
		session_start();
		
		$id=$_POST['updatetinhtrang'];
		
	?>
<div id="content" >
	<h1 align="center">Thông tin bác sĩ theo dõi bệnh án</h1>
 
  <form action="" method="post">

    	<div  align="center">  
         <td width="100" align="left">tình trạng</td>
            <td width="10" align="center">:</td>  
		 <TD style="font-size:19px">
             	<select name="tinhtrang" >
                <option value="0">Chọn </option>                               
                <option value="1">Đã Đến khám</option>
                <option value="0">Chưa đến khám</option>
                 </select><br />
              </TD>
        </div>
       
		<div align="center">
                <tr >
                    <input type="hidden" name="sua2" value="<?php echo $id;?>"/> <br /><br />
                    <td><input type="submit" value="   Thêm  " name="save"/></td>
 
                    <td><form action="nguoitiepbenh.php?page=TKttdangki" method="post">
                    <input type="submit" value="   Bỏ qua   " name="save"/></form>
                    </td>
                </tr>
                </div>
    
  	</form>	
 
        
<?php
		 include("config.php");
		 mysqli_query("SET NAMES utf8");
		 $id2= $_POST["sua2"];
		 
		 if(isset($_POST["tinhtrang"]))
		{
			$tinhtrang=$_REQUEST["tinhtrang"];
     	 $sql="update tbldatlichkham set tinhTrang='".$tinhtrang."' WHERE maLich='$id2'";
		  mysqli_query($sql,$connect);
		  header("Location:nguoitiepbenh.php?page=TKttdangki");
		}



