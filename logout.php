<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    
<div data-role="page" data-dialog="true">

    <div data-role="header" data-theme="b">
    <h1>Dialog</h1>
    </div>

    <div role="main" class="ui-content">
      <h1>Yakin anda akan logout?</h1>
    <a href="controler/logout-do.php" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-btn-a">Yes</a>
      <a href="index.html" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-a">Cancel</a>
    </div>
  </div>
  </body>
</html>