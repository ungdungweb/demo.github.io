<?php  include("config.php");?>

<div id="content" >
    <br />
        <h1 align="center" > Tìm Kiếm Bác Sĩ</h1>
    <br />
    <form id="form1" name="form1" method="post" action="">
        <table width="500" align="center" >   
            <tr>
                <td>
                    <label>
                        <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
                    </label>
                </td>
                <td>Mã Bác Sĩ</td>
                <td > <input type="text" name="maBS" value="" /></td>
            </tr>
            <tr>
                <td><label>
                    <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1" />
                </label></td>
                <td>Tên Bác Sĩ</td>
                <td > <input type="text" name="tenBS" value="" /></td>
            </tr>
            <tr>
                <td>
                    <label>
                        <input type="radio" name="RadioGroup1" value="3" id="RadioGroup1_2" />
                    </label>
                </td>
            
                <?php
                
                
                $sql="Select * from  tblkhoa";
                
                $rs=mysqli_query($connect, $sql);
                
                $str="<td align='left'>Khoa</td>";
                
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
                <td></td>
                <td></td>
                <td><input type="submit" name="Submit" value="Tìm Thông Tin" /></td>
            </tr>
        </table>


    </form>
<?php
    if(isset($_POST['Submit']))
    {
        if($_POST['RadioGroup1'] == '1' && isset($_POST['maBS']))
        {
            $mabacsi=$_POST['maBS'];
            $query1="SELECT * FROM tblbacsi
                    INNER JOIN tblkhoa
                    ON tblbacsi.maKhoa = tblkhoa.maKhoa
                    WHERE '$mabacsi' = tblbacsi.maBacsi";  
            $result1=mysqli_query($connect, $query1); 
            while($KQ1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
            {
            ?>
            <table width="569px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
                <tr>            	
                    <th align='center'>Mã bác sĩ</th>
                    <th align='center'>Tên bác sĩ</th>
                    <th align='center'>Giới tính</th>
                    <th align='center'>Địa chỉ</th>
                    <th align='center'>CMND</th> 
                    <th align='center'>Trình độ</th>
                    <th align='center'>Số điện thoại</th>
                    <th align='center'>Khoa</th>                    
                </tr>
                <tr> 
                    <td> <?php  echo $KQ1['maBacsi']; ?> </td>
                    <td> <?php  echo $KQ1['tenBacsi']; ?> </td>
                    <td> <?php  echo $KQ1['gioiTinh']; ?> </td>
                    <td> <?php  echo $KQ1['diaChi']; ?> </td>
                    <td> <?php  echo $KQ1['CMND']; ?> </td>
                    <td> <?php  echo $KQ1['trinhDo']; ?> </td>
                    <td> <?php  echo $KQ1['soDT']; ?> </td>
                    <td> <?php  echo $KQ1['tenKhoa']; ?> </td>
                </tr>
            </table>
            <?php
            }
        }
        else 
        if($_POST['RadioGroup1'] == '2' && isset($_POST['tenBS']))
        {
            $tenbacsi=$_POST['tenBS'];
            $query2="SELECT * FROM tblbacsi
                    INNER JOIN tblkhoa
                    ON tblbacsi.maKhoa = tblkhoa.maKhoa
                    WHERE tblbacsi.tenBacsi LIKE '%$tenbacsi%'";  
            $result2=mysqli_query($connect, $query2); 
            while($KQ2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
            {
            ?>
                <table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
                    <tr>            	
                        <th align='center'>Mã bác sĩ</th>
                        <th align='center'>Tên bác sĩ</th>
                        <th align='center'>Giới tính</th>
                        <th align='center'>Địa chỉ</th>
                        <th align='center'>CMND</th> 
                        <th align='center'>Trình độ</th>
                        <th align='center'>Số điện thoại</th>
                        <th align='center'>Khoa</th>                    
                    </tr>
                    <tr> 
                        <td> <?php  echo $KQ2['maBacsi']; ?> </td>
                        <td> <?php  echo $KQ2['tenBacsi']; ?> </td>
                        <td> <?php  echo $KQ2['gioiTinh']; ?> </td>
                        <td> <?php  echo $KQ2['diaChi']; ?> </td>
                        <td> <?php  echo $KQ2['CMND']; ?> </td>
                        <td> <?php  echo $KQ2['trinhDo']; ?> </td>
                        <td> <?php  echo $KQ2['soDT']; ?> </td>
                        <td> <?php  echo $KQ2['tenKhoa']; ?> </td>
                    </tr>
                </table>
            <?php
            }
            }

        if($_POST['RadioGroup1'] == '3' && isset($_POST['khoa']))
        {

            $tenkhoa=$_POST['khoa'];
            $query3="SELECT * FROM tblbacsi
                    INNER JOIN tblkhoa
                    ON tblbacsi.maKhoa = tblkhoa.maKhoa
                    WHERE '{$tenkhoa}' = tblkhoa.tenKhoa";  
            $result3=mysqli_query($connect, $query3); 
            ?>
            <table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
                <tr>            	
                    <th align='center'>Mã bác sĩ</th>
                    <th align='center'>Tên bác sĩ</th>
                    <th align='center'>Giới tính</th>
                    <th align='center'>Địa chỉ</th>
                    <th align='center'>CMND</th> 
                    <th align='center'>Trình độ</th>
                    <th align='center'>Số điện thoại</th>
                    <th align='center'>Khoa</th>                    
                </tr>
            <?php
            while($KQ3 = mysqli_fetch_array($result3,MYSQLI_ASSOC))
            {
            ?>
            
                <tr> 
                    <td> <?php  echo $KQ3['maBacsi']; ?> </td>
                    <td> <?php  echo $KQ3['tenBacsi']; ?> </td>
                    <td> <?php  echo $KQ3['gioiTinh']; ?> </td>
                    <td> <?php  echo $KQ3['diaChi']; ?> </td>
                    <td> <?php  echo $KQ3['CMND']; ?> </td>
                    <td> <?php  echo $KQ3['trinhDo']; ?> </td>
                    <td> <?php  echo $KQ3['soDT']; ?> </td>
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
