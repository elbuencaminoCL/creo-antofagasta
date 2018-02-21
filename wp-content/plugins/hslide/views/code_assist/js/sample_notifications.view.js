//SAMPLE_NOTIFICATIONS VIEW

//view load
jQuery(function(){
	//bind message button event listeners
	bind_message_btn_event_listeners();
});

//bind message button event listeners
function bind_message_btn_event_listeners(){
	//success btn
	jQuery('#success_btn').on('click', function(){
		show_message('success', 'Success Message', 'This is a success message.');
	});
	//error btn
	jQuery('#error_btn').on('click', function(){
		show_message('error', 'Error Message', 'This is a error message.');
	});
	//message btn
	jQuery('#message_btn').on('click', function(){
		show_message('message', 'Message', 'This is a message.');
	});
}