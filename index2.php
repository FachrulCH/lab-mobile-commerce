<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  <link rel="stylesheet" href="css/listview-grid.css">
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
      <br/>

      <hr/>

      <div class="ui-grid-b">
        <div class="ui-block-a">
          <a href="produk.php?filter=terlaris" class="ui-shadow ui-btn ui-corner-all" data-transition="pop">
            <img src="img/icon/hand_thumbsup_72.png">
            <p>Terlaris</p>
          </a>
        </div>
        <div class="ui-block-b">
          <a href="produk.php?filter=terbaru" class="ui-shadow ui-btn ui-corner-all" data-transition="fade">
            <img src="img/icon/star_72.png">
            <p>Terbaru</p>
          </a>
        </div>
        <div class="ui-block-c">
          <a href="produk-promo.php" class="ui-shadow ui-btn ui-corner-all" data-transition="turn">
            <img src="img/icon/certificate1_72.png">
            <p>Promo</p>
          </a>
        </div>
      </div>

      <div class="ui-grid-b">
        <div class="ui-block-a">
          <a href="kategori.php" class="ui-shadow ui-btn ui-corner-all " data-transition="slidefade">
            <img src="img/icon/market_segmentation_72.png">
            <p>Kategori</p>
          </a>
        </div>
        <div class="ui-block-b">
          <a href="testimoni.php" class="ui-shadow ui-btn ui-corner-all" data-transition="flow">
            <img src="img/icon/chat_emoticon_72.png">
            <p>Testimoni</p>
          </a>
        </div>
        <div class="ui-block-c">
          <a href="bantuan.php" class="ui-shadow ui-btn ui-corner-all" data-transition="flip">
            <img src="img/icon/study_72.png">
            <p>Bantuan</p>
          </a>
        </div>
        <br/>
      </div>
      <hr/>

      <ul data-role="listview" data-inset="true">
          <li><a href="#">
              <img src="img/produk/jaket-consina-cold-light-4.jpg" class="ui-li-thumb">
              <h2>iOS 6.1</h2>
                <p>Apple released iOS 6.1</p>
                <p class="ui-li-aside">iOS</p>
            </a></li>
          <li><a href="#">
              <img src="img/produk/jaket-consina-cold-light-4.jpg" class="ui-li-thumb">
              <h2>BlackBerry 10</h2>
                <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>
                <p class="ui-li-aside">BlackBerry</p>
            </a></li>
          <li><a href="#">
              <img src="img/produk/jaket-consina-cold-light-4.jpg" class="ui-li-thumb">
              <h2>WP 7.8</h2>
                <p>Nokia rolls out WP 7.8 to Lumia 800</p>
                <p class="ui-li-aside">Windows Phone</p>
            </a></li>
          <li><a href="#">
              <img src="img/produk/jaket-consina-cold-light-4.jpg" class="ui-li-thumb">
              <h2>Galaxy</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Samsung</p>
            </a></li>
          <li><a href="#">
              <img src="img/produk/jaket-consina-cold-light-4.jpg" class="ui-li-thumb">
              <h2>Nexus 7</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Android</p>
            </a></li>
          <li><a href="#">
              <img src="img/produk/jaket-consina-cold-light-4.jpg" class="ui-li-thumb">
              <h2>Firefox OS</h2>
                <p>ZTE to launch Firefox OS smartphone at MWC</p>
                <p class="ui-li-aside">Firefox</p>
            </a></li>
          <li><a href="#">
              <img src="img/produk/jaket-consina-cold-light-4.jpg" class="ui-li-thumb">
              <h2>Tizen</h2>
                <p>First Samsung phones with Tizen can be expected in 2013</p>
                <p class="ui-li-aside">Tizen</p>
            </a></li>
          <li><a href="#">
              <h2>Symbian</h2>
                <p>Nokia confirms the end of Symbian</p>
                <p class="ui-li-aside">Symbian</p>
            </a></li>
        </ul>


      <!-- Footer -->
      <?php include 'footer.php'; ?>
    </div>    <!-- /main -->
  </div><!-- /page one -->
</body>
  </html>