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
		success: function(result){
			alert(result);
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
				alert("Tidak bisa di proses karena "+result.status);
			}
		}
		
	});
	return false;
	});
});
