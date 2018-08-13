<script language="javascript" src="../js/jquery-1.5.1.js"></script>
<script language="javascript">
		$(document).ready(function() {
		 
		  $('#khoa').change(function() {
		   giatri = this.value;
		   $('#bacsi').load('include/ajax.php?idbs='+giatri);
		  });		  
		 });		 

</script>
<?php
	    include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		$id=$_POST['sua'];
		$sql = mysqli_query("SELECT * FROM tblbenhanbacsi where logID='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					$maBA = $row['maBenhan'];
					
					$maBS = $row['maBacsi'];
					$ngaycden = $row['ngayChuyenden'];
					$ngaycdi = $row['ngayChuyendi'];
					
	?>
<div id="content" >
	<h1 align="center">Thông tin bác sĩ theo dõi bệnh án</h1>
 
  <form action="updateBABS.php" method="post">

    	<div class="phangiua1">    
		  <table  border="0" cellpadding="2" cellspacing="1" class="text" width="400">
            <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           
          
            <td width="150" align="left">Mã bệnh án</td>
           
            <td><input name="maBA" type="text" class="box" id="txtUserName2" value="<?php echo $maBA?>" size="27" maxlength="40" ></td>
            
           </tr>
            <tr> 
            <td width="100" align="left">Khoa chuyển</td>
                       
            <TD style="font-size:19px">
             	<?php 
           function getkhoa(){
           $connect=mysqli_connect("localhost","root","");
           $data=mysqli_select_db("benhvien",$connect);
           $sql="Select maKhoa,tenKhoa from tblkhoa ";	
           mysqli_query("SET NAMES 'utf8'");
           $rs=mysqli_query($sql,$connect);
           $rs=mysqli_query($sql,$connect);
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
             <TR>
              <TD><p style="font-size:20px">Mã bác sĩ :</p></TD>
             
             <td id='bacsi'>
            <select name="mabs" id="mabs">
             <option value="<?php echo $maBS?>">-Tên bac si-</option>
            </select>
	    </td>
        </TR>
        <!-- <tr> 
            <td width="150" align="left">Ngày chuyển đến:</td>
           
            <td><input name="ngaycden" type="text" class="box" id="txtUserName3" value="<?php echo $ngaycden ?>" size="20" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName3').calendar();
		});
		// ]]>
		</script>
            
           </tr>   	 
           <tr> 
            <td width="150" align="left">Ngày chuyển đi:</td>
           
            <td><input name="ngaycdi" type="text" class="box" id="txtUserName4" value="<?php echo $ngaycdi ?>" size="20" maxlength="40"></td>
            <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName4').calendar();
		});
		// ]]>
		</script>
            
           </tr> -->  	 
          </table>
        </div>
        <div  class="phangiua2">
        </div>
		<div align="center">
                <tr >
                    <input type="hidden" name="sua2" value="<?php echo $id;?>"/> <br /><br />
                    <td><input type="submit" value="   Lưu " name="save"/></td>
                    <td><form action="BacSi.php?page=QLBA" method="post">
                    <input type="submit" value="   Bỏ qua   " name="save"/></form>
                    </td>
                </tr>
                </div>
  		
 </form>
 
        

   
    



