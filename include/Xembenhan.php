<?php  include("include/config.php");  ?>
<div id="content" >
<h1 align="center"> Thông Tin Bệnh Án</h1>
<br />
	<table width="569px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:18px; color:#000">
        <thead>
			<tr>
				<th align="center">Mã bệnh án</th>
                <th align="center">Mã bệnh nhân</th>
				<th align="center">Tên bệnh nhân</th>
				<th align="center">Chuẩn đoán</th>
                <th align="center">ngày nhập viện</th>
                <th align="center">ngày xuất viện</th>    
			</tr>
        </thead>
        <tbody>
           <?php
            include("include/config.php");
			$user =  $_SESSION['maBenhnhan'];
			$sql = mysqli_query($connect, "SELECT * FROM  tblbenhan,tblbenhnhan WHERE tblbenhan.maBenhnhan=tblbenhnhan.maBenhnhan  and tblbenhnhan.maBenhnhan = '{$user}'");
			while($KQ = mysqli_fetch_array($sql, MYSQLI_ASSOC))
            {
				?>
                <tr> 
                    <td> <?php  echo $KQ['maBenhan']; ?> </td>
                    <td> <?php  echo $KQ['maBenhnhan']; ?> </td>
                    <td> <?php  echo $KQ['tenBenhnhan']; ?> </td>
                    <td> <?php  echo $KQ['chuanDoan']; ?> </td>
                    <td> <?php  echo $KQ['ngayNhapvien']; ?> </td>
                    <td> <?php  echo $KQ['ngayXuatvien']; ?> </td>
                </tr>
            <?php 
			}	
		     ?> 
        </tbody>
	</table>
</div>