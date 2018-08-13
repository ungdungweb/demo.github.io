<?php include("config.php"); ?>
<div id="content">
<br />
<br />
    <form id="form1" name="form1" method="post" action="">
        <h1 align="center"> Thống Kê Bệnh Nhân</h1>
        <table>
            <tr>
              <td>Từ ngày</td>
              <td><label for="textfield"></label>
              <input type="text" name="textfield" id="tungay" /></td>
              <script type="text/javascript">
            	// <![CDATA[
            	$(document).ready(function() {
            		$('#tungay').calendar();
            	});
            	// ]]>
            	</script>
              <td>Đến ngày</td>
              <td><label for="textfield2"></label>
              <input type="text" name="textfield2" id="denngay" /></td>
              <script type="text/javascript">
            	// <![CDATA[
            	$(document).ready(function() {
            		$('#denngay').calendar();
            	});
            	// ]]>
            	</script>
            </tr>
            <tr> 
            <?php
    			include("config.php");
    				$sql="Select * from  tblkhoa";
    				$rs=mysqli_query($connect, $sql);
    				$str="<TD align='left'>Khoa</TD>";
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
                <td align="center"><input type="submit" name="Submit" value="Thống Kê" /></td>
            </tr>
        </table>
    </form>
            <?php
            include("config.php");
            if(isset($_POST['Submit']) && isset($_POST['khoa']))
            {
                $tenkhoa=$_POST['khoa'];
                $tungay = implode("-",array_reverse(explode("/",$_POST["textfield"])));
                $denngay = implode("-",array_reverse(explode("/",$_POST["textfield2"])));
                $query="SELECT * FROM tblbenhnhan
                    INNER JOIN tblkhoa
                    	ON tblbenhnhan.maKhoa = tblkhoa.maKhoa
                    INNER JOIN tblbenhan
                        ON tblbenhnhan.maBenhnhan = tblbenhan.maBenhnhan
                    WHERE tblbenhan.ngayNhapvien <= '$tungay' AND tblbenhan.ngayXuatvien >= '$denngay'";  
                $result=mysqli_query($connect, $query); 
                $row = mysqli_num_rows($result);
                if($row == 0) echo "<script>alert('Không có bệnh nhân thuộc $tenkhoa');</script>";
                else 
                {
                    ?>
                    <table width='616px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>
                        <tr>
                            <td align='center'>STT</td>
                            <td align='center'>Mã bệnh nhân</td>
                            <td align='center'>Tên bệnh nhân</td>
                            <td align='center'>Giới tính</td>
                            <td align='center'>Địa chỉ</td>
                            <td align='center'>CMND</td>
                            <td align='center'>BHYT</td>
                            <td align='center'>Khoa Khám</td>
                        </tr>
                        <?php
                        while($KQ3 = mysqli_fetch_array($query,MYSQLI_ASSOC))
                        {
                            $stt++;
                        ?>
                        <tr> 
                            <td> <?php  echo $stt; ?> </td>
                            <td> <?php  echo $KQ3['maBenhnhan']; ?> </td>
                            <td> <?php  echo $KQ3['tenBenhnhan']; ?> </td>
                            <td> <?php  echo $KQ3['gioiTinh']; ?> </td>
                            <td> <?php  echo $KQ3['diaChi']; ?> </td>
                            <td> <?php  echo $KQ3['CMND']; ?> </td>
                            <td> <?php  echo $KQ3['BHYT']; ?> </td>
                            <td> <?php  echo $KQ3['tenKhoa']; ?> </td>
                        </tr>
                        <?php
                        }
                        ?>   
                    </table>
            <?php
            }
        }
        ?>
</div>

