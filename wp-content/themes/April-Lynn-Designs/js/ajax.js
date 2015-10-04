jQuery(document).ready(function($) {
	
	function contact_ajax(){
        var name = $('#name').val();
		var email = $('#email').val();
		var date = $('.date').val();
		var radio = $('.radio:checked').val();
		var message = $('#message').val();
		var data = {
		  		action: 'contact_ajax',
		  		security : MyAjax.security,
		  		name: name,
		  		email: email,
		  		date: date,
		  		radio: radio,
		  		message: message
		 };
		 
		 $.post(MyAjax.ajaxurl, data, function(response) {
				var parsed_json = jQuery.parseJSON(response);
				$('#contact_ajax').hide();
				$("#contact_ajax_response").html(parsed_json);
				
		});
		return false;
		
	}
	
	$('#contact').submit( function(){
		$('#contact_ajax').show();
		$("#contact_ajax_response").html('');
		contact_ajax();
		return false;
	});
});