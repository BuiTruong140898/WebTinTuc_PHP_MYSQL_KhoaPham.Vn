<?php
    define('sotinmottrang',7);
    $idLT = (isset($_GET['idLT']) ? $_GET['idLT'] : 0);
    settype($idLT, 'int');
    $trangso = (isset($_GET['trangso']) ? $_GET['trangso'] : 1);
    settype($trangso, 'int');
?>
<?php
$duongdan = LayDuongDan_LoaiTin($idLT);
$row_duongdan = mysqli_fetch_array($duongdan);
?>
<div>Trangchu>> <?php echo $row_duongdan['TenTL'] ?> >> <?php echo $row_duongdan['Ten'] ?></div>
<?php
    $from = ($trangso-1)*sotinmottrang;
    $tinmoi = LayTinMoi_TheoLoai_PhanTrang($idLT, $from, sotinmottrang);
   // $socactrang = mysqli_num_rows($tinmoi)/$sotintrongmottrang;
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
<div style="text-align: center">
    <?php 
        $tintheoloai = LayTinMoi_TheoLoai($idLT);
        $sotrang = ceil(mysqli_num_rows($tintheoloai)/sotinmottrang);
        for($i = 1; $i<=$sotrang; $i++){
    ?>
            <a  href="index.php?p=tintrongloai&idLT=<?php echo $idLT ?>&trangso=<?php echo $i ?>"><button <?php echo $i == $trangso ? "style='background: yellow'" : "" ?> type="button" class="btn btn-default"><?php echo $i ?></button></a>
    <?php
        }
    ?>
</div>

