
<?php
	    include("config.php");
		session_start();
		mysqli_query("SET NAMES utf8");
		$id=$_POST['ttxn'];
		$sql = mysqli_query("SELECT * FROM tblbenhan where maBenhan='$id'", $connect);
		$row = mysqli_fetch_assoc($sql);
					$maBA = $row['maBenhan'];
		
	?>
    <?php 
	include("config.php");
	function get_sum($id){
	$sql1 = "select sum(thanhTien) FROM `tblphieuxetnghiem` WHERE maBenhan='".$id."'";
	//var_dump($sql); exit();
	$data = mysqli_fetch_array(mysqli_query($sql1));
	//var_dump($data[0]);exit();
	return $data[0];
	}
	$tienxetnghiem = get_sum($maBA);
 ?>
 
<div id="content" >
	
<h3 align="center">Thông tin tiền xét nghiệm</h3>
    
  	
    	<table align="left" width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
         
         
					<tr>
                    	<td align="center"><b>Số TT</b></td>
                        <td align="center"><b>Mã Phiếu</b></td>
                        <td align="center"><b>Mã bệnh án</b></td>
                        <td align="center"><b>Mã xét nghiệm</b></td>
                         <td align="center"><b>Tên xét nghiệm</b></td>
						
						<td align="center"><b>Ngày xét nghiệm</b></td>
                        <td align="center"><b>Lần thứ</b> </td>
                         <td align="center"><b>Kết quả</b></td>
                          <td align="center"><B>Thành tiền</B></td>               
                        
					</tr>
               <?php
				
  			  include("include/config.php");
			  $id=$_POST['ttxn'];
				mysqli_query("SET NAMES utf8");
				$tt=0;
				
  				$sql = mysqli_query("SELECT * FROM  tblphieuxetnghiem,tblxetnghiem where tblphieuxetnghiem.maXetnghiem=tblxetnghiem.maXetnghiem and maBenhan='$id'");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maP = $row['maPhieu'];
					$maXN = $row['maXetnghiem'];
					$maBA = $row['maBenhan'];
					$maBS = $row['maBacsi'];
						
					$ngayXN = date("d/m/Y",strtotime($row['ngayXetnghiem']));			
					
					$lan = $row['lanThu'];
					$ketqua = $row['ketQua'];
					$tenXN= $row['tenXetNghiem'];
					$dongia= $row['thanhTien'];
					
					
					?>
                   
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maP;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="maphieu" value="<?php echo $maP?>" size="10px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="maba" value="<?php echo $maBA ?>" size="10px"/>
					</td>
                
                    <td align="center"> 	
						<input type="text" name="maXN" value="<?php echo $maXN ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tenXN" value="<?php echo $tenXN ?>" size="10px"/>
					</td>
                   <!--<td align="center"> 	
						<input type="text" name="ngaynhap" value="<?php echo $maBS ?>" size="10px"/>
					</td>-->
                    
                    <td align="center"> 	
						<input type="text" name="ngãyuat" value="<?php echo $ngayXN ?>" size="10px"/>
					</td>
					
                    <td align="center"> 	
						<input type="text" name="dienbien" value="<?php echo $lan ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="ketqua" value="<?php echo $ketqua ?>" size="10px"/></td>
                         <td align="center"> 	
						<input type="text" name="tinhtrang" value="<?php echo $dongia ?>" size="5px"/></td>
                                           
                   </tr>
                  
                    <?php 
				}
					
			?> 
       <tr >
       <td colspan="8" align="right"> 	
						<p >Tổng Tiền</p></td>
                   <td colspan="9" align="right"> 	
						<input type="text" name="tinhtrang" value="<?php echo $tienxetnghiem?>" size="5px"/></td>
                   </tr>
	</table>
    <br />
  
     <?php 
	include("config.php");
	function get_sum1($id){
	$sql2 = "select sum(thanhTien) FROM `tblbenhanbacsi` WHERE maBenhan='".$id."'";
	//var_dump($sql); exit();
	$data = mysqli_fetch_array(mysqli_query($sql2));
	//var_dump($data[0]);exit();
	return $data[0];
	}
	$tienovien = get_sum1($maBA);
 ?>
  <?php 
	include("config.php");
	function get_sum2($id){
	$sql3 = "select sum(soTien) FROM `tblthanhtoandot` WHERE maBenhan='".$id."'";
	//var_dump($sql); exit();
	$data = mysqli_fetch_array(mysqli_query($sql3));
	//var_dump($data[0]);exit();
	return $data[0];
	}
	$tienthanhtoandot = get_sum2($maBA);
 ?>
     <h3 align="center">Thông tin tiền ở viện</h3>
    <table  align="left"width="520px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
  
					
<tr>
                    	<td align="center"><b>Số TT</b></td>
                        <td align="center"><b>Mã Phiếu</b></td>
                        <td align="center"><b>Mã bệnh án</b></td>
						 <td align="center"><b>Mã bác sĩ</b></td>
						<td align="center"><b>Tên bác sĩ</b></td>
                        <td align="center"><b>Khoa </b></td>
                         <td align="center"><b>Ngày chuyển đến </b></td>
                          <td align="center"><B>Ngày Chuyển đi </B></td>
                           <td align="center"><b>Thành tiền </b></td>
                        
                        
                        
					</tr>
               <?php
				
  			  include("config.php");

			  $id=$_POST['ttxn'];
			  			 
				mysqli_query("SET NAMES utf8");
				$tt=0;
				
  				$sql = mysqli_query("SELECT * FROM tblbenhan,tblbenhanbacsi,tblbacsi,tblkhoa where tblbenhanbacsi.maBacsi=tblbacsi.maBacsi and tblbacsi.maKhoa=tblkhoa.maKhoa and tblbenhan.maBenhan=tblbenhanbacsi.maBenhan and tblbenhan.maBenhan='$id'", $connect);
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
				
                	$maP = $row['logID'];
					$maBA = $row['maBenhan'];
					$maBS = $row['maBacsi'];
					$tenbacsi = $row['tenBacsi'];		
					$tenkhoa = $row['tenKhoa'];
					$ngaychuyenden = date("d/m/Y",strtotime($row['ngayChuyenden']));			
					$ngaychuyendi = date("d/m/Y",strtotime($row['ngayChuyendi']));
					$thanhtien = $row['thanhTien'];
					
					?>
                  
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maP;?>" /><?php echo $tt; ?></td>
                	<td align="centen"> 	
						<input type="text" name="logid" value="<?php echo $maP?>" size="5px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="maba" value="<?php echo $maBA ?>" size="10px"/>
					</td>
                
                    <td align="center"> 	
						<input type="text" name="mabs" value="<?php echo $maBS ?>" size="10px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tenbs" value="<?php echo $tenbacsi ?>" size="10px"/>
					</td>
                   <td align="center"> 	
						<input type="text" name="khoa" value="<?php echo $tenkhoa ?>" size="10px"/>
					</td>
                     <td align="center"> 	
						<input type="text" name="tenbs" value="<?php echo $ngaychuyenden ?>" size="10px"/>
					</td>
                     <td align="center"> 	
						<input type="text" name="tenbs" value="<?php echo $ngaychuyendi ?>" size="10px"/>
					</td>
                    <td align="right"> 	
						<input type="text" name="tenbs" value="<?php echo $thanhtien ?>" size="5px"/>
					</td>
                                                               
                   
                    <?php 
				}
					
			?> 
              <tr >
               <td colspan="8" align="right"> 	
						<p >Tổng Tiền</p></td>
                   <td colspan="9" align="right"> 	
						<input type="text" name="tinhtrang" value="<?php echo $tienovien?>" size="5px"/></td>
                   </tr>
      
	</table>
  <br /><br /><br /><br /><br />
 
 
  <h3 align="center">Tiền đã  thanh toán theo đợt</h3>
      <table align="left" width="400px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
         
         
					
					<tr>
                    	<td align="center"><b>Số TT</b></td>
						<td align="center"><B>Mã ID</B></td>
						<td align="center"><B>Mã bệnh án</B></td>
						<td align="center"><b>Ngày trả</b></td>
                        <td align="center"><B>Số tiền</B></td> 
                       
					</tr>
               <?php
				
  			  include("include/config.php");
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql = mysqli_query("SELECT * FROM  tblthanhtoandot where maBenhan ='".$id."'");
   				while ($row = mysqli_fetch_assoc($sql)) {$tt++;
					$maHD = $row['hoaDonID'];
                	$maBA = $row['maBenhan'];
					$ngaytra = $row['ngayTra'];					
					$dottra = $row['dotTra'];
					$sotien = $row['soTien'];
					
					?>
                  
					 <tr>
                	
                    <td align="center"> <input  type="hidden" name="ma" value="<?php echo $maHD ;?>" /><?php echo $tt; ?></td>
                    <td align="centen"> 	
						<input type="text" name="maid" value="<?php echo $maHD?>" size="10px" align="middle"/>
                    </td>
                	<td align="center"><input type="text" name="maba" value="<?php echo $maBA?>" size="10px" align="middle"/></td>
					<td align="center"> 
						<input type="text" name="mabn" value="<?php echo $ngaytra ?>" size="10px"/>
					</td>
                   <td align="right"> 	
						<input type="text" name="ngaynhap" value="<?php echo $sotien ?>" size="5px"/>
					</td>
                                           
                    </tr>
            
                    <?php 
				}
					
			?> 
            <tr >
      			 <td colspan="4" align="right"> 	
						<p >Tổng Tiền</p>
                 </td>
                 <td colspan="5" align="right"> 	
					<input type="text" name="tinhtrang" value="<?php echo $tienthanhtoandot?>" size="5px"/>				
                  </td>
            </tr>
      
	</table>
  <br />
   <br />
   <br />
   <br />
   
     <h3 align="center">Tổng tiền thanh toán</h3>
      <table align="left" width="500px" border="2px" bordercolor="#000000" bgcolor="#FFFFFF" style="font-size:14px; color:#000">
         
         
<tr>
                    	<td align="center"><b>Mã bệnh án</b></td>
                        <td align="center"><B>Tên bệnh nhân</B></td>
                        <td align="center"><B>BHYT</B></td>
						<td align="center"><b>Tiền Xét nghiệm</b></td>
						<td align="center"><b>Tiền ở viện</b></td>
						<td align="center"><b>Tiền trả theo đợt</b></td>
                        <td align="center"><b>Tổng Viện phí</b></td>
                        <td align="center"><b>Số tiền phải trả</b></td> 
                        <td align="center"><b>Thanh toán ngày</b></td> 
                       
                       
					</tr>

<?php
				
  			  include("include/config.php");
				mysqli_query("SET NAMES utf8");
				$tt=0;
  				$sql1 = mysqli_query("SELECT * FROM  tblbenhan,tblbenhnhan where tblbenhan.maBenhnhan=tblbenhnhan.maBenhnhan and maBenhan ='".$id."'");
   				while ($row = mysqli_fetch_assoc($sql1)) {$tt++;
					$mabenhan = $row['maBenhan'];
                	$tenbenhnhan = $row['tenBenhnhan'];
					$bhyt = $row['BHYT'];
					$ngoaituyen= $row['ngoaiTuyen'];
					$gioithieu = $row['tinhTrang'];
					$ngaythanhtoan= $row['ngayThanhToan'];					
					
					
					?>
                    <tr>
                	
                   
                   
                	<td align="centen"> 	
						<input type="text" name="maba" value="<?php echo $mabenhan?>" size="5px" align="middle"/>
                    </td>
					<td align="center"> 
						<input type="text" name="tenbn" value="<?php echo $tenbenhnhan ?>" size="15px"/>
					</td>
                  
                   <td align="center"> 	
						<input type="text" name="bhyt" value="<?php echo $bhyt ?>" size="10px"/>
					</td>
                   <td align="center"> 	
						<input type="text" name="tienxn" value="<?php echo $tienxetnghiem ?>" size="7px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="tienovien" value="<?php echo $tienovien ?>" size="7px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="thanhtoandot" value="<?php echo $tienthanhtoandot ?>" size="8px"/>
					</td>
                     <td align="center"> 	
						<input type="text" name="tongtt" value="<?php $tong =$tienovien+$tienxetnghiem; echo $tong;?>" size="7px"/>
					</td>
                    <td align="center"> 	
						<input type="text" name="ngaynhap" value="<?php
						 if($bhyt=="")
						 {
								 $tientra= $tienovien-$tienthanhtoandot;
							
						 }
						 else
						 {
							 if($ngoaituyen==0)//nếu ngoại tuyến
							 {
								 if($gioithieu==1)//nếu có giấy giới thiệu giảm 50%
								 {
									  $tientra= ($tong/2)-$tienthanhtoandot;
									
								 }
								 else//ko có giấy giới thiệu giảm 20%
								 {
									  $tientra= (($tong*4)/5)-$tienthanhtoandot;
									  
								 }
							 }
							 else//còn lại nội tuyến giam 80%
							 {
								  $tientra= ($tong/5)-$tienthanhtoandot;
								 
							 }
						 }
						 echo"$tientra";
						?>" size="7px"/>
					</td>
                     <td align="center"> 	
						<input type="text" name="tongtt" value="<?php echo"$ngaythanhtoan";?>" size="8px"/>
					</td>
                           
                    <?php 
				}
					
			?>                 
      </tr>
    </table>
    <br />
    <br />
    <br />
  	<tr  >
    <tr align="right">
    	<form action="thanhtoan.php" method="post">
      	<input type="submit" value="   Thanh toán  " name="them" />
        <input type="hidden" name="thanhtoan" value="<?php echo $maBA;?>"/> 
      </form>
        </tr>
	</tr> 
    
	   

</div>

