<?php  
    $key = isset($_REQUEST['key']) ? $_REQUEST['key'] : '';
    $ketquatimkiem = TimKiem($key);
    while($row = mysqli_fetch_array($ketquatimkiem)){
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

<?php 
    }
?>
