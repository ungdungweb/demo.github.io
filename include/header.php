
<div id="header"> 	
</div>
<div id="menu">
    	<div id="menu-container">
        	<ul id="mn">
            	<li><a href='index.php?page=trangchu'>Trang Chủ</a>
                <li><a href="#">Giới Thiệu</a>
                <li><a href="#">Tổ Chức</a>
                <li><a href="dangkikham.php">Đăng kí khám</a>
                <li><a href="#">Đăng Nhập</a>
                    <ul class="mn_con" >
                        <li><a href='index.php?page=BacSi' style="color:#000000">Bác Sĩ</a></li>
                        
                        <li><a href='index.php?page=NguoiTiepNenh'  style="color:#000000">Nhân Viên</a></li>
                        
                        <li><a href='index.php?page=Benhnhan' style="color:#000000">Bệnh Nhân</a></li>
                    </ul>
                </li>
                <?php if(isset($_SESSION)) echo "<li><a href='logout.php'>Thoát</a>";?>
             </ul>
        </div>
 </div>

