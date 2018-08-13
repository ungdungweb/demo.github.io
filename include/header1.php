
<div id="header"> 	
</div>
<div id="menu">
    	<div id="menu-container">
        	<ul id="mn">
            	<li><a href='index.php?page=trangchu'>Trang Chủ</a>
                <li><a href="#">Giới Thiệu</a>
                <li><a href="#">Tổ Chức</a>
                <li><a href="dangkikham.php">Đăng kí khám</a>
                
                <?php if(isset($_SESSION)) echo "<li><a href='logout.php'>Thoát</a>";?>
             </ul>
        </div>
 </div>

