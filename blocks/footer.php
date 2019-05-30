<div class="thongtin-title">
	<div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div style="display: block" class="thongtin-content">
<?php  
	$cactheloai = LayDanhSachTheloai();
	while($row = mysqli_fetch_array($cactheloai)){
		$idTL = $row['idTL'];

?>

	<ul class="ulBlockMenu">
		<!-- TheLoai -->
        <li class="liFirst">
           <h2>
              <a class="mnu_giaoduc" href="/tin-tuc/giao-duc/"><?php echo $row['TenTL']?></a>
           </h2>
        </li>
        <!-- loai tin -->
        <?php
	        $cacloaitin = LayDanhSachLoaiTin_TheoTheLoai($idTL);
	        while($row2 = mysqli_fetch_array($cacloaitin)){ 
        ?>
        <li class="liFollow">
           <h2>
              <a href="./index.php?p=tintrongloai&idLT= <?php echo $row2['idLT'] ?>"><?php echo $row2['Ten'] ?></a>
           </h2>
        </li>
        <?php 
		    } 
	    ?>
        
    </ul>

<?php
	}
?>             
</div>





