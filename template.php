<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    <!-- Start of first page: #home -->
    <div data-role="page" id="home" class="latar">
      <!-- panel content goes here -->
      <?php include 'panel.php'; ?>
      <div data-role="header" data-theme="b">
        <h1></h1>
        <a href="#" data-icon="carat-l" data-rel="back" data-theme="b" data-iconshadow="true" class="ui-btn-left"> <span class="ui-btn-text">Back</span>
          </a>
        </div><!-- /header -->
      <div role="main" class="ui-content">
        <h1>Terbaru</h1>
        <ul data-role="listview" data-inset="true" >
          <li><a href="produk.php?id=" data-transition="slidedown"> <img src="sushis.jpg"/> <h3> Some Sushis</h3></a></li>
          <li><a href="produk.php?id="  data-transition="slidedown"> <img src="pizza.jpg"/> <h3> A Pizza </h3></a></li>
          <li><a href="produk.php?id="  data-transition="slidedown"> <img src="kebap.jpg"/> <h3> A Kebap</h3></a></li>
          <li><a href="produk.php?id="  data-transition="slidedown"> <img src="burger.jpg"/> <h3> A Burger</h3></a></li>
          <li><a href="produk.php?id="  data-transition="slidedown"> <img src="nems.jpg"/> <h3> Some Nems </h3></a></li>
          <li><a href="produk.php?id="  data-transition="slidedown"> <img src="tradi.jpg"/> <h3> Something more traditional</h3></a></li>
        </ul>
        <div class="ui-corner-all ui-body-b custom-corners">
          <div class="ui-bar ui-bar-a">
            <h3>Habibie</h3>
          </div>
          <div class="ui-body ui-body-a">
            Senin, 01-Jan-14
            <hr/>
            <p>Barangnya sudah sampai gan :)<br/>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan blandit fermentum. Pellentesque cursus mauris purus, auctor commodo mi ullamcorper nec. Donec semper mattis eros, nec condimentum ante sollicitudin quis. Etiam orci sem, porttitor ut tellus nec, blandit posuere urna. Proin a arcu non lacus pretium faucibus. Aliquam sed est porttitor, ullamcorper urna nec, vehicula lorem. Cras porttitor est lorem, non venenatis diam convallis congue.</p>
          </div>
        </div>
      </div>
      <!-- /content -->
      <!-- Footer -->
      <?php include 'footer.php'; ?>
    </div>
    <!-- /page one -->
    <!-- /page halaman -->
  </body>
</html>
<? ob_flush(); ?>