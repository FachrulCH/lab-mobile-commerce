<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

<h3 id="#pengiriman">Alamat Pengiriman</h3>
          <hr/>
          <h3 id="hasil"></h3>
<?php
//hitung row
include_once("model/db_function.php");
$sql = good_query("SELECT * FROM ng_member WHERE email = 'ernest'");
$hitung = good_num($sql);
echo "<h1>hasil hitung $hitung</h1>";

/*$today  = date('m/d/Y');
$input = '07/05/2015';
$input = date('m/d/Y', strtotime($input));
$effectiveDate = date('m/d/Y', strtotime("+1 months", strtotime($today)));
if ($effectiveDate <= $input){
  $status = "valid";
}else{
  $status = "expired";
}
*/
$today    = date('m/d/Y');
$today    =strtotime($today);

$input    = '12/01/2014';
$conv     = date('Y/m/d', strtotime($input));
echo "<h1>$conv</h1>";
$input    =strtotime($input);
if ($input > $today){
  echo "$input > $today";
}else{
  echo "$input > $today";
}
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'/payment/request.php';
echo "<br> URL = ". $url;
?>

           <form action="ajax-pengiriman.php" method="POST" id="viaAjax">
        <input type="hidden" name="url" id="url" value="ajax-pengiriman.php">
          <div class="ui-body ui-body-a">
            <div class="ui-field-contain">
              <label for="email">Email:</label>
              <input type="text" name="email" id="email" value="<?= @$k['order_email'] ?>" placeholder="Alamat Email">
            </div>
            <div class="ui-field-contain">
              <label for="nama">Nama Lengkap:</label>
              <input type="text" name="nama" id="nama" value="<?= @$k['order_nama_pembeli'] ?>" placeholder="Nama Pembeli">
            </div>
            <div class="ui-field-contain">
              <label for="noHP">No HP:</label>
              <input type="text" name="noHP" id="noHP" value="<?= @$k['order_hp'] ?>" placeholder="Nomer Handphone">
            </div>
            <div class="ui-field-contain">
              <label for="alamat">Alamat:</label>
              <textarea name="alamat" id="alamat" placeholder="Alamat Lengkap"><?= @$k['order_nama_pembeli'] ?></textarea>
            </div>
            <div class="ui-field-contain">
              <label for="kodepos">Kode Pos:</label>
              <input type="number" name="kodepos" id="kodepos" value="<?= @$k['order_zip'] ?>" placeholder="Kode Pos">
            </div>
            <div class="ui-field-contain">
              <label for="catatan">Catatan:</label>
              <textarea name="catatan" id="catatan" placeholder="Catatan Tambahan, jika ada"><?= @$k['order_catatan'] ?></textarea>
            </div>
            <input type="submit" class="simpan" value="Simpan" data-theme="b">
          </div>
        </form>
<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>