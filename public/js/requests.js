$(document).ready(function() {

  $('#request').click(function() {
    // even.preventDefault();

    $.ajax({
    	type: 'POST',
      	url: 'patients/getRequests',
        dataType: 'json',
        data:{
        	'_token': $('input[name=_token]').val(),
            'p_name': $('input[name=p_name]').val(),
            'p_gender': $('input[name=p_gender]').val(),
            'p_address': $('input[name=p_address]').val(),
            'p_phone': $('input[name=p_phone]').val(),
            'p_email': $('input[name=p_email]').val(),
            'n_name': $('input[name=n_name]').val(),
            'n_gender': $('input[name=n_gender]').val(),
            'n_address': $('input[name=n_address]').val(),
            'n_phone': $('input[name=n_phone]').val(),
        },
        success: function (data) {
        	if (data.success) {
        		$('.high-risk').hide();
        		$('.form-response').show();
        		$('.success').text(data.success);
        	}
        }
    });
  })

});
