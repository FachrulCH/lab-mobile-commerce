<?php 
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
include_once 'model/db_function.php';
//klo belom ada, generate Session ID
if (!isset($_SESSION['order_session'])){
 $_SESSION['order_session'] = md5(uniqid('ngunung', true));
 }
 echo "id=$_SESSION[order_session]";


?>
<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    <!-- Start of first page: #home -->
    <div data-role="page" id="home" class="latar">
      <!-- panel content goes here -->
      <?php include 'panel.php'; ?>
      
      <div role="main" class="ui-content">
        <h2></h2>
        <div id="logo"></div>
        <br/>
        <marquee> <i>Selamat datang di mobile site NaikGunung.com</i>
        </marquee>
        <hr/>
          NaikGunung.com (NG) adalah toko online yang menjual perlengkapan outdoor untuk menemani anda berpetualang. <br/>
          Resmi Didirikan tanggal 16 Oktober 2010 di Jakarta Selatan yang berawal dari berjualan kecil2an FJB KASKUS. <br/>
          Kami siap melayani dalam partai ecer atau grosir. NG pernah diliput juga di Majalah JIP dan media online seperti MERDEKA.com<br/>
          Happy shoppping guys.. :)<br/>
        <br/>

      <hr/>

      <div class="ui-grid-b">
        <div class="ui-block-a">
          <a href="produk.php?filter=terlaris" class="ui-shadow ui-btn ui-corner-all" data-transition="pop"><img src="img/icon/hand_thumbsup_72.png"><p>Terlaris</p>
          </a>
        </div>
        <div class="ui-block-b">
          <a href="produk.php?filter=terbaru" class="ui-shadow ui-btn ui-corner-all" data-transition="fade"><img src="img/icon/star_72.png"><p>Terbaru</p></a>
        </div>
        
        <div class="ui-block-c">
          <a href="produk-promo.php" class="ui-shadow ui-btn ui-corner-all" data-transition="turn"><img src="img/icon/certificate1_72.png"><p>Promo</p></a>
        </div>
      </div>
      <div class="ui-grid-b">
        <div class="ui-block-a">
          <a href="kategori.php" class="ui-shadow ui-btn ui-corner-all " data-transition="slidefade"><img src="img/icon/market_segmentation_72.png"><p>Kategori</p>
          </a>
          
        </div>
        <div class="ui-block-b">
          <a href="testimoni.php" class="ui-shadow ui-btn ui-corner-all" data-transition="flow"><img src="img/icon/chat_emoticon_72.png"><p>Testimoni</p></a>
        </div>
        <div class="ui-block-c">
          <a href="bantuan.php" class="ui-shadow ui-btn ui-corner-all" data-transition="flip"><img src="img/icon/study_72.png"><p>Bantuan</p></a>
      </div>
      <br/>
    </div>
    <div><br/><br/></div>
    <hr/>
    <br/>
    <div class="ui-corner-all">
      <div class="ui-bar ui-bar-b">
        <h3>Produk kami</h3>
      </div>
      <div class="ui-body ui-body-a"> 
      <?php
        $sqlProduk = "SELECT
        *
        FROM
        ng_produk
        ORDER BY RAND()
        LIMIT 0 , 6";

        $load = good_query($sqlProduk);
        $baris = 1;
       while ($prd = mysql_fetch_array($load)){
        if ($baris%2 != 0) {
          //echo "ganjil = ";
          $harga = html_price($prd['produk_price']);
          echo"<div class='ui-grid-a'>
                <div class='ui-block-a'>
                  <div class='ui-bar'>
                    <a href='produk-detail.php?id={$prd['produk_id']}'>
                    <img src='img/produk/{$prd['produk_img']}' width='100%'>
                    <p>{$prd['produk_name']}</p>
                    <p>{$harga}</p></a>
                  </div>
                </div>";
        }else{
          echo "<div class='ui-block-b'>
                  <div class='ui-bar'>
                    <a href='produk-detail.php?id={$prd['produk_id']}'>
                    <img src='img/produk/{$prd['produk_img']}' width='100%'>
                    <p>{$prd['produk_name']}</p>
                    <p>{$harga}</p></a>
                  </div>
                </div>
              </div>";
        }
//        echo "$prd[produk_name] <br/>";
        $baris++;
       }

      ?> 
      
      
        
     <!--  <div class="ui-grid-a">
        <div class="ui-block-a">
          <div class="ui-bar"><a href="produk-detail.php?id=1"><img src="img/produk/tas-consina-sierra-nevada-40.jpg" width="100%">
            <p>TAS CONSINA - SIERRA NEVADA 40</p>
          <p>Rp 525.000</p></a></div>
        </div>
        <div class="ui-block-b">
          <div class="ui-bar"><a href="produk-detail.php?id=2"><img src="img/produk/overboard-camera-case.jpg" width="100%">
            <p>OVERBOARD CAMERA CASE</p>
            <p>Rp 205.000</p>
          </a></div>
        </div>
      </div>
      <div class="ui-grid-a">
        <div class="ui-block-a">
          <div class="ui-bar"><a href="#"><img src="img/produk/tas-consina-camming-pro.jpg" width="100%">
            <p>Tas consina camming pro</p>
          <p>Rp 200.000</p></a></div>
        </div>
        <div class="ui-block-b">
          <div class="ui-bar"><a href="#"><img src="img/produk/jaket-consina-cold-light-4.jpg" width="100%">
            <p>Jaket consina cold light</p>
            <p>Rp 200.000</p>
          </a></div>
        </div>
      </div>
       -->
      </div>
    </div>
    <!-- /content -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>

      </div><!-- /content -->
      <!-- /page one -->
    </div><!-- /page halaman -->
    </body>
  </html>
  <? ob_flush(); ?>