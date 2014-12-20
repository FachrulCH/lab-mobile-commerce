<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

<h3 id="#pengiriman">Alamat Pengiriman</h3>
          <hr/>
          <h3 id="hasil"></h3>
           <form action="ajax-pengiriman.php" method="POST" id="viaAjax">
          <div class="ui-body ui-body-a">
            <div class="ui-field-contain">
              <label for="email">Email:</label>
              <input type="text" name="email" id="email" placeholder="Alamat Email">
            </div>
            <div class="ui-field-contain">
              <label for="nama">Nama Lengkap:</label>
              <input type="text" name="nama" id="nama" placeholder="Nama Pembeli">
            </div>
            <div class="ui-field-contain">
              <label for="noHP">No HP:</label>
              <input type="text" name="noHP" id="noHP" placeholder="Nomer Handphone">
            </div>
            <div class="ui-field-contain">
              <label for="alamat">Alamat:</label>
              <textarea name="alamat" id="alamat" placeholder="Alamat Lengkap"></textarea>
            </div>
            <div class="ui-field-contain">
              <label for="kodepos">Kode Pos:</label>
              <input type="number" name="kodepos" id="kodepos" placeholder="Kode Pos">
            </div>
            <div class="ui-field-contain">
              <label for="catatan">Catatan:</label>
              <textarea name="catatan" id="catatan" placeholder="Catatan Tambahan, jika ada"></textarea>
            </div>

            <input type="submit" class="simpan" value="Simpan" data-theme="b">

          </div>
        </form>
<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>