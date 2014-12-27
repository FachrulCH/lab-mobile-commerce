$(document).ready(function(){
	$('.simpan').on('click', function(){
	//console.log('Lo klik kirim');
	/*var email 	= $('#email').val(),
		nama	= $('#nama').val(),
		hp		= $('#noHP').val(),
		alamat	= $('#alamat').val(),
		zip		= $('#kodepos').val(),
		catatan = $('#catatan').val();
	var kiriman = 'email='+ email +'&nama='+ nama +'&noHP='+ hp +'&alamat='+ alamat +'&kodepos='+ zip +'&catatan='+ catatan;
	*/
	var url 	= $('#url').val();
	var contents = $('#viaAjax').serialize();
		//console.log(contents+" | model/"+url);

	$.ajax({
		type: "post",
		url: "model/"+url,
		data: contents,
//		dataType: json,
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
			if (url != 'ajax-addproduct.php'){
				 // close button
	            var closeBtn = $('<a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a>');

	            // text you get from Ajax
	            var content = "<p>"+result+"</p>";

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
                    //window.location = "index.php";
                }
            }).popup("open");

        	}else{
        		alert(result);
        	} //end IF

		}
		
	});
	return false;
	});




	$('#sendCC').on('click', function(){
		if ($('#name').val() == ''){
			alert("Nama harus diisi");
			return false;
		}
		//var url 	= $('#url').val();
		var contents = $('#viaCC').serialize();
			console.log(contents);

		$.ajax({
			type: "post",
			url: "model/ajax-pembayarancc.php",
			data: contents,
			dataType: 'json',
			success: function(result){
				
				console.log(result);
				// Cek hasilnya sukses apa ngak
	            if(result.status == 'success') {
				 	$("#cc").hide(1500);
				 	$("#token").show(2000);
				 	$('#transaction_id').val(result.transid);
				 	$('#amount').val(result.amount);
				}else{
					//alert("Tidak bisa di proses karena "+result.status);

						 // close button
		            var closeBtn = $('<a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a>');

		            // text you get from Ajax
		            var content = "<p>"+"Tidak bisa di proses karena "+result.status+"</p>";

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
	                    //window.location = "index.php";
	                }
	            }).popup("open");
					return false;
				}
			}
			
		});
		return false;
		});
});
