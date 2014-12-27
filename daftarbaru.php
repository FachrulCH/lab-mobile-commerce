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
          <form action="" method="POST" id="viaAjax">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
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
            <input type="submit" value="Daftarkan" class="simpan" data-theme="b">
          </form>
          <script type="text/javascript">
              $(document).ready(function(){
                $('.simpan').on('click', function(){
              //console.log('Lo klik kirim');
              var contents = $('#viaAjax').serialize();
                console.log(contents);
              
              $.ajax({
                type: "post",
                url: "model/ajax-daftarbaru-save.php",
                data: contents,
                dataType: 'json',
                /*success: function(result){
                  alert(result);
                }*/
                beforeSend: function() {
                        // This callback function will trigger before data is sent
                        $.mobile.loading('show', {theme:"b", text:"Silahkan tunggu...", textonly:true, textVisible: true}); // This will show ajax spinner
                    },
                complete: function() {
                        // This callback function will trigger on data sent/received complete
                        $.mobile.loading('hide'); // This will hide ajax spinner
                    },
                success: function(result){
                  
                     // close button
                          var closeBtn = $('<a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a>');

                          // text you get from Ajax
                          var content = "<p>"+result.msg+"</p>";

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
                                if (result.status == 'sukses') {
                                  window.location = "login.php";
                                };
                                
                            }
                        }).popup("open");

                }
                
              });
              return false;
              });
            });

              </script>
        </div>
      </div>
      <!-- /content -->
      <!-- Footer -->
    </div><!-- /page halaman -->
  </body>
</html>