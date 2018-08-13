<?php  include("include/config.php"); ?>
<div id="content" >

	<div class="dau"><br />
    <h1 align="center" > Thanh Toán Bệnh Án</h1>
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
           <td align="center"><input type="submit" name="Submit" value="Tìm Thông Tin" /></td>
          </tr>
        </table>
      </form>
         
         <?php
         include("include/config.php"); 
  	if(isset($_POST['Submit']))
    {
		if($_POST['RadioGroup1'] == '1' && isset($_POST['mabn']))
        {
			$mabn = $_POST['mabn'];
			$sql1 = "SELECT * FROM tblbenhnhan
                INNER JOIN tblbenhan
                	ON tblbenhnhan.maBenhnhan = tblbenhan.maBenhnhan
                INNER JOIN tblthanhtoandot
                    ON tblbenhnhan.maBenhnhan = tblthanhtoandot.maBenhnhan
                WHERE '{$mabn}' = tblbenhnhan.maBenhnhan"; 
			$query1 = mysqli_query($connect, $sql1);
			while($KQ1 = mysqli_fetch_array($query1, MYSQLI_ASSOC))
            {
            ?>
            <table width='569px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>
                
					<tr>
                    	<th align='center'>Số TT</th>
                        <th align='center'>Mã bệnh nhân</th>
                        <th align='center'>Tên bệnh nhân</th>
                        <th align='center'>Chuẩn đoán</th>
						<th align='center'>Ngày nhập viện</th>
                        <th align='center'>Ngày xuất viện</th>
                        <th align='center'>BHYT</th>
                        <th align='center'>Tổng thanh toán</th>
					</tr>
               
                    <tr>
                        <td></td>
                        <td> <?php  echo $KQ1['maBenhnhan']; ?> </td>
                        <td> <?php  echo $KQ1['tenBenhnhan']; ?> </td>
                        <td> <?php  echo $KQ1['chuanDoan']; ?> </td>
                        <td> <?php  echo $KQ1['ngayNhapvien']; ?> </td>
                        <td> <?php  echo $KQ1['ngayXuatvien']; ?> </td>
                        <td> <?php  echo $KQ1['BHYT']; ?> </td>
                        <td> <?php  echo $KQ1['soTien']; ?> </td>
                    </tr>
                
            </table>
            <?php 
            }
        }   
		else if($_POST['RadioGroup1'] == '2' && isset($_POST['maba']))
        {
			$maba = $_POST['maba'];
			$sql2 = "Select * from  tblbenhan,tblbenhnhan, tblthanhtoandot where tblbenhan.maBenhnhan=tblbenhnhan.maBenhnhan and tblthanhtoandot.maBenhnhan = tblbenhnhan.maBenhnhan and tblbenhan.maBenhan = '{$maba}' ";
			$query2 = mysqli_query($connect, $sql2);
			while($KQ2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
            {
            ?>
            <table width='569px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>
                <thead>
					<tr>
                    	<th align='center'>Số TT</th>
                        <th align='center'>Mã bệnh nhân</th>
                        <th align='center'>Tên bệnh nhân</th>
                        <th align='center'>Chuẩn đoán</th>
						<th align='center'>Ngày nhập viện</th>
                        <th align='center'>Ngày xuất viện</th>
                        <th align='center'>BHYT</th>
                        <th align='center'>Tổng thanh toán</th>
					</tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td> <?php  echo $KQ2['maBenhnhan']; ?> </td>
                        <td> <?php  echo $KQ2['tenBenhnhan']; ?> </td>
                        <td> <?php  echo $KQ2['chuanDoan']; ?> </td>
                        <td> <?php  echo $KQ2['ngayNhapvien']; ?> </td>
                        <td> <?php  echo $KQ2['ngayXuatvien']; ?> </td>
                        <td> <?php  echo $KQ2['BHYT']; ?> </td>
                        <td> <?php  echo $KQ2['soTien']; ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            <?php 
            }   
	   }
	?>
 
    		
