<?php
	include("include/config.php");
		session_start();
	?>
<!DOCTYPE html>
<head runat="server">
    <link rel="shortcut icon" href="/logo.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
    <title>
     Dat lich kham
    </title>
 <script language="javascript" src="../js/jquery-1.5.1.js"></script>

<link id="ctl00_Link3" href="js/vcb.calendar.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/ui.calendar.js" type="text/javascript"></script>
<script type="text/javascript">
	function QLbenhnhan(){
	var f=document.regForm;
	if(f.tenbn.value=='') { alert('Bạn chưa nhập tên bệnh nhân'); return false;}
	if(f.ngaysinh.value=='') { alert('Bạn chưa nhập ngày sinh'); return false;}
	if(f.gioitinh.value=='') { alert('Bạn chưa nhập gioi tinh'); return false;}
	if(f.cmnd.value=='') { alert('Bạn chưa nhập CMND'); return false;}
	if(f.bhyt.value!='')
	{
			
			if(isNaN(f.bhyt.value) || f.bhyt.value.length <15 || f.bhyt.value.length >15)
				{
				alert('BHYT Phải đủ 15 số');		
				return false;
				}
	}
	if(f.diachi.value=='') { alert('Bạn chưa nhập địa chỉ'); return false;}
	if(isNaN(f.cmnd.value) || f.cmnd.value.length <9 || f.cmnd.value.length >9){
		alert('Số cnnd phải 9 số');		
		return false;
	}
}
</script>

</head>
<body>
    <div id="container">
        <div id="header">
            <div class="menu-top">
                <div class="menu-top-left">
                </div>
                <div class="menu-top-content">
                    <ul>
                        <li><a class="menuclass" id="mnuHome" href="http://localhost/benhvien/index.php?page=trangchu" >Trang chủ</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-top-right">
                </div>
            </div>
        </div>
        <div id="logo-inner">
            <a href="# " target="_blank">
                <img src="Content/images/hospital.jpg"  alt="" width="269" height="269" border="0" class="logo-dhyd" />
            </a>
        </div>      
        <div id="banner-inner">
            <img class="img-inner-1" src="Content/images/global-s.png" border="0" />
        </div>
        <div id="mainContent">
            <script src="/Scripts/Step1.js" type="text/javascript"></script>
            
            <form action="Thongtindangki2.php" id="form0" method="post" name="regForm"> <!-- Step Hinh Thuc Kham -->      
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
                        <div id="err"><?php if(isset($mes)) echo $mes;  ?></div>
                            <h4>Thông Tin Bệnh Nhân Đăng Kí Khám</h4>            
                            
                          
                            <p class="for-form">
                                <label class="infor-sponsor">
                                    Họ và Tên<span class="color-red">(*)</span>:</label>
                                 <td><input name="tenbn" type="text" class="box" id="tenbn" value="" size="25" maxlength="40"></td>
                                    
                            </p>
                            <p class="for-form">
                                <label class="infor-sponsor">
                                    Ngày sinh<span class="color-red">(*)</span>:</label>
                               <td><input name="ngaysinh" type="text" class="box " id="ngaysinh" value="" size="25" maxlength="40">
                                    <script type="text/javascript">
                                    // <![CDATA[
                                    $(document).ready(function() {
                                    	$('#ngaysinh').calendar();
                                    });
                                    // ]]>
                                    </script>
                                </td>
                                    
                            </p>
                            <p class="for-form">
                                <label class="infor-sponsor">
                                   Giới tính<span class="color-red">(*)</span>:&nbsp;&nbsp;</label>
                               <td style="font-size:19px">
                             	<select name="gioitinh" >
                                <option value="">Chọn giới tính</option>                               
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                 </select><br />
                              </td>
                                    
                            </p>
                             <p class="for-form">
                                <label class="infor-sponsor">
                                    CMND<span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                               <td><input name="cmnd" type="text" class="box" id="cmnd" value="" size="25" maxlength="40"></td>
                                    
                            </p>
                             <p class="for-form">
                                <label class="infor-sponsor">
                                    BHYT<span class="color-red"></span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <td><input name="bhyt" type="text" class="box" id="bhyt" value="" size="25" maxlength="40"></td>
                            </p>
                            <p class="for-form">
                                <label class="infor-sponsor">
                                    Địa chỉ<span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                               <td><input name="diachi" type="text" class="box" id="diachi" value="" size="25" maxlength="40"></td>
                            </p>
                            <br class="clearfloat" />
                           <td align="center"><input type="submit" name="Submit" value="Đăng kí Khám" onclick="return QLbenhnhan();"  /></td>
                            <br />
                            <br />
                            
                            <label class="notes-form" style="width: 100%;">
                                <ul>
                                    <span class="text-under">Chú ý:</span>
                                    <li style="list-style: none">- Những mục có dấu <span class="color-red">(*)</span> là
                                        bắt buộc.</li>
                                    <li style="list-style: none">- Mã số bệnh nhân sẽ được cấp phát sau khi bạn đăng ký
                                        thành công !</li>
                                </ul>
                            </label>
                            
                            
                        </div>
                        <div class="block-inner-right-2-bottom">
                        </div>
                    </div>
                </div>
                 
                <div id="bookingStep2_2" class="BookingStepCSS" style=" margin-left:240px">
                    <div id="block-inner-right-2">
                      
                    </div>
                </div>
            </form>
            
        </div>
        <div id="footer" style="margin-top: 10px">
            <div class="footer-link">
                <div class="footer-link">
                    <marquee width="800"> Sức Khỏe Của Bạn Là Niền Hạnh Phúc Của Chúng Tôi</marquee>
                </div>
            </div>
        </div>
        <!-- end #footer -->
    </div>   
   
   </body>
</html>
