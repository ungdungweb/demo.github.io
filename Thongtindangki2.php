<?php
include("include/config.php");
session_start();
$tenbn=$_REQUEST['tenbn'];
			$gioitinh=$_REQUEST['gioitinh'];
			$diachi=$_REQUEST['diachi'];
			$ngaysinh=implode("-",array_reverse(explode("/",$_POST['ngaysinh'])));
			$cmnd=$_REQUEST['cmnd'];
			$bhyt=$_REQUEST['bhyt'];	
?>
   
<!DOCTYPE html>
<html>
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
        

<form action="themttdangki.php"  id="form0" method="post">       <!-- Step Hinh Thuc Kham -->       
    <div id="bookingStep1" class="BookingStepCSS">
                <h2 class="title-inner">
                    Thông tin Bệnh nhân</h2>
            <p class="titile-inner-dec">
                    Bạn vui lòng xác nhận thông tin Bệnh nhân vào Form bên đưới để đăng ký Khám trực tuyến.</p>
            <div id="block-inner-left-1" class="LoginBlockCSS"></div>
    </div>
       

    
    <div id="bookingStep2_1" class="BookingStepCSS" style="margin-left: 100px;">
        <div id="block-inner-right-2-middle">
            <div class="block-inner-right-2-top">
            </div>
            <div class="block-inner-right-2-content">
                <h4>Xác Nhận Thông Tin Bệnh Nhân Đăng Kí Khám</h4>            
                
              
                <p class="for-form">
                    <label class="infor-sponsor">
                        Họ và Tên<span class="color-red">(*)</span>:</label>
                     <td><input name="tenbn" type="hidden" class="box" id="txtUserName" value="<?php echo $tenbn; ?>" size="25" maxlength="40"><?php echo $tenbn; ?></td>    
                </p>
                <p class="for-form">
                    <label class="infor-sponsor">
                        Ngày sinh<span class="color-red">(*)</span>:</label>
                   <td><input name="ngaysinh" type="hidden" class="box" id="txtUserName1" value="<?php echo $ngaysinh; ?>" size="25" maxlength="40"><?php echo $ngaysinh; ?></td>                        
                </p>
                <p class="for-form">
                    <label class="infor-sponsor">
                       Giới tính<span class="color-red">(*)</span>:&nbsp;&nbsp;</label>
                   <td style="font-size:19px">
               	        <input type="hidden" name="gioitinh" value="<?php echo $gioitinh;  ?>"  /><?php echo $gioitinh;  ?>
                    </td>
                </p>
                 <p class="for-form">
                    <label class="infor-sponsor">
                        CMNDan<span class="color-red">(*)</span>:&nbsp;</label>
                   <td><input name="cmnd" type="hidden" class="box" id="txtUserName" value="<?php echo $cmnd;  ?>" size="25" maxlength="40"><?php echo $cmnd;  ?></td>                        
                </p>
                 <p class="for-form">
                    <label class="infor-sponsor">
                        BHYT<span class="color-red"></span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <td><input name="bhyt" type="hidden" class="box" id="txtUserName" value="<?php echo $bhyt;  ?>" size="25" maxlength="40"><?php echo $bhyt;  ?></td>
                </p>
                <p class="for-form">
                    <label class="infor-sponsor">
                        Địa chỉ<span class="color-red">(*)</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                   <td><input name="diachi" type="hidden" class="box" id="txtUserName" value="<?php echo $diachi;  ?>" size="25" maxlength="40"><?php echo $diachi;  ?></td>
                </p>
               <br class="clearfloat" />
               <td align="center">
   					<input type="submit" name="submit" value="Xác nhận Thông tin"  />
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
                </td>
            </div>
            <div class="block-inner-right-2-bottom"></div>
        </div>
    </div>
    
</form>		
    <!-- 
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
    function goToBookingChildrenRegister(){

        $("#ProductIdService").val("358");
    
        var Child_LastName = jQuery.trim($('#Child_LastName_UI').val());
        var Child_FirstName = jQuery.trim($('#Child_FirstName_UI').val());
        var Child_BirthDay = jQuery.trim($('#Child_BirthDay_UI').val());
        var Child_Address = jQuery.trim($('#Child_Address_UI').val());
        var Rel_FullName = jQuery.trim($('#Rel_FullName_UI').val());
        var Rel_Email = jQuery.trim($('#Rel_Email_UI').val());
        var Rel_BirthDay = jQuery.trim($('#Rel_BirthDay_UI').val());
        var Rel_IdentityCard = jQuery.trim($('#Rel_IdentityCard_UI').val());        
        var Rel_Phone = jQuery.trim($('#Rel_Phone_UI').val());
        var Rel_Address = jQuery.trim($('#Rel_Address_UI').val());
        var mess = '';
        if (Child_LastName == '') mess += 'Bạn chưa nhập Họ & Tên đệm bệnh Nhi\n';
        if (Child_FirstName == '') mess += 'Bạn chưa nhập Tên bệnh Nhi\n';
        if (Child_BirthDay == '') mess += 'Bạn chưa nhập Ngày sinh bệnh Nhi\n';
        if (Child_Address == '') mess += 'Bạn chưa nhập Địa chỉ bệnh nhi \n';
        if (Rel_FullName == '') mess += 'Bạn chưa nhập Họ & Tên người đại diện\n';
        if (Rel_BirthDay == '') mess += 'Bạn chưa nhập Ngày sinh người đại diện\n';
        if (Rel_IdentityCard == '') mess += 'Bạn chưa nhập CMND người đại diện\n';        
        if (Rel_Address == '') mess += 'Bạn chưa nhập Địa chỉ người đại diện\n';
        if (Rel_Phone == '') mess += 'Bạn chưa nhập Số điện thoại người đại diện\n';
        if (Rel_Email == '') mess += 'Bạn chưa nhập Email người đại diện\n';
        if (mess != '') {
            mess += 'Xin vui lòng nhập đầy đủ các thông tin bắt buộc trên trước khi qua bước kế tiếp';
            alert(mess);
            return false;
        }
        if (!isValidEmail(Rel_Email)) {
            alert('Email không hợp lệ, xin vui lòng kiểm tra lại');
            return false;
        }        
        return true;        
    }

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
</script>  -->
        <div id="footer" style="margin-top: 10px">   
            <div class="footer-link">
                <div class="copyright-index">
                    <marquee width="400">Sức Khỏe Của Bạn Là Niềm Hạnh Phúc Của Chúng Tôi</marquee>
                </div>
            </div>
        </div>
   </body>
</html>
<!-- 