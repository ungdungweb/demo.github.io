<?php
	include("include/config.php");
		session_start();
		//var_dump($_SESSION['mabn']);exit();
		if(isset($_SESSION['mabn']))
		{
			$mabn =$_SESSION['mabn'];
		}
?>
 
<?php
    if( isset($_POST['mabs'])&& isset($_POST['ngaykham'])&& isset($_POST['giokham'])&& isset($_POST['dienthoai'])&& isset($_POST['email']))
		{
			$khoa=$_REQUEST['khoa'];
			$mabs=$_REQUEST['mabs'];
			$giokham=$_REQUEST['giokham'];
			$ngaykham=implode("-",array_reverse(explode("/",$_POST['ngaykham'])));
			$sodt=$_REQUEST['dienthoai'];
			$email=$_REQUEST['email'];
			
		}
		$count= mysqli_query('SELECT COUNT(maLich) FROM  tbldatlichkham');
    $row=mysqli_fetch_row($count);	    
	$ms=$row['0'];
			if($ms<9)
            $t='DL00';
         else
		 	if($ms<98)
            $t='DL0';
			$ma=$ms;
            $ms=$ms+1;
            $add='$t$ms';
			
			/*----------------------------*/
	$sql2="SELECT COUNT(maLich) as maBacsi,COUNT(maLich) as ngayDK,COUNT(maLich) as gioDK FROM  tbldatlichkham where tbldatlichkham.maBacsi ='$mabs' and  tbldatlichkham.ngayDK ='$ngaykham' and tbldatlichkham.gioDK='$giokham'";
	  $row1=mysqli_fetch_assoc(mysqli_query($sql2));{
		  $dem= $row1['maBacsi'];
		  $ngaydatkham= $row1['ngayDK'];
		  $giodk= $row1['ngayDK'];
		  
	  }
			/*------------------------------*/
			if($giodk>2)
			{
				echo "<script>alert('Không thể đặt lịch khám xin vui lòng chọn bác sĩ khác hoặc buổi khám khác');</script><meta http-equiv='refresh' content='0; url=datlichkham.php'>";
			}
			else
			{
			$sql="INSERT INTO tbldatlichkham(maLich,maBenhnhan,maBacsi,ngayDK,gioDK,soDT,Email) VALUES('$add','$mabn','$mabs','$ngaykham','$giokham','$sodt','$email')";
			 $sql1="update tblbenhnhan set maKhoa='".$khoa."' where maBenhnhan ='$mabn'"; 
			$query=mysqli_query($sql,$connect);
			$query=mysqli_query($sql1,$connect);
			header("Location:index.php?page=thongbao");
			
			
			
			}
			
			
			 
?>