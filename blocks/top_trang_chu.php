<div id="slide-left">
  <?php 
  $tinmoinhat_mottin = LayTinMoiNhat_MotTin();
  $row_tinmoinhat_mottin = mysqli_fetch_array($tinmoinhat_mottin);
  ?>
          <div id="slideleft-main">
                <img src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlHinh'] ?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_mottin['idTin'] ?>"><?php echo $row_tinmoinhat_mottin['TieuDe'] ?></a> </h2>
                <div class="des">
                    <?php echo $row_tinmoinhat_mottin['TomTat'] ?> 
                </div>
              <p class="tlq"><a href="#">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a></p>
                
          </div>
            <div id="slideleft-scroll">
              
              <div class="content_scoller width_common">
            <ul>
              <?php 
              $tinmoi_hienbenphai = LayTinMoi_HienBenPhai();
              while( $row_tinmoi_hienbenphai = mysqli_fetch_array($tinmoi_hienbenphai))
              { 
              ?>
               <li>
                <div class="title_news">
                  <a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoi_hienbenphai['idTin'] ?>" class="txt_link"><?php echo $row_tinmoi_hienbenphai['TieuDe'] ?></a> 
                </div>
              </li>
              
              <?php
              }
              ?>
 
            </ul>
            </div>      
            
      <div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     