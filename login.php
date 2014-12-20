<?php
if (isset($_GET['login'])) {
  //echo "klik login";
$_SESSION['login'] = true;
$_SESSION['username'] = 'alul';

header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    <div data-role="page">
    <div data-role="header" data-theme="b">
        <h1></h1>
        <a href="#" data-icon="carat-l" data-rel="back" data-theme="b" data-iconshadow="true" class="ui-btn-left"> <span class="ui-btn-text">Back</span>
          </a>
        </div><!-- /header -->
      <div role="main" class="ui-content">
        <div class="ui-bar ui-bar-b">
        <h3>Login</h3>
        </div>
        <div class="ui-body ui-body-a">
          <form action="login.php" method="get">
          <label for="email">Email</label>
          <input type="text" name="email" id="email">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
          <input type="submit" value="Login" data-theme="b" data-ajax="false" name="login">
          <p>Belum Terdaftar?</p> <a href="daftarbaru.php" data-transition="slidedown" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-btn-icon-left ui-icon-user ui-btn-c ui-mini">Daftar baru</a>
          </form>
        </div>

        <div data-role="popup" id="berhasildaftar" class="ui-content" style="max-width:280px">
          <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
          <p>
            Anda Telah terdaftar, silahkan Login :)
          </p>
        </div>
      </div>
    </div>
  </body>
</html>