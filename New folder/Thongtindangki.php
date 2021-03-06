<?php
	include("include/config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="shortcut icon" href="/logo.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="datlichkham,datlichkham.hoibacsi.com,hoibacsi,hoibacsi.com,Đăng ký lịch hẹn khám và tái khám, đăng ký khám trực tuyến tại tại khoa phụ sản BV ĐHYD, giúp Bệnh Nhân rút ngắn thời gian chờ, găp bác sĩ theo yêu cầu, thanh toán nhanh chóng. Khoa Phụ sản BVĐHYD triển khai dịch vụ mới đăng ký lịch hẹn khám và tái khám trực tuyến" />
    <meta name="title" content="Trang chủ Đặt Lịch Hẹn Khám hoibacsi.com | Gặp Bác sĩ theo yêu cầu, đăng ký tái khám nhanh chóng " />
    <meta name="keywords" content="datlichkham,datlichkham.hoibacsi.com,hoibacsi,hoibacsi.com,đặt lịch hẹn khám tái khám, đặt hẹn khám bệnh, đăng ký khám bệnh trực tuyến, tái khám, lịch hẹn khám, đăng ký khám trứơc, gặp bác sĩ nhanh, gặp bác sĩ theo yêu cầu, Dịch vụ mới Khoa Phụ Sản BVĐHYD, cơ sở 4, Hỏi đáp, hỏi đáp sức khỏe, khám sản phụ khoa, nhi khoa, bệnh nhi" />
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
       <!-- <link href="Content/Dev.css" rel="stylesheet" type="text/css" />
    <link href="Content/Validate.css" rel="stylesheet" type="text/css" />
    <link href="Content/themes/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <link href="Content/themes/ui-lightness/jquery.ui.theme.css" rel="stylesheet" type="text/css" /> --> 
   
    <title>
        Trang chủ Đặt Lịch Hẹn Kh&#225;m hoibacsi.com | Gặp B&#225;c sĩ theo y&#234;u cầu, đăng k&#253; t&#225;i kh&#225;m nhanh ch&#243;ng
    </title>
 
    

    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
   

    <!--[if lte IE 7]>
       <script type="text/javascript" src="../../Scripts/json2.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-25359516-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    
    <script type="text/javascript" language="javascript">
        $(document).ready(function () {
            var loc = window.location.href;
            if (loc.indexOf("/AboutUs") != -1) {
                $('.menuclass').removeClass("active");
                $('#mnuAboutUs').addClass("active");
            }
            if (loc.indexOf("/Booking") != -1) {
                $('.menuclass').removeClass("active");
                $('#mnuBooking').addClass("active");
            }
            if (loc.indexOf("/Services") != -1) {
                $('.menuclass').removeClass("active");
                $('#mnuServices').addClass("active");
            }
            if (loc.indexOf("/Support") != -1) {
                $('.menuclass').removeClass("active");
                $('#mnuSupport').addClass("active");
            }
            if (loc.indexOf("/ListBanks") != -1) {
                $('.menuclass').removeClass("active");
                $('#mnuBanks').addClass("active");
            }
            if (loc.indexOf("/Contact") != -1) {
                $('.menuclass').removeClass("active");
                $('#mnuContact').addClass("active");
            }
        });
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
                        <li><a class="menuclass" id="mnuHome" href="http://hoibacsi.com" target="_blank">Trang
                            chủ</a>
                        </li>
                        <li><a class="menuclass" href="/" id="mnuBooking">Đăng k&#253; kh&#225;m</a></li>
                       <li>
                            <a class="menuclass" href="http://hbs.hoibacsi.com/taikhoanBNdientu" target="_blank">Tài khoản điện tử</a></li>
                        <li><a class="menuclass" href="/AboutUs" id="mnuAboutUs">Giới thiệu</a></li> 
                       <li><a class="menuclass" href="/NewBooking/ListBanks" id="mnuBanks">Ng&#226;n h&#224;ng</a></li>                      
                        <li><a class="menuclass" href="/Services" id="mnuServices">Bảng gi&#225;</a></li>
                        
                        <li><a href="http://hbs.hoibacsi.com/LichKhamBenh" target="_blank" class="menuclass"
                            id="mnuSupport">Lịch khám</a></li>
                        <li><a href="http://hbs.hoibacsi.com/Lien-he-gop-y" target="_blank" class="menuclass"
                            id="mnuSupport">Góp ý</a></li>
                    </ul>
                    <div class="hotlines">
                        <p>
                            <span class="hotline-dark">HOTLINE:</span> 1900.6113<br /> 
                            <span class="hotline-dark">MAIL:</span>DATKHAM@HOIBACSI.COM
                        </p>
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
                <img src="Content/images/123.jpg"  alt="" width="372" height="103" border="0" class="logo-dhyd" /></a>
        
          
</div>      
        <div id="banner-inner">
            <img class="img-inner-1" src="Content/images/global-s.png" border="0" />
            
        </div>
        <div id="mainContent">
            <script src="/Scripts/Step1.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () { 
    //If patient already registered (exists in database)
    if ($('#State_PatientRegistered').val() == 1)
    {
        
    }
    //If patient don't registered (don't exists in database)
    else if ($('#State_PatientRegistered').val() == 0 || $('#State_PatientRegistered').val() == -1) 
    {
        if ($('#BookRegisterType_UI').val()==0 || $('#BookRegisterType_UI').val()==1) 
        {
            //set to "kham san khoa hoac noi khoa" for default
            $('#BookRegisterType_UI').val('1');    
            
            $('input:radio')[0].checked=true;
            $('input:radio')[1].checked=false;

            $('#bookingStep2_1').fadeIn(3000);
            $('#bookingStep2_2').hide();
        }        
        //child examination
        else if($('#BookRegisterType_UI').val()==2)
        {
            $('#BookRegisterType_UI').val('2');    

            //check radio with BookRegisterType                       
            $('input:radio')[0].checked=false;
            $('input:radio')[1].checked=true; 

            $('#bookingStep2_1').hide();
            $('#bookingStep2_2').fadeIn(3000);
        }   
    } 
});
</script>

<form action="Thongtindangki2.php" id="form0" method="post"> <!-- Step Hinh Thuc Kham -->      
<div id="bookingStep1" class="BookingStepCSS">
            <h2 class="title-inner">
                Thông tin Bệnh nhân</h2>
            <p class="titile-inner-dec">
                Bạn vui lòng điền thông tin Bệnh nhân vào Form bên đưới để đăng ký Khám trực tuyến.</p>
            <div id="block-inner-left-1" class="LoginBlockCSS">
              
            </div>
        </div>
       
<script type="text/javascript">
    $(function(){
        $("#Ob_BirthDay_UI").datepicker({
            changeMonth: true,
            changeYear: true,
            showAnim: 'clip',
            regional: 'vi',
            yearRange: '1930:2013',
        });
        $("#Ob_BirthDay_UI").datepicker("option", "dateFormat", "dd/mm/yy");                
        $('#Ob_CityName_UI').val($('#Ob_City_UI option:selected').text());
        $('#Ob_Gender_UI').val("Nữ");

        if ($('#State_PatientRegistered').val()==-1) 
        {
            $('.ChildrenNoService').show();
        }else{
            $('.ChildrenNoService').hide();
        }  
    });

  
    function goToBookingObstetricRegister() {
        var Ob_LastName = jQuery.trim($('#tenbn').val());
        var Ob_BirthDay = jQuery.trim($('#ngaysinh').val());   
        var Ob_Address = jQuery.trim($('#diachi').val());
        var Ob_Phone = jQuery.trim($('#dienthoai').val());
        var Ob_Email = jQuery.trim($('#email').val());
		var Ob_Cmnd = jQuery.trim($('#cmnd').val());
		var Ob_Bhyt = jQuery.trim($('#bhyt').val());
        var mess = '';
        if (Ob_LastName == '') mess += 'Bạn chưa nhập Họ & Tên đệm\n';
        if (Ob_BirthDay == '') mess += 'Bạn chưa nhập Ngày sinh \n';   
        if (Ob_Address == '') mess += 'Bạn chưa nhập Địa chỉ \n';
        if (Ob_Phone == '') mess += 'Bạn chưa nhập Số điện thoại \n';
        if (Ob_Email == '') mess += 'Bạn chưa nhập Email \n';
	 	if (Ob_Cmnd == '') mess += 'Bạn chưa nhập So cmnd \n';
	  	if (Ob_Bhyt == '') mess += 'Bạn chưa nhập bap hiem yt \n';
        if (mess != '') {
            mess += 'Xin vui lòng nhập đầy đủ các thông tin bắt buộc trên trước khi qua bước kế tiếp';
            alert(mess);
            return false;
        }
        if (!isValidEmail(Ob_Email)) {
            alert('Email không hợp lệ, xin vui lòng kiểm tra lại');
            return false;
        } 
        return true; 
    }    

    function Ob_BirthDayUpdateView(){        
        var birthDay=$('#Ob_BirthDay_UI').val();
        if(birthDay.length==10)
        {
            //Check ngay thang nam hop le ko
            var dateParts = birthDay.split("/");            
            var _year=dateParts[2];
            var _month=dateParts[1] - 1;
            var _day=dateParts[0];
            var dt=new Date(_year,_month,_day);
            if(_month>=0&&_month<12)
            {
                if(_day>0&&_day<=31)
                {
                    var date = new Date(_year,_month,_day);
                    var currentYear=parseInt(2013);
                    var year=parseInt(_year);
                    var age=currentYear-year;
                    setValue('#Ob_Age_UI',age);              
                }
                else
                    alert("Ngày sinh không hợp lệ");
            }
            else
                alert("Ngày sinh không hợp lệ");
        }
        else if(birthDay.length==4)
        {
                var currentYear=parseInt(2013);
                var year=parseInt(birthDay);
                var age=currentYear-year;
                setValue('#Ob_Age_UI',age);   
        }
        else
        {
            alert("Dữ liệu Ngày sinh không hợp lệ");
        }
    } 

    function Ob_AgeChange(){
        var age=$('#Ob_Age_UI').val();
        var currentYear=parseInt(2013);
        if(age<=0)
            alert("Tuổi không hợp lệ");
        else
        {
            var year=currentYear-age;
            setValue('#Ob_BirthDay_UI',year);            
        }
    }
    function Ob_CityUpdateView()
    {        
        $('#Ob_CityName_UI').val($('#Ob_City_UI option:selected').text());     
    }    
</script>
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
               <td><input name="ngaysinh" type="text" class="box" id="ngaysinh" value="" size="25" maxlength="40">
             <script type="text/javascript">
		// <![CDATA[
		$(document).ready(function() {
			$('#txtUserName1').calendar();
		});
		// ]]>
		</script>
            </td>
                    
            </p>
            <p class="for-form">
                <label class="infor-sponsor">
                   Giới tính<span class="color-red">(*)</span>:&nbsp;&nbsp;</label>
               <TD style="font-size:19px">
             	<select name="gioitinh" >
                <option value="">Chọn giới tính</option>                               
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                 </select><br />
              </TD>
                    
            </p>
             <p class="for-form">
                <label class="infor-sponsor">
                    CMNDan<span class="color-red">(*)</span>:&nbsp;</label>
               <td><input name="cmnd" type="text" class="box" id="cmnd" value="" size="25" maxlength="40"></td>
                    
            </p>
             <p class="for-form">
                <label class="infor-sponsor">
                    BHYT<span class="color-red"></span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <td><input name="bhyt" type="text" class="box" id="bhyt" value="" size="25" maxlength="40"></td>
            </p>
            <p class="for-form">
                <label class="infor-sponsor">
                    Địa chỉ<span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
               <td><input name="diachi" type="text" class="box" id="diachi" value="" size="25" maxlength="40"></td>
            </p>
           
                  
                <p class="for-form">
                <label class="infor-sponsor">
                    Điện thoại<span class="color-red">(*)</span>:</label>
               <td><input name="dienthoai" type="text" class="box" id="dienthoai" value="" size="25" maxlength="40"></td>
                    
            </p>
            <p class="for-form">
                <label class="infor-sponsor">
                    Email<span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
               <td><input name="email" type="text" class="box" id="email" value="" size="25" maxlength="40"></td>
                    
            </p>
            
            <br />
            <br />
            <p style="color:Red;margin-left:73px;font-style:italic;font-size:12px;">Vui lòng nhập đúng email của anh/chị. Chúng tôi sẽ gửi phiếu khám từ email <a href="datlichkham.hbs@hoibacsi.com">datlichkham.hbs@hoibacsi.com</a> đến email này ( Vui lòng kiểm tra thêm hộp mail rác của anh chị)</p>
            <label class="notes-form" style="width: 100%;">
                <ul>
                    <span class="text-under">Chú ý:</span>
                    <li style="list-style: none">- Những mục có dấu <span class="color-red">(*)</span> là
                        bắt buộc.</li>
                    <li style="list-style: none">- Mã số bệnh nhân sẽ được cấp phát sau khi bạn đăng ký
                        thành công !</li>
                </ul>
            </label>
            <br class="clearfloat" />
           <td align="center"><input type="submit" name="Submit" value="Đăng kí Khám" onclick="return goToBookingObstetricRegister();"  /></td>
            
        </div>
        <div class="block-inner-right-2-bottom">
        </div>
    </div>
</div>
        <!-- Step Kham Nhi -->
<script type="text/javascript">
    $(function(){
        //Init calendar of Child
        $("#Child_BirthDay_UI").datepicker({
            changeMonth: true,
            changeYear: true,
            showAnim: 'clip',
            regional: 'vi',
            yearRange: '2000:2013'
        });
        $("#Child_BirthDay_UI").datepicker("option", "dateFormat", "dd/mm/yy");

        $("#Rel_BirthDay_UI").datepicker({
            changeMonth: true,
            changeYear: true,
            showAnim: 'clip',
            regional: 'vi',
            yearRange: '1930:2013'
        });
        $("#Rel_BirthDay_UI").datepicker("option", "dateFormat", "dd/mm/yy");

        $('#Child_CityName_UI').val($('#Child_City_UI option:selected').text());
        $('#Rel_CityName_UI').val($('#Rel_City_UI option:selected').text());      
        
        if ($('#State_PatientRegistered').val()==-1) 
        {
            $('.ChildrenNoService').show();
        }else{
            $('.ChildrenNoService').hide();
        }  
    });
    
    //Fire when click button "Tiếp theo" of page "_StepChildren.cshtml"
    
    function Child_BirthDayUpdateView(){     
        var birthDay=$('#Child_BirthDay_UI').val();
        if(birthDay.length==10)
        {
            //Check ngay thang nam hop le ko
            var dateParts = birthDay.split("/");
            var _year=dateParts[2];
            var _month=dateParts[1] - 1;
            var _day=dateParts[0];
            if(_month>=0&&_month<12)
            {
                if(_day>0&&_day<=31)
                {
                    var date = new Date(_year,_month,_day);
                    var currentYear=parseInt(2013);
                    var year=parseInt(_year);
                    var age=currentYear-year;
                    setValue('#Child_Age_UI',age);              
                }
                else
                    alert("Ngày sinh không hợp lệ");
            }
            else
                alert("Ngày sinh không hợp lệ");
        }
        else if(birthDay.length==4)
        {
                var currentYear=parseInt(2013);
                var year=parseInt(birthDay);
                var age=currentYear-year;
                setValue('#Child_Age_UI',age);   
        }
        else
        {
            alert("Dữ liệu Ngày sinh không hợp lệ");
        }           
    }

    function Child_AgeChange(){
        var age=$('#Child_Age_UI').val();
        var currentYear=parseInt(2013);
        if(age<=0)
            alert("Tuổi không hợp lệ");
        else
        {
            var year=currentYear-age;
            setValue('#Child_BirthDay_UI',year);            
        }
    }

    function Child_CityUpdateView()
    {        
        $('#Child_CityName_UI').val($('#Child_City_UI option:selected').text());        
    }

    function Rel_CityUpdateView()
    {        
        $('#Rel_CityName_UI').val($('#Rel_City_UI option:selected').text());        
    }
</script>
<div id="bookingStep2_2" class="BookingStepCSS" style=" margin-left:240px">
    <div id="block-inner-right-2">
      
    </div>
</div>
</form>

        </div>
        <div id="footer" style="margin-top: 10px">
            <div style="text-align: center">
                <div class="pay-accept">
                    <img src="Content/bank/pay-accept.png" border="0" /></div>
                <div class="bank-logo">
                    <img src="Content/bank/bank-logo-all.png" border="0" /></div>
            </div>
            <div class="footer-link">
                <div class="copyright-index">
                    <p>
                        Copyright © 2011 datlichkham.hoibacsi.com. Phát triển bởi <a href="http://fsw.vn">Falcon
                            Software JSC</a>.
                    </p>
                </div>
                <div class="footer-link">
                    <ul>
                        <li><a href="/Support">Điều kiện chung</a></li>
                        <li>|</li>
                        <li><a href="/Support">Hướng dẫn</a></li>
                        <li>|</li>
                        <li><a href="/AboutUs">Giới Thiệu</a></li>
                        <li>|</li>
                        <li><a href="/Services">Bảng giá Dịch vụ</a></li>
                        <li>|</li>
                        <li><a href="/Contact">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end #footer -->
    </div>   
    <!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">
    document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
</script>
<a href="http://www.histats.com" target="_blank" title="web statistic" >
<script  type="text/javascript" >
    try {
        Histats.start(1, 2192242, 4, 0, 0, 0, "");
        Histats.track_hits();
    } catch (err) { };
</script>
</a>
<noscript>
<a href="http://www.histats.com" target="_blank">
    <img  src="http://sstatic1.histats.com/0.gif?2192242&101" alt="web statistic" border="0" />
</a>
</noscript>
<!-- Histats.com  END  -->
   </body>
</html>
