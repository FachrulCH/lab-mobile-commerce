<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    <!-- Start of first page: #newmember -->
     <div data-role="page" data-dialog="false">
      <!-- panel content goes here -->
      <?php include 'panel.php'; ?>
      <div data-role="header" data-theme="b">
        <h1></h1>
        <a href="#" data-icon="carat-l" data-rel="back" data-theme="b" data-iconshadow="true" class="ui-btn-left"> <span class="ui-btn-text">Back</span>
          </a>
        </div><!-- /header -->
      <div role="main" class="ui-content">
        <div class="ui-bar ui-bar-b">
        <h3>Daftar</h3>
        </div>
        <div class="ui-body ui-body-a">
          <form action="controler/daftarbaru-save.php" method="GET">
          <label for="email">Email</label>
          <input type="text" name="email" id="email">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
          <label for="namalengkap">Nama Lengkap</label>
          <input type="text" name="namalengkap" id="namalengkap">
          <label for="noHP">Nomor Handphone</label>
          <input type="text" name="noHP" id="noHP">
          <label for="pinBB">PIN BB (jika ada)</label>
          <input type="text" name="pinBB" id="pinBB">
          <label for="alamat">Alamat</label>
          <textarea name="alamat" id="alamat"></textarea>
          <label for="zip">Kode Pos</label>
          <input type="text" name="zip" id="zip">
          <input type="submit" value="Daftar">
          </form>
        </div>
      </div>
      <!-- /content -->
      <!-- Footer -->
    </div><!-- /page halaman -->
  </body>
</html>