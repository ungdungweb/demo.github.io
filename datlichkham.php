<script type="text/javascript">
	function datlichkham(){
	var f=document.regForm;
	if(f.mabs.value=='') { alert('Bạn chưa nhập bác sĩ yêu cầu'); return false;}
	if(f.ngaykham.value=='') { alert('Bạn chưa nhập ngày kđăng kí khám'); return false;}
	if(f.giokham.value=='') { alert('Bạn chưa nhập gio khám'); return false;}
	if(f.dienthoai.value=='') { alert('Bạn chưa nhập số điện thoại'); return false;}
	if(isNaN(f.dienthoai.value) || f.dienthoai.value.length <10 || f.dienthoai.value.length >11){
		alert('số số điện thoại phải là 9 hoặc 10 số');		
		return false;
	}
}
</script>
<!DOCTYPE html>
<head runat="server">
    <link rel="shortcut icon" href="/logo.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
    
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
    <title>
     Dat lich kham
    </title>

<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
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
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
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
                        <li><a class="menuclass" id="mnuHome" href="http://localhost/benhvien/index.php?page=trangchu" >Trang
                            chủ</a>
                        </li>
                       
                    </ul>
                    <div class="hotlines">
                       
                    </div>
                </div>
                <div class="menu-top-right">
                </div>
            </div>
         
        </div>
       
        <div id="logo-inner">
            
        <a href="# " target="_blank">
                <img src="Content/images/hospital.jpg"  alt="" width="269" height="269" border="0" class="logo-dhyd" /></a>          
		</div>      
        <div id="banner-inner">
            <img class="img-inner-1" src="Content/images/global-s.png" border="0" />
            
        </div>
<div id="mainContent">
		 <script src="/Scripts/Step1.js" type="text/javascript"></script>
    <form action="themlichkham.php" id="form0" method="post" name="regForm">
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
                <div class="block-inner-right-2-top">
                </div>
                <div class="block-inner-right-2-content">
                <div id="err"> <?php if(isset($mes)) echo $mes;  ?></div>
                    <h4>Thông Tin Bệnh Nhân Đăng Kí Khám</h4> 
                    <p class="for-form">
                        <label class="infor-sponsor"> Khoa <span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                         <td id='khoa'>
                             <select name="makhoa" id="makhoa">
                                <option value="0">-Tên khoa-</option>
                                <option value="1">Khoa Nhi</option>
                                <option value="2">Khoa Tai-mũi-họng</option>
                                <option value="3">Khoa nội</option>
                                <option value="4">Khoa ngoại</option>
                                <option value="5">Khoa sản</option>
                                <option value="6">Khoa ung bướu</option>
                                <option value="7">Khoa hồi sức</option>
                            </select>
            	    	</td>
                    </p>
                    <p class="for-form">
                        <label class="infor-sponsor"> Bác Sĩ <span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                         <td id='bacsi'>
                             <select name="mabs" id="mabs">
                                <option value="0">-Tên bac si-</option>
                                <option value="1">7h-8h Bác sĩ Nguyễn Phúc Xuân</option>
                                <option value="2">8h-9h Bác sĩ Nông Mạnh Đức</option>
                                <option value="3">9h-10h Bác sĩ Trần Anh Tuấn</option>
                                <option value="4">10h-11h Bác sĩ Nguyễ Dũng Tạ</option>
                                <option value="5">14h-15h Bác sĩ Nguyễn Thị Thu Ngân</option>
                                <option value="6">15h-16h Bác sĩ Hoàng Đức Thọ</option>
                                <option value="7">Buổi sáng Bác sĩ Trần Quốc Vượng</option>
                            </select>
            	    	</td>
                    </p>
                    <p class="for-form">
                        <label class="infor-sponsor">
                          Ngày Khám <span class="color-red">(*)</span>:</label>
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
                            Điện thoại<span class="color-red">(*)</span>:&nbsp;&nbsp;</label>
                       <td><input name="dienthoai" type="text" class="box" id="dienthoai" value="" size="25" maxlength="40"></td>
                            
                    </p>
                    <br class="clearfloat" />
                   <td align="center">
                        <input type="submit" name="Submit" value="Đăng kí Khám" onClick="return datlichkham();"/>
                   </td>
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
    <br />
    <br />
            <div class="footer-link">
               <marquee width="800" > Sức Khỏe Của Bạn Là Niềm Hạnh Phúc Của Chúng Tôi</marquee>
            </div>
    
   
   </body>
</html>
