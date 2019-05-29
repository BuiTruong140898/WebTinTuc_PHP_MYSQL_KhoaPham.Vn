<?php
	$quangcao = HienQuangCao(1);//1 la vi tri quang cao o vi tri ben phai 
	while( $row = mysqli_fetch_array($quangcao)) {
?>
<a href="<?php echo $row['Url'] ?>"><img width="280" alt="s" src="upload/hinhquangcao/<?php echo $row['urlHinh'] ?>" /></a>
<div style="height:10px"></div>
<?php
	}
?>