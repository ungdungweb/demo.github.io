<?php  include("config.php");?>

<div id="content" >
    <br />
    <h1 align="center" > Thông Tin Bệnh Nhân Đăng Kí Khám</h1>
	<br />
   	  <form id="form1" name="form1" method="post" action="">
   	    <table width="600" align="left" >   
   	      <tr>
   	        <td>
   	          <label>
   	            <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
   	          </label>
            </td>
   	        <td width="200">Tất cả bệnh nhân đăng kí khám</td>
          </tr>
   	      <tr>
   	        <td><label>
   	            <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1" />
   	        </label></td>
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
          
   	        <td>
   	          <label>
   	            <input type="radio" name="RadioGroup1" value="3" id="RadioGroup1_0" />
   	          </label>
            </td>
   	      
          
            <td width="100" align="left">Khoa khám</td>
                     
            <TD style="font-size:19px">
             	<?php 
           function getkhoa(){
           include("include/config.php");
           $sql="Select maKhoa,tenKhoa from tblkhoa ";	
           $rs=mysqli_query($connect, $sql);
           $rs=mysqli_query($connect, $sql);
           $str="<select  id='khoa' name='khoa'>";
           $str.="<option value=''>khoa;";
           while($rowt=mysqli_fetch_array($rs))
           $str.="<option value=".$rowt['maKhoa'].">".$rowt['maKhoa']."- ".$rowt['tenKhoa'];
           $str.="</select>";
           echo($str);
           }
           getkhoa();
           ?>
              </TD>
          
          </table>
          <table align="left">
          <tr>
          <td align="center"><input type="submit" name="Submit" value="Tìm Thông Tin" /></td>
          </tr>
          </table>
        
	    </form>
       
            <?php
          	if(isset($_POST["Submit"]))
              {
        		if($_POST['RadioGroup1'] == '1')
                {
        			$sql1 = "Select * from  tblbenhnhan,tbldatlichkham where tblbenhnhan.maBenhnhan=tbldatlichkham.maBenhnhan";
        			$query1 = mysqli_query($connect, $sql1);
                   ?>
                   <table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
                    <tr>       
        				<th align='center'>Mã bệnh nhân</th>
        				<th align='center'>Tên bệnh nhân</th>
                        <th align='center'>Ngày sinh</th>
                        <th align='center'>Giới tính</th>
                        <th align='center'>CMND</th> 
                        <th align='center'>BHYT</th> 
        				<th align='center'>Địa chỉ</th>
                    </tr>
                    <?php
        			while($KQ1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                    {
                    ?>
                    
                        <tr> 
                            <td> <?php  echo $KQ1['maBenhnhan']; ?> </td>
                            <td> <?php  echo $KQ1['tenBenhnhan']; ?> </td>
                            <td> <?php  echo $KQ1['ngaySinh']; ?> </td>
                            <td> <?php  echo $KQ1['gioiTinh']; ?> </td>
                            <td> <?php  echo $KQ1['CMND']; ?> </td>
                            <td> <?php  echo $KQ1['BHYT']; ?> </td>
                            <td> <?php  echo $KQ1['diaChi']; ?> </td>
                        </tr>
                    <?php 
                    } 
                    ?>
                    </table>
                <?php
                }
        		else if($_POST['RadioGroup1'] == '2' && isset($_POST['ngaydk']))
                {
        			$ngaydk = implode("-",array_reverse(explode("/",$_POST["ngaydk"])));
        			$sql2 = "Select * from  tblbenhnhan,tbldatlichkham where tblbenhnhan.maBenhnhan=tbldatlichkham.maBenhnhan and ngayDK = '{$ngaydk}'";
        			$query2 = mysqli_query($connect, $sql2);
                    $KQ2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);
                    if($KQ2 == NULL) 
                        echo "<script>alert('Không có bệnh nhân nào đăng ký vào ngày này');</script>";	
                ?>
                    <table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
                    <tr>       
        				<th align='center'>Mã bệnh nhân</th>
        				<th align='center'>Tên bệnh nhân</th>
                        <th align='center'>Ngày sinh</th>
                        <th align='center'>Giới tính</th>
                        <th align='center'>CMND</th> 
                        <th align='center'>BHYT</th> 
        				<th align='center'>Địa chỉ</th>
                    </tr>
                    <?php
           			while($KQ2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
                    {
                    ?>
                        <tr> 
                            <td> <?php  echo $KQ2['maBenhnhan']; ?> </td>
                            <td> <?php  echo $KQ2['tenBenhnhan']; ?> </td>
                            <td> <?php  echo $KQ2['ngaySinh']; ?> </td>
                            <td> <?php  echo $KQ2['gioiTinh']; ?> </td>
                            <td> <?php  echo $KQ2['CMND']; ?> </td>
                            <td> <?php  echo $KQ2['BHYT']; ?> </td>
                            <td> <?php  echo $KQ2['diaChi']; ?> </td>
                        </tr>
                    <?php 
                    } 
                    ?>
                    </table>
                <?php
        		}
                else if($_POST['RadioGroup1'] == '3' && isset($_POST['khoa']))
                {
        			$tenkhoa = $_POST['khoa'];
        			$sql3 = "Select * from  tblbenhnhan,tbldatlichkham,tblbacsi,tblkhoa where tbldatlichkham.maBacsi=tblbacsi.maBacsi and tblbacsi.maKhoa=tblkhoa.maKhoa and tblbenhnhan.maBenhnhan=tbldatlichkham.maBenhnhan and tblkhoa.maKhoa like '$tenkhoa'";
        			$query3 = mysqli_query($connect, $sql3);
        			$KQ3 = mysqli_fetch_array($query3, MYSQLI_ASSOC);
                    if($KQ3 == NULL) 
                        echo "<script>alert('Không có bệnh nhân nào đăng ký vào ngày này');</script>";	
                ?>
                    <table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
                    <tr>       
        				<th align='center'>Mã bệnh nhân</th>
        				<th align='center'>Tên bệnh nhân</th>
                        <th align='center'>Ngày sinh</th>
                        <th align='center'>Giới tính</th>
                        <th align='center'>CMND</th> 
                        <th align='center'>BHYT</th> 
        				<th align='center'>Địa chỉ</th>
                    </tr>
                    <?php
           			while($KQ3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))
                    {
                    ?>
                        <tr> 
                            <td> <?php  echo $KQ3['maBenhnhan']; ?> </td>
                            <td> <?php  echo $KQ3['tenBenhnhan']; ?> </td>
                            <td> <?php  echo $KQ3['ngaySinh']; ?> </td>
                            <td> <?php  echo $KQ3['gioiTinh']; ?> </td>
                            <td> <?php  echo $KQ3['CMND']; ?> </td>
                            <td> <?php  echo $KQ3['BHYT']; ?> </td>
                            <td> <?php  echo $KQ3['diaChi']; ?> </td>
                        </tr>
                    <?php 
                    } 
                    ?>
                    </table>
                <?php
        		}
        	}
        	?>
         
          
          
