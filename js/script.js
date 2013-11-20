$(document).ready(function() {
	
	$('.hide-it').css('display', 'none');

	var type = $('body .select-type').val();
	if (type == 'B')
	{
		$('.form-fax, .form-website').css('display', 'block');
	}
	else
	{
		$('.form-home-address, .form-photo').css('display', 'block');
	}

	$('body .select-type').change(function(){

		var type = $('body .select-type').val();
		if (type == 'B')
		{
			$('.form-fax, .form-website').css('display', 'block');
			$('.form-home-address, .form-photo').css('display', 'none');
		}
		else
		{
			$('.form-home-address, .form-photo').css('display', 'block');
			$('.form-fax, .form-website').css('display', 'none');
		}

	});


});