<?php include("config.php"); ?>
<div id="content" >
    <h1 align="center">Thống kê bệnh nhân từng khoa</h1>
    <br />
    <br />

    <form id="form1" name="form1" method="post" action="">
        <table width="400" align="left" >
            <tr>
                <td align="center">Khoa</td>
                <td align="center">:</td>
                <?php
                    include("config.php");
                    $sql="Select * from  tblkhoa";
                    $rs=mysqli_query($connect, $sql);
                    $str="";
                    
                    $str.="<td size=25><select name=khoa>";
                    
                    $str.=" <option value=''>Chon Khoa";
                    while($row=mysqli_fetch_array($rs))
                    {
                    $str.="<option values=".$row['maKhoa'].">".$row['tenKhoa'];
                    }
                    $str.="</select>";
                    $str.="</td>";
                    
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
        if(isset($_POST['Submit']) && isset($_POST['khoa']))
        {
            $stt=0;
            $tenkhoa = $_POST['khoa'];
            $sql = "Select * from  tblbenhnhan
                    INNER JOIN tblkhoa
                    ON tblbenhnhan.maKhoa =tblkhoa.maKhoa
                    where tblkhoa.tenKhoa = '{$tenkhoa}'";
            $query = mysqli_query($connect, $sql);
            $row = mysqli_num_rows($query);
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

