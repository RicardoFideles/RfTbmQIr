$(document).ready(function() {
  	//deletePhoto();
  	//addPhoto();
});

/*
function deletePhoto() {
	
	$('#userPhotoDelete').submit(function (event) {
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
				$('#userPhotoDelete').append(data);
		  	},
		  	error: function() {
		  		$('#userPhotoDelete').append("Ocorreu um erro");
		  	}
		});

		return false;
	});
}

function addPhoto() {
	
	$('#userPhotoAdd').submit(function (event) {
		event.preventDefault;
		var form = $(this);
			
		var data1 = $(this).serialize(), urlAjax = $(this).attr('action');
	
		$.ajax({
			cache: false,
			type : "post",
			contentType : "application/x-www-form-urlencoded; charset=UTF-8",
			url: urlAjax,
			data: data1,
			success: function(data) {
				$('.MateriasOutras').append(data);
		  	},
		  	error: function() {
		  		$('#userPhotoAdd').append("Ocorreu um erro");
		  	}
		});

		return false;
	});
}
*/
