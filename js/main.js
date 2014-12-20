$('.username-check').on('click', function(){
	var target = $('.username-target'),
		feedback = $('.username-feedback');

	$.ajax({
		url: 'cekajax.php',
		type: 'get',
		data: {
			username: target.val()
		},
		dataType: 'json',
		success: function(data){
			if (data.available === true){
				feedback.text('Data Tersedia');
			}else{
				feedback.text('Data Tidak ada');
			}
		},
		error: function(){
			feedback.text('gagal');
		}
	});
});