<!-- box cat -->
<?php 
    //Lay cac loai tin tu 1 den 4 de hien thi o cot ben phai
    for($i=1; $i<=4; $i++)
    {

    $idLT = $i;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo LayTenLoaiTin($idLT); ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <?php
                    $tintheoloai = LayTinMoiNhat_TheoLoai_MotTin($idLT);
                    $row = mysqli_fetch_array($tintheoloai); 
                ?>
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin= <?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row['TomTat']; ?></div>
                <?php
                
                ?>  
                    <div class="clear"></div>
				</div>
            </div>
            <div class="col2">
            <?php 
                $cactintheoloaikhac = LayCacTinMoiKhac_TheoLoai($idLT);
                while($row = mysqli_fetch_array($cactintheoloaikhac)){
            ?>
                <h3 class="tlq"><a href="index.php?p=chitiettin&idTin= <?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a></h3>
            <?php 
                } 
            ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<?php 
}
?>
<!-- //box cat -->
