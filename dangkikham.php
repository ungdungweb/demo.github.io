<?php
	include("include/config.php");
		session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="datlichkham,datlichkham.hoibacsi.com,hoibacsi,hoibacsi.com,Đăng ký lịch hẹn khám và tái khám, đăng ký khám trực tuyến tại tại khoa phụ sản BV ĐHYD, giúp Bệnh Nhân rút ngắn thời gian chờ, găp bác sĩ theo yêu cầu, thanh toán nhanh chóng. Khoa Phụ sản BVĐHYD triển khai dịch vụ mới đăng ký lịch hẹn khám và tái khám trực tuyến" /><meta name="title" content="Trang chủ Đặt Lịch Hẹn Khám hoibacsi.com | Gặp Bác sĩ theo yêu cầu, đăng ký tái khám nhanh chóng " /><meta name="keywords" content="datlichkham,datlichkham.hoibacsi.com,hoibacsi,hoibacsi.com,đặt lịch hẹn khám tái khám, đặt hẹn khám bệnh, đăng ký khám bệnh trực tuyến, tái khám, lịch hẹn khám, đăng ký khám trứơc, gặp bác sĩ nhanh, gặp bác sĩ theo yêu cầu, Dịch vụ mới Khoa Phụ Sản BVĐHYD, cơ sở 4, Hỏi đáp, hỏi đáp sức khỏe, khám sản phụ khoa, nhi khoa, bệnh nhi" /><link href="Content/Site.css" rel="stylesheet" type="text/css" /><!--<link href="Content/Dev.css" rel="stylesheet" type="text/css" />--><title>
	
    Trang chủ Đặt Lịch Hẹn Khám hoibacsi.com | Gặp Bác sĩ theo yêu cầu, đăng ký tái
    khám nhanh chóng

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
                        <li><a class="menuclass" id="menuHome" href="http://localhost/benhvien/index.php?page=trangchu" >Trang
                            chủ</a>
                        </li>
                       
                    </ul>
                    
                </div>
                <div class="menu-top-right">
                </div>
            </div>
          
        </div>
       
        <div id="logo-inner" style="margin-left:280px" >
        <a href=#>
                <img src="Content/images/hospital.jpg"  alt="" width="269" height="269" border="0" class="logo-dhyd" /></a>
          
</div>      
        <div id="mainContent">
        
            
    <div id="banner-index" style=" margin:0">
    </div>
    <div id="mainContent">
        <div class="block-index-top">
        </div>
        <div class="block-index-content">
            <!-- Block Left -->
            <div class="block-index-content-left">
                <p style="margin-bottom:10px;">
                    <span id="ajax-loader" style="display: none">
                        <img src="Content/loader/awaiting.gif" />
                        <span class="color-blue">Đang kết nối.....</span>
                    </span>
                </p>
                <h2 style="text-align: center">
                   Dịch vụ Đăng Ký Đặt Lịch Hẹn Khám & Tái Khám Trực Tuyến 
                </h2>
                <p class="standar2" style=" text-align:justify">
                    Dịch vụ đặt lịch hẹn khám hiện tại đã triển khai 3 loại dịch vụ dành cho Sản Phụ
                    và Nhi Khoa bao gồm: Khám Sản, Khám Nhi, Khám Nội Khoa. <</span>
                    Dịch vụ khám nội khoa sẽ giúp các thai phụ được kiểm tra tổng quát trong thai kỳ,
                    nhằm phát hiện những bệnh lý nội khoa đi kèm. 
                </p>               
                <p class="standar2" style="text-align: justify">
                    Bạn vui lòng chọn vào mục thích hợp bên dưới để Kiểm tra thông tin bệnh nhân.
                </p>
               <form id="form1" name="form1" method="post" action="">
                   	<table width="200" align="left" >
                 
               	      <tr>
               	        <td>
               	          <label>
               	            <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
               	          </label>
                        </td>
               	        <td>BHYT</td>
                        <td > <input type="text" name="BHYT" value="" /></td>
                      </tr>
               	      <tr>
               	        <td>
                           <label>
           	                    <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1" />
               	            </label>
                        </td>
               	        <td>CMND</td>
                         <td >
                             <input type="text" name="CMND" value="" />
                         </td>
                      </tr>
                      <tr>
               	        <td>
                           <label>
               	                <input type="radio" name="RadioGroup1" value="3" id="RadioGroup1_2" />
               	            </label>
                        </td>
               	        <td>Mã BN</td>
                        <td > <input type="text" name="maBN" value="" /></td>
                      </tr>
                      <tr>
                        <td align="center"><input type="submit" name="Submit1" value="Tìm Thông Tin" /></td>
                      </tr>
                    </table>
                </form>
        <!--------------------------------------------->
                 <?php
                  	if(isset($_POST["Submit1"])) {
                        if (isset($_POST['RadioGroup1'])) {
                            $selected_button = $_POST['RadioGroup1'];
                            if ($selected_button == '1') {
                                $bhyt = $_POST['BHYT'];
                                $sql1 = "Select BHYT from  tblbenhnhan where BHYT = '{$bhyt}'";
                                $query1 = mysqli_query($connect, $sql1);
                                $row1 = mysqli_num_rows($query1);
                                if ($row1 <> 0) {
                                    while ($data1 = mysqli_fetch_array($query1)) {
                                        echo " <table  >";
                                        echo "<tr>";
                                        echo "<td align='center'> ";
                                        echo "<input type='text' name='mabn' value='" . $data1['maBenhnhan'] . "' size='4px' align='middle'/>";
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        echo "<input type='text' name='tenbn' value='" . $data1['tenBenhnhan'] . "' size='15px'/>";
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        echo "<input type='text' name='dchi' value='" . $data1['diaChi'] . "'size='10px'/>";
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        echo "<input type='text' name='bhyt' value='" . $data1['BHYT'] . "' size='10px'/>";
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "<td align='center'>
                                                    <form action='index.php?page=benhnhanDK' method='post'>
                                                    <input type='submit' name='submit' value='Đặt lịch' />
                                                    <input type='hidden' name='sua' value='" . $data1['maBenhnhan'] . "'/> 
                                                    </form>		
                                               </td>";
                                        echo "</table>";

                                    }
                                }
                            }
                            else echo "<script>alert('Chưa có bệnh án vui lòng đăng kí thông tin');</script>";
                            if ($selected_button == '2') {
                                $CMND = $_POST['CMND'];
                                $sql2 = "Select * from  tblbenhnhan where CMND like '%$CMND%'";
                                $query2 = mysqli_query($connect, $sql2);
                                $row2 = mysqli_num_rows($query2);
                                if ($row2 <> 0) {
                                    while ($data2 = mysqli_fetch_array($query2)) {
                                        echo " <table align='center' >";
                                        echo "<tr>";

                                        echo "<td align='center'> ";
                                        echo "<input type='text' name='mabn' value='" . $data2['maBenhnhan'] . "' size='4px' align='middle'/>";
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        echo "<input type='text' name='tenbn' value='" . $data2['tenBenhnhan'] . "' size='10px'/>";
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        echo "<input type='text' name='dchi' value='" . $data2['diaChi'] . "' size='10px'/>";
                                        echo "</td>                    
                                                <td align='center'> ";
                                        echo "<input type='text' name='bhyt' value='" . $data2['BHYT'] . "' size='10px'/></td>";
                                        echo "</tr> ";
                                        echo "<td align='center'>
                                                <form action='index.php?page=benhnhanDK' method='post'>
                                                <input type='submit' name='submit' value='Đặt lịch' />
                                                <input type='hidden' name='sua' value='" . $data2['maBenhnhan'] . "'/> 
                                                </form>		
                                              </td>
                                       </table>";
                                    }
                                } else echo "<script>alert('Chưa có bệnh án vui lòng đăng kí thông tin');</script>";
                            } else if ($selected_button == '3') {
                                $mabn = $_POST['maBN'];
                                $sql3 = "Select * from  tblbenhnhan where maBenhnhan like '%$mabn%'";
                                $query3 = mysqli_query($connect, $sql3);
                                $row3 = mysqli_num_rows($query3);
                                if ($row3 <> 0) {
                                    while ($data3 = mysqli_fetch_array($query3)) {
                                        echo " <table align='center' >";
                                        echo "<tr>";
                                        echo "<td align='center'> ";
                                        echo "<input type='text' name='mabn' value='" . $data3['maBenhnhan'] . "' size='4px' align='middle'/>";
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        echo "<input type='text' name='tenbn' value='" . $data3['tenBenhnhan'] . "' size='15px'/>";
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        echo "<input type='text' name='dchi' value='" . $data3['diaChi'] . "' size='10px'/>";
                                        echo "</td>";
                                        echo "<td align='center'> ";
                                        echo "<input type='text' name='bhyt' value='" . $data3['BHYT'] . "' size='10px'/></td>";
                                        echo "</tr>";
                                        echo "<td align='center'>
                                                    <form action='index.php?page=benhnhanDK' method='post'>
                                                    <input type='submit' name='submit' value='Đặt lịch' />
                                                    <input type='hidden' name='sua' value='" . $data3['maBenhnhan'] . "'/> 
                                                    </form>		
                                                 </td> 
                                     </table>";
                                    }
                                } else echo "<script>alert('Chưa có bệnh án vui lòng đăng kí thông tin');</script>";
                            }
                        }
                        else echo "<script>alert('Vui lòng chọn 1 trong 3 mục');</script>";
                    }
        	?>
    
       <!-- ------------------------------------------>
       <br /><br /><br /><br /><br /><br />
       
               <tr>
                    <p class="standar2" style="text-align: justify">
                        Bạn vui lòng chọn vào mục Đăng ký khám bên dưới để đăng ký Đặt Lịch Hẹn Khám nếu chưa có mã bệnh nhân.
                    </p>
                </tr>
        <form id="form2" name="form2" method="post" action="">
       	<table width="200" align="left" >
          <tr>
          
            <td align="center"><input type="submit" name="Submit2" value="Đăng kí khám" /></td>
          
          </tr>
        </table>
       </form>
               <!--------------------------------------->
                <?php
  	if(isset($_POST["Submit2"])){
			echo "<meta http-equiv=refresh content='2;url=Thongtindangki.php'>";
	}
	?>
               <!--------------------------------------->     
       
                                
            </div>
           
            <div class="block-index-content-right" id ="block1">    
                <p>
                    <span class="color-darkred" style="font-size: 13px; font-weight: bold">Đăng ký thành viên miễn phí & nhanh chóng</span><br />
                    <ul>
                        <li>Được tư vấn sức khoẻ cùng Bác sĩ chuyên khoa</li>
                        <li>Xem Bệnh Án điện tử.</li>
                        <li>Đăng ký lịch hẹn khám & tái khám. </li>
                        <li>Đăng ký nhận bản tin và các câu hỏi theo chủ đề</li>
                    </ul>                   
                </p>    
                <p>
                    <span class="color-darkred" style="font-size: 13px; font-weight: bold">Lợi ích Đăng
                        ký khám và Cấp ngay số thứ tự</span><br />
                    <ul>
                        <li>Hỗ trợ quý khách đăng ký lịch hẹn khám ngay với Bác Sĩ.</li>
                        <li>Không phải đến bệnh viện xếp hàng chờ đợi lấy STT</li>
                        <li>Thanh toán nhanh chóng thông qua các ngân hàng bên dưới.</li>
                        <li>MSBN có ngay sau khi đăng ký hoàn tất</li>
                    </ul>
                </p>
                <p>  
            </div>           
            <div class="note-book-top">
            </div>
            <div class="note-book-bottom">
            </div>
        </div>
        <div class="block-index-bottom">
        </div>
        <!-- end #mainContent -->

    </div>  
    <!-- end #container -->
<input type="hidden" value="9" id="inCurHour" />
<input type="hidden" value="8" id="inCurMinute" />
<script type="text/javascript">

    var curHourse = $('#inCurHour').val();
    var curMinute = $('#inCurMinute').val();
    //alert(curHourse + ' ' + curMinute);
    if ((curHourse > 22) || (curHourse == 22 && curMinute >= 30) || (curHourse == 7 && curMinute <= 15) || (curHourse < 7)) {
        $('#selectBooking1').attr('disabled', 'disabled');
    }
</script>
    <div id="footer" style="margin-top: 10px">
            <div class="footer-link">
                <div class="footer-link">
                    <marquee width="800"> Sức Khỏe Của Bạn Là Niền Hạnh Phúc Của Chúng Tôi</marquee>
                </div>
            </div>
        </div>
</body>
</html>
