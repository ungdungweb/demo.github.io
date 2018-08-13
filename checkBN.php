<?php
session_start();
include("include/config.php");
$maBN=$_POST["BenhNhan"];
$password=$_POST["password"];
//Lấy giá trị username và pass
$sql = "SELECT * FROM tblbenhnhan WHERE maBenhnhan='{$maBN}' and matKhau='$password'";
$result=mysqli_query($connect, $sql); //Ham thuc thi truy van
$row=mysqli_fetch_assoc($result);//Ham de lay gia tri trong bang ghi
if(mysqli_num_rows($result)==1)
	{
			$user=$row["maBenhnhan"];// lay gia tri cua 1 truong
			$pass=$row["matKhau"];// lay gia tri cua 1 truong
			
			$_SESSION['maBenhnhan']=$row['maBenhnhan'];
			$_SESSION['pass']=$row['matKhau'];
			
			echo "<center><h2>Chào mừng  " . $row["tenBenhnhan"]. " quay lại website của chúng tôi</h2></center><meta http-equiv=refresh content='2; 	url=benhnhan.php'><center><img src='Content/images/loading.gif'></center>";
	}
	else {
			
			echo "<meta http-equiv=refresh content='1;url=index.php?page=Benhnhan'><center><h1>Sai tên đăng nhập hoặc mật khẩu.<br></h1></center>";
}	

?>