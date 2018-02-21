//SAMPLE_AJAX VIEW

//view load
jQuery(function(){
	//bind submit button listener
	bind_submit_btn_listener();
	//bind form submit listener
	bind_form_submit_listener();
});

//bind submit button listener
function bind_submit_btn_listener(){
	jQuery('#example_submit_btn').on('click', function(){
		jQuery('#example_form').submit();
	});
}

//bind form submit listener
function bind_form_submit_listener(){
	jQuery('#example_form').on('submit', function(event){
		//prevent default submission
		event.preventDefault();
		//post form data
		post_form_data();
	});
}

//AJAX post
function post_form_data(){
	jQuery.ajax({
		url: ajax_url,
		type: "POST",
		data: {
			'action': plugin_name +'_code_assist_example',
			'form_data': jQuery('#example_form').serialize()
		},
		dataType: "json"
	}).done(function(response){
		//show response in message
		show_message('message', 'AJAX Post Successful', response);
		//clear input
		jQuery('#example_form #my_input').val('');
	});
}