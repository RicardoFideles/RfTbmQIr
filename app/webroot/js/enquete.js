$(document).ready(function() {
  	enviarEnquete();
});


function enviarEnquete() {
	
	$('#enqueteForm').submit(function (event) {
		event.preventDefault;
		var form = $(this);
			
		var data1 = $(this).serialize(), urlAjax = $(this).attr('action');
		var resultado = $('#resultado');
	
		$.ajax({
			cache: false,
			type : "post",
			contentType : "application/x-www-form-urlencoded; charset=UTF-8",
			url: urlAjax,
			data: data1,
			success: function(data) {
				$('#enqueteForm label').html(data);
				$('#enqueteForm p button').removel();
		  	},
		  	error: function() {
		  		$('#enqueteForm').append("Ocorreu um erro");
		  	}
		});

		return false;
	});
}
