//SAMPLE_POPUPS VIEW

//view load
jQuery(function(){
	//bind popup button event listeners
	bind_popup_btn_event_listeners();
});

//bind popup button event listeners
function bind_popup_btn_event_listeners(){
	//popup launch btn
	jQuery('#launch_popup_btn').on('click', function(){
		launch_hero_popup('code_assist/html_snippets/popup.html','popup_launch','popup_update_clicked','popup_cancel_clicked',{"example_object":1});
	});
}

//popup launch method
function popup_launch(data){
	console_log(data);
}

//popup update method
function popup_update_clicked(data){
	show_message('message', 'Message', 'The popup content has been updated.');
	console_log(data);
}

//popup cancel method
function popup_cancel_clicked(data){
	show_message('message', 'Message', 'The popup content has not been updated.');
	console_log(data);
}