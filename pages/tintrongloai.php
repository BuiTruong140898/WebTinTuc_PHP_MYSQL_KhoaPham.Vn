<?php
    $idLT = (isset($_GET['idLT']) ? $_GET['idLT'] : 0);
    settype($idLT, 'int');   
?>
<?php
$duongdan = LayDuongDan_LoaiTin($idLT);
$row_duongdan = mysqli_fetch_array($duongdan);
?>
<div>Trangchu>> <?php echo $row_duongdan['TenTL'] ?> >> <?php echo $row_duongdan['Ten'] ?></div>
<?php
    $tinmoi = LayTinMoi_TheoLoai($idLT);
    while($row = mysqli_fetch_array($tinmoi)){
?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="./index.php?p=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>

<div class="clear"></div>


<!-- box cat-->
<?php 
    }
?>

