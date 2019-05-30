<link rel="stylesheet" type="text/css" href="menu2cap/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="menu2cap/ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="menu2cap/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at #/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
<span></span>
</a>


<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="./">Trang chủ</a></li>
<?php
	$cactheloai = LayDanhSachTheloai();
	while($row = mysqli_fetch_array($cactheloai)){
?>
<li><a href="#"><?php echo $row['TenTL'] ?></a>
  <ul>
  <?php
	$cacloaitin = LayDanhSachLoaiTin_TheoTheLoai($row['idTL']) ;
	while($row2 = mysqli_fetch_array($cacloaitin)){
  ?>
  <li><a href="index.php?p=tintrongloai&idLT=<?php echo $row2['idLT'] ?>"><?php echo $row2['Ten'] ?></a></li>
  <?php 
  }
  ?>
  </ul>
</li>
<?php
	} 
?>

</ul>
<br style="clear: left" />
</div>


