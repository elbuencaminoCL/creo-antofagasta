//SAMPLE_SAVE VIEW

//view load
jQuery(function(){
	//bind message button event listeners
	bind_save_btn_event_listeners();
});

//bind message button event listeners
function bind_save_btn_event_listeners(){
	//flag save required btn
	jQuery('#flag_save_required_btn').on('click', function(){
		flag_save_required('save_clicked',{"status": true});
	});
	//remove save required btn
	jQuery('#remove_save_required_btn').on('click', function(){
		remove_save_required();
	});
}

//save clicked event method
function save_clicked(json){
	console.log(json);
	show_message('success', 'Save Successful', 'This is an example of a "Save Successful" message.');
}