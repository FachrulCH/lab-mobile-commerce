<?php
$kategori = isset($_POST['kategori']) ? $_POST['kategori'] :'' ;
$nama     = isset($_POST['nama']) ? $_POST['nama'] : '';
$harga    = isset($_POST['harga']) ? $_POST['harga'] : '';
$warna    = isset($_POST['warna']) ? $_POST['warna'] : '';
$ukuran   = isset($_POST['ukuran']) ? $_POST['ukuran'] :'' ;
$stok     = isset($_POST['stok']) ? $_POST['stok'] :'';
$desk     = isset($_POST['deskripsi']) ? $_POST['deskripsi'] :'';
$fitur    = isset($_POST['fitur']) ? $_POST['fitur'] :'' ;
$spec    = isset($_POST['spec']) ? $_POST['spec'] :'' ;
$gambar_name   = isset($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : '' ;
$gambar_source = isset($_FILES['gambar']['tmp_name']) ? $_FILES['gambar']['tmp_name'] : '' ;

$folder_gambar = "img/produk/".$gambar_name;
if ($gambar_source != ''){
  move_uploaded_file($gambar_source, $folder_gambar);
}


?>

<!DOCTYPE html>
<html>
<style>
  input, textarea, select {
    position: absolute;
    left: 10em;
   }
   i{
    position: absolute;
    left: 20em;
   }
</style>
<body>
<h1>Upload Produk Naikgunung Mobile</h1>
<hr/><br/>
<form action="" method="post" enctype="multipart/form-data">
    <div>Kategori:
        <select name="kategori">
          <option value="1">Accessories</option>
          <option value="2">Bike Gear and Accessories</option>
          <option value="3">Camping Gear</option>
          <option value="4">Footwear</option>
          <option value="5">Waterproof 100% OverBoard</option>
          <option value="6">Aneka Jenis Tas</option>
          <option value="7">Jam Tangan Outdoor</option>
          <option value="8">Multi-tool</option>
        </select>
    </div><br/>
    <div>Nama Barang:
          <input type="text" name="nama" placeholder="Huruf Gede ya isinya">
    </div><br/>
    <div>Harga:
          <input type="number" name="harga" placeholder="Gapake titik, angka ajah">
    </div><br/>
    <div>Warna:
          <input type="text" name="warna" placeholder="Merah,Kuning,Hijau">
          <i>Pisahin pake tanda "koma" </i>
    </div><br/>
    <div>Ukuran:
          <input type="text" name="ukuran" placeholder="S,M,L,XL,XXL">
    <i>Pisahin pake tanda "koma" </i>
    </div><br/>
    <div>Stok Awal:
          <input type="text" name="number" placeholder="5"></div><br/>
    <div>Deskripsi singkat:
          <input type="text" name="deskripsi" placeholder="Maksimum 90 karakter"></div><br/>
    <div>Fitur:
          <textarea name="fitur"></textarea> <i>Kalo mau enter pake tag < br></i>
    </div><br/><br/>
    <div>Spec:
          <textarea name="spec"></textarea></div><br/><br/>
    <div>Gambar:
    <input type="file" name="gambar">
    </div><br/><br/>
    <input type="submit" value="Simpan" name="submit">
</form>
<div></div>

<?php
//Proses insert ke database
if (isset($_POST['submit'])){
  echo "<hr/><p>Hasil Execute query</p>";
  include_once 'model/db_function.php';
  $sql = "INSERT INTO ng_produk(produk_category, produk_name, produk_price, produk_colour, produk_size, produk_stok, produk_feature, produk_spec, produk_img, produk_deskripsi)
  values ('{$kategori}','{$nama}', '{$harga}', '{$warna}', '{$ukuran}', '{$stok}', '{$fitur}','{$spec}','{$gambar_name}','{$desk}')";
$insertSQL = good_query($sql,1);
echo "<br><img src=$folder_gambar>";
}


?>

</body>
</html>