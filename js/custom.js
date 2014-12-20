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
});
