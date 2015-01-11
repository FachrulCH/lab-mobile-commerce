<?php
include_once "model/db_function.php";

$idbrg    = (int) $_GET['id'];

//=== Load Data
$sql = "SELECT a.* , b.produk_name, b.produk_colour, b.produk_size, b.produk_img
        FROM ng_order_tmp a, ng_produk b
        WHERE b.produk_id = a.order_product 
        and a.order_id = '{$idbrg}' ";
$data = good_query_assoc($sql);


?>
<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    <!-- Start of first page: #home -->
    <div data-role="page" data-dialog="true" class="latar">

      <div data-role="header" data-theme="b">
        <h1></h1>
        <a href="#" data-icon="carat-l" data-rel="back" data-theme="b" data-iconshadow="true" class="ui-btn-left"> <span class="ui-btn-text">Back</span>
          </a>
        </div><!-- /header -->
      <div role="main" class="ui-content">
        <h1>Edit Keranjang Belanja</h1><hr/>
        <a href="#popupGambar" data-rel="popup" data-position-to="window" data-transition="fade">
          <center><img width="100px" class="popphoto" src="<?php echo "img/produk/$data[produk_img]"?>" alt="<?= $data['produk_name']?>"></a></center>
        <div data-role="popup" id="popupGambar" data-overlay-theme="b" data-theme="b" data-corners="false">
          <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
          <img class="popphoto" src="<?php echo "img/produk/$data[produk_img]"?>" style="max-height:512px;" alt="
          <?= $data['produk_name']?>"></div>

      <form action="model/updateKeranjang.php" method="GET" id="editKeranjang" data-ajax="false">
        <input type="hidden" name="order_id" value="<?= $data['order_id']; ?>">
        
        <table data-role="table" class="ui-responsive table-stroke">
        <thead>
          <tr>
            <th data-priority="1">Nama Barang</th>
          <?php
            if($data['produk_colour'] != ''){
          ?>
            <th data-priority="2">Warna</th>
          <?php } ?>

          <?php
            if($data['produk_size'] != ''){
          ?>
            <th data-priority="3">Ukuran</th>
          <?php } ?>
            
            <th data-priority="4">Banyaknya</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $data['produk_name'] ?></td>
            <!-- <td><input type="text" value="<?= $data[order_warna] ?>"></td> -->

          <?php
            //=== Looping warna
            if($data['produk_colour'] != ''){
            // **** Pecah tag warna tiap koma, contoh merah, kuning, hijau
            $warna = explode(',', $data['produk_colour'])
          ?>
          <td>
            <select name="warna" data-mini="true" data-inline="true" data-theme="b">
          
          <?php
            $i = 0;
            while ( $i < count($warna)) {
            if ($warna[$i] == $data['order_warna']){ $seleksi = " selected=''"; }
              echo "<option value=$warna[$i]". @$seleksi .">$warna[$i]</option>";
            $seleksi =""; //== reset selected
            $i++;
            }
          ?>
            </select>
          </td>
          
          <?php 
            }  /// *** End kondisi produK_color
          ?>

          <?php
            if($data['produk_size'] != ''){
          ?>
            <td>
              <select name="ukuran" data-mini="true" data-inline="true" data-theme="b">
                <option value="S">S</option>
                <option value="M" selected="">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </td>
          <?php } /// *** End kondisi produk_size ?>
            <td>
              <select name="jumlah" data-mini="true" data-inline="true" data-theme="b">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </td>
          </tr>
        </tbody>
        </table>
        <hr/>
        <button type="submit" id="update" value="update" class="ui-shadow ui-btn ui-btn-b ui-corner-all ui-btn-icon-left ui-icon-action">Update</button>
        <a href="model/updateKeranjang.php?do=delete&order_id=<?= $data['order_id'] ?>" class="ui-shadow ui-btn ui-btn-b ui-corner-all ui-btn-icon-left ui-icon-delete" 
          onClick="return confirm('Apakah anda yakin menghapusnya?')" data-ajax="false">Delete</a>
      </form>
      </div>
      <!-- /content -->

    </div>
    <!-- /page one -->
    <!-- /page halaman -->
  </body>
</html>