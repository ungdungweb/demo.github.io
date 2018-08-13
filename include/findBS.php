<?php include('connect.php') ?>
<?php
    function getGiaithuong($maBS)
    { 
        global $dbc;
        $query="SELECT tenBS, tenGT FROM hoivien
                INNER JOIN hoivien_giaithuong
                	ON hoivien.maBS = hoivien_giaithuong.maBS
                INNER JOIN giaithuong
                	ON hoivien_giaithuong.maGT = giaithuong.maGT
                WHERE $maBS = hoivien.maBS";  
        $result=mysqli_query($dbc, $query); 
        while($KQ = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
        ?>
        <table border="1">
            <tr>
                <th>Tên h?i viên</th>
                <th>Tên gi?i thu?ng</th>
            </tr>
            <tr> 
                <td> <?php  echo $KQ['tenBS']; ?> </td>
                <td> <?php  echo $KQ['tenGT']; ?> </td>
            </tr>
        </table>
        <?php
        }
    }
?>
<form name="mainform" method="POST" class="">
    <table>
        <div class="form-group">
            <label>Mã ba´c si~</label>
            <input type="text" name="maBS" value="<?php if(isset($_POST['maBS'])) echo $_POST['maBS']; ?>" class="form-control" placeholder="Nh?p mã ba´c si~" />
            <?php 
                if(isset($errors) && in_array('maBS', $errors))
                {
                    echo "<p style='color: red'>B?n chua nh?p mã ba´c si~ </p>";
                }
            ?>
        </div>
        <div class="form-group">
            <label>Tên ba´c si~</label>
            <input type="text" name="tenBS" value="<?php if(isset($_POST['tenBS'])) echo $_POST['tenBS']; ?>" class="form-control" placeholder="Nh?p tên ba´c si~" />
            <?php 
                if(isset($errors) && in_array('tenBS', $errors))
                {
                    echo "<p style='color: red'>B?n chua nh?p tên ba´c si~ câ`n ti`m kiê´m </p>";
                }
            ?>
        </div>
        <div class="form-group">
            <label>Khoa</label>
            <input type="text" name="khoa" value="<?php if(isset($_POST['khoa'])) echo $_POST['khoa']; ?>" class="form-control" placeholder="Nh?p mã ba´c si~" />
            <?php 
                if(isset($errors) && in_array('khoa', $errors))
                {
                    echo "<p style='color: red'>B?n chua nh?p khoa câ`n ti`m kiê´m </p>";
                }
            ?>
        </div>
        <input type="submit" name="submit" class="" value="OK"/>
    </table>
</form>
<?php
if(isset($_POST['submit']))
    {
        $errors = array();
        if(empty($_POST['maBS']))
        {
            $errors[] = 'maBS';
        }
        else
        {
            $sql= "SELECT maBS FROM hoivien_giaithuong WHERE hoivien_giaithuong.maBS={$_POST['maBS']}";
            $result=mysqli_query($dbc, $sql);
            $K_Q=mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($K_Q != null)
                $maBS=$_POST['maBS'];
            else 
            {
                $errors='null';
                echo "<p class='required'>H?i viên không có gi?i ho?c mã h?i viên không t?n t?i </p>";
            }
        }
        if(empty($errors))
        {
            getGiaithuong($maBS);
        }
        else
        {
            $message="<p style='color: red'>Xin m?i nh?p mã h?i viên</p>";
        }
    }
?>





else if($selected_button == '2' && $_POST['tenBS']){
			$tenbs = $_POST['tenBS'];
			$sql = "Select * from  tblbacsi, tblkhoa where tblbacsi.maKhoa = tblkhoa.maKhoa and tenBacsi like '%$tenbs%'";
			$query = mysqli_query($connect, $sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
			
?>
<table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
					<tr>            	
						<td align='center'>Mã bác si</td>
						<td align='center'>Tên bác si</td>
                         <td align='center'>Gi?i tính</td>
						<td align='center'>Ð?a ch?</td>
                       <td align='center'>CMND</td> 
                        <td align='center'>Trình d?</td>
                       <td align='center'>S? di?n tho?i</td>
						<td align='center'>Khoa</td>                    
						</tr>
<?php
			while($data = mysqli_fetch_array($query)){
             /* echo "'<table width='400px' border='2px' bordercolor='#000000'bgcolor='#FFFFFF' style='font-size:14px; color:#000'>";
					echo "</table>";*/
                   echo "<tr>";                	
                   	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBacsi']."' size='10px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['tenBacsi']."' size='15px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['gioiTinh']."' size='5px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='dchi' value='".$data['diaChi']."' size='10px'/>";
					echo "</td>                    
                    <td align='center'>"; 	
						echo "<input type='text' name='cmnd' value='".$data['CMND']."' size='10px'/>";
					echo "</td>
                    <td align='center'> ";
						echo "<input type='text' name='trinhdo' value='".$data['trinhDo']."' size='5px'/></td>";
                        echo "<td align='center'>";
						echo "<input type='text' name='khoakham' value='".$data['soDT']."' size='10px'/> ";
					echo "</td>";
					echo "<td align='center'>";
						echo "<input type='text' name='khoakham' value='".$data['tenKhoa']."' size='10px'/> ";
					echo "</td>";
					
               echo "</tr>";
		}
        }else echo "<script>alert('không có');</script>";
		/*================*/
		}if($selected_button == '3' && $_POST['khoa']){
			$khoa = $_POST['khoa'];
			$sql = "Select * from  tblbacsi, tblkhoa where tblbacsi.maKhoa = tblkhoa.maKhoa and tenKhoa like '%$khoa%'";
			$query = mysqli_query($connect, $sql);
			$row = mysqli_num_rows($query);
			if($row<>0){ 
?>
<table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
					<tr>            	
						<td align='center'>Mã bác si</td>
						<td align='center'>Tên bác si</td>
                         <td align='center'>Gi?i tính</td>
						<td align='center'>Ð?a ch?</td>
                       <td align='center'>CMND</td> 
                        <td align='center'>Trình d?</td>
                       <td align='center'>S? di?n tho?i</td>
						<td align='center'>Khoa</td>                    
						</tr>
<?php
			while($data = mysqli_fetch_array($query)){				
             
                     echo "<tr>";                	                  
               	echo "<td align='center'> ";	
						echo "<input type='text' name='mabn' value='".$data['maBacsi']."' size='10px' align='middle'/>";
                   echo "</td>";
					echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['tenBacsi']."' size='15px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 
						echo "<input type='text' name='tenbn' value='".$data['gioiTinh']."' size='5px'/>";
					echo "</td>";
                    echo "<td align='center'>"; 	
						echo "<input type='text' name='dchi' value='".$data['diaChi']."' size='10px'/>";
					echo "</td>                    
                    <td align='center'>"; 	
						echo "<input type='text' name='cmnd' value='".$data['CMND']."' size='10px'/>";
					echo "</td>
                    <td align='center'> ";
						echo "<input type='text' name='trinhdo' value='".$data['trinhDo']."' size='5px'/></td>";
                        echo "<td align='center'>";
						echo "<input type='text' name='khoakham' value='".$data['soDT']."' size='10px'/> ";
					echo "</td>";
					echo "<td align='center'>";
						echo "<input type='text' name='khoakham' value='".$data['tenKhoa']."' size='10px'/> ";
					echo "</td>";
					
               echo "</tr>";
            }
			}else echo "<script>alert('không có');</script>";	
		}/*else echo "<script>alert('ph?i ch?n check');</script>";*/
	
	}
	?>
    
    
    
    
    
    $sql1 = "SELECT * FROM  tblbacsi WHERE tblbacsi.maBacsi = {$_POST['maBS']}";
			$query1 = mysqli_query($connect, $sql1);
            $K_Q=mysqli_fetch_array($query1, MYSQLI_ASSOC);
            if($K_Q != null)
                $mabacsi=$_POST['maBS'];
            else 
            {
                $errors='null';
                echo "<p class='required'>Không co´ ba´c si~ câ`n ti`m(mã ba´c si~ không t?n t?i) </p>";
                
                
                
                
  if($_POST['RadioGroup1'] == '3' && isset($_POST['khoa']))
        {
			$khoa=$_POST['khoa'];
			$query3="SELECT * FROM tblbacsi
                INNER JOIN tblkhoa
                	ON tblbacsi.maKhoa = tblkhoa.maKhoa
                WHERE '{$khoa}' = tblkhoa.maKhoa";  
            $result3=mysqli_query($connect, $query3); 
            while($KQ3 = mysqli_fetch_array($result3,MYSQLI_ASSOC))
            {
            ?>
                <table width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
                    <tr>            	
                        <th align='center'>Mã bác si</th>
                        <th align='center'>Tên bác si</th>
                         <th align='center'>Gi?i tính</th>
                        <th align='center'>Ð?a ch?</th>
                        <th align='center'>CMND</th> 
                        <th align='center'>Trình d?</th>
                        <th align='center'>S? di?n tho?i</th>
                        <th align='center'>Khoa</th>                    
                    </tr>
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
                </table>
            <?php
            }
 		}              
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            }