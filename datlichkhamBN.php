<?php
session_start();
if(isset($_SESSION['maBenhnhan'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head runat="server">
    <link rel="shortcut icon" href="/logo.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
    
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
    <title>
     Dat lich kham
    </title>
<script language="javascript" src="js/jquery-1.5.1.js"></script>
<script language="javascript">
		$(document).ready(function() {
		 
		  $('#khoa').change(function(){
		   var giatri = $(this).val();
		   		$.ajax({
					type :"POST",
					url:"ajax2.php",
					data : 'idbs='+giatri,
				success: function(data){
					
					$("#mabs").html(data);
				}
			
				});
		  });		  
		 });		 

</script>
<link id="ctl00_Link3" href="js/vcb.calendar.css" rel="stylesheet" type="text/css" />
<!--<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>-->
<script src="js/ui.calendar.js" type="text/javascript"></script>
</head>
<body>
    <div id="container">
        <div id="header">
            <div class="menu-top">
                <div class="menu-top-left">
                </div>
                <div class="menu-top-content">
                    <ul>
                        <li><a class="menuclass" id="mnuHome" href="http://localhost/benhvien/index.php?page=trangchu">Trang
                            chủ</a>
                        </li>
                        
                    </ul>
                    <div class="hotlines">
                       
                    </div>
                </div>
                <div class="menu-top-right">
                </div>
            </div>
            <!-- end #header -->
        </div>
        <!-- Logo Inner -->
        <div id="logo-inner">
            
        <a href="# " target="_blank">
                <img src="Content/images/hospital.jpg"  alt="" width="269" height="269" border="0" class="logo-dhyd" /></a>          
		</div>      
        <div id="banner-inner">
            <img class="img-inner-1" src="Content/images/global-s.png" border="0" />
            
        </div>
<div id="mainContent">
		
<form action="themlichkhamBN.php" id="form0" method="post">
    <input id="State_PatientRegistered" name="State.PatientRegistered" type="hidden" value="0" />        <!-- Step Hinh Thuc Kham -->
    <input id="IsBaby_UI" name="IsBaby_UI" type="hidden" value="False" />       
			<div id="bookingStep1" class="BookingStepCSS">
				<h2 class="title-inner">
					Thông tin Bệnh nhân</h2>
				<p class="titile-inner-dec">
					Bạn vui lòng điền thông tin Bệnh nhân vào Form bên đưới để đăng ký Khám trực tuyến.</p>
				<div id="block-inner-left-1" class="LoginBlockCSS">
				  
				</div>
			</div>
      
    <div id="bookingStep2_1" class="BookingStepCSS" style="margin-left: 100px;">
        <div id="block-inner-right-2-middle">
            <div class="block-inner-right-2-top"> </div>
            <div class="block-inner-right-2-content">
                <h4>Thông Tin Bệnh Nhân Đăng Kí Khám</h4>            
                
              
                <p class="for-form">
                    <label class="infor-sponsor">
                         Khoa <span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <td style="font-size:19px">
                   	<?php 
                       function getkhoa(){
                       include("include/config.php");
                       $sql="Select maKhoa,tenKhoa from tblkhoa ";	
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
                    </td>
                </p>
                 <p class="for-form">
                    <label class="infor-sponsor">
                        Bác Sĩ <span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                
                  
                      <td id='bacsi'>
                        <select name="mabs" id="mabs">
                            <option value="0">-Tên bac si-</option>
                        </select>
	    	          </td>
                  </p>
                <p class="for-form">
                    <label class="infor-sponsor">
                      Ngày Khán <span class="color-red">(*)</span>:</label>
                <td><input name="ngaykham" type="text" class="box" id="ngaykham" value="" size="25" maxlength="40">
            <script type="text/javascript">
    		// <![CDATA[
    		$(document).ready(function() {
    			$('#ngaykham').calendar();
    		});
    		// ]]>
    		</script>
                </td>
                        
                </p>
                 <p class="for-form">
                    <label class="infor-sponsor">
                       Giờ Khám <span class="color-red">(*)</span>:&nbsp;</label>
                <td style="font-size:19px">
                 	<select name="giokham" >
                    <option value="">Chọn buổi khám</option>                               
                    <option value="Sáng">Sáng </option>
                    <option value="Chiều">Chiều</option>
                     </select><br />
                  </td>
                 <p class="for-form">
                    <label class="infor-sponsor">
                        Điện thoại<span class="color-red">(*)</span>:&nbsp;&nbsp;</label>
                   <td><input name="dienthoai" type="text" class="box" id="dienthoai" value="" size="25" maxlength="40"></td>
                        
                </p>
                <p class="for-form">
                    <label class="infor-sponsor">
                        Email<span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                   <td><input name="email" type="Email" class="box" id="email" value="" size="25" maxlength="40"></td>
                        
                </p>
                <br class="clearfloat" />
               <td align="center"><input type="submit" name="Submit" value="Đăng kí Khám" /></td>
                <br />
                <br />
                
                
                <label class="notes-form" style="width: 100%;">
                    <ul>
                        <span class="text-under">Chú ý:</span>
                        <li style="list-style: none">- Những mục có dấu <span class="color-red">(*)</span> là
                            bắt buộc.</li>
                        
                    </ul>
                </label>
            </div>
            <div class="block-inner-right-2-bottom">
            </div>
        </div>
    </div>
	</form>
  </div>
            <div class="footer-link">
               <marquee width="800"> Sức Khỏe Của Bạn Là Niềm Hạnh Phúc Của Chúng Tôi</marquee>
            </div>
    
   
   </body>
</html>
<?php }else{
	echo "<meta http-equiv='refresh' content='0;URL=index.php?page=Benhnhan' />";

}
?>
