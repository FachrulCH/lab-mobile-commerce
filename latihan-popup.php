<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    <style type="text/css">
      .blur-filter {
          -webkit-filter: blur(2px);
          -moz-filter: blur(2px);
          -o-filter: blur(2px);
          -ms-filter: blur(2px);
          filter: blur(2px);
      }
    </style>
    <script type="text/javascript">
    $(document).on("pagecreate", function () {
        $("#foo").on("click", function () {
            // close button
            var closeBtn = $('<a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a>');

            // text you get from Ajax
            var content = "<p>Berhasil ditambahkan kedalam keranjang anda</p>";

            // Popup body - set width is optional - append button and Ajax msg
            var popup = $("<div/>", {
                "data-role": "popup"
            }).css({
                width: $(window).width() / 1.5 + "px",
                padding: 5 + "px"
            }).append(closeBtn).append(content);

            // Append it to active page
            $.mobile.pageContainer.append(popup);

            // Create it and add listener to delete it once it's closed
            // open it
            $("[data-role=popup]").popup({
                dismissible: false,
                history: false,
                theme: "b",
                /* or a */
                positionTo: "window",
                overlayTheme: "b",
                /* "b" is recommended for overlay */
                transition: "pop",
                beforeposition: function () {
                    $.mobile.pageContainer.pagecontainer("getActivePage")
                        .addClass("blur-filter");
                },
                afterclose: function () {
                    $(this).remove();
                    $(".blur-filter").removeClass("blur-filter");
                },
                afteropen: function () {
                    /* do something */
                }
            }).popup("open");
        });
    });
    </script>
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
          <a href="#" class="ui-btn ui-btn-b ui-btn-icon-left ui-icon-info ui-corner-all" id="foo">Popup</a>

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