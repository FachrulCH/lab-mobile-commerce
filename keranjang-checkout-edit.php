<?php
$item = $_GET['item'];
$jum = $_GET['jum'];
$warna = $_GET['warna'];
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
      <div data-role="header" data-theme="b">
        <h1></h1>
        <a href="#" data-icon="carat-l" data-rel="back" data-theme="b" data-iconshadow="true" class="ui-btn-left"> <span class="ui-btn-text">Back</span>
          </a>
        </div><!-- /header -->
      <div role="main" class="ui-content">
        <h1>Edit Keranjang Belanja</h1>
        <table data-role="table" class="ui-responsive table-stroke">
        <thead>
          <tr>
            <th data-priority="1">Nama Barang</th>
            <th data-priority="2">Warna</th>
            <th data-priority="3">Ukuran</th>
            <th data-priority="4">Jumlah</th>
            <th data-priority="5">Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $item ?></td>
            <td><input type="text" value="<?= $warna ?>"></td>
            <td><input type="text" value="M"></td>
            <td><input type="text" value="<?= $jum ?>"></td>
            <td>Rp. 111.000</td>
          </tr>
        </tbody>
        </table>
        <input type="submit" value="Update">
      </div>
      <!-- /content -->
      <!-- Footer -->
      <?php include 'footer.php'; ?>
    </div>
    <!-- /page one -->
    <!-- /page halaman -->
  </body>
</html>