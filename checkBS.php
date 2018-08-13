<!DOCTYPE HTML >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
    <body>
        <?php
            session_start();
            include("include/config.php");
            $maBSi=$_POST["maBS"];
            $password=$_POST["password"];
            //Lấy giá trị username và pass
            $sql = "SELECT * FROM tblbacsi WHERE maBacsi='{$maBSi}' and matKhau='$password'";
            $result=mysqli_query($connect, $sql); //Ham thuc thi truy van
            $row=mysqli_fetch_assoc($result);//Ham de lay gia tri trong bang ghi
            if(mysqli_num_rows($result)==1)
            	{
            			$user=$row["maBacsi"];// lay gia tri cua 1 truong
            			$pass=$row["matKhau"];// lay gia tri cua 1 truong
            			$makhoa = $row["maKhoa"]; // lay gia tri cua khoa
            			$_SESSION['maBacsi']=$row['maBacsi'];
            			$_SESSION['pass']=$row['matKhau'];
            			$_SESSION['maKhoa']=$row['maKhoa'];
            			
            			echo "<center><h2>Chào mừng bác sĩ " . $row["tenBacsi"] . " quay lại website</h2></center><meta http-equiv=refresh content='2; 	url=BacSi.php'><center><img src='Content/images/loading.gif'></center>";
            	}
            	else {
            			//echo "<meta http-equiv=refresh content='1; url=index.php?page=BacSi&loi'=s1";
            			echo "<meta http-equiv=refresh content='1;url=index.php?page=BacSi'><center><h1>Sai tên đăng nhập hoặc mật khẩu.<br></h1></center>";
            }	
            
        ?>
    </body>