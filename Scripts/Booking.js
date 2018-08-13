$(function () {
    $('.BookingStepCSS').hide();
    $('#bookingStep1').show();
    $('#typeQuestion').attr('checked', 'checked');
    selectLoginType(1);
});
function showStep(stepId) {
    $('.BookingStepCSS').hide();
    $('#' + stepId).show();
}
function disableAllBlock() {
    updateStep1(false);
    updateStep2(false);
    updateStep3(false);
}
function updateStep1(isShow) {
    if (isShow) {
        $('#PatientCodeInput').removeAttr('disabled');
        $('#PrescriptionCode').removeAttr('disabled');
        $('#block1Continue').removeAttr('disabled');
        $('#block1Reset').removeAttr('disabled');
    } else {
        $('#PatientCodeInput').attr('disabled', 'disabled');
        $('#PrescriptionCode').attr('disabled', 'disabled');
        $('#block1Continue').attr('disabled', 'disabled');
        $('#block1Reset').attr('disabled', 'disabled');
    }
}
function updateStep2(isShow) {
    if (isShow) {
        $('#txtSearchFullName').removeAttr('disabled');
        $('#txtSerchText').removeAttr('disabled');
        $('#txtSearchBOD').removeAttr('disabled');
        $('#txtSearchPhone').removeAttr('disabled');
        $('#block2Continue').removeAttr('disabled');
        $('#block2Reset').removeAttr('disabled');
        $('#block2SearchButton').removeAttr('disabled');
        $('#divResultSearchPatient').html('');
        $('#divResultSearchPatient').show();
    } else {
        $('#txtSearchFullName').attr('disabled', 'disabled');
        $('#txtSerchText').attr('disabled', 'disabled');
        $('#txtSearchBOD').attr('disabled', 'disabled');
        $('#txtSearchPhone').attr('disabled', 'disabled');
        $('#block3Continue').attr('disabled', 'disabled');
        $('#block2Reset').attr('disabled', 'disabled');
        $('#block2SearchButton').attr('disabled', 'disabled');
        $('#btnActionSearchRegion').hide();
        $('#divResultSearchPatient').html('');
        $('#divResultSearchPatient').hide();
    }
}
function updateStep3(isShow) {
    if (isShow) {
        $('#usernameInput').removeAttr('disabled');
        $('#passwordInput').removeAttr('disabled');
        $('#block3Continue').removeAttr('disabled');
        $('#block3Reset').removeAttr('disabled');
    } else {
        $('#usernameInput').attr('disabled', 'disabled');
        $('#passwordInput').attr('disabled', 'disabled');
        $('#block3Continue').attr('disabled', 'disabled');
        $('#block3Reset').attr('disabled', 'disabled');
    }
}
$.fn.hasAttr = function (name) {
    return (this.attr(name) !== undefined && this.attr(name) != false);
};
function resetBlock3() {
    $('#usernameInput').val('');
    $('#passwordInput').val('');
}
function selectLoginType(type) {
    disableAllBlock();
    switch (type) {
        case 1:
            disableAllBlock();
            updateStep1(true);
            break;
        case 2:
            disableAllBlock();
            updateStep2(true);
            break;
        case 3:
            disableAllBlock();
            updateStep3(true);
            break;
    }
}
function searchPatient() {
    var fullName = $('#txtSearchFullName').val();
    var gender = $('#txtSerchText').val();
    var yearOfBirthday = $('#txtSearchBOD').val();
    var phone = $('#txtSearchPhone').val();
    if (jQuery.trim(fullName) != '' && fullName != 'Họ và Tên' && jQuery.trim(gender) != '' && yearOfBirthday != 'Năm sinh' && jQuery.trim(yearOfBirthday) != '' && phone != 'Số điện thoại' && jQuery.trim(phone) != '') {
        var param = {
            fullName: fullName,
            gender: gender,
            yearOfBirthday: yearOfBirthday,
            phone: phone
        };
        var url = "Booking/SearchPatient";
        $.post(url, param, function (datas) {
            var items = eval(datas);
            var jItem = items[0];
            if (jItem.data == 1 && jItem.content.length > 0) {
                var roomInfo = '<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tblinfor-patients">';
                roomInfo += '<thead><tr><th>Họ và Tên</th><th>Địa chỉ</th><th width="60px">Ngày sinh</th><th width="27px">Tuổi</th><th width="50px">Giới tính</th></tr></thead>';
                for (var i = 0; i < jItem.content.length; i++) {
                    var year = jItem.content[i].DOB.substr(jItem.content[i].DOB.length - 4, 4);
                    var d = new Date();
                    var age = d.getFullYear() - year;
                    if (age == d.getFullYear()) age = '';
                    var sItem = '<tbody><tr id="trPatient_' + jItem.content[i].PatientCode + '" class="BorderTD TRPatientCSS" onclick="getPatientInfo(\'' + jItem.content[i].PatientCode + '\');$(\'.TRPatientCSS\').removeClass(\'HighlightTDSearch\');$(\'#trPatient_' + jItem.content[i].PatientCode + '\').addClass(\'HighlightTDSearch\');">';
                    sItem += '<td>' + jItem.content[i].PatientName + '&nbsp;</td>';
                    sItem += '<td>' + jItem.content[i].Address + '&nbsp;</td>';
                    sItem += '<td>' + jItem.content[i].DOB + '&nbsp;</td>';
                    sItem += '<td>' + age + '&nbsp;</td>';
                    sItem += '<td>' + jItem.content[i].SEX + '&nbsp;</td>';
                    sItem += '<tr>';
                    roomInfo += sItem;
                }
                $('#divResultSearchPatient').html(roomInfo + '</tbody></table>');
                $('#divResultSearchPatient').show();
                $('#btnActionSearchRegion').show();
            } else {
                $('#btnActionSearchRegion').hide();
                alert('Không tìm thấy bệnh nhân nào phù hợp với yêu cầu tìm của Quý khách.');
            }
        });
    } else {
        alert('Xin vui lòng nhập đầy đủ thông tin tìm kiếm');
        return;
    }
}
function resetSearch() {
    $('#txtSearchFullName').val('Họ và Tên');
    $('#txtSerchText').val();
    $('#txtSearchBOD').val('Năm sinh');
    $('#txtSearchPhone').val('Số điện thoại');
    $('#divResultSearchPatient').html('');
    $('#divResultSearchPatient').hide();
    $('#btnActionSearchRegion').hide();
}
function gotoFromSearch(code) {
    if (code == '') {
        alert('Xin vui lòng chọn 1 bệnh nhân trong danh sách tìm kiếm');
        return false;
    }
    getPatientInfo(code);
}
function resetInfo() {
    $('#PatientCode').val('');
    $('#FullName').val('');
    $('#Address').val('');
    $('#Email').val('');
    $('#CellPhone').val('');
    $('#IdentityCard').val('');
    $('#RelationName').val('');
    $('#SexName').val('');

    $('#RFullName').val('');
    $('#RIdentityCard').val('');
    $('#RCellPhone').val('');
    $('#REmail').val('');

    setValue('.PatientCodeCSS', '');
    setValue('.FullNameCSS', '');
    setValue('.AddressCSS', '');
    setValue('.EmailCSS', '');
    setValue('.PhoneCSS', '');
    setValue('.IdentityCardCSS', '');
    setValue('.SexNameCSS', '');
    setValue('.selectRelationSex', '');
    setValue('.YearCSS', '');
    setValue('.AgeCSS', '');
    setValue('.BloodTypeCSS', '');
    setValue('.CityCSS', '');
    setValue('.DistrictCSS', '');
    setValue('.WardCSS', '');
    setValue('.DOBCSS', '');
    setValue('.RelationNameCSS', '');
}
var jCurrentItem = null;
function updateInfo(jItem) {
    jCurrentItem = jItem;
    var year = jItem.DOB.substr(jItem.DOB.length - 4, 4);
    var d = new Date();
    var age = d.getFullYear() - year;
    if (age == d.getFullYear()) age = '';

    $('#PatientCode').val(jItem.PatientCode);
    $('#FullName').val(jItem.PatientName);
    $('#Address').val(jItem.Address);
    $('#Email').val(jItem.Email);
    $('#CellPhone').val(jItem.Phone);
    $('#IdentityCard').val(jItem.IdentityCard);
    //$('#RelationName').val(jItem.RelationName);
    $('#SexName').val(jItem.Sex);
    $('#DateOfBirth').val(jItem.DOB);
    if (jItem.IsBaby == 'True') {
        $('#IsBaby').val('1');
        $('#RFullName').val(jItem.RelationName);
        $('#RIdentityCard').val(jItem.IdentityCard);
        $('#RCellPhone').val(jItem.Phone);
        $('#REmail').val(jItem.Email);
    } else {
        $('#IsBaby').val('0');
    }
    //update display
    setValue('.PatientCodeCSS', jItem.PatientCode);
    setValue('.FullNameCSS', jItem.PatientName);
    setValue('.AddressCSS', jItem.Address);
    setValue('.EmailCSS', jItem.Email);
    setValue('.PhoneCSS', jItem.Phone);
    setValue('.IdentityCardCSS', jItem.IdentityCard);
    setValue('.SexNameCSS', jItem.SEX);
    setValue('.YearCSS', year);
    setValue('.AgeCSS', age);
    setValue('.BloodTypeCSS', jItem.BloodType);
    setValue('.CityCSS', jItem.ProvinceName);
    setValue('.DistrictCSS', jItem.DistrictName);
    setValue('.WardCSS', jItem.WardName);
    setValue('.DOBCSS', jItem.DOB);
}
function getPatientInfo(code) {
    resetInfo();
    if (jQuery.trim(code) == '') {
        alert('Xin vui lòng nhập mã bệnh nhân');
        return false;
    }
    var param = {
        code: code
    };
    //alert(name + '-' + email + '-' + comment + '-' + newsId + '-' + userId);
    var url = "Booking/Patient";
    $.post(url, param, function (datas) {
        var items = eval(datas);
        var jItem = items[0];
        if (jItem.data == 1) {
            updateInfo(jItem);
        } else {
            alert('Bệnh nhân không tồn tại trong hệ thống. Xin vui lòng kiểm tra lại');
        }
    });
}
function getPatientInfoByCodeAndPin(code, pin) {
    resetInfo();
    var mess = '';
    if (jQuery.trim(code) == '') {
        mess = 'Xin vui lòng nhập MSBN\n';
    }
    if (jQuery.trim(pin) == '') {
        mess = 'Xin vui lòng nhập Mã Pin\n';
    }
    if (mess != '') {
        alert(mess);
        return false;
    }
    var param = {
        code: code,
        pin: pin
    };
    var url = "Booking/Patient2Code";
    $.post(url, param, function (datas) {
        var items = eval(datas);
        var jItem = items[0];
        if (jItem.data == 1) {
            updateInfo(jItem);
            goToStep2(jItem.IsBaby);
        } else {
            alert('Bệnh nhân không tồn tại trong hệ thống. Xin vui lòng kiểm tra lại');
        }
    });
}
function loginFormHoiBacSi(username, password) {
    resetInfo();
    var mess = '';
    if (jQuery.trim(username) == '') {
        mess = 'Xin vui lòng nhập tên đăng nhập\n';
    }
    if (jQuery.trim(password) == '') {
        mess += 'Xin vui lòng nhập mật khẩu';
    }
    if (mess != '') { alert(mess); return false; }
    var param = {
        username: username,
        password: password
    };
    var url = "Booking/ProfileFromHoiBacSi";
    $.post(url, param, function (datas) {
        var items = eval(datas);
        var jItem = items[0];
        if (jItem.data == 1) {
            if (jQyery.trim(jItem.PatientCode) == '') {
                alert('Hiện tài khoản của bạn không có mã bệnh nhân, xin vui lòng liên hệ với Bệnh viện để được cấp mã bệnh nhân');
                return false;
            } else {
                getPatientInfo(jItem.PatientCode);
            }
        } else {
            alert('Tên đăng nhập hay mật khẩu không đúng. Xin vui lòng kiểm tra lại');
            return false;
        }
    });
}

function goToStep2(isBaby) {
    if (isBaby == 'True' || isBaby == '1') {
        showStep('bookingStep2_2');
    } else {
        showStep('bookingStep2_1');
    }
}
function updateAccountInfo() {
    //cap nhat thong tin Email, CMND, Phone
}
function isValidEmail(stringIn) {
    if (stringIn.indexOf('..') != -1 || stringIn.indexOf('.@') != -1 || stringIn.indexOf('@.') != -1 || stringIn.indexOf(':') != -1) {
        return false;
    }
    var re = /^([A-Za-z0-9\_\-]+\.)*[A-Za-z0-9\_\-]+@[A-Za-z0-9\_\-]+(\.[A-Za-z0-9\_\-]+)+$/;
    if (stringIn.search(re) == -1) {
        return false;
    }
    return true;
}
function resetStep3() {
    $('#ServiceId').val('');
    $('#ProductName').val('');
    $('#ExamDate').val('');
    $('#ExamHour').val('');
    $('#TimeName').val('');
    $('#ServiceName').val('');
    $('#RoomId').val('');
    $('#RoomName').val('');
    $('#DoctorId').val('');
    $('#DoctorName').val('');

    $('#ProductIdService').val('');
    $('#selectDate').val('');
    $('#selectTime').val('');

}
function initStep3() {
    var jItem = jCurrentItem;
    if (jItem != null) {
        var year = jItem.DOB.substr(jItem.DOB.length - 4, 4);
        var d = new Date();
        var age = d.getFullYear() - year;
        if (age == d.getFullYear()) age = '0';

        setValue('#ViewPatientCode', jItem.PatientCode);
        setValue('#ViewFullName', jItem.PatientName);
        setValue('#ViewDOB', jItem.DOB);
        setValue('#ViewAge', age);
        setValue('#ViewSexName', jItem.SEX);
        setValue('#ViewBloodType', jItem.BloodType);
        setValue('#ViewAddress', jItem.Address);
    }
    if (jItem.IsBaby == 'True') {
        setValue('#ViewRFullName', $('#RFullName').val());
        setValue('#ViewRAddress', $('#RAddress').val());
        setValue('.IdentityCardCSS1', $('#RIdentityCard').val());
        setValue('.EmailCSS1', $('#REmail').val());
        setValue('.PhoneCSS1', $('#RCellPhone').val());
        setValue('.RAddressCSS', $('#Address').val());
        $('#pViewRelation').show();
    } else {
        $('#pViewRelation').hide();
    }

}
function goToStepGetSchedule() {
    var email = jQuery.trim($('#Email').val());
    var IdentityCard = jQuery.trim($('#IdentityCard').val());
    var phone = jQuery.trim($('#CellPhone').val());
    var mess = '';
    if (IdentityCard == '') mess += 'Bạn chưa nhập CMND\n';
    if (email == '') mess += 'Bạn chưa nhập email\n';
    if (phone == '') mess += 'Bạn chưa nhập điện thoại\n';
    if (email == '' || IdentityCard == '' || phone == '') {
        mess += 'Xin vui lòng nhập đầy đủ các thông tin bắt buộc trước khi qua bước kế tiếp';
        alert(mess);
        return false;
    }
    if (!isValidEmail(email)) {
        alert('Email không hợp lệ, xin vui lòng kiểm tra lại');
        return false;
    }
    resetStep3();
    initStep3();
    showStep('bookingStep3');
}
function selectedTime() {
    if ($('#ExamDate').val() == '') {
        alert('Xin vui lòng chọn ngày trước khi chọn buổi khám');
        $('#selectTime').val('');
        return false;
    }
    var value = $('#selectTime').val();
    var displayText = $('#selectTime option:selected').text();
    if (isInValidSelectedTimeZone($('#ExamDate').val()) && value == 1) {
        alert('Hiện tại đã hết thời gian đăng ký buổi Sáng.\nXin vui lòng chọn sang buổi Chiều');
        $('#selectTime').val('');
        return false;
    }

    if (value == 0) {
        $('#ExamHour').val('');
        $('#TimeName').val('');
        $('.spanSelectedTime').html('');
        return;
    }
    $('#ExamHour').val(value);
    $('#TimeName').val(displayText);
    $('.spanSelectedTime').html(displayText);
    resetSelectRoom();
}
function unSelectedTime() {
    $('#ExamHour').val('');
    $('#TimeName').val('');
    $('.spanSelectedTime').html('');
}
function gotoStep4() {
    if (getRoom())
        showStep('bookingStep4');
}
function getRoom() {
    var pId = $('#ServiceId').val();
    var date = $('#ExamDate').val();
    var time = $('#ExamHour').val();
    var mess = '';
    if (pId == '' || pId == 0) mess += 'Xin vui lòng chọn dịch vụ.\n';
    if (date == '') mess += 'Xin vui lòng chọn ngày khám.\n';
    if (time == '' || time == 0) mess += 'Xin vui lòng chọn buổi khám.\n';
    if (pId != '' && pId != 0 && date != '' && time != '' && time != 0) {
        var param = {
            pId: pId,
            date: date,
            zone: time
        };
        var url = "Booking/Room";       
        $.post(url, param, function (datas) {
            var items = eval(datas);
            var jItem = items[0];
            if (jItem.data == 1 && jItem.content.length > 0) {
                var roomInfo = '<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tblinfor-choose">';
                roomInfo += '<tr><td class="spec-left spec-top" style="color: #FE011F;font: bold 14px Arial,Helvetica,sans-serif;" colspan="2" stype="color: #FE011F;font: bold 16px Arial,Helvetica,sans-serif;">Chọn Phòng khám kèm Bác sĩ</td><td class="spec-top">Số phiếu</td><td class="spec-top">Số phiếu</td></tr>';
                roomInfo += '<tr><td class="spec spec-left">Phòng khám</td><td class="spec">BS phụ trách</td><td class="spec" width="50">Đã đặt</td><td class="spec" width="78">Còn được đặt</td></tr>';
                for (var i = 0; i < jItem.content.length; i++) {
                    if (jItem.content[i].Booked < 15) {
                        var oldClass = '';
                        if (i % 2 == 0) oldClass = 'class="old"';
                        var sItem = '<tr class="TrRoomCSS ItemMenuRoomCSS ' + oldClass + '" id="TRRoom_' + jItem.content[i].RoomId + '" onclick="selectRoom(' + jItem.content[i].RoomId + ',\'' + jItem.content[i].RoomName + '\',' + jItem.content[i].DoctorId + ',\'' + jItem.content[i].DoctorName + '\',' + jItem.content[i].Booked + ',' + jItem.content[i].UnBook + ');$(\'.TrRoomCSS\').removeClass(\'HighlightTDSearch\');$(\'#TRRoom_' + jItem.content[i].RoomId + '\').addClass(\'HighlightTDSearch\');gotoViewBookingStep();"><td class="spec-left"><a href="javascript:void(0);"  class="ItemMenuRoomCSS"> ' + jItem.content[i].RoomName + ' </a></td><td>';
                        sItem += jItem.content[i].DoctorName + '</td>';
                        sItem += '<td>' + jItem.content[i].Booked + '</td><td>' + jItem.content[i].UnBook + '</td>';
                        sItem += '<tr>';
                        roomInfo += sItem;
                    }
                }
                $('#divRoomInfo').html(roomInfo + '</table>');
            } else {
                alert('Hiện không còn phòng nào trống cho dịch vụ này.');
                goToStepGetSchedule();
            }
        });
        return true;
    } else {
        alert(mess);
        $('#RoomId').val('');
        $('#DoctorId').val('');
        $('#AssumeHour').val('');
        $('.spanSelectedRoom').html('');
        $('.spanSelectedDoctor').html('');
        return false;
    }
}
function selectRoom(value, displayText, doctorId, doctorName, booked, unBook) {
    var newBooked = booked + 1;
    $('#RoomId').val(value);
    $('#Period').val(newBooked);
    $('#DoctorId').val(doctorId);
    $('#RoomName').val(displayText);
    $('#DoctorName').val(doctorName);
    $('.ItemMenuRoomCSS').removeClass('SelectRegisterMenu');
    $('#aRoom_' + value).addClass('SelectRegisterMenu');
    $('.spanSelectedRoom').html(displayText);
    $('.spanSelectedDoctor').html(doctorName);
    $('.spanSTTCSS').html('00' + newBooked);
    var time = $('#ExamHour').val();
    var assumeHour = '';
    var startTime = 7;
    if (time == '1') {
        startTime = 7;
        assumeHour = '7h30-8h15';
    } else if (time == '2') {
        startTime = 1;
        assumeHour = '13h30-14h15';
    }
   // var assumeHour = getAssumeTime(newBooked, startTime);
    $('#AssumeHour').val(assumeHour);
    $('.spanAssumeTimeCSS').html(assumeHour);
}
function getAssumeTime(iNo, iStartTime) {
    var startTime = 7;
    if (iStartTime) {
        startTime = iStartTime;
    }
    var startMin = 30;
    var step = 3;

    var totalMin = iNo * step;
    var assumeHour = (totalMin + startMin) / 60;
    var assumeHour1 = assumeHour.toString().substr(0, 1);
    var time = startTime + parseInt(assumeHour1);
    var assumeMin = (totalMin + startMin) % 60;
    return time + 'h ' + assumeMin;
}
function gotoPayment() {
    var sId = $('#ServiceId').val();
    var date = $('#ExamDate').val();
    var time = $('#ExamHour').val();
    var roomId = $('#RoomId').val();
    var dId = $('#DoctorId').val();
    var mess = '';
    if (jQuery.trim(sId) == '' || jQuery.trim(sId) == '0') mess = 'Bạn chưa chọn dịch vụ. Xin vui lòng chọn dịch vụ.\n';
    if (jQuery.trim(date) == '' || jQuery.trim(date) == '0') mess += 'Bạn chưa chọn ngày khám. Xin vui lòng chọn ngày khám.\n';
    if (jQuery.trim(time) == '' || jQuery.trim(time) == '0') mess += 'Bạn chưa chọn buổi khám. Xin vui lòng chọn buổi khám.\n';
    if (jQuery.trim(roomId) == '' || jQuery.trim(roomId) == '0') mess += 'Bạn chưa chọn phòng khám. Xin vui lòng chọn phòng khám.\n';
    if (mess != '') {
        mess += 'Xin vui lòng chọn đầy đủ các thông tin cho lịch khám trước khi qua bước chọn thanh toán.';
        alert(mess);
        return false;
    }
    return true;
}
function resetSelectRoom() {
    try {
        $('#RoomId').val('');
        $('#DoctorId').val('');
        $('.spanSelectedRoom').html('');
        $('.spanSelectedDoctor').html('');
        $('#RoomName').val('');
        $('#DoctorName').val('');
        $('#divRoomInfo').html('');
    } catch (e) {
        //alert(e.Message);
    }
}
function selectProduct() {
    $('#ServiceId').val($('#ProductIdService').val());
    var text = $('#ProductIdService option:selected').text() == '--Chon dịch vụ--' ? '&nbsp;' : $('#ProductIdService option:selected').text();
    $('.spanSelectedProduct').html(text);
    $('#ProductName').val(text);
    $('#ServiceName').val(text);
    if ($('#ProductIdService option:selected').text() == '--Chon dịch vụ--') {
        $('#Amount').val('0');
    } else {
        $('#Amount').val($('#servicePrice_' + $('#ProductIdService').val()).val());
    }
    resetSelectRoom();
}
function selectBookingDate() {    
    var text = $('#selectDate').val(); //$('#selectDate option:selected').text() == '--Chọn ngày khám--' ? '' : $('#selectDate option:selected').text();
    if (text > '29-01-2012' || text < '21-01-2012') {
        $('#ExamDate').val($('#selectDate').val());
        $('.spanSelectedDate').html(text);
        var dateParts = text.split("-");
        var date = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
        var d = date.getDay();
        if (d == 0)
            $('#selectChieu').hide();
        else
            $('#selectChieu').show();
    }
    else {
        setValue('#selectDate', '');        
        alert('Từ ngày 21/01/2012 đến hết ngày 29/01/2012 Bệnh viện nghỉ tết.Bạn vui lòng chọn ngày khác');
    }
    resetSelectRoom();
}
function selectBookingDateFromCalendar(value) {
    $('#ExamDate').val(value);
    $('.spanSelectedDate').html(value);
    resetSelectRoom();
}
function gotoViewBookingStep() {
    var roomId = $('#RoomId').val();
    var doctorId = $('#DoctorId').val();
    if (roomId != '' && roomId != 0 && doctorId != '' && doctorId != 0) {
        $('#block-inner-right-3').show();
        return true;
    }
    alert('Xin vui lòng chọn phòng khám');
    return false;

}
function isInValidSelectedTimeZone(sD) {
    var arr = sD.split('-');
    var d = new Date();
    var date = d.getDate();
    var month = d.getMonth() + 1;
    if (date.length == 1) date = '0' + date;
    if (month.length == 1) month = '0' + month;
    if (date == arr[0] && month == arr[1] && d.getFullYear() == arr[2]) {
        if (d.getHours() - 7 >= 0) {
            return true;
        }
    }
    return false;
}
function acceptNumberOnly(myfield, e, dec) {
    var key;
    var keychar;

    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);

    // control keys
    if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27))
        return true;

    // numbers
    else if ((("0123456789").indexOf(keychar) > -1))
        return true;

    // decimal point jump
    else if (dec && (keychar == ".")) {
        myfield.form.elements[dec].focus();
        return false;
    } else
        return false;
}
var bookingPrice = 20000;
function updateConfirmView() {
    $('#trRelationInfoView').hide();
    var jItem = jCurrentItem;
    if (jItem != null) {
        setValue('#spanPatientCodeConfirmView', jItem.PatientCode);
        setValue('#spanFullNameConfirmView', jItem.PatientName);
        setValue('#spanDOBConfirmView', jItem.DOB);
        setValue('#spanSexNameConfirmView', jItem.SEX);
        setValue('#spanAddressConfirmView', jItem.Address);
        if (jItem.IsBaby == 'True') {
            $('#trRelationInfoView').show();
            $('#IsBaby').val(jItem.IsBaby);
            setValue('#spanRFullNameView', $('#RFullName').val());
            setValue('#spanRIdentityCardView', $('#RIdentityCard').val());
            setValue('#spanRPhoneView', $('#RCellPhone').val());
        }
    }
    var servicePrice = $('#Amount').val();
    var total = parseInt(servicePrice) + bookingPrice;
    $('.spanUnitPriceCSS').html(servicePrice);
    $('.spanUnitPriceBookingCSS').html(bookingPrice);
    $('.spanTotalAmountBookingCSS').html(total);
    $('.spanTotalAmountByWordBookingCSS').html(DocTienBangChu(total));

    showStep('bookingStep4');
}
var ChuSo = new Array(" không ", " một ", " hai ", " ba ", " bốn ", " năm ", " sáu ", " bảy ", " tám ", " chín ");
var Tien = new Array("", " nghìn", " triệu", " tỷ", " nghìn tỷ", " triệu tỷ");
//1. Hàm đọc số có ba chữ số;
function DocSo3ChuSo(baso) {
    var tram;
    var chuc;
    var donvi;
    var KetQua = "";
    tram = parseInt(baso / 100);
    chuc = parseInt((baso % 100) / 10);
    donvi = baso % 10;
    if (tram == 0 && chuc == 0 && donvi == 0) return "";
    if (tram != 0) {
        KetQua += ChuSo[tram] + " trăm ";
        if ((chuc == 0) && (donvi != 0)) KetQua += " linh ";
    }
    if ((chuc != 0) && (chuc != 1)) {
        KetQua += ChuSo[chuc] + " mươi";
        if ((chuc == 0) && (donvi != 0)) KetQua = KetQua + " linh ";
    }
    if (chuc == 1) KetQua += " mười ";
    switch (donvi) {
        case 1:
            if ((chuc != 0) && (chuc != 1)) {
                KetQua += " mốt ";
            }
            else {
                KetQua += ChuSo[donvi];
            }
            break;
        case 5:
            if (chuc == 0) {
                KetQua += ChuSo[donvi];
            }
            else {
                KetQua += " lăm ";
            }
            break;
        default:
            if (donvi != 0) {
                KetQua += ChuSo[donvi];
            }
            break;
    }
    return KetQua;
}

//2. Hàm đọc số thành chữ (Sử dụng hàm đọc số có ba chữ số)

function DocTienBangChu(SoTien) {
    var lan = 0;
    var i = 0;
    var so = 0;
    var KetQua = "";
    var tmp = "";
    var ViTri = new Array();
    if (SoTien < 0) return "Số tiền âm !";
    if (SoTien == 0) return "Không đồng !";
    if (SoTien > 0) {
        so = SoTien;
    }
    else {
        so = -SoTien;
    }
    if (SoTien > 8999999999999999) {
        //SoTien = 0;
        return "Số quá lớn!";
    }
    ViTri[5] = Math.floor(so / 1000000000000000);
    if (isNaN(ViTri[5]))
        ViTri[5] = "0";
    so = so - parseFloat(ViTri[5].toString()) * 1000000000000000;
    ViTri[4] = Math.floor(so / 1000000000000);
    if (isNaN(ViTri[4]))
        ViTri[4] = "0";
    so = so - parseFloat(ViTri[4].toString()) * 1000000000000;
    ViTri[3] = Math.floor(so / 1000000000);
    if (isNaN(ViTri[3]))
        ViTri[3] = "0";
    so = so - parseFloat(ViTri[3].toString()) * 1000000000;
    ViTri[2] = parseInt(so / 1000000);
    if (isNaN(ViTri[2]))
        ViTri[2] = "0";
    ViTri[1] = parseInt((so % 1000000) / 1000);
    if (isNaN(ViTri[1]))
        ViTri[1] = "0";
    ViTri[0] = parseInt(so % 1000);
    if (isNaN(ViTri[0]))
        ViTri[0] = "0";
    if (ViTri[5] > 0) {
        lan = 5;
    }
    else if (ViTri[4] > 0) {
        lan = 4;
    }
    else if (ViTri[3] > 0) {
        lan = 3;
    }
    else if (ViTri[2] > 0) {
        lan = 2;
    }
    else if (ViTri[1] > 0) {
        lan = 1;
    }
    else {
        lan = 0;
    }
    for (i = lan; i >= 0; i--) {
        tmp = DocSo3ChuSo(ViTri[i]);
        KetQua += tmp;
        if (ViTri[i] > 0) KetQua += Tien[i];
        if ((i > 0) && (tmp.length > 0)) KetQua += ','; //&& (!string.IsNullOrEmpty(tmp))
    }
    if (KetQua.substring(KetQua.length - 1) == ',') {
        KetQua = KetQua.substring(0, KetQua.length - 1);
    }
    KetQua = KetQua.substring(1, 2).toUpperCase() + KetQua.substring(2);
    return KetQua; //.substring(0, 1);//.toUpperCase();// + KetQua.substring(1);
}
