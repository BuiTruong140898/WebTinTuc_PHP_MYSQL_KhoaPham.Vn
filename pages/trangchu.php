<?php  
    $cactheloai = LayDanhSachTheloai();
    while($row = mysqli_fetch_array($cactheloai)){
        $idTL = $row['idTL'];
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php echo $row['TenTL'] ?></a>
        </div>
        <div class="child-cat">
            <?php
                $cacloaitin = LayDanhSachLoaiTin_TheoTheLoai($idTL);
                while($row2 = mysqli_fetch_array($cacloaitin)){  
            ?>
        	<a href="./index.php?p=tintrongloai&idLT=<?php echo $row2['idLT'] ?>"><?php echo $row2['Ten'] ?></a>
            <?php 
                }
            ?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                    <?php
                        $tinmoi = LayTinMoiNhat_TheoTheLoai_MotTin($idTL);
                        $row_tinmoi = mysqli_fetch_array($tinmoi);  
                    ?>
                    <h3 class="title" ><a href="./index.php?p=chitiettin&idTin=<?php echo $row_tinmoi['idTin'] ?>"><?php echo $row_tinmoi['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoi['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoi['TomTat'] ?> </div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
                <?php 
                    $cactinmoi = LayCacTinMoiKhac_TheoTheLoai($idTL, 2);
                    while($row_cactinmoi = mysqli_fetch_array($cactinmoi)){ 
                ?>
                    <p class="tlq"><a href="./index.php?p=chitiettin&idTin=<?php echo $row_cactinmoi['idTin']  ?>"> <?php echo $row_cactinmoi['TieuDe'] ?> </a> </p>
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
<!-- box cat-->



